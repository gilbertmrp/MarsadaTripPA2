@extends('admin.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Mobil</h5>

      <form action="{{ url('/mobil/add-process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama : </label>
          <div class="col-sm-10">
            <input type="text" name="nama_mobil" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Gambar : </label>
          <div class="col-sm-10">
            <input type="file" name="gambar" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-2 col-form-label">Lokasi : </label>
          <div class="col-sm-10">
            <textarea name="lokasi" id="lokasi" cols="30" rows="10" resize="none"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Message : </label>
          <div class="col-sm-10">
            <input type="text" name="message" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-10">
            <a href="{{ route('admin.mobil.index') }}"><button type="button" class="btn btn-secondary">Kembali</button></a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>
@endsection