@extends('crud.main.layout')
@section('title','Student List')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <button class="btn btn-primary btn-larg">Student list</button>
        </div>

        <div class="col-lg-6 d-flex justify-content-center align-item-center">
            <a href="{{ route('student.create') }}" class="btn btn-large btn-outline-light">New Student</a>
        </div>

    </div>

    <!-- success message from controller -->
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <span>{{ $message }}</span>
</div>
@endif --}}

@if (session()->has('success'))
<div class="alert alert-success">
    <span>{{session()->get('success') }}</span>
</div>
@endif

<div class="mt-4">

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $index=>$student)
            <tr>
                <th scope="row">{{ $index+1 }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <a href="{{ route('student.show',$student->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">Edit</a>
                    {{-- <a href="{{ route('student.destroy',$student->id) }}" class="btn btn-danger">Delete</a> --}}

                    <a class="btn btn-danger" href="{{ route('student.destroy',$student->id) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Delete
                    </a>

                    <form id="logout-form" action="{{ route('student.destroy',$student->id) }}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center align-items-center">
        {{-- <div>{!! $students->links() !!}</div> --}}
        {{ $students->links('vendor.pagination.custom') }}
    </div>

</div>
</div>
@endsection
