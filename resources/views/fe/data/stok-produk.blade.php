@extends('fe.layouts.layout')

@section('title')
    Data Stok Produk |
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Stok Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">Stok Produk</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-11 ">
                          <h5 class="card-title">Data Gudang</h5>
                        </div>
                        
                      </div>
        
                      <!-- Table with hoverable rows -->
                      <div class="overflow__x">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th> 
                                <th scope="col">Jenis Produk</th> 
                                <th scope="col">Stok Produk</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no = 1;
                              @endphp
                              @foreach ($jumlah_stok as $row)
                              <tr>
                                <th scope="row"><a href="/produk/edit-stok-produk/{{$row->id}}">{{$no++}}</a></th>
                                <td>{{$row->nama_produk}}</td>
                                <td>{{$row->jenis_produk->jenis_produk}}</td>
                                <td>{{$row->stok_produk->sum('jumlah_stok')}}</td>
                              </tr>
                              @endforeach
                              
                              
                            </tbody>
                          </table>
                      </div>
                      <!-- End Table with hoverable rows -->
        
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-11 ">
                          <h5 class="card-title">Data Aktivitas Gudang</h5>
                        </div>
                        <div class="col-lg-1 ">
                          <a href="/produk/add-stok-produk" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                        </div>
                      </div>
        
                      <!-- Table with hoverable rows -->
                      <div class="overflow__x">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th> 
                                <th scope="col">Stok Produk</th>
                                <th scope="col">Tanggal</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no = $stok_produk->count();
                              @endphp
                              
                              @foreach ($stok_produk as $row)
                              <tr>
                                <th scope="row"><a href="/produk/edit-stok-produk/{{$row->id}}">{{$no--}}</a></th>
                                <td>{{$row->nama_produk->nama_produk}}</td>                              
                                <td>{{$row->jumlah_stok}}</td>
                                <td>{{\Carbon\Carbon::parse($row->tanggal)->format('d F Y')}}</td>
                              </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                      </div>
                      <!-- End Table with hoverable rows -->
        
                    </div>
                  </div>
            </div>
        </div>
    </section>
  </main>

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