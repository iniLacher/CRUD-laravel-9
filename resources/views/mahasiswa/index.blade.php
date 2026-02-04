@extends('layout.template')
@section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ 'mahasiswa/create' }}' class="btn btn-primary">+ Tambah Data</a>
                  <a href='{{ url('mahasiswa') }}' class="btn btn-outline-secondary"> Reset </a>
                </div>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)   
                        <tr>
                            <td>{{ $data->firstItem() + $loop->index }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>
                                <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ 'mahasiswa/'.$item->nim }}" 
                                    method="post" class="d-inline confirm-delete">
                                     @csrf @method('DELETE') 
                                     <input type="submit" class="btn btn-danger btn-sm" value="Delete" >
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($data->count() == null)
                    <div class="alert alert-danger">
                       <i>Data Tidak Ditemukan</i> 
                    </div>
                @endif
                {{-- @dd($data) --}}
                @if ($data->count() > 0)
                    <i class="text-muted text-sm keterangan">{{$data->count()}} Data Ditemukan</i>
                {{ $data->withQueryString()->links() }}
                @endif
                
            </div>
          <!-- AKHIR DATA -->

@endsection
