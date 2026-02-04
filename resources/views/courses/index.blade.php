@extends('Layout')

@section('title')
    Courses
@endsection
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Home</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="row" style="width: 100%;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="text-align: center; float:none;">Courses</h3>
                    <a href="{{route('courses.create')}}" class="btn btn-sm btn-success"
                       style="width:100%; padding:10px;">
                        Add New Course
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="">
                    <table id="example2" class="table table-borderd table-hover">
                        <thead>
                        <tr style="text-align: center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>State</th>
                            <th>Created-At</th>
                            <th>Updated-At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($courses as $course)
                            <tr style="text-align: center">
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->name }}</td>
                                <td>
                                        <span
                                            class="badge {{ $course->active ? 'text-bg-success' : 'text-bg-danger' }}">
                                            {{ $course->active ? 'Active' : 'Disabled' }}
                                        </span>
                                </td>
                                <td>Buttons here</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center alert-danger">No Courses Found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
