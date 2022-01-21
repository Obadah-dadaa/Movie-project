<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypesController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }



    
    public function create(){

        return view('types.create');
    }

    public function store(Request $content){
        $check= Type::where('name',$content->name)->first();
        if(!isset($check)){

          $new_type = new Type;
          $new_type->name=$content->name;
          $new_type->save();

        }  
        return back();
    }

    public function index(){
        $types=type::all();
        return view('types.index',compact('types'));
    }   
    public function delete($id){
        $delete=type::where('id',$id)->first();
        
        $delete->delete();

        return back();

    }



   }
