@extends('fe.layouts.layout')

@section('title')
    FaQ |
@endsection

@section('content')
<main id="main" class="main">
    
    <div class="pagetitle">
      <h1>FaQ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">FaQ</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <section class="section faq">
        <div class="row">
            <div class="col-lg-4">
              <div class="card basic">
                <div class="card-body">
                <h5 class="card-title">
                Mengenai Data Distribusi</h5>
                <div>
                <h6>
                1. Apa itu data website pendistribusian produk?</h6>
                <p>
                  Data website pendistribusian produk adalah informasi yang dikumpulkan dan disimpan oleh sebuah situs web yang berfungsi sebagai pasar online yang menghubungkan penjual dan pembeli untuk melakukan transaksi pembelian dan pengiriman produk.</p>
              </div>
              <div class="pt-2">
                <h6>
                2. Apa yang bisa saya temukan dari data website pendistribusian produk?</h6>
                <p>
                  Anda dapat menemukan berbagai macam informasi, seperti jenis produk yang tersedia, harga, deskripsi produk, penjual, rating dan ulasan dari pembeli, dan informasi pengiriman.</p>
              </div>
              <div class="pt-2">
                <h6>
                3. Bagaimana cara mengakses data website pendistribusian produk?</h6>
                <p>
                  Anda dapat mengakses data tersebut melalui situs web pendistribusian produk itu sendiri. Beberapa situs web bahkan menyediakan API (Application Programming Interface) yang memungkinkan pengguna untuk mengambil data secara langsung dari situs tersebut.</p>
              </div>
              <div class="pt-2">
                <h6>
                4. Apakah data website pendistribusian produk dapat dipercaya?</h6>
                <p>
                  Data yang disediakan oleh situs web pendistribusian produk biasanya cukup dapat dipercaya, terutama jika situs tersebut memiliki kebijakan dan prosedur yang ketat untuk memastikan kualitas produk dan kepuasan pelanggan. Namun, ada juga kemungkinan adanya kesalahan atau penipuan, jadi selalu bijaksana untuk melakukan pengecekan dan penelitian terlebih dahulu sebelum melakukan transaksi.</p>
              </div>
              <div class="pt-2">
                <h6>
                5. Apakah data website pendistribusian produk dapat digunakan untuk kepentingan bisnis?</h6>
                <p>
                  Ya, data website pendistribusian produk dapat digunakan untuk berbagai kepentingan bisnis, seperti untuk melakukan analisis pasar, riset konsumen, dan pengembangan produk. Namun, pastikan untuk mematuhi hak cipta dan kebijakan privasi dari situs web yang menyediakan data tersebut.</p>
              </div>
              
            </div>
            </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">
                  Mengenai Data Produk</h5>
                  <div class="accordion accordion-flush" id="faq-group-2">
                  <div class="accordion-item">
                  <h2 class="accordion-header">
                   <button class="accordion-button" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse" aria-expanded="true">
                    Apa itu data produk? </button>
                </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse show" data-bs-parent="#faq-group-2" style="">
                  <div class="accordion-body">
                    Data produk adalah informasi yang berkaitan dengan produk yang Anda tawarkan, seperti deskripsi, harga, gambar, dan atribut lainnya yang relevan dengan produk tersebut. Data produk membantu pelanggan memahami produk yang ditawarkan dan membuat keputusan pembelian yang tepat.</div>
              </div>
              </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                   <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse" aria-expanded="false">
                    Mengapa data produk penting bagi bisnis saya? </button>
                </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2" style="">
                  <div class="accordion-body">
                    Data produk adalah aset yang sangat penting bagi bisnis Anda karena memungkinkan pelanggan untuk melihat dan membandingkan produk Anda dengan produk lainnya. Dengan memberikan data produk yang lengkap dan akurat, Anda dapat meningkatkan kepercayaan pelanggan, meningkatkan konversi, dan membedakan produk Anda dari pesaing Anda.</div>
              </div>
              </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                   <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse" aria-expanded="false">
                    Apa yang harus saya lakukan jika ada data produk yang salah atau tidak akurat?
  </button>
                </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    Jika ada data produk yang salah atau tidak akurat, pastikan untuk segera memperbaikinya. Berikan cara bagi pelanggan untuk melaporkan kesalahan atau masalah dan pastikan untuk menanggapi laporan tersebut dengan cepat dan efektif.</div>
              </div>
              </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                   <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse" aria-expanded="false">
                    Bagaimana saya dapat memastikan keakuratan data produk saya? </button>
                </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2" style="">
                  <div class="accordion-body">
                    Untuk memastikan keakuratan data produk Anda, pastikan untuk memeriksa dan memperbarui informasi secara teratur. Gunakan sistem manajemen konten yang baik untuk memudahkan penambahan atau pengeditan informasi produk. Pastikan juga bahwa semua informasi produk yang diberikan telah divalidasi dan diverifikasi sebelum diunggah ke situs web.</div>
              </div>
              </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                   <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse" aria-expanded="false">
                    Apakah ada alat atau sistem otomatis yang dapat membantu saya mengelola data produk saya? </button>
                </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    Ya, terdapat berbagai alat dan sistem otomatis seperti sistem manajemen konten (CMS), perangkat lunak manajemen produk (PIM), atau sistem manajemen konten digital (DCMS) yang dapat membantu Anda mengelola data produk dengan lebih efektif dan efisien.</div>
              </div>
              </div>
              </div>
              </div>
              </div>
            </div>
        </div>
    </section>
  </main>
@endsection