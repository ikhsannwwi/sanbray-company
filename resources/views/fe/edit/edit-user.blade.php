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
                          <a href="#" data-id="{{$data->id}}" data-nama="{{$data->name}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>

                      <!-- Multi Columns Form -->
                      <form action="/user/update-user/{{$data->id}}" method="POST" class="row g-3" enctype="multipart/form-data">
                          @csrf
                          <div class="col-md-12">
                            <label for="inputName5" class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Masukan Email " value="{{$data->email}}" class="form-control @error('email') is-invalid @enderror" id="inputName5">
                            @error('email')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="inputName5" class="form-label">Username</label>
                            <input type="text" name="name" placeholder="Masukan Username " value="{{$data->name}}" class="form-control @error('name') is-invalid @enderror" id="inputName5">
                            @error('name')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="inputHarga-jual1" class="form-label">Role</label>
                            <select class="form-select @error('role_id') is-invalid @enderror" name="role_id" aria-label="Default select example">
                              <option value="{{$data->role_id}}" selected>{{$data->role_user->nama_role}}</option>
                              @foreach ($data_role_user as $row)
                            <option value="{{$row->id}}">{{$row->nama_role}}</option>
                            @endforeach
                            </select>
                            @error('role_id')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                          </div>
                          {{-- <div class="col-md-4">
                            <label for="inputName5" class="form-label">Password</label>
                            <input type="password" name="password" placeholder="Masukan Password " value="{{$data->password}}" class="form-control @error('password') is-invalid @enderror" id="inputName5">
                            @error('password')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div> --}}
                          <div class="col-md-4">
                            <label for="inputName5" class="form-label">Foto</label>
                            <input type="file" name="foto" placeholder="Masukan Foto" value="{{$data->foto}}" class="form-control @error('foto') is-invalid @enderror" id="inputName5">
                            @error('foto')
                              <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror
                          </div>
                          
                          
                          
                          
                          
                          
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a type="button" class="btn btn-success" href="/user/edit-password-user/{{$data->id}}">Edit Password</a>
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
          text: "Kamu akan menghapus data User dengan nama " + nama + " ",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/user/delete-user/" + id + ""
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