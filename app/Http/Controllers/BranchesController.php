<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Branch ; 

class BranchesController extends Controller
{
    

    public function index(){


        $branches = Branch::latest()->get();


        return response()->json($branches,200);
    }
}
