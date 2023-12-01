<div class="container my-3">
    <div class="row d-flex justify-content-center" id="post-row">
        @forelse ($posts as $post)
        <div class="col-lg-10 m-2 post-row-content border ">
            <p class="post-heading mb-3">{{ ucfirst($post->title) }}
                <div class="post-info pb-3">
                    <span class=" mb-2 categoryTitle bg-dark text-light rounded p-1">{{$post->category?->name}}</span>
                    <span class=" mb-2 categoryTitle bg-dark text-light rounded p-1">{{$post->created_at}}</span>
                </div>
            </p>
            @php
            $content = strip_tags($post->content);
            @endphp
            <p class="content-excerpt">{{ \Str::limit($content, 200, '...') }}</p>
            <a href="{{ route('post.show', $post->url) }}" class="text-dark dark-global-button">Read
                more..</a>
        </div>
        @empty
        Not found
        @endforelse
    </div>
    <div class="pagination row">
        <div class="col-lg-12 d-flex justify-content-center py-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>