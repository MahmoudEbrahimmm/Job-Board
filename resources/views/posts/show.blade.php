@extends('components.layout')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
@endsection
@section('content')
<div class="container"></div>
    <div class="row">
        <div class="col-md-10 m-auto text-center">
            <h3>{{ $post->title }}</h3>
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Body</td>
                        <td>Author</td>
                        <td>Publish</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->published }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
