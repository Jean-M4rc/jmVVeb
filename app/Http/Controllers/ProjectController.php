<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\ProjectRequest;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectRepository $repository)
    {
        $projects = $repository->getAll();

        return view('welcome', [
            'projects' => $projects,
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
