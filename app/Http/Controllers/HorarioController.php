<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Curso;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-horario|crear-horario|detalle-horario|editar-horario|borrar-libro', ["only"=>['index']]);
        $this->middleware('permission:crear-horario', ['only'=>['create','store']]);
        $this->middleware('permission:detalle-horario', ['only'=>['show']]);
        $this->middleware('permission:editar-horario', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-horario', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate();

        return view('horario.index', compact('horarios'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horario = new Horario();
        $cursos = Curso::pluck('nombre','id');
        return view('horario.create', compact('horario','cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Horario::$rules);

        $horario = Horario::create($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario creado satisfactioriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::find($id);

        return view('horario.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);
        $cursos = Curso::pluck('nombre','id');
        return view('horario.edit', compact('horario','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        request()->validate(Horario::$rules);

        $horario->update($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario actualizado Satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::find($id)->delete();

        return redirect()->route('horarios.index')
            ->with('success', 'Horario borrado Satisfactoriamente');
    }
}
