@extends('frontend.app')
@section('title', 'Blog')

@section('content')
<section id="blogPosts">
    <div class="container my-3">
        <div class="row d-flex justify-content-center" id="post-row">
            <div class="col-lg-10 post-row-content border ">
                {{-- <img src="{{asset('me.jpeg')}}" alt="" class="myImage img-fluid"> --}}
                <div class="row">
                    <div class="col-lg-6">
                        @forelse ($categories as $category)
                        <span class=" mb-2 text-dark text-decoration-underline rounded p-1"><a class="categoryTitle"
                                href="{{route('blogs',$category->slug)}}"
                                >{{Str::upper($category->name)}}</a></span>
                        @empty

                        @endforelse
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="switch-container">
                            <input type="checkbox" class="neumorphic-switch" id="neumorphicCheckbox">
                            <label for="neumorphicCheckbox" class="neumorphic-label">
                                <i class="fas fa-moon"></i>
                                <i class="fas fa-sun"></i>
                                <span class="ball"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($posts as $post)
            <div class="col-lg-10 m-2 post-row-content border ">
                <p class="post-heading mb-3">{{ ucfirst($post->title) }}
                <div class="post-info pb-3">
                    <span
                        class=" mb-2 categoryTitle bg-dark text-light rounded p-1">{{Str::upper($post->category?->name)}}</span>
                    <span class=" mb-2 categoryTitle bg-dark text-light rounded p-1">{{$post->created_at}}</span>
                </div>
                </p>
                @php
                $content = strip_tags($post->content);
                @endphp
                <p class="content-excerpt">{{ \Str::limit($content, 200, '...') }}</p>
                <a href="{{ route('post.show', $post->slug) }}" class="readMoreButton">Read
                    more..</a>
            </div>
            @empty
            @endforelse
        </div>
        <div class="pagination row">
            <div class="col-lg-12 d-flex justify-content-center py-4">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    var typeTimout;
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
<style>
    /* ... Your existing styles ... */

    /* Neumorphic switch styles */
    .switch-container {
        display: inline-block;
        position: relative;
    }

    .neumorphic-switch {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .neumorphic-label {
        cursor: pointer;
        position: relative;
        display: inline-block;
        width: 50px;
        height: 26px;
        background-color: #e0e0e0;
        border-radius: 20px;
        box-shadow: inset 6px 6px 10px #bcbcbc, inset -6px -6px 10px #ffffff;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .neumorphic-label i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #555;
        transition: color 0.3s;
    }

    .neumorphic-label .ball {
        position: absolute;
        top: 2px;
        left: 2px;
        width: 22px;
        height: 22px;
        background-color: #fff;
        border-radius: 50%;
        transition: transform 0.3s;
    }

    .neumorphic-switch:checked + .neumorphic-label {
        background-color: #555;
        box-shadow: inset 6px 6px 10px #363636, inset -6px -6px 10px #777;
    }

    .neumorphic-switch:checked + .neumorphic-label i {
        color: #fff;
    }

    .neumorphic-switch:checked + .neumorphic-label .ball {
        transform: translateX(24px);
    }
</style>
@endpush