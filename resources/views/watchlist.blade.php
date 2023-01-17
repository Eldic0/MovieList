@extends('layouts.app')
<title>My Watchlist</title>

  @section('content')

    <div style="margin: 50px">
        <div>
            <h1 style="color:white"><i style="color: rgb(234, 74, 57)" class="fa fa-bookmark"></i> My <span style="color:rgb(234, 74, 57) ">Watchlist</span></h1>

            <br><br>

            <form  style="" class="form-inline" style="margin:0;" action="/watchlist">
                <input style="width: 92%; background-color: rgb(98, 98, 98); " class="form-control mr-sm-2" type="search" placeholder="Search your Watchlist..." aria-label="Search"
                    name="search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <br>
        <div class="d-flex">
            <i  class="fa fa-filter text-white"></i>
            <div class="form-group">
                <select name="status" class="form-select" id="">
                    <option value="All">All</option>
                    <option value="Planned">Planned</option>
                    <option value="Watching">Watching</option>
                    <option value="Finished">Finished</option>
                </select>
            </div>
        </div>
        <div style="color: white; margin-left: 10px; margin-right: 10px" class ="d-flex justify-content-between ">
            <p>Poster</p>
            <p>Title</p>
            <p>Status</p>
            <p>Action</p>
        </div>
    </div>

  @include('footer')
  @endsection