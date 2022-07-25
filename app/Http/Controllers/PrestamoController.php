<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Persona;
use App\Models\Libro;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
/**
 * Class PrestamoController
 * @package App\Http\Controllers
 */
class PrestamoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-prestamo|detalle-prestamos|crear-prestamo|editar-prestamo|borrar-prestamo', ["only"=>['index']]);
        $this->middleware('permission:crear-prestamo', ['only'=>['create','store']]);
        $this->middleware('permission:detalle-prestamo', ['only'=>['show']]);
        $this->middleware('permission:editar-prestamo', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-prestamo', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamos = Prestamo::paginate(5);

        return view('prestamo.index', compact('prestamos'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamo = new Prestamo();
        $persona = Persona::pluck('nombres','id');
        $libro = Libro::pluck('nombre','id');
        return view('prestamo.create', compact('prestamo','persona','libro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prestamo::$rules);

        $prestamo = Prestamo::create($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo Registado Exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = Prestamo::find($id);

        return view('prestamo.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestamo = Prestamo::find($id);
        $persona = Persona::pluck('nombres','id');
        $apellido = Persona::pluck('apellidos','id');
        $libro = Libro::pluck('nombre','id');
        return view('prestamo.edit', compact('prestamo','persona','apellido','libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamo $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        request()->validate(Prestamo::$rules);

        $prestamo->update($request->all());

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prestamo = Prestamo::find($id)->delete();

        return redirect()->route('prestamos.index')
            ->with('success', 'Prestamo deleted successfully');
    }
}
