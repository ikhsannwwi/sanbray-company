@extends('fe.layouts.layout')

@section('title')
    Data Tempat Distribusi |
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tempat Distribusi</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">Tempat DIstribusi</li>
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
                          <h5 class="card-title">Data Tempat Distribusi</h5>
                        </div>
                        <div class="col-lg-1 ">
                          <a href="/produk/add-tempat-distribusi" type="button" class="btn  mt-lg-3">
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
                                <th scope="col">Tempat Distribusi</th>                               
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($tempat_distribusi as $row)
                              <tr>
                                <th scope="row"><a href="/produk/edit-tempat-distribusi/{{$row->id}}">{{$row->id}}</a></th>
                                <td>{{$row->tempat_distribusi}}</td>                       
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