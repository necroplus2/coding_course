@extends('course.layout.template')

@section('container')
    <div class="container">
        <!-- Content
        ================================================== -->
        <div class="main-content">
            <!-- Begin Article
                ================================================== -->
            <div class="row">
                <!-- Sidebar -->
                <div class="col-sm-4">
                    <div class="sidebar">
                        <div class="sidebar-section">
                            <h5><span>Pembahasan Yang Didapat</span></h5>
                            <ul style="list-none;">
                                @foreach($bab as $b)
                                <li class="text-center" type="1"><a target="_blank" href="">{{ $b->nama_bab }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Post -->
                <div class="col-sm-8">
                    <div class="mainheading">
                        <!-- Post Categories -->
                        <div class="after-post-tags">
                            <ul class="tags">
                                <li>
                                    <a href="#">bootstrap</a>
                                </li>
                                <li>
                                    <a href="#">tutorial</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Categories -->
                        <!-- Post Title -->
                        <h1 class="posttitle">{{ $module->judul_kelas }}</h1>
                    </div>
                    <!-- Post Featured Image -->
                    <img class="featured-image img-fluid" src="assets/images/3.jpg" alt="">
                    <!-- End Featured Image -->
                    <!-- Post Content -->
                    <div class="article-post">
                        {!! $module->deskripsi !!}
                        <div class="clearfix">
                        </div>
                    </div>
                    <!-- Author Box -->
                    <div class="row post-top-meta">
                        <div class="col-md-2">
                            <img class="author-thumb"
                                src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                alt="Sal">
                        </div>
                        <div class="col-md-10">
                            <a target="_blank" class="link-dark" href="#">Sal</a><a target="_blank"
                                href="https://twitter.com/wowthemesnet" class="btn follow">Follow</a>
                            <span class="author-description">Author of Affiliates, a template available for WordPress, HTML,
                                Ghost and Jekyll. You are currently previewing Jekyll template demo.</span>
                        </div>
                    </div>
                </div>
                <!-- End Post -->
            </div>
            <!-- End Article
                ================================================== -->
        </div>
    </div>
    <!-- /.container -->
@endsection
