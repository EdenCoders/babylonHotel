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

        

        //Delete the record
        $branch->delete();

        return response()->json(['message' => 'Branch Deleted Successfully!'],200);
    }

    public function update(Request $request,Branch $branch){


        $request->validate([
            'code' => 'required|max:20|min:3',
            'name' => 'required|max:255|min:3',

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


    public function store(Request $request){

        //validate data
        $request->validate([
            'code' => 'required|max:20|min:3',
            'name' => 'required|max:255|min:3',

        ]);


        //Store data 
       $branch =  Branch::create([

            'code' => $request->code , 
            'name' => $request->name, 
            'description' => ($request->description) ? $request->description : '' , 
            'cover_front' => ($request->cover_front) ? $request->cover_front : '' 
        ]);


        //send data to called 

        return response()->json($branch,201);
    }
}
