<div class="container">
    @forelse ($posts as $post)
        <div class="row" id="post-row">
            <div class="col-lg-2 post-about-details">
                <div class="mt-2">{{date('Y-m-d H:s ',strtotime($post->post_modified))}}</div>
            </div>
            <div class="col-lg-8 post-row-content">
                <p class="post-heading">{{ $post->post_title }}</p>
                @php
                    $content = strip_tags($post->post_content);
                @endphp
                <p class="content-excerpt">{{ \Str::limit($content,250,'...') }}</p>
                <a href="{{route('post.show',$post->post_name)}}" class="btn btn-sm btn-dark dark-global-button">Read more..</a>
            </div>
        </div>
    @empty
        Not found
    @endforelse
    {{-- {{$posts->links()}} --}}
</div>
