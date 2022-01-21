<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Movie;
use App\Actor;
use App\Type;
use App\Http\Controllers\DB;
class PageController extends Controller
{

    public function index(){

        $movies=Movie::all();
        $onemovie=Movie::find(1);
        $twomovie=Movie::find(2);
        $threemovie=Movie::find(3);
        $fourmovie=Movie::find(4);
        $fivemovie=Movie::find(5);
        $actor1=Actor::find(1);
        $actor2=Actor::find(2);
        $actor3=Actor::find(3);
        $actor4=Actor::find(4);
        $actor5=Actor::find(5);
        $actor6=Actor::find(6);
        $actor7=Actor::find(7);
        $actor8=Actor::find(8);
        $actor9=Actor::find(9);
        $actor10=Actor::find(10);
        $actor11=Actor::find(11);
        $actor12=Actor::find(12);
        $actor13=Actor::find(13);
        $actor14=Actor::find(14);
        $actor15=Actor::find(15);
        $actor16=Actor::find(16);
        $actor17=Actor::find(17);
        $actor18=Actor::find(18);
        $actor19=Actor::find(19);
        $actor20=Actor::find(20);
        $type1=Type::find(1);
        $type2=Type::find(2);
        $type3=Type::find(3);
        $type4=Type::find(4);

        $types = Type::with('movies')->get();
        
    

        return view("index",compact('movies','onemovie','twomovie','threemovie','fourmovie','fivemovie','types','type1','type2','type3','type4'),compact('actor1','actor2','actor3','actor4','actor5','actor6','actor7','actor8','actor9','actor10','actor11','actor12','actor13','actor14','actor15','actor16','actor17','actor18','actor19','actor20'));
        
    }

    public function top_movies(){

        $movies=Movie::all();
        $onemovie=Movie::find(1);
        $twomovie=Movie::find(2);
        $threemovie=Movie::find(3);
        $fourmovie=Movie::find(4);
        $fivemovie=Movie::find(5);
        $actor1=Actor::find(1);
        $actor2=Actor::find(2);
        $actor3=Actor::find(3);
        $actor4=Actor::find(4);
        $actor5=Actor::find(5);
        $actor6=Actor::find(6);
        $actor7=Actor::find(7);
        $actor8=Actor::find(8);
        $actor9=Actor::find(9);
        $actor10=Actor::find(10);
        $actor11=Actor::find(11);
        $actor12=Actor::find(12);
        $actor13=Actor::find(13);
        $actor14=Actor::find(14);
        $actor15=Actor::find(15);
        $actor16=Actor::find(16);
        $actor17=Actor::find(17);
        $actor18=Actor::find(18);
        $actor19=Actor::find(19);
        $actor20=Actor::find(20);
        $type1=Type::find(1);
        $type2=Type::find(2);
        $type3=Type::find(3);
        $type4=Type::find(4);
        return view("top-movies",compact('movies','onemovie','twomovie','threemovie','fourmovie','fivemovie','type1','type2','type3','type4'),compact('actor1','actor2','actor3','actor4','actor5','actor6','actor7','actor8','actor9','actor10','actor11','actor12','actor13','actor14','actor15','actor16','actor17','actor18','actor19','actor20'));
    }

    public function movie_details(){
        $movies=Movie::all();
        $onemovie=Movie::find(1);
        $twomovie=Movie::find(2);
        $threemovie=Movie::find(3);
        $fourmovie=Movie::find(4);
        $fivemovie=Movie::find(5);
        $actor1=Actor::find(1);
        $actor2=Actor::find(2);
        $actor3=Actor::find(3);
        $actor4=Actor::find(4);
        $actor5=Actor::find(5);
        $actor6=Actor::find(6);
        $actor7=Actor::find(7);
        $actor8=Actor::find(8);
        $actor9=Actor::find(9);
        $actor10=Actor::find(10);
        $actor11=Actor::find(11);
        $actor12=Actor::find(12);
        $actor13=Actor::find(13);
        $actor14=Actor::find(14);
        $actor15=Actor::find(15);
        $actor16=Actor::find(16);
        $actor17=Actor::find(17);
        $actor18=Actor::find(18);
        $actor19=Actor::find(19);
        $actor20=Actor::find(20);
        $type1=Type::find(1);
        $type2=Type::find(2);
        $type3=Type::find(3);
        $type4=Type::find(4);
        return view("movie-details",compact('movies','onemovie','twomovie','threemovie','fourmovie','fivemovie','type1','type2','type3','type4'),compact('actor1','actor2','actor3','actor4','actor5','actor6','actor7','actor8','actor9','actor10','actor11','actor12','actor13','actor14','actor15','actor16','actor17','actor18','actor19','actor20'));
        
    }



    public function search(Request $request){

        $movies=Movie::where('name','Like',"%$request->search_v%")->get();
        return view('search',compact('movies'));
    }

}




    //  public function getApiData(){

    //     $client=new Client();
    //     $request=$client->get('https://jsonplaceholder.typicode.com/posts');
    //     echo ($request->getBody());
    // }}
    
    
  


// $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://imdb-api1.p.rapidapi.com/Title/k_12345678/tt1375666",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_FOLLOWLOCATION => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"x-rapidapi-host: imdb-api1.p.rapidapi.com",
// 		"x-rapidapi-key: ebeafecbc4msheffc847f7a1fd1bp186f01jsn9a74280ceb14"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	//echo $response;
//     dd(json_decode($response));
//         }
//     }
// }