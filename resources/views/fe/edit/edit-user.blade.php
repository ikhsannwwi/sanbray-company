@extends('fe.layouts.layout')

@section('title')
    Edit User |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Harga Jual</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/harga-jual">Data Jenis Produk</a></li>
            <li class="breadcrumb-item active">Edit Data Harga Jual</li>
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
                          <h5 class="card-title">Form Harga Jual</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/produk/add-harga-jual" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-nama="{{$data->harga_jual}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>

                      <!-- Multi Columns Form -->
                      <form action="/produk/update-harga-jual/{{$data->id}}" method="POST" class="row g-3">
                          @csrf
                          <div class="col-md-12">
                            <label for="inputName5" class="form-label">Email</label>
                            <input type="email" name="email" value="{{$data->email}}" placeholder="Masukan Email " class="form-control @error('email') is-invalid @enderror" id="inputName5">
                            @error('email')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="inputName5" class="form-label">Username</label>
                            <input type="text" name="name" value="{{$data->name}}" placeholder="Masukan Username " class="form-control @error('name') is-invalid @enderror" id="inputName5">
                            @error('name')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="inputName5" class="form-label">Password</label>
                            <input type="password" name="password" value="{{$data->password}}" placeholder="Masukan Password " class="form-control @error('password') is-invalid @enderror" id="inputName5">
                            @error('password')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="inputName5" class="form-label">Foto</label>
                            <input type="file" name="foto" value="{{$data->foto}}" placeholder="Masukan Foto " class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                            @error('foto')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-12">
                            <label for="inputHarga-jual1" class="form-label">Role</label>
                            <select class="form-select @error('role') is-invalid @enderror" name="role"  aria-label="Default select example">
                              <option value="{{$data->role->id}}" selected>{{$data->role->nama_role}}</option>
                              @foreach ($data->role as $row)
                            <option value="{{$row->id}}">{{$row->nama_role}}</option>
                            @endforeach
                            </select>
                            @error('role')
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
          text: "Kamu akan menghapus data Jenis Produk dengan nama " + nama + " ",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/produk/delete-harga-jual/" + id + ""
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