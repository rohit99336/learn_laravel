<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index(){
        $wel = "if-else Condition";
        $if = "if condition apply";
        return view('controlStructure.condition',compact('wel','if'));
    }
}
