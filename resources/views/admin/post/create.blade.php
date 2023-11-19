@extends('admin.app')

@section('headSection')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/all.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Post
                <small>Create form element</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('post.index') }}">Post Table</a></li>
                <li class="active">Create Form</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Titles</h3>
                        </div>
                        @include('includes.messages')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('post.store') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="title">Post Title</label>
                                            <input type="text" value="{{old('title')}}" class="form-control" id="title" name="title"
                                                placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="slug">Post Slug</label>
                                            <input type="text" value="{{old('slug')}}" class="form-control" id="slug" name="slug"
                                                placeholder="Slug">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="image">File input</label>
                                            <input type="file" class="form-control file-input" name="image"
                                                id="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Select Tags</label>
                                        <select class="form-control select2" multiple=""
                                            data-placeholder="Select a State" style="width: 100%;" tabindex="-1"
                                            aria-hidden="true" name="tags[]">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Select Category</label>
                                        <select class="form-control select2" data-placeholder="Select a State"
                                            style="width: 100%;" value="{{old('category_id')}}" tabindex="-1" aria-hidden="true" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4" style="margin-top: 20px;">
                                    <div class="col-lg-12">
                                        <textarea name="content" id="blog-area" cols="40" rows="20" class="form-control">{{old('content')}}</textarea>
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
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('footerSection')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("blog-area"),
            spellChecker: false, // optional: disable spell checker
        });
    </script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}">
    </script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('admin/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        });
        $(document).on('keyup','#title',function(){
            let title = $(this).val();
            $('#slug').val(convertToSlug(title));
        });
        function convertToSlug(text) {
            return text.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]+/g, '');
        }
    </script>
@endsection
