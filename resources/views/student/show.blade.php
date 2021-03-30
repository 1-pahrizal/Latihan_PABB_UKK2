@extends('layouts.master', ['title' => 'All Students'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            @include('layouts.alert')
          <div class="col-sm-6">
            <a href="{{ route('student.add')}}" class="btn btn-primary btn-sm">Add Student</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Class Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>tanggal_lahir</th>
                                        <th>jenis_kelamin</th>
                                        <th>kelas</th>
                                        <th>nomor_Telepon</th>
                                        <th>alamat</th>
                                        <th>asal_sekolah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; ?>
                                @forelse ($students as $student) 
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $student->nis }}</td>
                                        <td>{{ $student->nama }}</td>
                                        <td>{{ $student->tanggal_lahir }}</td>
                                        <td>{{ $student->jenis_kelamin }}</td>
                                        <td>{{ $student->class_id }}</td>
                                        <td>{{ $student->nomor_Telepon }}</td>
                                        <td>{{ $student->alamat }}</td>
                                        <td>{{ $student->asal_sekolah }}</td>
                                        <td>
                                            <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                                </button> 
                                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm ">Edit</a>          
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <div class="col-md-12">
                                    <div class="alert alert-info text-center">
                                        Not Found
                                    </div>
                                </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        <!-- /.row -->
        </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection