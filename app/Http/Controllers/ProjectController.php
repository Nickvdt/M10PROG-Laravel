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

   public function index() {
    $project = Project::all();
    return view ('project', ['project'=>$project, 'title'=>'mijn titel']);
}
   
}

