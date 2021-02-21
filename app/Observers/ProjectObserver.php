<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     *
     * @param  \App\Models\Project  $project
     * @return void
     */
    public function created(Project $project)
    {
        cache()->pull('projects_cache');
        cache()->pull('projects_cache_home');
        cache()->pull('projects_cache_active');
        cache()->pull('projects_solution_cache');
        cache()->pull('project_cache_'.$project->slug);
    }

    /**
     * Handle the Project "updated" event.
     *
     * @param  \App\Models\Project  $project
     * @return void
     */
    public function updated(Project $project)
    {
        cache()->pull('projects_cache');
        cache()->pull('projects_cache_home');
        cache()->pull('projects_cache_active');
        cache()->pull('projects_solution_cache');
        cache()->pull('project_cache_'.$project->slug);
    }

    /**
     * Handle the Project "deleted" event.
     *
     * @param  \App\Models\Project  $project
     * @return void
     */
    public function deleted(Project $project)
    {
        cache()->pull('projects_cache');
        cache()->pull('projects_cache_home');
        cache()->pull('projects_cache_active');
        cache()->pull('projects_solution_cache');
        cache()->pull('project_cache_'.$project->slug);
    }

    /**
     * Handle the Project "restored" event.
     *
     * @param  \App\Models\Project  $project
     * @return void
     */
    public function restored(Project $project)
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     *
     * @param  \App\Models\Project  $project
     * @return void
     */
    public function forceDeleted(Project $project)
    {
        //
    }
}
