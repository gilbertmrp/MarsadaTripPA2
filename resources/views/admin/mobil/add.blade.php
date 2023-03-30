@extends('admin.layouts.master')
@section('style')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
  <style>
    .bootstrap-tagsinput{
        width: 100%;
        font-size: 1rem;
      }
    .bootstrap-tagsinput .label-info{
      display: inline-block;
      background-color: #56575a;
      padding: 0 0.4em 0.15em;
      border-radius: 0.25rem;
      margin-bottom: 0.4em;
      color: #fff;
    }
  </style>
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
            <textarea name="lokasi" id="lokasi" class="form-control" rows="10" style="resize:none;">{{ old('lokasi') }}</textarea>
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
              <input id="tags" type="text" class="form-control" name="badges" data-role="tagsinput">
            </div>
          </div>
          </div>
          @error('badges')
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
    const input = document.getElementById('tags');

    input.addEventListener('keydown', function(event) {
        if (event.keyCode === 13) { 
            event.preventDefault();
            const inputText = input.value.trim(); 
            const words = inputText.split(' ');

            if (words.length > 1) {
              const badge = document.createElement('span');
              badge.classList.add('badge', 'bg-dark', 'me-1');
              badge.innerText = words.join('-'); 
              
              const closeButton = document.createElement('button');
              closeButton.classList.add('btn-close');
              closeButton.addEventListener('click', function() {
                badge.remove();
              });
              badge.appendChild(closeButton);

              input.appendChild(badge);
              badgeController.appendChild(badge);
            }else if (words.length === 1 && words[0]) { 
              const badge = document.createElement('span');
              badge.classList.add('badge', 'bg-dark', 'me-1');
              badge.innerText = words[0];

              const closeButton = document.createElement('button');
              closeButton.classList.add('btn-close', 'btn-close-white');
              closeButton.addEventListener('click', function() {
                badge.remove();
              });
              badge.appendChild(closeButton);

              input.appendChild(badge);
              badgeController.appendChild(badge);
            }
            inputText.value = ''; 
        }
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  
@endsection
          