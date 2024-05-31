<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10)->onEachSide(1);
        return $projects;
        return inertia('Project/Index',[
            'projects'=>$projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
/*
return data of index fun
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "name": "Ea praesentium sit excepturi aspernatur commodi.",
            "description": "The Cat only grinned a little snappishly. 'You're enough to try the whole she thought it over a little way out of sight before the trial's over!' thought Alice. 'I mean what I say--that's the same.",
            "due_date": "2025-01-12 23:27:45",
            "status": "completed",
            "image_path": "https://via.placeholder.com/640x480.png/0044aa?text=minima",
            "created_by": 1,
            "updated_by": 1,
            "created_at": "2024-05-31T01:56:12.000000Z",
            "updated_at": "2024-05-31T01:56:12.000000Z"
        }
    ],
    "first_page_url": "http://localhost:8000/project?page=1",
    "from": 1,
    "last_page": 30,
    "last_page_url": "http://localhost:8000/project?page=30",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": "http://localhost:8000/project?page=2",
            "label": "2",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=3",
            "label": "3",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=4",
            "label": "4",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=5",
            "label": "5",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=6",
            "label": "6",
            "active": false
        },
        {
            "url": null,
            "label": "...",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=29",
            "label": "29",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=30",
            "label": "30",
            "active": false
        },
        {
            "url": "http://localhost:8000/project?page=2",
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": "http://localhost:8000/project?page=2",
    "path": "http://localhost:8000/project",
    "per_page": 1,
    "prev_page_url": null,
    "to": 1,
    "total": 30
}
*/