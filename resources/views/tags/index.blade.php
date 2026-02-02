@extends('components.layout')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
@endsection
@section('content')
<div class="container"></div>
    <div class="row">
        <div class="col-md-10 m-auto">
            <h2>Tags Page</h2>
            <table class="table text-center w-50 m-auto mt-3">
                <thead>
                    <tr>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td class="bg-info text-white">{{ $tag->title }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
