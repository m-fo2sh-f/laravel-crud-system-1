@extends('Layout')
@section('title')
    Create Course
@endsection
@section('content')
    <form style="width: 80%" role="form" method="POST" action="{{route('courses.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group text-center">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Course Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name')}}">
                   
                    @error('name')
                    <p class="text-center text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select mb-3" name="active" aria-label="Large select example">
                        <option selected>State of course</option>
                        <option value="1">Active</option>
                        <option value="0">Disabled</option>
                    </select>
                    @error('active')
                    <p class="text-center text-danger">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="mt-5 btn btn-primary">Create Course</button>
            </div>
        </div>
    </form>
@endsection
