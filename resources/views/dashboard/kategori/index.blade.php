@extends('dashboard.layout.template')

@section('container')
            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="section__content section__content--p30">
                <div class="container-fluid">

                  <div class="row bg-light p-3">
                    <div class="col-md-12">

                      <h4 class="mb-3">Kategori</h4>
  
                      <a href="/dashboard/category/create" class="btn btn-primary">Tambah Data</a>
                      <div class="table-responsive table--no-card m-b-30 mt-3">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($kategoris as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>
                                      <a href="/dashboard/category/{{ $kategori->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                      <form action="/dashboard/category/{{ $kategori->id }}" method="post" style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="confirm('Yakin Menghapus ?')">Delete</button>
                                      </form>
                                    </td>
                                </tr>
                              @endforeach
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