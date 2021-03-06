<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\cursoRequest;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(cursoRequest $request)
    {
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.edit', $curso->id)
         ->with('info', 'curso guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Curso $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Curso $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Curso               $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function update(cursoRequest $request, Curso $curso)
    {
        $curso->update($request->all());

        return redirect()->route('cursos.edit', $curso->id)
        ->with('info', 'curso actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Curso $curso
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return back()->with('info', 'Elimnado correctaamente');
    }
}
