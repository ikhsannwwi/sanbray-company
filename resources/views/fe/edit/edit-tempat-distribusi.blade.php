@extends('fe.layouts.layout')

@section('title')
    Edit Tempat Distribusi |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Tempat Pendistribusian</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/tempat-distribusi">Data Jenis Produk</a></li>
            <li class="breadcrumb-item active">Edit Data Tempat Pendistribusian</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body"><div class="row">
                      <div class="col-lg-10">
                        <h5 class="card-title">Form Tempat Pendistribusian</h5>
                      </div>
                      <div class="col-lg-2 ">
                        <a href="/produk/add-tempat-distribusi" type="button" class="btn  mt-lg-3">
                          <i class="bx bxs-duplicate bx-sm"></i>
                        </a>
                        <a href="#" data-id="{{$data->id}}" data-nama="{{$data->tempat_distribusi}}"  type="button" class="btn  mt-lg-3 delete">
                          <i class="bx bxs-trash-alt bx-sm"></i>
                        </a>
                      </div>
                    </div>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/update-tempat-distribusi/{{$data->id}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Tempat Pendistribusian</label>
                          <input type="text" value="{{$data->tempat_distribusi}}" name="tempat_distribusi" class="form-control" id="inputName5">
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
            window.location = "/produk/delete-tempat-distribusi/" + id + ""
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