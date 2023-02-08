@extends('fe.layouts.layout')

@section('title')
    Data Pemasukan & Pengeluaran |
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pemasukan & Pengeluaran</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">Pemasukan & Pengeluaran</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 ">
                          <h5 class="card-title">Table with hoverable rows</h5>
                        </div>
                        
                      </div>
        
                      <div class="overflow__x">
                        <table class="table table-hover ">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">
                                <a href="/produk/add-pemasukan-pengeluaran" type="button" class="btn  mt-lg-3">
                                  <i class="bx bxs-duplicate bx-sm"></i>
                                </a>
                              </th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Pemasukan</th>
                              <th scope="col">Pengeluaran</th>
                              <th scope="col">Produk</th>
                              <th scope="col">Deskripsi</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @php
                              $no = $pemasukan_pengeluaran->count();
                            @endphp
                            @foreach ($pemasukan_pengeluaran as $row)
                            <tr>
                              <th scope="row" class="text-center"><a href="/produk/edit-pemasukan-pengeluaran/{{$row->id}}">{{$no--}}</th>
                                <td class="text-center">{{\Carbon\Carbon::parse($row->tanggal)->format('d F Y')}}</td>
                                <td class="text-success">Rp.{{$row->pemasukan}}</td>
                                <td class="text-danger">Rp.{{$row->pengeluaran}}</td>
                                <td>{{$row->nama_produk->nama_produk}}</td>
                              <td>{{$row->deskripsi}}</td>
                              <td></td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                          @php
                              $total = $pemasukan - $pengeluaran
                          @endphp
                          <tfoot>
                            <th scope="row"  class="text-center">{{date('F Y')}}</th>
                            <th scope="row" class="text-center">Jumlah</th>
                            <td class="text-success">Rp.{{ $pemasukan}}</td>
                            <td class="text-danger">Rp.{{ $pengeluaran}}</td>
                            <th scope="row" class="text-center">Sisa Saldo</th>
                            @if ($total <= 0)
                            <td class="text-danger">Rp.{{ $total}}</td>
                            @else
                            <td class="text-success">Rp.{{ $total}}</td>
                            @endif
                          </tfoot>
                        </table>
                        <!-- End Table with hoverable rows -->
                      </div>
                      
        
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