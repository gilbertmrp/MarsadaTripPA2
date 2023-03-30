@extends('admin.layouts.master')
@section('pagetitle')
<h1>Mobil</h1>
<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
    <li class="breadcrumb-item active">Mobil</li>
  </ol>
</nav>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Mobil</h5>
          <a href="{{ route('admin.mobil.add') }}"><button type="button" class="btn btn-success" style="margin-bottom: 10px;">Tambah</button></a>
          <table id="data" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mobil</th>
                    <th>Gambar</th>
                    <th>Lokasi</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @php $counter = 1; @endphp
              @foreach ($datas as $data)
                <tr>
                  <td>{{ $counter }}</td>
                  <td>{{ $data->nama_mobil }}</td>
                  <td><img src="images/{{ $data->gambar }}" alt="images/{{ $data->gambar }} " style="width: 100px;height:100px;"></td>
                  <td>{{ $data->lokasi }}</td>
                  <td>
                    @foreach (explode(',', $data->badges) as $badge)
                      <div class="row">
                        <div class="col-6 col-md-4">
                          <span class="badge bg-primary"><i class="bi bi-star me-1"></i>{{ $badge }}</span>
                        </div>
                      </div>
                    @endforeach
                  </td>
                  <td>
                    <a href="#"><i class="bi bi-trash delete" data-id="{{ $data->id }}" data-nama="{{ $data->nama_mobil }}"></i></a>
                  </td>
                </tr>
                @php $counter++; @endphp
              @endforeach
            </tbody>
        </table>

        </div>
      </div>

    </div>
</div>
@endsection
@section('script')
    <script>
          $(document).ready(function () {
        $('#data').DataTable({
            scrollX: true,
        });
    });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $('.delete').click(function() {
        var dataId = $(this).attr('data-id');
        var dataNamaMobil = $(this).attr('data-nama');
        swal({
        title: "Sure?",
        text: "Delete a car with name " + dataNamaMobil,
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/mobil/delete/"+dataId;
            swal("Data deleted successfully", {
              icon: "success",
            });
          } else {
            swal("Data is not deleted!");
          }
        });
      });
    </script>
@endsection
