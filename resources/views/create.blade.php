<!-- create.blade.php -->


<h1>Create Post</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
@endif

@extends('master')
@section('content')
    <div class="container">

        <form method="post" action="{{url('crud')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="description" name="description">                </div>
            </div>

            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>
                <div class="col-sm-10">
                    <textarea name="post" rows="8" cols="80"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">writer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="writer" name="writer">                </div>
            </div>



            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection