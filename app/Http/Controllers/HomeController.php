<?php

namespace App\Http\Controllers;

use App\Models\actor;
use App\Models\alias;
use App\Models\director;
use App\Models\genre;
use App\Models\movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function profile()
    {
        return view('profile', [
            "User" => User::get()
        ]);
    }

    public function editProfile($id)
    {
        $user = User::all()->find($id);
        return view('profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' =>  ['required', 'string', 'min:5', 'max:255'],
            'email' =>  ['required', 'string', 'unique:users', 'email'],
            'dob' => ['required', 'date'],
            'phone' => ['required', 'string', 'min:5', 'max:13', 'numeric'],
        ]);

        $user = User::all()->find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->save();

        return view('profile', [Auth::user()->id])->with(
            'success',
            "Profile berhasil diupdate"
        );
    }


    public function updateImage(Request $request, $id)
    {
        $request->validate([
            'image' => ['required', 'url'],

        ]);

        $user = User::all()->find($id);
        $user->image = $request->image;
        $user->save();

        return view('profile', [Auth::user()->id])->with(
            'success',
            "Profile berhasil diupdate"
        );
    }

    public function store(Request $request)
    {
        // return $request ;

        // dd($request->movie_title);

        $request->validate([
            'alias' => ['required'],
            'alias_actor' => ['required', 'string'],
            'alias_genre' => ['required'],
        ]);

        $validatedMovie =  $request->validate([
            'movie_title' => ['required', 'string', 'min:2', 'max:50'],
            'movie_desc' => ['required', 'string', 'min:8'],
            'movie_release' => ['required', 'date'],
            'movie_image' => ['required', 'url'],
            'movie_bgimage' => ['required', 'url'],
        ]);

        $request->validate([
            'movie_director' => ['required', 'string', 'min:3'],
        ]);

        movie::create($validatedMovie);
        DB::insert('insert into aliases (alias, alias_actor, alias_movie, alias_genre) values (?,?,?,?)', [$request->alias, $request->alias_actor, $request->movie_title, $request->alias_genre]);
        DB::insert('insert into directors (movie_director, directed_movie) values (?,?)', [$request->movie_director, $request->movie_title]);

        return redirect()->route('movie')->with("success", "Movies berhasil ditambahkan");
    }

    public function create()
    {
        return view('addmovie', [
            'movie' => movie::all(),
            'genre' => genre::all(),
            'alias' => alias::all(),
        ]);
    }

    public function createact()
    {
        return view('addactor', [
            'actor' => actor::all(),
        ]);
    }


    public function storeact(Request $request)
    {
        // return $request ;
        $validatedActor =  $request->validate([
            'actor_name' => ['required', 'string', 'min:3'],
            'gender' => ['required'],
            'biography' => ['required', 'string', 'min:10'],
            'actor_birthday' => ['required', 'date'],
            'birthplace' => ['required'],
            'actor_image' => ['required', 'url'],
            'popularity' => ['required', 'numeric'],
        ]);

        actor::create($validatedActor);

        DB::insert('insert into aliases (alias_actor) values (?)', [$request->actor_name]);
        return redirect()->route('welcomes')->with("success", "Movies berhasil ditambahkan");
    }

    public function toUpdateActor($id)
    {
        $actorDetail = DB::table('actors')
            ->where('actors.id', '=', $id)
            ->select(
                'actors.actor_name as name',
                'actors.gender as gender',
                'actors.biography as biography',
                'actors.actor_birthday as birthday',
                'actors.birthplace as birthplace',
                'actors.actor_image as actor_image',
                'actors.popularity as popularity',
            )
            ->get();
        return view('updateactor', ['actor' => $actorDetail]);
    }

    function updateact(Request $request, $name)
    {
        $request->validate([
            'actor_name' => ['required', 'string', 'min:3'],
            'gender' => ['required'],
            'biography' => ['required', 'string', 'min:10'],
            'actor_birthday' => ['required', 'date'],
            'birthplace' => ['required'],
            'actor_image' => ['required', 'url'],
            'popularity' => ['required', 'numeric'],
        ]);

        DB::table('actors')
            ->where('actor_name', '=', $name)
            ->update([
                'actor_name' => $request->actor_name, 'gender' => $request->gender,
                'biography' => $request->biography, 'actor_birthday' => $request->actor_birthday,
                'birthplace' => $request->birthplace, 'actor_image' => $request->actor_image,
                'popularity' => $request->popularity
            ]);

        DB::table('aliases')->where('alias_actor', '=', $name)
            ->update(['alias_actor' => $request->actor_name]);
        return redirect()->route('actor')->with("success", "Actor berhasil ditambahkan");
    }

    public function toUpdatemovie($id, $title)
    {
        $movieDetail = DB::table('movies')
            ->where('id', '=', $id)
            ->get();

        $genreMovie = DB::table('aliases')
            ->join('genres', 'aliases.alias_genre', '=', 'genres.movie_genre')
            ->select('genres.movie_genre AS movie_genre')
            ->distinct()
            ->get();

        $alias = DB::table('aliases')
            ->get();

        $actor = DB::table('aliases')
        ->where('alias_movie', '=', $title)
        ->select('aliases.alias_actor as actor_name')
        ->get();
        return view('updatemovie', ['movie' => $movieDetail, 'genre' => $genreMovie, 'alias' => $alias, 'actor'=>$actor]);
    }

    function updatemovie(Request $request, $name, $actor)
    {
        $request->validate([
            'alias' => ['required'],
            'alias_actor' => ['required', 'string'],
            'alias_genre' => ['required'],
        ]);

        $request->validate([
            'movie_title' => ['required', 'string', 'min:2', 'max:50'],
            'movie_desc' => ['required', 'string', 'min:8'],
            'movie_release' => ['required', 'date'],
            'movie_image' => ['required', 'url'],
            'movie_bgimage' => ['required', 'url'],
        ]);

        $request->validate([
            'movie_director' => ['required', 'string', 'min:3'],
        ]);

        DB::table('movies')
            ->where('movie_title', '=', $name)
            ->update([
                'movie_title' => $request->movie_title, 'movie_desc' => $request->movie_desc,
                'movie_release' => $request->movie_release, 'movie_image' => $request->movie_image,
                'movie_bgimage' => $request->movie_bgimage
            ]);

        DB::table('directors')->where('directed_movie', '=', $name)
            ->update(['movie_director' => $request->movie_director, 'directed_movie' => $request->movie_title]);

        DB::table('aliases')
        ->where([
            ['alias_movie', '=', $name], 
            ['alias_actor', '=', $actor],
            ])
            ->update([
                'alias' => $request->alias, 'alias_actor' => $request->alias_actor, 'alias_genre' => $request->alias_genre,
                'alias_movie' => $request->movie_title
            ]);

        return redirect()->route('movie')->with("success", "Actor berhasil ditambahkan");
    }

    function deletemovie($title){
        DB::table('movies')
        ->where('movie_title','=',$title)
        ->delete();

        DB::table('aliases')->where('alias_movie','=', $title)->update(['alias_movie'=>'NULL']);
        return redirect('welcomes');
    }

    function deleteactor($name){
        DB::table('actors')
        ->where('actor_name','=',$name)
        ->delete();
        return redirect()->back();
    }
}
