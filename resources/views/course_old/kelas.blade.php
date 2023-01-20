@extends('course.layout.template')

@section('container')
    <div class="Marketing-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Marketingheading">
                        <h3>KELAS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">

         @foreach($kelas as $kls)
            <div class="row">
                <div class="col-md-6">
                    <div class="full blog_cont">
                        <a href="/blog/{{ $kls->id }}"><h4>{{ $kls->judul_kelas }}</h3></a>
                        <h5>{{ $kls->created_at }}</h5>
                        <p>{{ $kls->isi_materi }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/course/marketing_img.png" alt="#" />
                </div>

            </div>
         @endforeach

        </div>
    </div>
    <!-- end section -->
@endsection
