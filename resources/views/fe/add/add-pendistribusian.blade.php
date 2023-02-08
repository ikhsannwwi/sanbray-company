@extends('fe.layouts.layout')

@section('title')
    Add Pendistribusian |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Pendistribusian</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/produk">Data Produk</a></li>
            <li class="breadcrumb-item active">Add Data Pendistribusian</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Pendistribusian</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-pendistribusian" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12 ">
                          <label for="inputHarga-jual1" class="form-label">Nama Produk</label>
                          <select class="form-select @error('id_barang') is-invalid @enderror" name="id_barang" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
                            @foreach ($data_nama_produk as $row)
                            <option value="{{$row->id}}">{{$row->nama_produk}}</option>
                            @endforeach
                          </select>
                          @error('id_barang')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-8">
                          <label for="inputDate1" class="form-label">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="inputDate1">
                          @error('tanggal')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="inputHarga-jual1" class="form-label">Tempat Distribusi</label>
                            <select class="form-select @error('id_tempat_distribusi') is-invalid @enderror" name="id_tempat_distribusi" aria-label="Default select example">
                              <option value="" selected>Open this select menu</option>
                              @foreach ($data_tempat_distribusi as $row)
                              <option value="{{$row->id}}">{{$row->tempat_distribusi}}</option>
                              @endforeach
                            </select>
                            @error('id_tempat_distribusi')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                          </div>
                        <div class="col-md-6">
                          <label for="inputNumber1" class="form-label">Jumlah Barang</label>
                          <input type="number" name="jumlah_barang" class="form-control @error('jumlah_barang') is-invalid @enderror" id="inputNumber1">
                          @error('jumlah_barang')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label for="inputHarga-jual1" class="form-label">Harga Jual</label>
                          <select class="form-select @error('id_harga_jual') is-invalid @enderror" name="id_harga_jual" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
                            @foreach ($data_harga_jual as $row)
                            <option value="{{$row->id}}">Rp.{{$row->harga_jual}} ( {{$row->rp}} )</option>
                            @endforeach
                          </select>
                          @error('id_harga_jual')
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
@endsection