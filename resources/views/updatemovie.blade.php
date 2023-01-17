@extends('layouts.app')
<title>Update Movie</title>

@section('content')
    <div class="container d-flex my-5 " style="">
        <form style="width: 90vw; " method="get" action="{{ route('Update movie', [$movie[0]->movie_title, $actor[0]->actor_name]) }}">
            @csrf
            <h1 class="form-group" style="color: white; ">Update Movie </h1>
            <div class="form-group">
                <label for="movie_title" style="margin-right: 40px; color: white ;">Title</label>
                <input name="movie_title" type="text"
                    class="form-control @error('movie_title')
                is-invalid @enderror" id="movie_title"
                    style="width: 100%">
                @error('movie_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="movie_desc" style="margin-right: 40px; color: white;">Description </label>
                <textarea name="movie_desc" class="form-control @error('movie_desc')
                is-invalid @enderror"
                    id="movie_desc" style="width: 100%">
            </textarea>
                @error('movie_desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="movie_genre" style="margin-right: 40px; color: white; ">Genre</label>
                <select name="alias_genre" class="form-select" id="alias_genre">
                    @foreach ($genre as $gen)
                        <option value="{{ $gen->movie_genre }}">{{ $gen->movie_genre }}</option>
                    @endforeach
                </select>
            </div>

            <h4 style="color: white; font-size: 15px; font-weight:normal">Actors</h4>
            <div style="display:flex; justify-content: space-around">
                <a href="javascript:void(0)">
                    <div class="form-group">
                        <label for="alias_actor" style="margin-right: 40px; color: white; ">Actor</label>
                        <select style="width:600px" name="alias_actor" class="form-select" id="alias_actor">
                            @foreach ($alias as $ali)
                                <option value="{{ $ali->alias_actor }}">{{ $ali->alias_actor }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alias" style="margin-right: 40px; color: white; ">Character Name</label>
                        <input name="alias" type="text"
                            class="form-control @error('alias')
                    is-invalid @enderror" id="alias"
                            style="width: 550px;">
                        @error('alias')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </a>
            </div>

            <div class="form-group">
                <label for="movie_director" style="margin-right: 40px; color: white ;">Director</label>
                <input name="movie_director" type="text"
                    class="form-control @error('movie_director')
                is-invalid @enderror" id="movie_director"
                    style="width: 100%">
                @error('movie_director')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="movie_release" style="margin-right: 40px; color: white ;">Release Date</label>
                <input name="movie_release" type="date"
                    class="form-control @error('movie_director')
                is-invalid @enderror" id="movie_release"
                    style="width: 100%">
                @error('movie_release')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="movie_image" style="margin-right: 40px; color: white ;">Image URL</label>
                <input name="movie_image" type="text"
                    class="form-control @error('movie_image')
                is-invalid @enderror" id="movie_image"
                    style="width: 100%">
                @error('movie_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="movie_bgimage" style="margin-right: 40px; color: white ;">Background Image URL</label>
                <input name="movie_bgimage" type="text"
                    class="form-control @error('movie_bgimage')
                is-invalid @enderror" id="movie_bgimage"
                    style="width: 100%">
                @error('movie_bgimage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group" style="">
                <button class="btn btn-danger" type="submit" style="width:100%; text-decoration: none; color: white"
                    name="create_movie" id="create_movie">
                    Create
                </button>
            </div>

        </form>
    </div>

    @include('footer')
@endsection