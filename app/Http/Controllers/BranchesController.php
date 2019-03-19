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

    public function show(Branch $branch){

        return response()->json($branch , 200);

    }

    public function destroy(Branch $branch){
        //Validate and return the Correct Response 
        if(! $branch)
            return response()->json(['messsage' => 'Branch Not Found!'],404); 

        $branch->delete();

        return response()->json(['message' => 'Branch Deleted Successfully!'],200);
    }

    public function update(Branch $branch){

        request()->validate([
            'code' => ['required'],
            'name' => ['required'],

        ]);

        $branch->code = request('code');

        $branch->name = request('name');

        if(request('cover_front')){

            $branch->cover_front = request('cover_front');
        }

        if(request('description')){

            $branch->description = request('description');
        }

        //update the record

        $branch->save();

        
        return response()->json($branch , 200);
    }
}
