
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

@section('title', $posts ?? '')



<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="frontend/assets/css/style.css">

</head>
<body>
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">

                    <div class="container col-12">
                        <div class="card-body">
                            <div class="card-header">
                                <h3 class="card-title mt-3">Laravel Tiny<span class="card-title-right">CMS</span></h3>
                            </div>
                        </div>
                    </div>



                    <div class="content col-12">
                        @if($section1_posts as $section1_post)
                        <div class="container section1 col-7">

                            <div class="sec-1-content-1 col-4">

                                <div class="row">
                                    <div class="article">
                                        <div class="first-item">
                                            <div class="single-item-image"><img src="{{asset('admin/post/files/'.$section1_post->file)}}" alt="" class="dasimages"></div>
                                        </div>
                                        <div class="contents">
                                            <h5>Title: {{$section1_post->title}}</h5>
                                            <p>brief: {{$section1_post->brief}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-1"></div>


                            <div class="sec-1-content-2 col-2">

                                <div class="row">
                                    <div class="content-2-article">
                                        <div class="sec-1-part-2">
                                            <div class="single-box-image">
                                                <img src="{{asset('admin/post/files/'.$section1_post->file)}}" alt="" class="dasimages">
                                            </div>
                                        </div>
                                        <p class="box-title">Title: {{$section1_post->title}}</p>
                                    </div>
                                    <div class="content-2-article">
                                        <div class="sec-1-part-2">
                                            <div class="single-item-image">
                                                <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="box-title">Title</p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="content-2-article">

                                        <div class="sec-1-part-2">
                                            <div class="single-item-image">
                                                <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="box-title">Title</p>
                                    </div>

                                    <div class="content-2-article">

                                        <div class="sec-1-part-2">
                                            <div class="single-item-image">
                                                <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="box-title">Title</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @endif


                        <span class="hr"></span>


                            @foreach($section2_posts as $section2_post)
                        <div class="section2 col-5">

                            <div class="section-2-content-1 col-3">
                                <div class="row">
                                    <div class="article">

                                        <div class="first-item">
                                            <div class="single-item-image">
                                                <img src="{{asset('admin/post/files/'.$section2_post->file)}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="contents">
                                            <h5>Title: {{$section2_post->title}}</h5>
                                            <p>brief: {{$section2_post->brief}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="sec-2-content-2 col-2">
                                        <div class="row">
                                            <div class="article">

                                                <div class="sec-2-part-2">
                                                    <div class="single-item-image">
                                                        <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <p class="box-title">Title</p>
                                            </div>


                                            <div class="article">

                                                <div class="sec-2-part-2">
                                                    <div class="single-item-image">
                                                        <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <p class="box-title">Title</p>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="article">

                                                <div class="sec-1-part-2">
                                                    <div class="single-item-image">
                                                        <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <p class="box-title">Title</p>
                                            </div>

                                            <div class="article">

                                                <div class="sec-1-part-2">
                                                    <div class="single-item-image">
                                                        <img src="./img/himsagor.jpg" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <p class="box-title">Title</p>
                                            </div>

                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                            @endforeach



                    </div>


                </div>
            </div>
        </div>
</body>
</html>
