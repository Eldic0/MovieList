@extends('layouts.app')
<title>Movie Detail</title>
@section('content')
    <div class="movie-card">
        <div class="d-flex justify-content-center" style="position: relative; top: 20px; z-index:2;">
            <a href="" class="btn btn-danger">Director | 🎬 {{ $movieDetail[0]->director }}</a>
        </div>
        <div class="containers">
            <a href="#"><img src="{{ $movieDetail[0]->movie_pic }}" alt="cover" class="cover"
                    style="width: 180px; border-radius:10px;"></a>
            <div class="hero">
                <div class="details">
                    <div class="d-flex">
                        <div class="title1" style="padding-bottom: 10px; margin-right: 180px;">
                            {{ $movieDetail[0]->movie_title }}</div>
                        <a href="{{route('Delete Movie', [$movieDetail[0]->movie_title])}}"><i style="font-size: 30px; padding-left:50px; margin-top: 5px; color:white" class="fa fa-trash"></i></a>
                        <a href="{{route('Page Update Movie', [$movieDetail[0]->id, $movieDetail[0]->movie_title])}}"><i style="font-size: 30px; padding-left:50px; margin-top: 5px; color:white" class="fa fa-pencil"></i></a>
                    </div>
                    <div class="date_release" style="font-size:18px; color:#919191">{{ $movieDetail[0]->movie_release }}
                    </div>
                    <div class="title2">Description</div>
                </div>
            </div>
            <div class="description">
                <div class="column1">
                    @foreach ($genreMovie as $gen)
                        <span class="tag">{{ $gen->gen }}</span>
                    @endforeach
                </div>
                <div class="column2">
                    <p>{{ $movieDetail[0]->movie_desc }}</p>
                    <div style="padding: 8px 0px 18px 0px; font-size: 24px; color:red; font-weight: bold;">🎦 Cast</div>
                    <div class="avatars d-flex flex-wrap">
                        @foreach ($movieDetail as $mov)
                            <a href="/actorDetail/{{ $mov->actor_name }}" data-tooltip="Person 3" data-placement="top"
                                style="height: 80px; padding-right: 40px;">
                                <div class="card"
                                    style="width: 180px; border-color:rgb(250, 88, 88); background-color:black;">
                                    <img class="card-img-top" src="{{ $mov->actor_image }}" alt="Card image cap"
                                        style="height:220px; margin-top: 0px !important">
                                    <div class="card-body" style="width: 190px; padding:11px 0px 3px 9px;">
                                        <p class="card-title text-white font-weight-bold"
                                            style="font-size: 13px; text-decoration:none;">{{ $mov->actor_name }}</p>
                                        <p class="card-text" style="font-size: 11px;text-decoration:none; color:#bab8b8">
                                            {{ $mov->alias }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-white font-weight-bold" style="padding-left: 40px; font-size: 30px;">
        🔎 More
    </div>
    <div class="movie-2">
        <div class="card-deck" style="padding-right: 40px; padding-bottom: 20px;">
            @foreach ($allMovies as $allMovie)
                <div class="col">
                    <div class="image">
                        <a href="/detailMovie/{{ $allMovie->movie_title }}"><img src="{{ $allMovie->movie_image }}"
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
    <div class="d-flex justify-content-center" style="padding-bottom: 25px;" id="page">
        {{ $allMovies->links() }}
    </div>
    @include('footer')
@endsection

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        background: #43423E;
    }

    a {
        text-decoration: none !important;
    }

    a:hover {
        text-decoration: underline;
    }

    .movie-card {
        font: 14px/46px "Lato", Arial, sans-serif;
        color: #A9A8A3;
        padding: 40px 0;
        background-color: black;
    }

    .containers {
        margin: 0 auto;
        width: 940px;
        height: 1080px;
        background: #242323;
        border-radius: 5px;
        position: relative;
    }

    .hero {
        height: 342px;
        margin: 0;
        position: relative;
        overflow: hidden;
        z-index: 1;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .hero:before {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        background: red;
        background-image: url({{ $movieDetail[0]->movie_bg }});
        z-index: -1;
        transform: skewY(-2.2deg);
        transform-origin: 0 0;
        -webkit-backface-visibility: hidden;
        filter: brightness(50%);
    }

    .cover {
        position: absolute;
        top: 160px;
        left: 40px;
        z-index: 2;
    }

    .details {
        padding: 180px 0 0 280px;
        color: white;
        font-size: 44px;
        margin-bottom: 13px;
        position: relative;
    }

    .title2 {
        color: #C7C1BA;
        font-size: 23px;
        font-weight: 300;
        margin-bottom: 15px;
        padding-bottom: 20px;
    }

    .description {
        bottom: 0px;
        height: 200px;
        font-size: 16px;
        line-height: 26px;
        color: #d3d2cd;
    }

    .column1 {
        padding-left: 50px;
        padding-top: 120px;
        width: 220px;
        float: left;
        text-align: center;
    }

    .tag {
        background: white;
        border-radius: 10px;
        padding: 3px 8px;
        font-size: 14px;
        margin-right: 4px;
        line-height: 35px;
        cursor: pointer;
        color: rgb(83, 83, 83);
    }

    .tag:hover {
        background: #ddd;
    }

    .column2 {
        padding-left: 41px;
        padding-top: 30px;
        margin-left: 20px;
        width: 580px;
        text-align: justify;
        float: left;
    }

    .avatars img {
        margin-top: 8px;
        cursor: pointer;
    }

    .avatars img:hover {
        opacity: 0.6;
    }

    .movie-2 {
        display: flex;
        flex-wrap: wrap;
        background: black;
        /* top right bot left */
        padding: 10px 30px 0px 30px;
        justify-content: center;
    }

    .bookimage {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .movie-2 .card-deck .col {
        /* top right bot left */
        padding: 20px 0px 15px 40px;
        width: 240px;
    }

    #page .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: red;
        border-color: red;
    }
</style>
