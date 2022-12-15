@extends('fe.layouts.layout')

@section('title')
    Edit Nama Produk |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/produk">Data Produk</a></li>
            <li class="breadcrumb-item active">Edit Data Produk</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"><div class="row">
                      <div class="col-lg-10">
                        <h5 class="card-title">Form Nama Produk</h5>
                      </div>
                      <div class="col-lg-2 ">
                        <a href="/produk/add-nama-produk" type="button" class="btn  mt-lg-3">
                          <i class="bx bxs-duplicate bx-sm"></i>
                        </a>
                        <a href="#" data-id="{{$data->id}}" data-nama="{{$data->nama_produk}}"  type="button" class="btn  mt-lg-3 delete">
                          <i class="bx bxs-trash-alt bx-sm"></i>
                        </a>
                      </div>
                      
                    </div>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/update-nama-produk/{{$data->id}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-8">
                          <label for="inputName5" class="form-label">Nama Produk</label>
                          <input type="text" name="nama_produk" value="{{$data->nama_produk}}" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-4">
                            <label for="inputHarga-jual1" class="form-label">Jenis Produk</label>
                            <select class="form-select" name="id_jenis_produk" aria-label="Default select example">
                              <option selected value="{{$data->id_jenis_produk}}">{{$data->jenis_produk->jenis_produk}}</option>
                              @foreach ($data_jenis_produk as $row)
                              <option value="{{$row->id}}">{{$row->jenis_produk}}</option>  
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

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin?',
          text: "Kamu akan menghapus data Jenis Produk dengan nama " + nama + " ",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/produk/delete-nama-produk/" + id + ""
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