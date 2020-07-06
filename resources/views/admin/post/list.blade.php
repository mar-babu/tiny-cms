@extends('layouts.adminLayouts.adminLayout')
@section('title', $posts ? ' Post List' : '')

@section('title',' Post List')
@section('content')
    <section class="main--content">
        <div class="panel">
            <!-- Records Header Start -->
            <div class="records--header">
                <div class="title fa-shopping-bag">
                    <h3 class="h3">Tiny CMS @yield('title') <a href="{{url('post/create')}}" class="btn btn-sm btn-outline-info postSubmit">Add Post</a></h3>
                    <p>Found Total 13 Posts</p>
                </div>

            </div>
            <!-- Records Header End -->
        </div>




        <div class="panel">
            <!-- Records List Start -->
            <div class="records--list" data-title="Category Listing">
                <table id="recordsListView">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Title</th>
                        <th>Post Brief</th>
                        <th>Post Type</th>
                        <th>Post Section</th>
                        <th class="not-sortable">Post File</th>
                        <th class="not-sortable">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <td>
                                <a class="btn-link">{{$post->id}}</a>
                            </td>
                            <td>
                                <a class="btn-link">{{$post->title}}</a>
                            </td>
                            <td>
                                <a class="btn-link">{{$post->brief}}</a>
                            </td>
                            <td>
                                <a class="btn-link">{{$post->type}}</a>
                            </td>
                            <td>
                                <a class="btn-link">{{$post->section}}</a>
                            </td>
                            <td>
                                <a class="btn-link">
                                    <img src="{{asset('admin/post/files/'.$post->file)}}" style="width: 30px;height: 30px;">
                                </a>
                            </td>
                            <td>
                                <div class="dropleft">
                                    <a class="btn-link" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item category_edit" data-id="{{$post->id}}">Edit</a>
                                        <a class="dropdown-item category_delete" data-id="{{$post->id}}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Records List End -->
        </div>
    </section>

@endSection