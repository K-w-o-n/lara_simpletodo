@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Todo Home Page</h2><br>
    <div>
        <a href="{{url("/todo/add")}}" class="btn btn-success" type="button">Create New</a>
    </div><br>
    {{ $todos->links() }}
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->name }}</td>
                            <td>{{ Str::substr($todo->content,0,200) }}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a href="{{ url("/todo/edit/$todo->id") }}" class="btn btn-primary" type="button">edit</a>
                                    <a href="{{ url("/todo/delete/$todo->id") }}" class="btn btn-warning" type="button">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
