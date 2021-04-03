@extends('layouts.master', ['title' => 'Add Data'])

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Class</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('student.store') }}" method="post" role="form" id="quickForm">
                 @csrf
                 
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" class="form-control mb-2 @error('nis') is-invalid @enderror" id="nis" placeholder="Enter NIS">
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Name</label>
                                <input type="text" name="nama" class="form-control mb-2 @error('nama') is-invalid @enderror" id="nama" placeholder="Enter nma">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                               
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control mb-2 @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">jenis_kelamin</label> <br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" class="mb-2 @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan" class="mb-2 @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"> Perempuan
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                               
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomor_Telepon">Nomor Telepon</label>
                                <input type="text" name="nomor_Telepon" class="form-control mb-2 @error('nomor_Telepon') is-invalid @enderror" id="nomor_Telepon" placeholder="Enter nomor_Telepon">
                                @error('nomor_Telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="class_id">Choose Class</label>
                                <select class="form-control" name="class_id">
                                    <option disabled selected>Pilih Rombel</option>
                                    <?php foreach ($class as $item) { ?>
                                        <option value="{{ $item->name }}" class="form-control mb-2 @error('class_id') is-invalid @enderror" >{{ $item->name }}</option>
                                    <?php } ?>
                                </select>
                                @error('class_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">alamat</label>
                                <textarea type="text" name="alamat" class="form-control mb-2 @error('alamat') is-invalid @enderror" id="alamat" placeholder="Enter alamat"></textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                              
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="asal_sekolah">asal_sekolah</label>
                                <textarea type="text" name="asal_sekolah" class="form-control mb-2 @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" placeholder="Enter alamat"></textarea>
                                @error('asal_sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>                              
                    </div>
                    <button type="submit" class="btn btn-primary btn">Submit</button>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection