@extends('fe.layouts.layout')

@section('title')
    Add Stok Produk |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Stok Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/stok-produk">Data Stok Produk</a></li>
            <li class="breadcrumb-item active">Add Data Stok Produk</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Stok Produk</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-stok-produk" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                        <label for="inputHarga-jual1" class="form-label">Nama Produk</label>
                          <select class="form-select @error('id_nama_produk') is-invalid @enderror" name="id_nama_produk" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
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
                          <input type="number" name="jumlah_stok" placeholder="Masukan Jumlah Stok Produk " class="form-control @error('jumlah_stok') is-invalid @enderror" id="inputName5">
                          @error('jumlah_stok')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-4">
                          <label for="inputDate1" class="form-label">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="inputDate1">
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
@endsection