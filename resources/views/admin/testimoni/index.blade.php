@extends('admin.layouts.master')
@section('script')
    <script>
          $(document).ready(function () {
        $('#data').DataTable({
            scrollX: true,
        });
    });
    </script>
@endsection
@section('pagetitle')
<h1>Testimonial</h1>
<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active">Testimonial</li>
  </ol>
</nav>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Testimonial</h5>
          <a href="{{ route('admin.testimonial.add') }}"><button type="button" class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a>
          <table id="data" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Pesan</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                </tr>
            </tbody>
        </table>

        </div>
      </div>

    </div>
</div>
@endsection
