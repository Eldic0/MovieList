<?php

namespace App\Http\Controllers;

use App\Models\actor;
use App\Models\movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class redirectController extends Controller
{
    function welcomeController(Request $request)
    {
        if ($request->has('search')) {
            $movies_show = DB::table('movies')
                ->join('aliases', 'movies.movie_title', '=', 'aliases.alias_movie')
                ->where('movies.movie_title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('aliases.alias_genre', 'LIKE', '%' . $request->search . '%')
                ->select('movies.movie_image as movie_image', 'movies.movie_title as movie_title', 'movies.movie_release as movie_release')
                ->orderBy('movies.movie_release', 'asc')
                ->distinct()
                ->get();
            return view('movies', ["movies" => $movies_show]);
        } else {
            $movies = movie::get();
            $genres = DB::table('genres')->select('movie_genre')->get();

            $sort = request('sort', 'asc');
            $movies_show = DB::table('movies')->select('movie_image', 'movie_title', 'movie_release')->orderBy('movie_title', $sort)->orderBy('movie_release', $sort)->paginate(8);
            return view('welcomes', ['movies' => $movies, 'genres' => $genres, 'movies_show' => $movies_show]);
        }
    }

    function movieDetail($title)
    {
        $movieDetail = DB::table('movies')
            ->join('aliases', 'movies.movie_title', '=', 'aliases.alias_movie')
            ->join('actors', 'aliases.alias_actor', '=', 'actors.actor_name')
            ->join('directors', 'movies.movie_title', '=', 'directors.directed_movie')
            ->where('movies.movie_title', '=', $title)
            ->select(
                'movies.id as id',
                'movies.movie_bgimage AS movie_bg',
                'movies.movie_title AS movie_title',
                'movies.movie_image AS movie_pic',
                'movies.movie_desc AS movie_desc',
                'aliases.alias_actor as actor_name',
                'aliases.alias as alias',
                'actors.actor_image as actor_image',
                'aliases.alias_genre as genre',
                'movies.movie_release as movie_release',
                'directors.movie_director as director'
            )
            ->get();

        $genreMovie = DB::table('aliases')
            ->join('genres', 'aliases.alias_genre', '=', 'genres.movie_genre')
            ->where('aliases.alias_movie', '=', $title)
            ->select('genres.movie_genre AS gen')
            ->distinct()
            ->get();

        $allMovies =  movie::paginate(3);
        return view('detailMovie', ['movieDetail' => $movieDetail, 'genreMovie' => $genreMovie, 'allMovies' => $allMovies]);
    }

    function movieController(Request $request)
    {
        if ($request->has('search')) {
            $movies = DB::table('movies')
                ->where('movie_title', 'LIKE', '%' . $request->search . '%')
                ->get();
        } else {
            $movies = movie::get();
        }
        return view('movies', ["movies" => $movies]);
    }

    function actorController(Request $request)
    {
        // Apabila tidak ingin mengeluarkan output actor movie NULL maka silahkan menggunakan fungsi 
        // WHERE yaitu dengan menambahkan ->orWhere('aliases.alias_movie', '!=', 'NULL')
        // pada query dibawah
        if ($request->has('search')) {
            $actors = DB::table('actors')
                ->join('aliases', 'actors.actor_name', '=', 'aliases.alias_actor')
                ->where('actors.actor_name', 'LIKE', '%' . $request->search . '%')
                ->select('actors.actor_image AS image', 'actors.actor_name AS name', 'aliases.alias_movie AS movie')
                ->distinct()
                ->get();
        } else {
            $actors = DB::table('actors')
                ->join('aliases', 'actors.actor_name', '=', 'aliases.alias_actor')
                ->select('actors.actor_image AS image', 'actors.actor_name AS name', 'aliases.alias_movie AS movie')
                ->distinct()
                ->get();
        }
        return view('actor', ["actors" => $actors]);
    }

    function actorDetail($name)
    {
        $actorDetail = DB::table('actors')
            ->where('actors.actor_name', '=', $name)
            ->select(
                'actors.id as id',
                'actors.actor_name as name',
                'actors.gender as gender',
                'actors.biography as biography',
                'actors.actor_birthday as birthday',
                'actors.birthplace as birthplace',
                'actors.actor_image as actor_image',
                'actors.popularity as popularity',
            )
            ->get();

        $joinMovie = DB::table('actors')
            ->join('aliases', 'actors.actor_name', '=', 'aliases.alias_actor')
            ->join('movies', 'aliases.alias_movie', '=', 'movies.movie_title')
            ->where('actors.actor_name', '=', $name)
            ->select(
                'movies.movie_image as bg',
                'aliases.alias_movie as alias_movie'
            )
            ->get();
        return view('actorDetail', ['actorDetail'=>$actorDetail, 'joinMovie' => $joinMovie]);
    }
}
