@extends('frontend.app')
@section('title',$post->post_title)
@section('content')
    <div class="row mb-5">
        <div class="col-lg-12 py-2 my-3">
            <h1>{{ $post->post_title }}</h1>
        </div>
        <hr>
    </div>
    <div class="row mb-5 px-4">
        <div class="col-lg-12">
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
