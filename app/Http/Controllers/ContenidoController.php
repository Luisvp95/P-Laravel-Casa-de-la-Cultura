<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\Curso;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

/**
 * Class ContenidoController
 * @package App\Http\Controllers
 */
class ContenidoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-contenido|detalle-contenido|crear-contenido|editar-contenido|borrar-contenido', ["only"=>['index']]);
        $this->middleware('permission:crear-contenido', ['only'=>['create','store']]);
        $this->middleware('permission:detalle-contenido', ['only'=>['show']]);
        $this->middleware('permission:editar-contenido', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-contenido', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenidos = Contenido::paginate();

        return view('contenido.index', compact('contenidos'))
            ->with('i', (request()->input('page', 1) - 1) * $contenidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contenido = new Contenido();
        $cursos = Curso::pluck('nombre','id');
        return view('contenido.create', compact('contenido','cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contenido::$rules);

        $contenido = Contenido::create($request->all());

        return redirect()->route('contenidos.index')
            ->with('success', 'Contenido creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contenido = Contenido::find($id);

        return view('contenido.show', compact('contenido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contenido = Contenido::find($id);
        $cursos = Curso::pluck('nombre','id');
        return view('contenido.edit', compact('contenido','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contenido $contenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contenido $contenido)
    {
        request()->validate(Contenido::$rules);

        $contenido->update($request->all());

        return redirect()->route('contenidos.index')
            ->with('success', 'Contenido actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contenido = Contenido::find($id)->delete();

        return redirect()->route('contenidos.index')
            ->with('success', 'Contenido borrado satisfactoriamente');
    }
}
