@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/transaksi/store" method="POST">
                    @csrf
                    <label for="id_transaksi">ID TRANSAKSI</label><br>
                    <input type="text" name="id_transaksi" placeholder="Masukkan ID Transaksi" class="form-control"><br>
                    <label for="id_transaksi">ID ADMIN</label><br>
                    <input type="text" name="id_admin" placeholder="Masukkan ID Admin" class="form-control"><br>
                    <label for="id_transaksi">TANGGAL</label><br>
                    <input type="date" name="transaksi_tanggal" placeholder="Masukkan Transaksi_Tanggal" class="form-control"><br>
                    <label for="id_transaksi">NO NOTA</label><br>
                    <input type="text" name="no_nota" placeholder="Masukkan NO Nota" class="form-control"><br>
                    <label for="id_transaksi">STATUS</label><br>
                    <input type="text" name="status" placeholder="Masukkan status" class="form-control"><br>
                    <input type="submit" value="TAMBAH" class="btn btn-success">

                </form>
                <a href="/transaksi"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
