{{-- {{ dd(Str::substr(URL::current(),10,0)) }} --}}
@extends('course.layout.template')

@section('container')
<div class="Blog-bg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="Blogheading">
                <h3>Kelas HTML Dasar </h3>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 
       <!-- section --> 
       <div class="section layout_padding blog_blue_bg light_silver">
          <div class="container">
             
             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="full">
                      <div class="big_blog">
                         <img class="img-responsive" src="{{ asset('images/course/blog_1.png') }}" alt="#" />
                      </div>
                      <div class="blog_cont_2">
                         <h3>{{ $kelas->judul_kelas }}</h3>
                         <p class="sublittle">{{ $kelas->created_at }}</p>
                         <p>{{ $kelas->isi_materi }}</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- end section -->
 
 
@endsection