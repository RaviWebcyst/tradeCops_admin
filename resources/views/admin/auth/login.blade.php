@extends('layouts.admin_app')
@section('content')
      <!--  Body Wrapper -->
      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
          <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
              <div class="col-md-8 col-lg-6 col-xxl-3">
                @if(session('error'))
                    <div class="alert alert-danger dismissable">{{session('error')}}</div>
                @endif
                <div class="card mb-0">
                  <div class="card-body">
                     <h4 class="text-nowrap logo-img text-center d-block mb-5 w-100">Admin Login </h4>
                    {{-- <a href="index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
                    </a> --}}
                    
                    {{-- <div class="position-relative text-center my-4">
                      <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">or sign in with</p>
                      <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                    </div> --}}
                    <form method="post" action="{{route('login')}}">
                        @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                      </div>
                      {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                          <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                          <label class="form-check-label text-dark" for="flexCheckChecked">
                            Remeber this Device
                          </label>
                        </div>
                        <a class="text-primary fw-medium" href="authentication-forgot-password.html">Forgot Password ?</a>
                      </div> --}}
                      <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection