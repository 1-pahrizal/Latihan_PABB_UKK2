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
      </div>
    </section>
  <!-- /.container-fluid -->
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
              <form action="{{ route('student.update', $student->id) }}" method="post" role="form" id="quickForm">
                @csrf
                 {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" value="{{ old('nis') ?? $student->nis }}" class="form-control mb-2 @error('nis') is-invalid @enderror" id="nis" placeholder="Enter NIS">
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
                                <input type="text" name="nama" value="{{ old('nama') ?? $student->nama }}" class="form-control mb-2 @error('nama') is-invalid @enderror" id="nama" placeholder="Enter Name">
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
                                <label for="tanggal_lahir">Birth Date</label>
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $student->tanggal_lahir }}" class="form-control mb-2 @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir">
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
                                <label for="nomor_Telepon">nomor_Telepon Number</label>
                                <input type="text" name="nomor_Telepon" value="{{ old('nomor_Telepon') ?? $student->nomor_Telepon }}" class="form-control mb-2 @error('nomor_Telepon') is-invalid @enderror" id="nomor_Telepon" placeholder="Enter nomor_Telepon">
                                @error('nomor_Telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="class">Choose Class</label>
                                <select class="form-control" name="class_id">
                                    <option value="{{ $student->class_id ??" disabled selected "}}">{{ $student->class_id ?? "Pilih Rombel"}}</option>
                                    @foreach ($class as $item) 
                                        <option value="{{ $item->name }}" class="form-control mb-2 @error('class_id') is-invalid @enderror" >{{ $item->name }}</option>
                                    @endforeach
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
                                <textarea type="text" name="alamat" class="form-control mb-2 @error('alamat') is-invalid @enderror" id="alamat" placeholder="Enter alamat">{{ old('alamat') ?? $student->alamat }}
                                </textarea>
                                @error('alamat')
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
                                <label for="asal_sekolah">asal_sekolah</label>
                                <textarea type="text" name="asal_sekolah"  class="form-control mb-2 @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" placeholder="Enter asal_sekolah">{{ old('asal_sekolah') ?? $student->asal_sekolah }}
                                </textarea>
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