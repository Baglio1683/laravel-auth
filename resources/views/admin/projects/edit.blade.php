@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center">Modifica {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $project->title }}">
                </div>

                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea name="content" id="content" rows="10" class="form-control"> {{ $project->content }}</textarea>
                </div>

                <button class="btn btn-warning">Salva</button>
            </div>
        </div>
    </div>
@endsection
