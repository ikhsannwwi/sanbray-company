@extends('fe.layouts.layout')

@section('title')
    Add Tempat Distribusi |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Tempat Pendistribusian</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/tempat-distribusi">Data Jenis Produk</a></li>
            <li class="breadcrumb-item active">Add Data Tempat Pendistribusian</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Tempat Pendistribusian</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-tempat-distribusi" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Tempat Pendistribusian</label>
                          <input type="text" name="tempat_distribusi" class="form-control" id="inputName5">
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