@extends('Layout')
@section('title')
    Create Course
@endsection
@section('content')
    <form style="width: 80%" role="form" method="POST" action="{{ route('courses.update', $course->id) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group text-center">
                <label for="exampleInputEmail1">Course Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Course Name"
                       value="{{ old('name', $course->name) }}">
                @error('name')
                <p class="text-center text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group text-center">
                <label>Course State</label>
                <select name='active' class="form-control">
                    <option value="1" {{ old('active', $course->active) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="2" {{ old('active', $course->active) == 2 ? 'selected' : '' }}>Disabled</option>
                </select>
                @error('active')
                <p class="text-center text-danger">{{$message}}</p>
                @enderror
            </div>


            <button style='width:100%' type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
