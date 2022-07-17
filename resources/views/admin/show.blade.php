@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $post->title }}</h1>

    @if ($post->category)
        <h3>Categoria:{{ $post->category->name }}</h3>
    @endif

    <p>
        {{ $post->content }}
    </p>

    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">torna all'elenco</a>
</div>
@endsection
