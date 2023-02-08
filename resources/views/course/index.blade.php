@extends('course.layout.template')

@section('container')
    <!-- Home Jumbotron
                            ================================================== -->
    <section class="intro">
        <div class="wrapintro">
            <h1>Code of Source</h1>
            <h2 class="lead">"Selamat datang di kursus online kami, kami menyediakan banyak kelas berbayar yang dapat
                diakses secara gratis"</h2>
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
                <div class="w-100 swiper my-3">
                    <div class="swipe-wrapper w-100 d-flex"
                        style="transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;">
                        <a href="">
                            <div class="card m-0 mx-2" style="width: 18rem;">
                                <img class="card-img-top" src="images/course/1.jpg" alt="Card image cap">
                            </div>

                        </a>
                        <img src="images/course/1.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/2.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/3.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/4.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/5.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/6.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                        <img src="images/course/1.jpg" class="rounded mx-2" alt="..." style="width: 14rem">
                    </div>
                </div>
                <div class="w-100 h-100 d-flex flex-row-reverse p-4 partModule" style="background-color: rgba(144, 162, 252, .4)">
                    <div class="col-md-4 d-flex align-items-center">
                        {{-- kasih mt-3 diatas. mobile layout --}}
                        {{-- kasih ml-3 diatas. desktop layout --}}
                        <div class="row">
                            <h3>Fundamental React JS</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quidem ipsum asperiores praesentium
                                ducimus. Officiis cum aperiam optio dolores at?
                            </p>
                            <h6>4 Kelas</h6>
                        </div>
                    </div>
                    <div class="col-md-8 rounded cardSwiper">

                        <div class="btnOverflow d-flex justify-content-start">
                            <h2><a href="" class="mx-1 ofLeftCard"><i class="fas fa-arrow-circle-left"></i></a></h2>
                            <h2><a href="" class="mx-1 ofRightCard"><i class="fas fa-arrow-circle-right"></i></a></h2>
                        </div>        

                        <div class="swiper-card d-flex" style="">
                            <a href="">
                                <div class="card m-0 mx-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/course/1.jpg" alt="Card image cap">
                                    <div class="card-body p-3">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk
                                            of the card's content.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, sit?</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="card m-0 mx-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/course/1.jpg" alt="Card image cap">
                                    <div class="card-body p-3">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk
                                            of the card's content.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, sit?</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="card m-0 mx-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/course/1.jpg" alt="Card image cap">
                                    <div class="card-body p-3">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk
                                            of the card's content.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, sit?</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="card m-0 mx-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/course/1.jpg" alt="Card image cap">
                                    <div class="card-body p-3">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk
                                            of the card's content.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, sit?</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="card m-0 mx-2" style="width: 18rem;">
                                    <img class="card-img-top" src="images/course/1.jpg" alt="Card image cap">
                                    <div class="card-body p-3">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the
                                            bulk
                                            of the card's content.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, sit?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

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

            $('.swiper-card a').first().addClass('active')
            $('.swiper-card a').first().next().addClass('next')

            let fnSwiper = () => {
                let translasi = -230 * $('.swipe-wrapper').find('.active').index()

                $('.swipe-wrapper').css('transform', 'translate3d(' + translasi + 'px' + ', 0px, 0px)')
                $('.swipe-wrapper').css('transition', 'all 300ms ease 0s')

                setTimeout(() => {
                    $('.swipe-wrapper').css('transition', 'all 0ms ease 0s')
                }, 700);
            }

            let fnSwiperCard = () => {
                let translasi = -230 * $('.swiper-card').find('.active').index()

                $('.swiper-card').css('transform', 'translate3d(' + translasi + 'px' + ', 0px, 0px)')
                $('.swiper-card').css('transition', 'all 300ms ease 0s')

                setTimeout(() => {
                    $('.swiper-card').css('transition', 'all 0ms ease 0s')
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

            $('.ofLeftCard').click((e) => {
                e.preventDefault()

                $('.swiper-card').find('.active').prev().addClass('active')
                $('.swiper-card').find('.active').next().removeClass('active')

                $('.swiper-card').find('.active').prev().addClass('prev')
                $('.swiper-card').find('.active').removeClass('prev')

                $('.swiper-card').find('.active').next().addClass('next')
                $('.swiper-card').find('.next').next().removeClass('next')

                fnSwiperCard()
            })

            $('.ofRightCard').click((e) => {
                e.preventDefault()

                $('.swiper-card').find('.active').next().addClass('active')
                $('.swiper-card').find('.active').prev().removeClass('active')

                $('.swiper-card').find('.active').prev().addClass('prev')
                $('.swiper-card').find('.prev').prev().removeClass('prev')

                $('.swiper-card').find('.active').next().addClass('next')
                $('.swiper-card').find('.active').removeClass('next')

                fnSwiperCard()
            })

            $(window).resize(e => {
                console.log($(window).innerWidth())
                if( $(window).innerWidth() < 750 ) {
                    $('.partModule').removeClass('flex-row-reverse')
                    $('.partModule').addClass('flex-column-reverse')
                }else if( $(window).innerWidth() > 750 ){
                    $('.partModule').addClass('flex-row-reverse')
                    $('.partModule').removeClass('flex-column-reverse')
                }
            })

        })
    </script>
@endsection
