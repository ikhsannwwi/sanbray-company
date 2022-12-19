@extends('fe.layouts.layout')

@section('title')
    Data Jenis Produks |
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Jenis Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">Jenis Produk</li>
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
                          <h5 class="card-title">Table with hoverable rows</h5>
                        </div>
                        <div class="col-lg-1 ">
                          <a href="/produk/add-jenis-produk" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                        </div>
                      </div>
        
                      <!-- Table with hoverable rows -->
                      <div class="overflow__x">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Jenis Produk</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($jenis_produk as $row)  
                              <tr>
                                <th scope="row"><a href="/produk/edit-jenis-produk/{{$row->id}}">{{$row->id}}</a></th>
                                <td><a href="/data/jenis-produk/{{$row->slug}}">{{$row->jenis_produk}}</a></td>
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
    <section class="section" id="section">
      <div class="row">
      @foreach ($jenis_produk as $row)
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$row->jenis_produk}}</h5>

              <!-- List group With badges -->
              <ul class="list-group">
                
                @forelse ($row->nama_produk as $row)
                
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{$row->nama_produk}}
                  {{-- <span class="badge bg-primary rounded-pill">14</span> --}}
                </li>
                @empty
                    null
                
                
                @endforelse
                
              </ul><!-- End List With badges -->

            </div>
          </div>
        </div>
        @endforeach
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