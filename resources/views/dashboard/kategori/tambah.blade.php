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

                        <h4 class="mb-3">Tambah Kategori </h4>
                        <hr>
                        <form action="" method="post" novalidate="novalidate">

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Nama Kategori</label>
                                <input id="cc-pament" name="cc-payment" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="">
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
