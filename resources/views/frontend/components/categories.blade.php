<div class="container p-3">
    <div class="row">
        <div class="col-lg-12">
            @foreach ($categories as $category)
                <span><a href="" class="{{ $category->classes }}  p-2 rounded">{{ $category->name }}</a></span>
            @endforeach
        </div>
    </div>
</div>
