{{-- {{ dd(Str::substr("http://127.0.0.1:8000/dashboard/kategori/1/edit", 41, 1)) }} --}}
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

                        <h4 class="mb-3">Ubah Kategori </h4>
                        <hr>
                        <form action="/dashboard/category/{{ $kategori->id }}" method="post">
                            @csrf
                            @method('put')


                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nama Kategori</label>
                                <input id="cc-pament" name="nama_kategori" type="text" class="form-control" value="{{ $kategori->nama_kategori }}">
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
