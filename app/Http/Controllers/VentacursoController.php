<?php

namespace App\Http\Controllers;

use App\Models\Ventacurso;
use App\Models\Curso;
use App\Models\Persona;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
/**
 * Class VentacursoController
 * @package App\Http\Controllers
 */
class VentacursoController extends Controller
{   
    function __construct()
    {
        $this->middleware('permission:ver-venta|crear-venta||detalle-venta|editar-venta|borrar-venta', ["only"=>['index']]);
        $this->middleware('permission:crear-venta', ['only'=>['create','store']]);
        $this->middleware('permission:detalle-venta', ['only'=>['show']]);
        $this->middleware('permission:editar-venta', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-venta', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventacursos = Ventacurso::paginate();

        return view('ventacurso.index', compact('ventacursos'))
            ->with('i', (request()->input('page', 1) - 1) * $ventacursos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventacurso = new Ventacurso();
        $estudiantes=Persona::where('tipo','=','Estudiante')->pluck('nombres','id');
        $cursos = Curso::pluck('nombre','id');
        return view('ventacurso.create', compact('ventacurso','cursos','estudiantes'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ventacurso::$rules);

        $ventacurso = Ventacurso::create($request->all());

        return redirect()->route('ventacursos.index')
            ->with('success', 'Venta realizada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventacurso = Ventacurso::find($id);

        return view('ventacurso.show', compact('ventacurso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventacurso = Ventacurso::find($id);
        $estudiantes=Persona::where('tipo','=','Estudiante')->pluck('nombres','id');
        $cursos = Curso::pluck('nombre','id');
        return view('ventacurso.edit', compact('ventacurso','estudiantes','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ventacurso $ventacurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventacurso $ventacurso)
    {
        request()->validate(Ventacurso::$rules);

        $ventacurso->update($request->all());

        return redirect()->route('ventacursos.index')
            ->with('success', 'Ventacurso actualizada satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ventacurso = Ventacurso::find($id)->delete();

        return redirect()->route('ventacursos.index')
            ->with('success', 'Venta borrada satisfactoriamente');
    }
}
