<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     // public function add() {
     // Maak een model aan
     //$model = new Project();
     // definieer de velden
     //$model->titel = 'mijn data';
     // sla het model op
     //$model->save();     
     //

     public function index()
     {
          $project = Project::all();
          return view('project', ['project' => $project, 'titel' => 'mijn titel']);
     }

     public function show(Project $project)
     {

          return view('projects.show', ['project' => $project]);
     }
     public function download(Project $project)
     {
          $csvFileName = 'projects_' . $project->title . '.csv';
          $headers = [
               'Content-Type' => 'text/csv',
               'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
          ];

          $callback = static function () use ($project) {
               echo 'id,title,description';
               echo "\n\r";
               echo implode(',', [
                    $project->id,
                    $project->title,
                    $project->description,
               ]);
          };

          return response()->stream($callback, 200, $headers);
     }

     public function downloadAll()
     {
          $projects = Project::all();
          $csvFileName = 'all_projects.csv';
          $headers = [
               'Content-Type' => 'text/csv',
               'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
          ];

          $callback = static function () use ($projects) {
               echo 'id,title,description';
               echo "\n\r";

               foreach ($projects as $project) {
                    echo implode(
                         ',',
                         [
                              $project->id,
                              $project->title,
                              $project->description,
                         ]
                    );
                    echo "\n\r";
               }
          };

          return response()->stream($callback, 200, $headers);
     }

}



