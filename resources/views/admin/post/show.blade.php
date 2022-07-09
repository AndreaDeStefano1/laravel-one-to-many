@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="">{{ $post->title }}</h1>
        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post) }}"> EDIT </a>
    </div>
    <h3>Categoria: {{ $post->category->name }}</h3>
    <p>{{ $post->text }}</p>
    <a class="btn btn-secondary mt-5" href="{{ route('admin.posts.index') }}"> << INDIETRO </a>
</div>
@endsection
