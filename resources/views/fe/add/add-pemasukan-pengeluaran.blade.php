@extends('fe.layouts.layout')

@section('title')
    Add Pemasukan - Pengeluaran |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Pemasukan | Pengeluaran</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/produk">Data Produk</a></li>
            <li class="breadcrumb-item active">Add Data Pemasukan | Pengeluaran</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Pemasukan | Pengeluaran</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-pemasukan-pengeluaran" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-8">
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
                        <div class="col-md-4">
                          <label for="inputDate1" class="form-label">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="inputDate1">
                          @error('tanggal')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label for="inputDate1" class="form-label">Pemasukan</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="pemasukan" value="0" class="form-control @error('pemasukan') is-invalid @enderror" aria-label="Amount (to the nearest dollar)">
                            @error('pemasukan')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="inputDate1" class="form-label">Pengeluaran</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="pengeluaran" value="0" class="form-control @error('pengeluaran') is-invalid @enderror" aria-label="Amount (to the nearest dollar)">
                            @error('pengeluaran')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" style="height: 100px"></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
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
@endsection