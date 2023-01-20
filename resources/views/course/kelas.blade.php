{{-- @dd($kelass) --}}
@extends('course.layout.template')

@section('container')
    <div class="container">
        <div class="main-content">
            <!-- Category Archive
                    ================================================== -->
            <section class="recent-posts row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><span>Kumpulan Kelas dan Stack Technology</span></h2>
                    </div>
                    <div class="masonrygrid row listrecent">
                        @foreach($kelass as $kelas)
                        <!-- begin post -->
                        <div class="col-md-6 grid-item">
                            <div class="card">
                                <a href="single.html">
                                    <img class="img-fluid" src="{{ asset('images/course/' . mt_rand(1,4) . '.jpg') }}" alt="Tree of Codes">
                                </a>
                                <div class="card-block">
                                    <h2 class="card-title"><a href="single.html">{{ $kelas->judul_kelas }}</a></h2>
                                    <h4 class="card-text">The first mass-produced book to deviate from a
                                        rectilinear format, at least in the United States, is thought to be this
                                        1863 edition of Red Riding Hood, cut into the...</h4>
                                    <div class="metafooter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end post -->
                    </div>
                    <!-- Pagination -->
                    <div class="bottompagination">
                        <div class="navigation">
                            {{ $kelass->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /.container -->
    </div>
@endsection
