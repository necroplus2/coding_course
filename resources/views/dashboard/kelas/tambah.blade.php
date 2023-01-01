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
                        <form action="" method="post" novalidate="novalidate">

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Judul Kelas</label>
                                <input id="cc-pament" name="cc-payment" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="">
                            </div>

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Materi</label>
                                <input id="materi" type="hidden" name="materi" value="">
                                <trix-editor input="materi"></trix-editor>                        
                            </div>


                            <div class="row form-group">
                                <div class="col-12 col-md-12">
                                    <label for="cc-payment" class="control-label mb-1">Kategori</label>
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                        <option value="4">Option #4</option>
                                        <option value="5">Option #5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-12 col-md-12">
                                    <label for="cc-payment" class="control-label mb-1">Menthor</label>
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                        <option value="4">Option #4</option>
                                        <option value="5">Option #5</option>
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
