@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-3S">Crea un nuovo progetto</h2>
    <div class="row justify-content-center">
        <div class="col-8">

            @include('partials.errors')

            {{-- TITOLO --}}
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- IMMAGINE  --}}
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        @error('inputGroupFile02')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- CONTENUTO  --}}
                    <div class="form-group mb-3">
                        <label for="content">Contenuto</label>
                        <textarea name="content" id="content" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
        </div>
    </div>
@endsection
