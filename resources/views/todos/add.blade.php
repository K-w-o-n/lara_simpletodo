@extends('layouts.app')
@section('content')
    <div class="container" style="max-width:800px">

        @if($errors->any())
            <div class="alert alert-warning">
                @foreach($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif


       <form action="{{ url("/todo/add") }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" required name="name" placeholder="Enter your name">
            </div>
            <div class="form-group mb-2">
                <label for="">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control" required placeholder="What you want to described"></textarea>
            </div>
            <button class="btn btn-primary">Add New</button>
            <a href="{{url("/todo")}}" type="button" class="btn btn-success">Back</a>

       </form>

    </div>
@endsection




