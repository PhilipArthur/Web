<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Episode;

class MovieController extends Controller
{
    public function home(Request $request) {
        $dramas = Movie::where('genre_id', 1)->get();
        $kids = Movie::where('genre_id', 2)->get();
        $tvShows = Movie::where('genre_id', 3)->get();
        $movies = [
            "Dramas" => $dramas,
            "Kids" => $kids,
            "TV Shows" => $tvShows,
        ];
        return view('home')->with('movies', $movies);
    }

    public function detail($movieId) {
        $detail = Movie::where('id', $movieId)->first();
        $episodes = Episode::where('movie_id',$movieId)->paginate(3);
        return view('detail')->with('detail', $detail)->with('episodes', $episodes);
    }

    public function category(Request $request){
        if ($request->type === 'drama'){
            $result = Movie::where('genre_id',1)->get();
        }
        
        else if ($request->type === 'kids'){
            $result = Movie::where('genre_id',2)->get();
        }
        
        else if ($request->type === 'tvshows'){
            $result = Movie::where('genre_id',3)->get();
        }
        return view('category')->with('result', $result);
        
    }
}
