@extends('fe.layouts.layout')

@section('title')
    Produk |
@endsection

@section('content')
<main class="main" id="main">

    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">Produks</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


      <section class="section">
          <div class="row">
            <div class="col-lg-3"> 
                <!-- Card with an image on top -->
                <div class="card">
                  <!-- Slides with indicators -->
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset("sanbray-co/img/slides-1.jpg")}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset("sanbray-co/img/slides-2.jpg")}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset("sanbray-co/img/slides-3.jpg")}}" class="d-block w-100" alt="...">
                        </div>
                      </div>
      
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
      
                  </div><!-- End Slides with indicators -->
                  <div class="card-body">
                    <h5 class="card-title">Card with an image on top</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div><!-- End Card with an image on top -->
            </div> <!-- end col-lg-3 -->
      
            <div class="col-lg-9">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Default Tabs Justified</h5>
      
                    <!-- Default Tabs -->
                    <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Pendistribusian</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Pemasukan | Pengeluaran</button>
                      </li>
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Nama Produk</button>
                      </li>
                    </ul>
                    <div class="tab-content pt-2" id="myTabjustifiedContent">
                      <div class="tab-pane fade show active overflow__x" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-hover">
                          
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Produk</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Jumlah Barang</th>
                              <th scope="col">Tempat</th>
                              <th scope="col">Harga Jual</th>
                              <th scope="col">
                                <a href="/produk/add-pendistribusian" type="button" class="btn ">
                                  <i class="bx bxs-duplicate bx-sm"></i>
                                </a>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                              $no = 1;
                            @endphp
                            @foreach ($pendistribusian as $row)
                            <tr>
                              <th scope="row"><a href="/produk/edit-pendistribusian/{{$row->id}}">{{$no++}}</th>
                              <td>{{$row->nama_produk->nama_produk}}</td>
                              <td>{{$row->tanggal}}</td>
                              <td>{{$row->jumlah_barang}}</td>
                              <td>{{$row->tempat_distribusi->tempat_distribusi}}</td>
                              <td>Rp.{{$row->harga_jual->harga_jual}}</td>
                              <td></td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                      </div>

                      <div class="tab-pane fade overflow__x" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-hover ">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Pemasukan</th>
                              <th scope="col">Pengeluaran</th>
                              <th scope="col">Barang</th>
                              <th scope="col">Deskripsi</th>
                              <th scope="col">
                                <a href="/produk/add-harga-jual" type="button" class="btn ">
                                  <i class="bx bxs-duplicate bx-sm"></i>
                                </a>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Brandon Jacob</td>
                              <td>Designer</td>
                              <td>Designer</td>
                              <td>28</td>
                              <td>2016-05-25</td>
                              <td></td>
                            </tr>
                            
                          </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                      </div>

                      <div class="tab-pane fade overflow__x" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Jenis Barang</th>
                              <th scope="col">
                                <a href="/produk/add-nama-produk" type="button" class="btn ">
                                  <i class="bx bxs-duplicate bx-sm"></i>
                                </a>
                              </th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($nama_produk as $row)
                            <tr>
                              <th scope="row"><a href="/produk/edit-nama-produk/{{$row->id}}">{{$no++}}</th>
                              <td>{{$row->nama_produk}}</td>
                              <td>{{$row->jenis_produk->jenis_produk}}</td>
                              <td></td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->
                        {{-- <div class="row">
                          <div class="col">
                            {{ $nama_produk->links('fe.layouts.paginator') }}
                          </div>
                        </div> --}}
                      </div>
                    </div><!-- End Default Tabs -->
      
                  </div>
                </div>

            </div> <!-- end col-lg-9 -->


          </div><!-- end row -->
      </section><!-- end section -->



  </main> <!-- end main -->

  @push('script')
  <script>
    @if (session()->has('success'))
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "rtl": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
      toastr["success"]("{{ Session::get('success') }}")
    @endif
    @if (session()->has('error'))
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "rtl": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
      toastr["error"]("{{ Session::get('error') }}")
    @endif

    // toastr["success"]("kjkjk", "jj")
    
  </script>
  @endpush
@endsection