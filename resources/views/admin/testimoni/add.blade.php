@extends('admin.layouts.master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Testimonial</h5>

      <form>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama : </label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Kerjaan : </label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-2 col-form-label">Pesan : </label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Gambar : </label>
          <div class="col-sm-10">
            <input type="file" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>
@endsection