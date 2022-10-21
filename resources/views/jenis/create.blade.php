@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambahjenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/jenis/store" method="POST">
                    @csrf
                    <label for="id_jenis">ID JENIS</label><br>
                    <input type="text" name="id_jenis" placeholder="Masukkan ID Jenis" class="form-control"><br>
                    <label for="id_jenis">JENIS NAMA</label><br>
                    <input type="text" name="jenis_nama" placeholder="Masukkan Jenis Nama" class="form-control"><br>
                    <label for="id_jenis">JENIS STATUS</label><br>
                    <input type="text" name="jenis_status" placeholder="Masukkan jenis_status" class="form-control"><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>
                <a href="/jenis"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
