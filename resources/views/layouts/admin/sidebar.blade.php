<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="index.html" class="text-nowrap logo-img">
            <h4><span>TRADE</span><span class="text-success">COPS</span></h4>
          {{-- <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="">
          <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo" width="180" alt="" style="display: none;"> --}}
        </a>
        <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8 text-muted"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="init"><div class="simplebar-wrapper selected" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask selected"><div class="simplebar-offset selected" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper selected" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content selected" style="padding: 0px 24px;">
        <ul id="sidebarnav" class="in">
          <!-- ============================= -->
          <!-- Home -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Pending Actions</span>
          </li>
          <!-- =================== -->
          <!-- Dashboard -->
          <!-- =================== -->
          <li class="sidebar-item ">
            <a class="sidebar-link" href="{{route('admin.home')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aperture" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="{{(\Request::route()->getName() == 'admin.home'   ) ?'#fff':'#2c3e50'}}" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M3.6 15h10.55" />
                    <path d="M6.551 4.938l3.26 10.034" />
                    <path d="M17.032 4.636l-8.535 6.201" />
                    <path d="M20.559 14.51l-8.535 -6.201" />
                    <path d="M12.257 20.916l3.261 -10.034" />
                  </svg>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('admin.pending_kyc')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="{{(\Request::route()->getName() == 'admin.pending_kyc'   ) ?'#fff':'#2c3e50'}}" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                    <path d="M15 19l2 2l4 -4" />
                  </svg>
              </span>
              <span class="hide-menu">Pending Kyc</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('admin.pending_deposits')}}" aria-expanded="false">
              <span>
                <i class="ti ti-currency-dollar"></i>
              </span>
              <span class="hide-menu">Pending Deposits</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="index4.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table-alias" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12v-7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-7" />
                    <path d="M3 10h18" />
                    <path d="M10 3v10" />
                    <path d="M2 17a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-4z" />
                  </svg>
              </span>
              <span class="hide-menu">Pending Refferal Withdrawal</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="index5.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-affiliate" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5.931 6.936l1.275 4.249m5.607 5.609l4.251 1.275" />
                    <path d="M11.683 12.317l5.759 -5.759" />
                    <path d="M5.5 5.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />
                    <path d="M18.5 5.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />
                    <path d="M18.5 18.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />
                    <path d="M8.5 15.5m-4.5 0a4.5 4.5 0 1 0 9 0a4.5 4.5 0 1 0 -9 0" />
                  </svg>
              </span>
              <span class="hide-menu">Pending Refferal Access</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="index6.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-affiliate" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5.931 6.936l1.275 4.249m5.607 5.609l4.251 1.275" />
                    <path d="M11.683 12.317l5.759 -5.759" />
                    <path d="M5.5 5.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />
                    <path d="M18.5 5.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />
                    <path d="M18.5 18.5m-1.5 0a1.5 1.5 0 1 0 3 0a1.5 1.5 0 1 0 -3 0" />
                    <path d="M8.5 15.5m-4.5 0a4.5 4.5 0 1 0 9 0a4.5 4.5 0 1 0 -9 0" />
                  </svg>
              </span>
              <span class="hide-menu">Pending Registeration Fees</span>
            </a>
          </li>
          <!-- ============================= -->
          <!-- Apps -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                  </svg>
              </span>
              <span class="hide-menu">Users</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="apps-kanban.html" aria-expanded="false">
              <span>
                <i class="ti ti-currency-dollar"></i>
              </span>
              <span class="hide-menu">Deposits</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moneybag" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z" />
                    <path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                  </svg>
              </span>
              <span class="hide-menu">Salary</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-email.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                  </svg>
              </span>
              <span class="hide-menu">Refferal</span>
            </a>
          </li>
          <!-- ============================= -->
          <!-- PAGES -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Other Actions</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="page-pricing.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-door-exit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M13 12v.01" />
                    <path d="M3 21h18" />
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5" />
                    <path d="M14 7h7m-3 -3l3 3l-3 3" />
                  </svg>
              </span>
              <span class="hide-menu">Logout</span>
            </a>
          </li>
        </ul>
        <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
              {{-- <button class="btn btn-primary fs-2 fw-semibold lh-sm">Signup</button> --}}
            </div>
            <div class="unlimited-access-img">
              <img src="{{asset('admin/images/rocket.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 3756px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></nav>
      <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
        <div class="hstack gap-3">
          <div class="john-img">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
          </div>
          <div class="john-title">
            <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
            <span class="fs-2 text-dark">Designer</span>
          </div>
          <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
            <i class="ti ti-power fs-6"></i>
          </button>
        </div>
      </div>  
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>