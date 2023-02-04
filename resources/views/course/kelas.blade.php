{{-- @dd($kelass) --}}
{{-- @dd( Arr::join ( fake()->paragraphs(5, false), '</p><p>' )) --}}
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
                                <a href="/kelas/{{ $kelas->id }}">
                                    <img class="img-fluid" src="{{ asset('images/course/' . mt_rand(1,4) . '.jpg') }}" alt="Tree of Codes">
                                </a>
                                <div class="card-block">
                                    <h2 class="card-title"><a href="/kelas/{{ $kelas->id }}">{{ $kelas->judul_kelas }}</a></h2>
                                    <h4 class="card-text">{!! Str::excerpt($kelas->deskripsi, '', [
                                        'radius' => 100
                                    ]) !!}</p></h4>
                                    {{-- <h4 class="card-text">
                                        <p>
                                            {!! $kelas->deskripsi !!}
                                        </p>
                                    </h4> --}}
                                    <div class="metafooter d-flex">
                                        <a href="/kelas/{{ $kelas->id }}" class="btn btn-success btn-sm ml-auto">Selengkapnya</a>
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
