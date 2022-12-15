@extends('fe.layouts.layout')

@section('title')
    Add Nama Produk |
@endsection

@section('content')
<main id="main" class="main">


    <div class="pagetitle">
        <h1>Add Data Produk</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">Produk</a>
            </li>
            <li class="breadcrumb-item"><a href="/produk">Data Produk</a></li>
            <li class="breadcrumb-item active">Add Data Produk</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->



    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Form Nama Produk</h5>
        
                      <!-- Multi Columns Form -->
                      <form action="/produk/insert-nama-produk" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-8">
                          <label for="inputName5" class="form-label">Nama Produk</label>
                          <input type="text" name="nama_produk" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-4">
                            <label for="inputHarga-jual1" class="form-label">Jenis Produk</label>
                            <select class="form-select" name="id_jenis_produk" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              @foreach ($data_jenis_produk as $row)
                              <option value="{{$row->id}}">{{$row->jenis_produk}}</option>
                              @endforeach
                            </select>
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