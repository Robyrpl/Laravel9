@extends('layout.layout')
@section('content')


<h3 class="card-title">Databarang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/barang/create" class="btn btn-primary">TAMBAH </a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID BARANG</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>JENIS</th>
                    <th>SUPPLIER</th>
                    <th>JUAL</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                  </tr>
                  @foreach ( $barang as $a )
                  <tr>
                    <td>{{ $a->id_barang }}</td>
                    <td>{{ $a->barang_kode}}</td>
                    <td>{{ $a->barang_nama }}</td>
                    <td>{{ $a->id_jenis }}</td>
                    <td>{{ $a->id_supplayer }}</td>
                    <td>{{ $a->harga_jual }}</td>
                    <td>{{ $a->harga_status }}</td>
                    <td>
                        <a href="/barang/{{ $a->id }}/edit" class="btn btn-success">UBAH</a>
                        <a href="/barang/{{ $a->id }}/delete" class="btn btn-danger">HAPUS</a>

                    </td>

                </tbody>
                  </tr>
                  @endforeach
                  <tfoot>
                    <tr>
                        <th>ID BARANG</th>
                        <th>KODE BARANG</th>
                        <th>NAMA</th>
                        <th>ID JENIS</th>
                        <th>ID SUPPLIER</th>
                        <th>JUAL</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
                  @endsection
