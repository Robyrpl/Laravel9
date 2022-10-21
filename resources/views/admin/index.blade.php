@extends('layout.layout')
@section('content')


<h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/admin/create" class="btn btn-primary">TAMBAH </a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID ADMIN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ADMIN LEVEL</th>
                    <th>ADMIN NAMA</th>
                    <th>ADMIN STATUS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                  </tr>
                  @foreach ( $admin as $a )
                  <tr>
                    <td>{{ $a->id_admin }}</td>
                    <td>{{ $a->username }}</td>
                    <td>{{ $a->password }}</td>
                    <td>{{ $a->admin_level }}</td>
                    <td>{{ $a->admin_nama }}</td>
                    <td>{{ $a->admin_status }}</td>
                    <td>
                        <a href="/admin/{{ $a->id }}/edit" class="btn btn-success">UBAH</a>
                        <a href="/admin/{{ $a->id }}/delete" class="btn btn-danger">HAPUS</a>

                    </td>

                </tbody>
                  </tr>
                  @endforeach
                  <tfoot>
                    <tr>
                    <th>ID ADMIN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ADMIN LEVEL</th>
                    <th>ADMIN NAMA</th>
                    <th>ADMIN STATUS</th>
                    <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
                  @endsection

