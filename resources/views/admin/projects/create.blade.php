@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-3S">Crea un nuovo progetto</h2>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="content">Contenuto</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-success" type="submit">Salva</button>
            </form>
        </div>
    </div>
@endsection
