{{-- @dd(url()->current()) --}}
@extends('course.layout.template')

@section('container')
    <div class="container">
        <!-- Content
                    ================================================== -->
        <div class="main-content">
            <!-- Begin Article
                            ================================================== -->
            <div class="row">
                <!-- Post -->
                <div class="col-sm-8">
                    <div class="mainheading">
                        <!-- Post Title -->
                        <h1 class="posttitle">{{ $content->judul }}</h1>
                    </div>
                    <!-- Post Featured Image -->
                    <img class="featured-image img-fluid" src="{{ asset('images/course/3.jpg') }}" alt="">
                    <!-- End Featured Image -->
                    <!-- Post Content -->
                    <div class="article-post">
                        {!! $content->isi !!}
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
                <!-- End Post -->

                @include('course.layout.materi.sidebar')

                <div class="col-md-12 d-flex mb-5 pb-5">
                    <a href="#" class="btn btn-info mr-auto" id="btnModulePrevious">
                        <h2>Previous</h2>
                    </a>
                    <a href="#" class="btn btn-info ml-auto" id="btnModuleNext">
                        <h2>Next</h2>
                    </a>
                </div>

            </div>
            <!-- End Article
                            ================================================== -->
        </div>
    </div>
    <!-- /.container -->

    <script>
        $(document).ready(function() {

            $('#btnModuleNext').click(e => {
                e.preventDefault()

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/json',
                        "Accept": 'application/json',
                    },
                })

                $.ajax({

                    contentType: "application/json; charset=utf-8",
                    type: "POST",
                    url: "/module/next",
                    // dataType: "json",
                    data: {test: 'tetrts'},
                    success: (result, status) => {
                        alert("testing " + result + status)
                    },
                    error: e => {
                        console.log(e.status)
                    }

                })
            })


        })
    </script>
@endsection
