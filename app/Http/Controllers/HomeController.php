<?php

namespace App\Http\Controllers;
use App\Customer;
use App\TreatmentAttachment;
use Illuminate\Http\Request;

use App\Treatment;
use App\Department;
use App\Component;
use App\TreatmentComponent;
class HomeController extends Controller
{
    public function index(){
        $treatments = Treatment::with('Department')->get();
        $customers=Customer::all();
       // $treatments =[];
        return view('welcome',compact('treatments','customers'));
    }
public function test(){
        $data = Treatment::find(5);
        foreach ($data->components as $com)
        {
            echo $com . '<br>';
        }
}
    public function getComponents($treatmen,$user){
        $components = Treatment::where('treatment_id',$treatmen)
            ->where('user_id',$user)
            ->first()->component;
        $attachments = Treatment::where('treatment_id',$treatmen)->first()->attachment;
        $slugs = (array)$components;
        return response()->json([
            'slug' => $slugs,
            'attachments' => $attachments
        ]);

    }
}
