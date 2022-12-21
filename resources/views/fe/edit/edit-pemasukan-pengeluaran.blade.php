@extends('fe.layouts.layout')

@section('title')
    Edit Pemasukan - Pengeluaran |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Edit Data Pemasukan | Pengeluaran</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/produk">Data Produk</a></li>
            <li class="breadcrumb-item active">Edit Data Pemasukan | Pengeluaran</li>
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
                          <h5 class="card-title">Form Pemasukan | Pengeluaran</h5>
                        </div>
                        <div class="col-lg-2 ">
                          <a href="/produk/add-pendistribusian" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                          <a href="#" data-id="{{$data->id}}" data-nama="{{$data->nama_produk->nama_produk}}" data-jumlah="{{$data->tanggal}}"  type="button" class="btn  mt-lg-3 delete">
                            <i class="bx bxs-trash-alt bx-sm"></i>
                          </a>
                        </div>
                      </div>
        
                      <!-- Multi Columns Form -->
                      <form class="row g-3">
                        <div class="col-md-8">
                            <label for="inputHarga-jual1" class="form-label">Nama Barang</label>
                            <select class="form-select" name="id_barang" aria-label="Default select example">
                              <option selected value="{{$data->id_barang}}">{{$data->nama_produk->nama_produk}}</option>
                                @foreach ($data_nama_produk as $row)
                                <option value="{{$row->id}}">{{$row->nama_produk}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="col-md-4">
                          <label for="inputDate1" class="form-label">Tanggal</label>
                          <input type="date" value="{{$data->tanggal}}" name="tanggal" class="form-control" id="inputDate1">
                        </div>
                        <div class="col-md-6">
                          <label for="inputDate1" class="form-label">Pemasukan</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="pemasukan" value="{{$data->pemasukan}}" class="form-control" aria-label="Amount (to the nearest dollar)">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="inputDate1" class="form-label">Pengeluaran</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="pengeluaran" value="{{$data->pengeluaran}}" class="form-control" aria-label="Amount (to the nearest dollar)">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" style="height: 100px">{{$data->deskripsi}}</textarea>
                          </div>
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
        var tanggal = $(this).attr('data-jumlah');

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin?',
          text: "Kamu akan menghapus data pemasukan dan pengeluaran dengan nama " + nama + " dengan tanggal data : " +  tanggal,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/produk/delete-pemasukan-pengeluaran/" + id + ""
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