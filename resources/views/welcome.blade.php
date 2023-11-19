@extends('frontend.app')
@section('content')
    <div class="banner container py-5">
        <h1 class="siteline">
            Let's Learn And Build Together
        </h1>
    </div>
    @include('frontend.components.search')
    <section id="blogPosts">
        @include('frontend.content', ['posts' => $posts])
    </section>
@endsection
@section('title', 'Blog')
@push('scripts')
    <script>
        let typeTimout;
        $(document).on('keyup', '#searchBoxForPosts', function() {
            let search = $(this).val();
            // if(!search){
            //     return false;
            // }
            clearTimeout(typeTimout);
            typeTimout = setTimeout(() => {
                $.ajax({
                    url: "{{ route('blogs') }}",
                    _token: "{{ csrf_token() }}",
                    type: "GET",
                    data: {search:search},
                    success: function(html) {
                        $("#blogPosts").html(html);
                    },
                    error: function(error) {
                        cosnole.log(error);
                    }
                });
            }, 300);
        });
    </script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/searchbox.css') }}">
@endpush
