@extends('frontend.app')
@section('content')
@include('frontend.content', ['posts' => $posts ])
@endsection
@section('title','Blogs')
    