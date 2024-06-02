@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-success my-4">
            Torna alla lista Progetti
        </a>

        <h1 class="my-4">Crea il tuo Progetto</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <h3>Correggi i seguenti errori</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST" class="row g-3">
            @csrf <!-- Aggiunto il token CSRF -->

            <div class="col-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-3">
                <label for="sale_date">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">

            </div>

            <div class="col-3">
                <label for="price">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">

            </div>


            <div class="col-3">
                <label for="sale_date">Created at</label>
                <input type="date" name="created_at" id="created_at" class="form-control"
                    value="{{ old('created_at') }}">

            </div>

            <div class="col-3">
                <label for="type">Updated at</label>
                <input type="text" name="updated_at" id="updated_at" class="form-control"
                    value="{{ old('updated_at') }}">

            </div>



            <div class="col-12">
                <label for="description">Content</label>
                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="4">{{ old('content') }}</textarea>
                @error('content')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Inserisci Progetto</button>
            </div>
        </form>

    </div>
    </div>
@endsection
