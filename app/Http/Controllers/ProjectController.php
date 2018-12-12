<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\ProjectRequest;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectRepository $repository)
    {
        return view('projects.index');
    }

    /**
     * Show the view for the project required
     * And Keep the différents projects existing for navbar
     */
    public function showBySlug($slug, ProjectRepository $repository)
    {
        $projects = $repository->getAll();

        return view('projects/' . $slug , [
            'projects'=>$projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProjectRequest $request
     * @param *\App\Repositories\ProjectRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request, ProjectRepository $repository)
    {
        $project = $repository->store($request->all());

        // Création d'une vue prévue pour le projet fraîchement créé.

            $file = '\projects\\' . $project->slug . '.blade.php';

            $content = "@extends('layouts.app')";

            Storage::disk('views')->put($file, $content);

        return redirect()->route('welcome')->with('ok', __('Le projet a bien été ajouté'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        dd($project);

        //$project->update($request->all());

        return redirect()->route('projects.index')->with('ok', __('Le projet a bien été modifié'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json();
    }
}
