@extends('fe.layouts.layout')

@section('title')
    Edit Jenis Produk |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Stok Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">Edit Data Stok Produk</li>
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
                          <h5 class="card-title">Form Stok Produk</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/produk/add-stok-produk" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-nama="{{$data->nama_produk->nama_produk}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>

                      <!-- Multi Columns Form -->
                      <form action="/produk/update-stok-produk/{{$data->id}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputstok-produk1" class="form-label">Nama Produk</label>
                            <select class="form-select @error('id_nama_produk') is-invalid @enderror" name="id_nama_produk" aria-label="Default select example">
                              <option value="{{$data->nama_produk->id}}" selected>{{$data->nama_produk->nama_produk}}</option>
                              @foreach ($data_nama_produk as $row)
                              <option value="{{$row->id}}">{{$row->nama_produk}}</option>
                              @endforeach
                            </select>
                            @error('id_nama_produk')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-8">
                            <label for="inputName5" class="form-label">Jumlah Stok Produk </label>
                            <input type="number" value="{{$data->jumlah_stok}}" name="jumlah_stok" placeholder="Masukan Jumlah Stok Produk " class="form-control @error('jumlah_stok') is-invalid @enderror" id="inputName5">
                            @error('jumlah_stok')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="inputDate1" class="form-label">Tanggal</label>
                            <input type="date" value="{{$data->tanggal}}" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="inputDate1">
                            @error('tanggal')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
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

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin?',
          text: "Kamu akan menghapus data Stok Produk dengan nama " + nama + " ",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/produk/delete-stok-produk/" + id + ""
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