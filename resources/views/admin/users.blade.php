@extends('layouts.admin_app')
@section('content')

@include('layouts.admin.sidebar')

<div class="body-wrapper">
    @include('layouts.admin.header')

    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Pending Deposits</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted " href="index.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Pending Deposits</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="{{asset('admin/images/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom">
              <h5 class="card-title fw-semibold mb-0 lh-sm">Pending Deposits</h5>
            </div>
            <div class="card-body p-4">
              <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                        <th><h6 class="fs-4 fw-semibold mb-0">#</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">First Name</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Last Name</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0"> Email</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Phone</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Kyc Status</h6></th>
                        <th><h6 class="fs-4 fw-semibold mb-0">Action</h6></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection