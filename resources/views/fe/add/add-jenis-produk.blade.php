@extends('fe.layouts.layout')

@section('title')
    Add Jenis Produk |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Jenis Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/jenis-produk">Data Jenis Produk</a></li>
            <li class="breadcrumb-item active">Add Data Jenis Produk</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Jenis Produk</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-jenis-produk" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                          <label for="inputName5" class="form-label">Jenis Produk</label>
                          <input type="text" name="jenis_produk" class="form-control @error('jenis_produk') is-invalid @enderror" id="inputName5">
                        </div>
                        @error('jenis_produk')
                          <span class="invalid-feedback d-block">{{$message}}</span>
                        @enderror
                        
                        
                        
                        
                        
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