<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
/**use App\Http\Requests\StoreProjectRequest;*/

class ProjectsController extends Controller
{
    
    /**
     * Affiche tous les projets
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $projects = Project::latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    /**
     * Affiche le formulaire de création de projet
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('projects.create');
    }

    /**
     * Enregistre un nouveau projet
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        
        // Create a new Project instance and store it
        Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Redirect back to the project listing page with a success message
        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }
   


    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    
    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
    
        $project->update($validatedData);
    
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Supprime les données d'un projet
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        // Delete the project from the database
        $project->delete();

        // Redirect the user back to the index page with a success message
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}