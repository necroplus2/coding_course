@extends('course.layout.template')

@section('container')
    <!-- Home Jumbotron
                    ================================================== -->
    <section class="intro">
        <div class="wrapintro">
            <h1>Code of Source</h1>
            <h2 class="lead">"Selamat datang di kursus online kami, kami menyediakan banyak kelas berbayar yang dapat diakses secara gratis"</h2>
            {{-- <a target="_blank" href="https://gum.co/affiliates-html-template" class="btn">Download</a> --}}
        </div>
    </section>
    <!-- Container
                    ================================================== -->
    <div class="container">
        <div class="main-content">
            <!-- Featured
                            ================================================== -->
            <section class="featured-posts">
                <div class="section-title">
                    <h2 class="d-flex justify-content-center"><span>Roadmap</span></h2>
                </div>
                <div class="btnOverflow d-flex justify-content-end">
                    <h2><a href="" class="mx-1 ofLeft"><i class="fas fa-arrow-circle-left"></i></a></h2>
                    <h2><a href="" class="mx-1 ofRight"><i class="fas fa-arrow-circle-right"></i></a></h2>
                </div>
                <div class="w-100 swiper">
                    <div class="swipe-wrapper w-100 d-flex"
                        style="transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
                        <img src="images/course/1.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/2.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/3.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/4.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/5.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/6.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/1.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                    </div>
                </div>

            </section>

        </div>
    </div>
    <!-- /.container -->

    <script>
        $(document).ready(function() {

            $('.swipe-wrapper img').first().addClass('active')
            $('.swipe-wrapper img').first().next().addClass('next')

            let fnSwiper = () => {
                let translasi = -230 * $('.swipe-wrapper').find('.active').index()

                $('.swipe-wrapper').css('transform', 'translate3d(' + translasi + 'px' + ', 0px, 0px)')
                $('.swipe-wrapper').css('transition', 'all 300ms ease 0s')

                setTimeout(() => {
                    $('.swipe-wrapper').css('transition', 'all 0ms ease 0s')
                }, 700);
            }

            $('.ofLeft').click((e) => {
                e.preventDefault()

                $('.swipe-wrapper').find('.active').prev().addClass('active')
                $('.swipe-wrapper').find('.active').next().removeClass('active')

                $('.swipe-wrapper').find('.active').prev().addClass('prev')
                $('.swipe-wrapper').find('.active').removeClass('prev')

                $('.swipe-wrapper').find('.active').next().addClass('next')
                $('.swipe-wrapper').find('.next').next().removeClass('next')

                fnSwiper()
            })

            $('.ofRight').click((e) => {
                e.preventDefault()

                $('.swipe-wrapper').find('.active').next().addClass('active')
                $('.swipe-wrapper').find('.active').prev().removeClass('active')

                $('.swipe-wrapper').find('.active').prev().addClass('prev')
                $('.swipe-wrapper').find('.prev').prev().removeClass('prev')

                $('.swipe-wrapper').find('.active').next().addClass('next')
                $('.swipe-wrapper').find('.active').removeClass('next')

                fnSwiper()
            })

        })
    </script>
@endsection
