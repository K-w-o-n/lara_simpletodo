@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="">Content</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <a href="#" class="btn btn-info" type="button">SUMMIT</a>
            <a href="{{'/todo'}}" class="btn btn-warning" type="button">BACK</a>
        </div>
    </div>
@endsection
