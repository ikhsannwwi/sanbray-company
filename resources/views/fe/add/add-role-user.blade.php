@extends('fe.layouts.layout')

@section('title')
    Add Role User |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Role User</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/data/harga-jual">Data Role User</a></li>
            <li class="breadcrumb-item active">Add Data Role User</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Role User</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/user/insert-role-user" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                          <label for="inputName5" class="form-label">Nama Role </label>
                          <input type="text" name="nama_role" placeholder="Masukan Nama Role" class="form-control @error('nama_role') is-invalid @enderror" id="inputName5">
                          @error('nama_role')
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