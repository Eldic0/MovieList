@extends('layouts.app')
<title>Profile</title>

@section('content')
<div style="display: flex; justify-content: center; ">
    <div style="width: 600px; text-align: center; margin-top: 10%;  ">
        <h1 style="color:white">My <span style="color:rgb(234, 74, 57) ">Profile</span></h1>
        @if(Auth::user()->image)
        <button style="background-color: black" type="button"  data-toggle="modal" data-target="#myModal"><img style="border-radius: 50%; width:200px; height:200px;" src="{{ Auth::user()->image }}" alt=""></button>

  <!-- Modal -->
  <form style="background-color: #242323; width: 50vw" method="post" action="{{ route('Save Edit Image', [Auth::user()->id]) }}">
    @csrf
    @method('patch')
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: #242323;">
        <div class="modal-header">
            <h4 class="modal-title" style="color: white">Upload Image</h4>
          <button type="button" style="color: darkgray" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <input name="image"  class="form-control"  id="image" style="width: 95%" placeholder="Image URL" >
          <p style="color: darkgray; font-size: 16px; font-weight: 300; text-align: left">Please upload your images to other sources and use the URL</p>
        </div>
        <div class="modal-footer">
        
          <button type="button" style="background-color:darkgray; color: white" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="form-group" style="">
            <button class="btn btn-danger" type="submit" style="width:100%; text-decoration: none; color: white">
                Save Changes
            </button>
        </div>
        </div>
      </div>
      
    </div>
  </div>
  </form>
        @else
        <button type="button" style="background-color: black" data-toggle="modal" data-target="#myModal"><a  class="fa fa-user-circle-o nav-link text-white" href="#" style="font-size: 100px"></a></button>

  <!-- Modal -->
  <form style="background-color: #242323; width: 50vw" method="post" action="{{ route('Save Edit Image', [Auth::user()->id]) }}">
    @csrf
    @method('patch')
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color: #242323;">
        <div class="modal-header">
            <h4 class="modal-title" style="color: white">Upload Image</h4>
          <button type="button" style="color: darkgray" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <input name="image"  class="form-control"  id="image" style="width: 95%" placeholder="Image URL" >
          <p style="color: darkgray; font-size: 16px; font-weight: 300; text-align: left">Please upload your images to other sources and use the URL</p>
        </div>
        <div class="modal-footer">
        
          <button type="button" style="background-color:darkgray; color: white" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="form-group" style="">
            <button class="btn btn-danger" type="submit" style="width:100%; text-decoration: none; color: white">
                Save Changes
            </button>
        </div>
        </div>
      </div>
      
    </div>
  </div>
  </form>
        @endif
        <p style="color: white; margin: 8px ">{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->email }}</p>
    </div>


<div class="container d-flex my-5 " style="" >

    <form style="background-color: #242323; width: 50vw; margin-right: 100px; " method="post" action="{{ route('Save Edit Profile', [Auth::user()->id]) }}">
        @csrf
        @method('patch')
        <h1 class="form-group" style="color: rgb(234, 74, 57) ">Update Profile </h1>
        <div class="form-group">
            <label for="name" style="margin-right: 40px; color: white ; width: 5%" >Name</label>
            <input name="name" type="text" class="form-control @error('name')
                is-invalid @enderror" id="name" style="width: 95%" placeholder="{{ Auth::user()->name }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" style="margin-right: 40px; color: white; width: 5%">Email </label>
            <input name="email"  class="form-control @error('email')
                is-invalid @enderror" id="email" style="width: 95%" placeholder="{{ Auth::user()->email }}" >
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="dob" style="margin-right: 40px; color: white; width: 5%">DOB</label>
            @if(!Auth::user()->dob)
            <input name="dob" type="text" class="form-control @error('dob')
                is-invalid @enderror" id="dob" style="width: 95%" placeholder="yyyy-mm-dd">
            @error('dob')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            @else
            <input name="dob" type="text" class="form-control @error('dob')
                is-invalid @enderror" id="dob" style="width: 95%" placeholder="{{Auth::user()->dob}}">
            @error('dob')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            @endif
        </div>


        <div class="form-group">
            <label for="phone" style="margin-right: 40px; color: white; width: 5%">Phone</label>
            @if(!Auth::user()->phone)
            <input name="phone" type="text" class="form-control @error('phone')
                is-invalid @enderror" id="phone" style="width: 95%" placeholder="Numeric (5-13 Char)">
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            @else
            <input name="phone" type="text" class="form-control @error('phone')
                is-invalid @enderror" id="phone" style="width: 95%" placeholder="{{ Auth::user()->phone }}">
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            @endif
        </div>

        <div class="form-group" style="">
            <button class="btn btn-danger" type="submit" style="width:100%; text-decoration: none; color: white">
                Save Changes
            </button>
        </div>

    </form>
</div>
</div>

@include('footer')
@endsection

<style>
    .form-group{
        display: flex;
        justify-content: left;
        margin: 10px;
        padding: 10px;
    }

    p{
        font-size: 20px;
        font-weight: bold;
    }
</style>