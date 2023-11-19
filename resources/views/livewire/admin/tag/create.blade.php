@extends('admin.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tag
                <small>Create form element</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('tag.index') }}">Tag Table</a></li>
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
                            <h3 class="box-title">Create Tag</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {{-- <form role="form" wire:submit='store' method="post"> --}}
                        <form role="form" wire:submit.prevent='save'>
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">
                                    @include('includes.messages')
                                    <div class="form-group">
										<div>{{$title}}</div>
                                        <label for="name">tag title</label>
                                        <input type="text"  wire:model='title' class="form-control" id="name" name="title"
                                            placeholder="Tag Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">tag Slug</label>
                                        <input type="text" class="form-control" name="slug" wire:model='slug' id="slug" name="slug"
                                            placeholder="Slug">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href='{{ route('tag.index') }}' wire:navigate class="btn btn-warning">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
