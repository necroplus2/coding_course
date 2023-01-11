{{-- @dd(Request::is('dashboard/module*')) --}}
@extends('dashboard.layout.template')

@section('container')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/trix-editor/trix.css') }}">
    <script type="text/javascript" src="{{ asset('vendor/trix-editor/trix.js') }}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row bg-light p-3">
                    <div class="col-md-12">

                        <h4 class="mb-3">Ubah Kelas</h4>
                        <hr>
                        <form action="/dashboard/module/{{ $kelas->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Judul Kelas</label>
                                <input id="cc-pament" name="judul_kelas" type="text" class="form-control" value="{{ $kelas->judul_kelas }}">
                            </div>

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Materi</label>
                                <textarea class="form-control" id="materi" name="isi_materi">{{ $kelas->isi_materi }}</textarea>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-12">
                                    <label for="cc-payment" class="control-label mb-1">Kategori</label>
                                    <select name="kategori_id" id="SelectLm" class="form-control-sm form-control">
                                        <option disabled selected>Pilih Kategori Materi</option>
                                        @foreach($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" {{ ($kelas->kategori_id == $kategori->id ? 'selected' : '') }} >{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-12">
                                    <label for="cc-payment" class="control-label mb-1">Menthor</label>
                                    <select name="menthor_id" id="SelectLm" class="form-control-sm form-control">
                                        <option disabled selected>Pilih Menthor</option>
                                        @foreach($menthor as $mentor)
                                        <option value="{{ $mentor->id }}" {{ ($kelas->menthor_id == $mentor->id ? 'selected' : '') }} >{{ $mentor->nama_lengkap }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Ubah</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
