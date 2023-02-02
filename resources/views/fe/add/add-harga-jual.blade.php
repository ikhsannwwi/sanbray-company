@extends('fe.layouts.layout')

@section('title')
    Add Jenis Produk |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Harga Jual</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/harga-jual">Data Harga Jual</a></li>
            <li class="breadcrumb-item active">Add Data Harga Jual</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Harga Jual</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-harga-jual" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-4">
                          <label for="inputName5" class="form-label">Harga Jual </label>
                          <input type="number" name="harga_jual" placeholder="contoh :  5000 " class="form-control @error('harga_jual') is-invalid @enderror" id="inputName5">
                          @error('harga_jual')
                            <span class="invalid-feedback d-block">{{$message}}</span>
                          @enderror
                        </div>
                        <div class="col-md-8">
                          <label for="inputName5" class="form-label">Rp( Nominal )</label>
                          <input type="text" name="rp" placeholder="contoh : Lima Ribu Rupiah " class="form-control @error('rp') is-invalid @enderror" id="inputName5">
                          @error('rp')
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