@extends('dashboard.layout.template')

@section('container')
            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="section__content section__content--p30">
                <div class="container-fluid">

                  <div class="row bg-light p-3">
                    <div class="col-md-12">

                      <h4 class="mb-3">Materi Saat Ini</h4>
  
                      <a href="/dashboard/content/create" class="btn btn-primary">Tambah Data</a>

                      <div class="table-responsive table--no-card m-b-30 mt-3">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bab</th>
                                    <th>Sub Bab</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($contents as $content)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $content->bab }}</td>
                                    <td>{{ $content->sub_bab }}</td>
                                    <td>{{ $content->kelas_id }}</td>
                                    <td>

                                      <a href="/dashboard/content/{{ $content->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                      <form action="/dashboard/content/{{ $content->id }}" method="post" style="display: inline">
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