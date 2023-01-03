@extends('dashboard.layout.template')

@section('container')
            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="section__content section__content--p30">
                <div class="container-fluid">

                  <div class="row bg-light p-3">
                    <div class="col-md-12">

                      <h4 class="mb-3">Kelas Saat Ini</h4>
  
                      <a href="/dashboard/kelas/tambah" class="btn btn-primary">Tambah Data</a>
                      <div class="table-responsive table--no-card m-b-30 mt-3">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Kelas</th>
                                    <th>Kategori</th>
                                    <th>Menthor</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>100398</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td>$999.00</td>
                                    <td>
                                      <a href="" class="btn btn-warning btn-sm">Edit</a>
                                      <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>100397</td>
                                    <td>Samsung S8 Black</td>
                                    <td>$999.00</td>
                                    <td>
                                      <a href="" class="btn btn-warning btn-sm">Edit</a>
                                      <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>100396</td>
                                    <td>Game Console Controller</td>
                                    <td>$999.00</td>
                                    <td>
                                      <a href="" class="btn btn-warning btn-sm">Edit</a>
                                      <a href="" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>

                  </div>

                </div>
              </div>
            </div>
            <!-- END MAIN CONTENT-->
    
@endsection