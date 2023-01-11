@extends('dashboard.layout.template')

@section('container')
            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="section__content section__content--p30">
                <div class="container-fluid">

                  <div class="row bg-light p-3">
                    <div class="col-md-12">

                      <h4 class="mb-3">Kelas Saat Ini</h4>
  
                      <a href="/dashboard/module/create" class="btn btn-primary">Tambah Data</a>

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
                              @foreach($kelass as $kelas)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kelas->judul_kelas }}</td>
                                    <td>{{ $kelas->nama_kategori }}</td>
                                    <td>{{ $kelas->nama_lengkap }}</td>
                                    <td>

                                      @if(auth()->user()->id == $kelas->menthor_id || auth()->user()->status == 'administrator')
                                      <a href="/dashboard/module/{{ $kelas->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                      @endif

                                      @if(auth()->user()->status == 'administrator')
                                      <form action="/dashboard/module/{{ $kelas->id }}" method="post" style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="confirm('Yakin Menghapus ?')">Delete</button>
                                      </form>
                                      @endif

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