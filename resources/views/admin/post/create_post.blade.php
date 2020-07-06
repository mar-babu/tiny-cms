
@extends('layouts.adminLayouts.adminLayout')
@section('title', $post ? 'Update' : 'Create' .' Post')
@section('content')
    <section class="main--content">
        <div class="panel">
            <!-- Records Header Start -->
            <div class="records--header">
                <div class="title fa-shopping-bag">
                    <h3 class="h3">Tiny CMS @yield('title') <a href="{{url('post/list')}}" class="btn btn-sm btn-outline-info">Post List</a></h3>
                    <p>Found Total 13 Posts</p>
                </div>

            </div>
            <!-- Records Header End -->
        </div>


            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Panel Start -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="card-title">Create Post</h3>
                        </div>
                        <div class="card-body">
                            {!! Form::model($post, ['url' => $post ? 'post/'.$post->id.'/update' : 'post/store', 'method' => $post ? 'PUT' : 'POST', 'files'=>true]) !!}

                                <div class="card-body">
                                    <div class="form-group">
                                        <label><span class="label-text">Title <dfn class="text-danger">*</dfn></span></label>
                                        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter Title...']) !!}
                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label><span class="label-text">Brief <dfn class="text-danger">*</dfn></span></label>
                                        {!! Form::textarea('brief',null,['class'=>'form-control','placeholder'=>'Enter Brief...']) !!}
                                        <div class="text-danger">{{ $errors->first('brief') }}</div>

                                    </div>

                                    <div class="form-group">
                                        <label><span class="label-text">Type <dfn class="text-danger">*</dfn></span></label>
                                        {!! Form::select('type',['post','video'],null,['class'=>'form-control','placeholder'=>'Select Type']) !!}
                                        <div class="text-danger">{{ $errors->first('type') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label><span class="label-text">Section <dfn class="text-danger">*</dfn></span></label>
                                        {!! Form::select('section',['Section 1','Section 2'],null,['class'=>'form-control','placeholder'=>'Select Section']) !!}
                                        <div class="text-danger">{{ $errors->first('section') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label><span class="label-text">Upload File <dfn class="text-danger">*</dfn></span></label>
                                        {!! Form::file('file',null,['class'=>'custom-file-input','placeholder'=>'Choose File']) !!}
                                        <div class="text-danger">{{ $errors->first('file') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-sm btn-rounded btn-success">
                                        <button type="button" class="btn btn-sm btn-rounded btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}


                        </div>
                    </div>
                    <!-- Panel End -->
                </div>

            </div>

    </section>
    <!-- Main Content End -->



    @endSection


