@extends('frontend.app')
@section('title',$post->post_title)
@section('content')
    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-lg-8 py-2 my-3">
            <h1>{{ $post->post_title }}</h1>
            <hr>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-sm-12">
                    <span class="authorName">{{date('d M Y',strtotime($post->post_modified))}}</span> | 
                    <span class="authorName">{{$post->user?->name}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-lg-8">
            {!! $post->post_content !!}
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/third-party/highlight-syntax-styles/monokai-sublime.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('js/third-party/highlight.min.js') }}"></script>
<script>hljs.highlightAll();</script>
@endpush
