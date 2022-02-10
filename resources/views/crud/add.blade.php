@extends('crud.main.layout')
@section('title','Add New Student')
@section('body')

<style>
    body {
        /* font-family: 'Poiret One', cursive; */
        background: #3494E6;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #EC6EAD, #3494E6);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    h4 {
        font-weight: bold;
        margin-bottom: 2.5rem;
    }

    .form-wrapper {
        background: #fff;
        border-radius: 5px;
        padding: 50px;
    }

    .form-control,
    .custom-select {
        border-radius: 0px;
        color: #495057;
        background-color: #f1f1f1;
        border-color: none;


    }

    .form-control:focus {
        color: #495057;
        background-color: #ffffff;
        border: 1px solid #b5b6b3;
        outline: 0;
        box-shadow: none;

    }

    .btn {
        background: #3494E6;
        border: #3494E6;
        padding: 0.6rem 3rem;
        font-weight: bold;
    }

    .btn:hover,
    .btn:focus,
    .btn:active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
        background: #3494E6;
        border: #3494E6;
        outline: 0;
    }

</style>

<section class="contact-from">
    <div class="col-lg-6 d-flex m-4">
        <a href="{{ route('student.index') }}" class="btn btn-large btn-outline-light">List</a>
    </div> <br>

    <!--error message-->
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- @if (session()->has('success'))
    <div class="alert alert-success">
        <span>{{session()->get('success') }}</span>
    </div>
    @endif --}}

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-7 mx-auto">
                <div class="form-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Registration form</h4>
                        </div>
                    </div>
                    <form _lpchecked="1" method="POST" action="{{ route('student.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="name" value="{{ old('name') }}" required autocomplete="name"
                                        name="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="email" value="{{ old('email') }}" required autocomplete="email"
                                        name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <input type="text-area" class="form-control @error('address') is-invalid @enderror"
                                        placeholder="address" value="{{ old('address') }}" required
                                        autocomplete="address" name="address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="form-group">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <select name="countries" class="custom-select" id="exampleFormControlSelect1">
                                    <option>Select country</option>
                                    <option>India</option>
                                    <option>USA</option>
                                    <option>France</option>
                                    <option>China</option>
                                    <option>Japan</option>
                                </select>
                            </div> --}}

                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
