@extends('frontend.app')
@section('content')
<div class="banner container py-5">
    <h1 class="siteline" >
        Let's Learn And Build Together
    </h1>
</div>
@include('frontend.content', ['posts' => $posts ])
@endsection
@section('title','Blog')
