    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Titles</h3>
                    </div>
                    @include('includes.messages')
                    <form role="form" wire:submit='save'>
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row my-3 py-3">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" wire:model='title' class="form-control" id="title"
                                            name="title" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="slug">Post Slug</label>
                                        <input type="text" wire:model='slug' class="form-control" id="slug"
                                            name="slug" placeholder="Slug">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="image">File input</label>
                                        <input type="file" wire:model='fileInput' class="form-control file-input"
                                            name="image" id="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Select Tags</label>
                                    <select class="form-control select2" wire:model='postTags' multiple=""
                                        aria-hidden="true" name="tags[]">
                                        @if (!empty($tags))
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>Select Category</label>
                                    <select class="form-control select2" wire:model='postCategories' multiple=""
                                        aria-hidden="true" name="categories[]">
                                        @if (!empty($categories))
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-lg-12" style="margin-top:30px;">
                                    <textarea name="content" wire:model='postContent' id="blog-area" cols="40" rows="20" class="form-control"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary">
                                    <a href='{{ route('post.index') }}' class="btn btn-warning">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
