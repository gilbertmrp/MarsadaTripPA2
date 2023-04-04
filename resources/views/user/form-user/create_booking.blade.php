<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/user/css/bootstrap.min.css')}}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/user/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="booking-cta">
                            <h1>Book your Car today</h1>

                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <div class="booking-form">
                            <form id="myform" action="{{ url('/booking/add-process')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Nama</span>
                                            <input class="form-control" type="text" placeholder="name" id="nama_pemesan"
                                                name="nama_pemesan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Nama Mobil</span>
                                            <input class="form-control" type="text" placeholder="Avanza,Fortuner"
                                                id="nama_mobil" name="nama_mobil">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">No Telepon</span>
                                            <input class="form-control" type="tel" placeholder="no telepon"
                                                id="no_telepon" name="no_telepon">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Tanggal berangkat</span>
                                            <input class="form-control" type="date" required id="date_booking"
                                                name="date_booking">
                                            @error('date_booking')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Tanggal Kembali</span>
                                            <input class="form-control" type="date" required id="date_checkout"
                                                name="date_checkout">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-checkbox">
                                        <label for="ask">Menggunakan Sopir Dari Marsada Trip</label> <br>

                                        <label for="tidak">
                                            <input type="radio" id="tidak" name="driver" id="driver" value="tidak">
                                            <span></span>Tidak
                                        </label>
                                        <label for="ya">
                                            <input type="radio" id="ya" name="driver" id="driver" value="ya">
                                            <span></span>Ya
                                        </label>
                                    </div>
                                </div>

                                <div class="form-btn">
                                    <button class="submit-btn" type="submit">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
