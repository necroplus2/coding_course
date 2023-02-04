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
                    <!-- Post Date -->
                    <p>
                        <small>
                            <span class="post-date"><time class="post-date" datetime="2018-01-12">12 Jan 2018</time></span>
                        </small>
                    </p>
                    <!-- Prev/Next -->
                    <div class="row PageNavigation mt-4 prevnextlinks">
                        <div class="col-md-6 rightborder pl-0">
                            <a class="thepostlink" href="single.html">« Red Riding Hood</a>
                        </div>
                        <div class="col-md-6 text-right pr-0">
                            <a class="thepostlink" href="single-right-sidebar.html">We all wait for summer »</a>
                        </div>
                    </div>
                    <!-- End Prev/Next -->
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
                    <!-- Begin Comments
                        ================================================== -->
                    <section>
                        <div id="comments">
                            <section class="disqus">
                                <div id="disqus_thread">
                                </div>
                                <script type="text/javascript">
                                    var disqus_shortname = 'demowebsite';
                                    var disqus_developer = 0;
                                    (function() {
                                        var dsq = document.createElement('script');
                                        dsq.type = 'text/javascript';
                                        dsq.async = true;
                                        dsq.src = window.location.protocol + '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>
                                    Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments
                                        powered by Disqus.</a>
                                </noscript>
                            </section>
                        </div>
                    </section>
                    <!--End Comments
                        ================================================== -->
                </div>
                <!-- End Post -->

                @include('course.layout.materi.sidebar')

            </div>
            <!-- End Article
                ================================================== -->
        </div>
    </div>
    <!-- /.container -->
@endsection
