<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest('updated_at')->paginate();

        return view('projects.index', compact('projects'));
    }

    public function show($id) {
        // este metodo fallara si no encuentra el id mostrara el not found
        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }
}
