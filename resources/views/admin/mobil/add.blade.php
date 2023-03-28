@extends('admin.layouts.master')
@section('style')
  <style>
    .btn-close {
      color: white;
    }

    textarea {
      resize: none;
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
@endsection
@section('pagetitle')
<h1>Tambah Mobil</h1>
<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.mobil.index') }}">Mobil</a></li>
    <li class="breadcrumb-item active">Tambah Mobil</li>
  </ol>
</nav>
@endsection
@section('content')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Mobil</h5>
      <form action="{{ url('/mobil/add-process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama : </label>
          <div class="col-sm-10">
            <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
          </div>
          @error('nama_mobil')
              <div class="text-danger">
                <p>Nama mobil tidak boleh kosong</p>
              </div>
          @enderror
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Gambar : </label>
          <div class="col-sm-10">
            <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}">
          </div>
          @error('gambar')
              <div class="text-danger">
                <p>Gambar tidak boleh kosong</p>
              </div>
          @enderror
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-2 col-form-label">Lokasi : </label>
          <div class="col-sm-10">
            <textarea name="lokasi" id="lokasi" class="form-control" rows="10" resize="none">{{ old('lokasi') }}</textarea>
          </div>
          @error('lokasi')
              <div class="text-danger">
                <p>Lokasi tidak boleh kosong</p>
              </div>
          @enderror
        </div>
        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Message : </label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="text" id="discussion-keywords" name="badges" class="form-control" data-role="tagsinput">
            </div>
            </div>
          </div>
          @error('message')
              <div class="text-danger">
                <p>Pesan tidak boleh kosong</p>
              </div>
          @enderror
        </div>
        <div class="row mb-3">
          <div class="col-sm-10">
            <a href="{{ route('admin.mobil.index') }}"><button type="button" class="btn btn-secondary">Kembali</button></a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
@section('script')
  <script>
    const input = document.getElementById('discussion-keywords');
    input.addEventListener('keydown', function(event) {
        if (event.keyCode === 13) { 
            event.preventDefault();
            const tag = document.createElement('span');
            tag.textContent = input.value;
            tag.classList.add('tag', 'badge', 'badge-dark');
            const removeIcon = document.createElement('span');
            removeIcon.dataset.role = 'remove';
            tag.appendChild(removeIcon);
            const tagsInput = document.querySelector('.bootstrap-tagsinput');
            tagsInput.insertBefore(tag, input);
            input.value = '';
        }
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  
@endsection
          