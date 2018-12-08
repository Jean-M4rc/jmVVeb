<?php

namespace App\Repositories;

use App\Project;

class ProjectRepository extends BaseRepository
{
    /**
     * Create a new ProjectRepository instance.
     *
     * @param \App\Project $project
     */
    public function __construct(Project $project)
    {
        $this->model = $project;
    }
}