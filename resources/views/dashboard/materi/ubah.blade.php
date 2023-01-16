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

                        <h4 class="mb-3">Tambah Kelas</h4>
                        <hr>
                        <form action="/dashboard/content/{{ $content->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="bab" class="control-label mb-1">Bab</label>
                                <input id="bab" name="bab" type="text" class="form-control" value="{{ $content->bab }}">
                            </div>

                            <div class="form-group">
                                <label for="sub_bab" class="control-label mb-1">Sub Bab</label>
                                <input id="sub_bab" name="sub_bab" type="text" class="form-control" value="{{ $content->sub_bab }}">
                            </div>

                            <div class="form-group">
                                <label for="isi" class="control-label mb-1">Isi</label>
                                <textarea id="isi" name="isi" type="text" class="form-control">{{ $content->isi }}</textarea>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-12">
                                    <label for="kelas_id" class="control-label mb-1">Kelas</label>
                                    <select name="kelas_id" id="kelas_id" class="form-control-sm form-control">
                                        <option disabled selected>Pilih Kelas</option>
                                        @foreach($kelass as $kelas)
                                        <option value="{{ $kelas->id }}" {{ $content->kelas_id == $kelas->id ? 'selected' : '' }}>{{ $kelas->judul_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Tambahkan</span>
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
