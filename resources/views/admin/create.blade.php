@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">TambahAdmin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/admin/store" method="POST">
                    @csrf

                    <label for="id_admin">USERNAME</label><br>
                    <input type="text" name="username" placeholder="Masukkan Username" class="form-control"><br>
                    <label for="id_admin">PASSWORD</label><br>
                    <input type="text" name="password" placeholder="Masukkan Password" class="form-control"><br>
                    <label for="id_admin">LEVEL</label><br>
                    <input type="text" name="admin_level" placeholder="Masukkan Level" class="form-control"><br>
                    <label for="id_admin">NAMA</label><br>
                    <input type="text" name="admin_nama" placeholder="Masukkan Nama" class="form-control"><br>
                    <label for="id_admin">STATUS</label><br>
                    <input type="text" name="admin_status" placeholder="Masukkan Status Admin" class="form-control"><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>
                <a href="/admin"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
