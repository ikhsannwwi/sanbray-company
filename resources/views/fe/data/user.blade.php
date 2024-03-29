@extends('fe.layouts.layout')

@section('title')
    Data Users |
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a class="collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">User</a>
            </li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-11 ">
                          <h5 class="card-title">Data Users</h5>
                        </div>
                        <div class="col-lg-1 ">
                          <a href="/user/add-user" type="button" class="btn  mt-lg-3">
                            <i class="bx bxs-duplicate bx-sm"></i>
                          </a>
                        </div>
                      </div>
        
                      <!-- Table with hoverable rows -->
                      <div class="overflow__x">
                        <table class="table table-hover overflow__x">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>                     
                                <th scope="col">Foto</th>
                                <th scope="col">Password</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $row)
                              <tr>
                                <th scope="row"><a href="/user/edit-user/{{$row->id}}">{{$row->id}}</a></th>
                                <td>{{$row->name}}</td>                       
                                <td>{{$row->email}}</td>                       
                                <td>{{$row->role_user->nama_role}}</td>                       
                                <td>
                                  <img width="100px" src="{{asset('images/foto-user/'.$row->foto)}}" alt="{{$row->foto}}">
                                </td>
                                <td>{{$row->password}}</td>
                              </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                      </div>
                      <!-- End Table with hoverable rows -->
        
                    </div>
                  </div>
            </div>
        </div>
    </section>
  </main>

  @push('script')
  <script>
    @if (session()->has('success'))
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "rtl": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
      toastr["success"]("{{ Session::get('success') }}")
    @endif
    @if (session()->has('error'))
    toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "rtl": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
      toastr["error"]("{{ Session::get('error') }}")
    @endif

    // toastr["success"]("kjkjk", "jj")
    
  </script>
  @endpush

@endsection