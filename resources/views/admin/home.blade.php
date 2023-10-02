@extends('layouts.admin_app')
@section('content')

@include('layouts.admin.sidebar')

<div class="body-wrapper">
    @include('layouts.admin.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                  <div class="card-body position-relative">
                    <div class="row">
                      <div class="col-sm-7">
                        <div class="d-flex align-items-center mb-7">
                          <div class="rounded-circle overflow-hidden me-6">
                            <img src="{{asset('admin/images/user-1.jpg')}}" alt="" width="40" height="40">
                          </div>
                          <h5 class="fw-semibold mb-0 fs-5">Welcome back <span class="text-uppercase">,{{Auth::user()->first_name}}</span> !</h5>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="border-end pe-4 border-muted border-opacity-10">
                            <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">0<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                            <p class="mb-0 text-dark">Total Users</p>
                          </div>
                          <div class="ps-4">
                            <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">0<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                            <p class="mb-0 text-dark">Active Users</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="welcome-bg-img mb-n7 text-end">
                          <img src="{{asset('admin/images/welcome-bg.svg')}}" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        {{-- slider --}}
        <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
              <div class="card border-0 zoom-in bg-light-primary shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{asset('admin/images/svgs/icon-user-male.svg')}}" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-primary mb-1"> Pending <br> Kyc's </p>
                    <h5 class="fw-semibold text-primary mb-0">0</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-warning shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{asset('admin/images/svgs/icon-briefcase.svg')}}" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-warning mb-1">Total <br>Deposit</p>
                    <h5 class="fw-semibold text-warning mb-0">$0</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-info shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{asset('admin/images/svgs/icon-mailbox.svg')}}" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-info mb-1">Pending Deposits</p>
                    <h5 class="fw-semibold text-info mb-0">$0</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{asset('admin/images/svgs/icon-favorites.svg')}}" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-danger mb-1">Total Refund Returns</p>
                    <h5 class="fw-semibold text-danger mb-0">$0</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-success shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{asset('admin/images/svgs/icon-speech-bubble.svg')}}" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-success mb-1">User register this month</p>
                    <h5 class="fw-semibold text-success mb-0">0</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-info shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{asset('admin/images/svgs/icon-connect.svg')}}" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-info mb-1">Pending  Withdraw</p>
                    <h5 class="fw-semibold text-info mb-0">$0</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex mb-1 align-items-center">
                        <div>
                          <h5 class="">Top Deposit Account</h5>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table border">
                          <thead class="bg-primary text-white">
                            <!-- start row -->
                            <tr>
                              <th>Rank</th>
                              <th>User</th>
                              <th>Amount</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <div class="d-flex mb-1 align-items-center">
                        <div>
                          <h5 class="">Top Refferal Amount</h5>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table border">
                          <thead class="bg-primary text-white">
                            <!-- start row -->
                            <tr>
                                <th>Rank</th>
                                <th>User</th>
                                <th>Amount</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
    </div>

</div>
@endsection