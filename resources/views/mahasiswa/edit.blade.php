@extends('layout.template')

@section('konten')
        <!-- START FORM -->
       <form action='{{url('mahasiswa/'.$data->nim)}}' method='post' class=" mt-5 large-shadow  ">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-light rounded shadow-sm border " >
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    {{ $data->nim }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' id="jurusan" value="{{ $data->jurusan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10 d-flex justify-content-between"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                <a href='{{ '/mahasiswa' }}' class="btn btn-outline-primary">Back To Home</a>
                </div>
            </div>
            </div>
        </form>
        <!-- AKHIR FORM -->
@endsection

