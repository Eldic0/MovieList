@extends('layouts.app')
<title>Actor</title>
@section('content')
    <div class="d-flex" style="font-size: 30px; padding-top:30px; height: 95px;">
        <div class="font-weight-bold text-danger mr-auto p-2" style="margin-left: 220px;">
            🎞 Actors
        </div>
        <nav class="navbar navbar-light p-2" style="background-color: black;">
            <form class="form-inline" style="margin:0; padding-right:30px;" action="/actors">
                <input class="form-control mr-sm-2" type="search" placeholder="Search actor..." aria-label="Search"
                    name="search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        @if (!Auth::check() || Auth::user()->position == 'user')
            <a href="" class="hidden"></a>
        @elseif (Auth::user()->position == 'admin')
            <div class="d-flex justify-content-end bg-black" style="padding-top: 11px; height:82px;">
                <a class="btn btn-danger p-2" href="{{ route('Add Actor') }}" style="margin-right: 40px; margin-bottom: 27px;">✚ Add Actor</a>
            </div>
        @endif
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-6 g-6" style="margin-top: 20px; display: flex; justify-content: center;">
            @foreach ($actors as $actor)
                <div class="col">
                    <div class="card"
                        style="margin-top:20px; width: 200px; height: 360px; border-style: solid; border-color:red; background-color: #242323">
                        <a href="/actorDetail/{{ $actor->name }}"><img src="{{ $actor->image }}" class="card-img-top" alt="..." style="border-radius: 16px;"></a>
                        <div class="card-body d-flex justify-content-center align-items-center flex-column">
                            <a href="/actorDetail/{{ $actor->name }}" style="text-decoration: none; color:white;"><h5 class="card-title text-white">{{ $actor->name }}</h5></a>
                            <a href="/actorDetail/{{ $actor->name }}" style="text-decoration: none; color:#c0bfbf;"><p class="card-text" style="color: #c0bfbf" >{{ $actor->movie }}</p></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('footer')
@endsection

<style>
    .col {
        margin: 30px;
    }

    .rectangle {
        border-style: solid;
        border-color: black;
        padding: 20px;
    }

    .card-img-top {
        height: 240px;
        padding: 10px;
    }
</style>
