@extends('layouts.app')
<title>Movies</title>

@section('content')
    <div class="movie-2">
        <div class="d-flex" style="padding-bottom: 20px;">
            <a style="font-weight: bold; font-size:30px; color:white; padding: 15px 20px 20px 20px;">🎥 Show</a>
            <div class="col d-flex justify-content-end" style="padding-bottom: 20px;">
                <nav class="navbar navbar-light" style="background-color: black; padding-right: 40px;">
                    <form class="form-inline" style="margin:0;" action="/movies">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search movie..." aria-label="Search"
                            name="search">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
                @if (!Auth::check() || Auth::user()->position == 'user')
                    <a href="" class="hidden"></a>
                @elseif (Auth::user()->position == 'admin')
                    <div class="d-flex justify-content-end bg-black" style="padding-top: 11px; height:82px;">
                        <a class="btn btn-danger p-2" href="{{ route('Add Movie') }}"
                            style="margin-right: 40px; margin-bottom: 21px; margin-top: 9px;">✚ Add Movie</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-deck" style="padding-right: 40px; padding-bottom: 20px;">
            @foreach ($movies as $allMovie)
                <div class="col">
                    <div class="image" style="width: 230px;">
                        <a href="/detailMovie/{{$allMovie->movie_title }}"><img src="{{ $allMovie->movie_image }}"
                                alt="" class="bookimage"></a>
                    </div>
                    <div class="bookdescription d-flex flex-column">
                        <a href="/detailMovie/{{ $allMovie->movie_title }}"
                            class="text-decoration-none text-white">{{ $allMovie->movie_title }}</a>
                        <a href="/detailMovie/{{ $allMovie->movie_title }}"
                            class="text-decoration-none text-secondary">{{ date('Y', strtotime($allMovie->movie_release)) }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('footer')
@endsection

<style>
    @import url('https//fonts.googleapis.com/css?family=PT+Sans"');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'PT Sans', sans-serif;
    }

    .movie-2 {
        background: black;
        padding: 18px 30px 30px 30px;
    }

    .bookimage {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>
