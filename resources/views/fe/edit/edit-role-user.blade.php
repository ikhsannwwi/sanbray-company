@extends('fe.layouts.layout')

@section('title')
    Edit Role User |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Role User</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">User</a>
            </li>
            <li class="breadcrumb-item active">Edit Data Role User</li>
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
                          <h5 class="card-title">Form Role User</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/produk/add-harga-jual" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-nama="{{$data->nama_role}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>

                      <!-- Multi Columns Form -->
                      <form action="/user/update-role-user/{{$data->id}}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Nama Role</label>
                          <input type="text" value="{{$data->nama_role}}" name="nama_role" placeholder="Masukan Nama Role" class="form-control" id="inputName5">
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
          text: "Kamu akan menghapus data Role User dengan nama " + nama + " ",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/user/delete-role-user/" + id + ""
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