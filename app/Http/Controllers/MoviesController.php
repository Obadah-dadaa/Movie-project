<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Type;
use App\language;
use App\ProducingYear;
use App\Actor;
class MoviesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


  
  public function create(){

        $types=Type::all();
        $languages=language::all();
        $producing_years=ProducingYear::all();
        $actors=Actor::all();

        return view('movies.create',compact('types','languages','producing_years','actors'));
    }

    public function store(Request $request){
        
      $new_movie= new Movie;
      $new_movie->name            =$request->name;
      $new_movie->image           =$request->image;
      $new_movie->rating          =$request->rating;
      $new_movie->discreption     =$request->discreption;
      $new_movie->promotion       =$request->promotion;
      $new_movie->video           =$request->video;
      $new_movie->duration        =$request->duration;
      $new_movie->type_id         =$request->type_id;
      $new_movie->language_id     =$request->language_id;
      $new_movie->producingYear_id=$request->producingYear_id;          
      $new_movie->save();
       return back();
    }

    public function index(){
        $movies=Movie::all();
        $types=Type::all();
        $languages=language::all();
        $producing_years=ProducingYear::all();
        $actors=Actor::all();
        return view('movies.index',compact('movies','types','languages','producing_years','actors'));
    }   
    public function delete($id){
        $delete=Movie::where('id',$id)->first();
        
        $delete->delete();

        return back();

    }

}
