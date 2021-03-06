@extends('layouts.app')

@section('content')
@if ($recipes->count())
<div class="d-flex flex-column">
@foreach ($recipes as $recipe)
<a class="btn w-100 bg-light p-2 mb-2" href="{{route("recipes.show", ["recipe" => $recipe])}}">
<div>
    <div class="title">
        <h3>{{ $recipe->title }}</h3>
    </div>
    <div class="tags">
        @foreach ($recipe->category as $category)
            <span class="badge badge-pill badge-primary">{{ $category->category }}</span>
        @endforeach
    </div>
    <div class="body">
        <p>{{$recipe->description}}</p>
    </div>
</div>
</a>
@endforeach
</div>
{{ $recipes->links() }}
@else
<span>No recipes yet!</span>
@endif

@endsection