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


       <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="hidden" name="id" class="form-control" value="{{ $data->id }}">
                <input type="text" class="form-control" required name="name" value="{{ $data->name }}">
            </div>
            <div class="form-group mb-2">
                <label for="">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control" required>{{ $data->content }}</textarea>
            </div>
            <button class="btn btn-primary">Update</button>

       </form>

    </div>
@endsection




