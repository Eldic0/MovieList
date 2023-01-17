@extends('layouts.app')
<title>Actor Detail</title>
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
    <div class="container" style="background-color: black; padding: 60px; color:white;">
        <div class="row " style="background-color: #242323; padding: 60px; border-radius:20px;">
            @foreach ($actorDetail as $actor)
                <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
                    <div class="card border-0 shadow" style="background-color: 242323;">
                        <img src="{{ $actor->actor_image }}" alt="...">
                        <div class="card-body p-1-9 p-xl-5">
                            <div class="mb-4">
                                <h3 class="h4 mb-0" style="color:white; font-size: 30px">Personal Info</h3>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <h5>Popularity</h5>
                                <p style="color: rgb(154, 154, 154)">{{ $actor->popularity }}</p>
                                <h5>Gender</h5>
                                <p style="color: rgb(154, 154, 154)">{{ $actor->gender }}</p>
                                <h5>Birthday</h5>
                                <p style="color: rgb(154, 154, 154)">{{ $actor->birthday }}</p>
                                <h5>Place of Birth</h5>
                                <p style="color: rgb(154, 154, 154)">{{ $actor->birthplace }}</p>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ps-lg-1-6 ps-xl-5">
                        <div class="mb-5 wow fadeIn">
                            <div style="display: flex; flex-direction:row; justify-content:space-between;" class="text-start mb-1-6 wow fadeIn">
                                <h3 style="font-size: 40px" class="h4 mb-0 text-danger">{{ $actor->name }}</h3>
                                @if (Auth::user()->position == 'admin')
                                    <div class="fafa">
                                        <a href="{{route('Delete Actor', [$actor->name])}}"><i style="font-size: 30px; margin-top: 5px; text-decoration:none; color:white;" class="fa fa-trash"></i></a>
                                        <a href="/actor/update/{{$actor->id}}"><i style="font-size: 30px; margin-top: 5px; text-decoration:none; color:white;" class="fa fa-pencil"></i></a>
                                    </div>
                                @endif
                            </div>
                            <h3 class="h4 mb-0" style="color:white; font-size: 30px; font-weight: normal">Biography</h3>
                            <br>
                            <p>{{ $actor->biography }}</p>
                        </div>
                        <div class="mb-5 row fadeIn">
                            <div class="text-start mb-1-6 row fadeIn">
                                <h3 class="h4 mb-0 text-danger" style="font-size: 30px; font-weight: normal">Known For</h3>
                            </div>
                            <div class="d-flex flex-wrap">
                                @foreach ($joinMovie as $join)
                                    <a href="/detailMovie/{{ $join->alias_movie }}" data-tooltip="Person 3"
                                        data-placement="top" style="text-decoration: none;">
                                        <div class="col-sm-4 col-xl-4">
                                            <div class="card text-center border-0 rounded-3"
                                                style="background-color: black; width: 200px;">
                                                <div class="card-body"
                                                    style="margin-left: 5px; margin-top: 5px; margin-right: 5px; height:350px;">
                                                    <img src="{{ $join->bg }}" style="width: 150px;" alt="">
                                                    <p style="color: white; padding-top: 28px; text-decoration:none;">
                                                        {{ $join->alias_movie }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('footer')
@endsection

<style>
    .icon-box.medium {
        font-size: 20px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .icon-box {
        font-size: 30px;
        margin-bottom: 33px;
        display: inline-block;
        color: #ffffff;
        height: 65px;
        width: 65px;
        line-height: 65px;
        background-color: #59b73f;
        text-align: center;
        border-radius: 0.3rem;
    }

    .social-icon-style2 li a {
        display: inline-block;
        font-size: 14px;
        text-align: center;
        color: #ffffff;
        background: #59b73f;
        height: 41px;
        line-height: 41px;
        width: 41px;
    }

    .rounded-3 {
        border-radius: 0.3rem !important;
    }

    .social-icon-style2 {
        margin-bottom: 0;
        display: inline-block;
        padding-left: 10px;
        list-style: none;
    }

    .social-icon-style2 li {
        vertical-align: middle;
        display: inline-block;
        margin-right: 5px;
    }

    a,
    a:active,
    a:focus {
        color: #616161;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    .text-secondary,
    .text-secondary-hover:hover {
        color: #59b73f !important;
    }

    .display-25 {
        font-size: 1.4rem;
    }

    .text-primary,
    .text-primary-hover:hover {
        color: #ff712a !important;
    }

    p {
        margin: 0 0 20px;
    }

    .mb-1-6,
    .my-1-6 {
        margin-bottom: 1.6rem;
    }
</style>
