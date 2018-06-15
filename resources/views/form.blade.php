@extends('layout.app')
@section('title','FORM')
@section('name','FORM')
@section('body')
    <div class="container">
        <h2>Vertical (basic) Form</h2>
        <div class="div">
        <form method="POST" action="/form/submit">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="text" class="form-control" name="pwd" placeholder="Enter password" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default" dusk="submit">submit</button>

        </form>
    </div>
    </div>
    @endsection