@extends('layouts.app')
<title>Update Actor</title>

@section('content')
    <div class="container d-flex my-5 " style="">
        <form style="width: 90vw; " method="get" action="{{route('Update Actors', [$actor[0]->name])}}">
            @csrf
            <h1 class="form-group" style="color: white; ">Update Actor </h1>
            <div class="form-group">
                <label for="actor_name" style="margin-right: 40px; color: white ;">Name</label>
                <input name="actor_name" type="text"
                    class="form-control @error('actor_name')
                is-invalid @enderror" id="actor_name"
                    style="width: 100%;">
                @error('actor_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gender" style="margin-right: 40px; color: white; ">Gender</label>
                <select name="gender" class="form-select" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="biography" style="margin-right: 40px; color: white;">Biography </label>
                <textarea name="biography" class="form-control @error('biography')
                is-invalid @enderror" id="biography"
                    style="width: 100%">
            </textarea>
                @error('biography')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="actor_birthday" style="margin-right: 40px; color: white ;">Date of birth</label>
                <input name="actor_birthday" type="date"
                    class="form-control @error('actor_birthday')
                is-invalid @enderror" id="actor_birthday"
                    style="width: 100%">
                @error('actor_birthday')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="birthplace" style="margin-right: 40px; color: white ;">Place of birth</label>
                <input name="birthplace" type="text"
                    class="form-control @error('birthplace')
                is-invalid @enderror" id="birthplace"
                    style="width: 100%">
                @error('birthplace')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="actor_image" style="margin-right: 40px; color: white ;">Image</label>
                <input name="actor_image" class="form-control @error('actor_image')
                is-invalid @enderror"
                    id="actor_image" style="width: 100%">
                @error('actor_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="popularity" style="margin-right: 40px; color: white ;">Popularity</label>
                <input name="popularity" type="text"
                    class="form-control @error('popularity')
                is-invalid @enderror" id="popularity"
                    style="width: 100%">
                @error('popularity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group" style="">
                <button class="btn btn-danger" type="submit" style="width:100%; text-decoration: none; color: white">
                    Create
                </button>
            </div>
        </form>
    </div>
    @include('footer')
@endsection