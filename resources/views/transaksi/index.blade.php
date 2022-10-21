@extends('layout.layout')
@section('content')


<h3 class="card-title">DataAdmin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/transaksi/create" class="btn btn-primary">TAMBAH </a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID TRANSAKSI</th>
                    <th>ID ADMIN</th>
                    <th>TANGGAL</th>
                    <th>NO NOTA</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                  </tr>
                  @foreach ( $transaksi as $a )
                  <tr>
                    <td>{{ $a->id_transaksi }}</td>
                    <td>{{ $a->id_admin}}</td>
                    <td>{{ $a->transaksi_tanggal }}</td>
                    <td>{{ $a->transaksi_nonota }}</td>
                    <td>{{ $a->transaksi_status }}</td>
                    <td>
                        <a href="/transaksi/{{ $a->id }}/edit" class="btn btn-success">UBAH</a>
                        <a href="/transaksi/{{ $a->id }}/delete" class="btn btn-danger">HAPUS</a>

                    </td>

                </tbody>
                  </tr>
                  @endforeach
                  <tfoot>
                    <tr>
                        <th>ID TRANSAKSI</th>
                        <th>ID ADMIN</th>
                        <th>TANGGAL</th>
                        <th>NO NOTA</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
                  @endsection
