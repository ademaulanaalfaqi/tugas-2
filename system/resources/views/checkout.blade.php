<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arowana - Beard Oil Responsive HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    @include('landing.section.header')
    <!-- HEADER AREA END -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 bg-overlay-theme-10--- bg-image" data-bg="img/bg/4.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-4 justify-content-between">
                        <div class="section-title-area">
                            <h1 class="section-title white-color">Checkout</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-100">
                <div class="card">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">Provinsi</label>
                               <select name="" class="form-control" style="color: black" onchange="gantiProvinsi(this.value)">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($list_provinsi as $provinsi)
                                 <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                @endforeach
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kabupaten/Kota</label>
                               <select name="" class="form-control" id="kabupaten" style="color: black" onchange="gantiKabupaten(this.value)">
                               <option value=""> Pilih Provinsi Terlebih Dahulu</option>                                
                            </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kecamatan</label>
                               <select name="" class="form-control" id="kecamatan" style="color: black" onchange="gantiKecamatan(this.value)">
                                <option value=""> Pilih Kabupaten Terlebih Dahulu</option>
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Desa</label>
                               <select name="" class="form-control" id="desa" style="color: black">
                                <option value=""> Pilih Kecamatan Terlebih Dahulu</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- FOOTER AREA START -->
    @include('landing.section.footer')
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

    
  
</body>


</html>

<script>
    function gantiProvinsi(id) {
        $.get("api/provinsi/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.nama}</option>`;
            }
            $("#kabupaten").html(option)
        });
    }
    function gantiKabupaten(id) {
        $.get("api/kabupaten/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.nama}</option>`;
            }
            $("#kecamatan").html(option)
        });
    }
    function gantiKecamatan(id) {
        $.get("api/kecamatan/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.nama}</option>`;
            }
            $("#desa").html(option)
        });
    }
</script>

