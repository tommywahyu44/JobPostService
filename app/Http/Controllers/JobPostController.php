<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

class JobPostController extends Controller
{
    //
    public function index(){
        $jobpost = JobPost::get()->toJson(JSON_PRETTY_PRINT);
        return response($jobpost, 200);
    }

    public function show($id=null){
        $jobpost = jobpost::where('id', $id)->first();
        if($jobpost){
         $jobpost = $jobpost->toJson(JSON_PRETTY_PRINT);
         return response($jobpost, 200);
        }
        else{
            return response()->json([
                "message" => "jobpost not found",
              ], 404);
        }
    }
}
