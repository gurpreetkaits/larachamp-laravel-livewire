<div class="container my-3">
    @forelse ($posts as $post)
        <div class="row" id="post-row">
            <div class="col-lg-2 timeline post-about-details">
                <div class="timeline-circle"></div>
                <div class="mt-2">{{ formatDate($post->updated_at) }}</div>
            </div>
            <div class="col-lg-8 post-row-content border ">
                <p class="post-heading mb-1">{{ ucfirst($post->title) }}</p>
                <span class="{{$post->category?->classes}} mt-0 mb-2 categoryTitle"># {{$post->category?->name}}</span>
                @php
                    $content = strip_tags($post->content);
                @endphp
                <p class="content-excerpt">{{ \Str::limit($content, 250, '...') }}</p>
                <a href="{{ route('post.show', $post->url) }}" class="text-dark dark-global-button">Read
                    more..</a>
            </div>
        </div>
        @empty
        Not found
        @endforelse
        {{ $posts->links() }}
</div>
