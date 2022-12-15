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
                      <form class="row g-3">
                        <div class="col-md-12 ">
                          <label for="inputHarga-jual1" class="form-label">Nama Barang</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Kerupuk Oren</option>
                            <option value="2">Kerupuk Seblak</option>
                            <option value="3">Milk Jelly</option>
                          </select>
                        </div>
                        <div class="col-md-8">
                          <label for="inputDate1" class="form-label">Tanggal</label>
                          <input type="date" class="form-control" id="inputDate1">
                        </div>
                        <div class="col-md-4">
                            <label for="inputHarga-jual1" class="form-label">Tempat Distribusi</label>
                            <select class="form-select" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="Raflesiamart">Kantin Raflesia mart - SMKN 1 GARUT</option>
                            </select>
                          </div>
                        <div class="col-md-6">
                          <label for="inputNumber1" class="form-label">Jumlah Barang</label>
                          <input type="number" class="form-control" id="inputNumber1">
                        </div>
                        <div class="col-md-6">
                          <label for="inputHarga-jual1" class="form-label">Harga Jual</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="500">Rp.500 ( Lima Ratus Rupiah )</option>
                            <option value="1000">Rp.1000 ( Seribu Rupiah )</option>
                            <option value="1500">Rp.1500 ( Seribu Lima Ratus Rupiah )</option>
                            <option value="2000">Rp.2000 ( Dua Ribu Rupiah )</option>
                            <option value="2500">Rp.2500 ( Dua Ribu Lima Ratus Rupiah )</option>
                            <option value="3000">Rp.3000 ( Tiga Ribu Rupiah )</option>
                            <option value="3500">Rp.3500 ( Tiga Lima Ratus Rupiah )</option>
                            <option value="4000">Rp.4000 ( Empat RIbu Rupiah )</option>
                            <option value="4500">Rp.4500 ( Empat Ribu Lima Ratus Rupiah )</option>
                            <option value="5000">Rp.5000 ( Lima Ribu Rupiah )</option>
                            <option value="5500">Rp.5500 ( Lima Ribu Lima Ratus Rupiah )</option>
                            <option value="6000">Rp.6000 ( Enam Ribu Rupiah )</option>
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