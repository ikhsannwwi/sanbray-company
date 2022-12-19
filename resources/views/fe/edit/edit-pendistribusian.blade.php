@extends('fe.layouts.layout')

@section('title')
    Edit Pendistribusian |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Pendistribusian</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/produk">Data Produk</a></li>
            <li class="breadcrumb-item active">Edit Data Pendistribusian</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-10">
                          <h5 class="card-title">Form Pendistribusian</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/produk/add-pendistribusian" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-nama="{{$data->nama_produk->nama_produk}}" data-jumlah="{{$data->jumlah_barang}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      
                    </div>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/update-pendistribusian/{{$data->id}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12 ">
                          <label for="inputHarga-jual1" class="form-label">Nama Produk</label>
                          <select class="form-select" name="id_barang" aria-label="Default select example">
                            <option selected value="{{$data->id_barang}}">{{$data->nama_produk->nama_produk}}</option>
                            @foreach ($data_nama_produk as $row)
                            <option value="{{$row->id}}">{{$row->nama_produk}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-8">
                          <label for="inputDate1" class="form-label">Tanggal</label>
                          <input type="date" value="{{$data->tanggal}}" name="tanggal" class="form-control" id="inputDate1">
                        </div>
                        <div class="col-md-4">
                            <label for="inputHarga-jual1" class="form-label">Tempat Distribusi</label>
                            <select class="form-select" name="id_tempat_distribusi" aria-label="Default select example">
                              <option selected value="{{$data->id_tempat_distribusi}}">{{$data->tempat_distribusi->tempat_distribusi}}</option>
                              @foreach ($data_tempat_distribusi as $row)
                              <option value="{{$row->id}}">{{$row->tempat_distribusi}}</option>
                              @endforeach
                            </select>
                          </div>
                        <div class="col-md-6">
                          <label for="inputNumber1" class="form-label">Jumlah Barang</label>
                          <input type="number" value="{{$data->jumlah_barang}}" name="jumlah_barang" class="form-control" id="inputNumber1">
                        </div>
                        <div class="col-md-6">
                          <label for="inputHarga-jual1" class="form-label">Harga Jual</label>
                          <select class="form-select" name="id_harga_jual" aria-label="Default select example">
                            <option selected value="{{$data->id_harga_jual}}">Rp.{{$data->harga_jual->harga_jual}} ({{ $data->harga_jual->rp }})</option>
                            @foreach ($data_harga_jual as $row)
                            <option value="{{$row->id}}">Rp.{{$row->harga_jual}} ( {{$row->rp}} )</option>
                            @endforeach
                          </select>
                        </div>
                        
                        
                        
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                      </form><!-- End Multi Columns Form -->
        
                    </div>
                  </div>
            </div>
        </div>
    </section>
  </main> <!-- end main-->

  @push('script')

  <script>
    $('.delete').click(function () {
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        var jumlah_produk = $(this).attr('data-jumlah');

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin?',
          text: "Kamu akan menghapus data Jenis Produk dengan nama " + nama + " dengan jumlah produk : " +  jumlah_produk,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/produk/delete-pendistribusian/" + id + ""
            swalWithBootstrapButtons.fire(
              'Deleted!',
              'Data '+ nama +' has been deleted.',
              'success'
            )
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Data '+ nama +' is safe :)',
              'error'
            )
          }
        })

        
    });
  </script>
  @endpush

@endsection