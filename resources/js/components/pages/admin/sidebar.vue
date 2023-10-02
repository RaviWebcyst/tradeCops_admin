<template>
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img">
              <h4><span>TRADE</span><span class="text-success">COPS</span></h4>
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
            <li  :class="$route.name == 'admin_home'?'sidebar-item selected':'sidebar-item'" >
              <router-link :to="{name:'admin_home'}" class="sidebar-link" href="" aria-expanded="false" >
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-aperture" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='admin_home'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            </router-link>
            </li>
            <li :class="$route.name == 'pending_kyc'?'sidebar-item selected':'sidebar-item'">
              <router-link :to="{name:'pending_kyc'}" class="sidebar-link"  aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='pending_kyc'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                      <path d="M15 19l2 2l4 -4" />
                    </svg>
                </span>
                <span class="hide-menu">Pending Kyc</span>
            </router-link>
            </li>
            <li :class="$route.name == 'pending_deposits'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'pending_deposits'}" aria-expanded="false">
                <span>
                  <i class="ti ti-currency-dollar"></i>
                </span>
                <span class="hide-menu">Pending Deposits</span>
            </router-link>
            </li>
            <li :class="$route.name == 'pending_withdraw'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'pending_withdraw'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table-alias" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='pending_withdraw'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M3 12v-7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-7" />
                      <path d="M3 10h18" />
                      <path d="M10 3v10" />
                      <path d="M2 17a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-4z" />
                    </svg>
                </span>
                <span class="hide-menu">Pending Refferal Withdrawal</span>
              </router-link>
            </li>
            <li :class="$route.name == 'pending_referral'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'pending_referral'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-affiliate" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='pending_referral'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              </router-link>
            </li>
            <li :class="$route.name == 'pending_registration'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'pending_registration'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-affiliate" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='pending_registration'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              </router-link>
            </li>
            <!-- ============================= -->
            <!-- Apps -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Data</span>
            </li>
            <li :class="$route.name == 'users'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'users'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='users'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                </span>
                <span class="hide-menu">Users</span>
              </router-link>
            </li>
            <li :class="$route.name == 'deposits'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'deposits'}" aria-expanded="false">
                <span>
                  <i class="ti ti-currency-dollar"></i>
                </span>
                <span class="hide-menu">Deposits</span>
              </router-link>
            </li>
            <li :class="$route.name == 'salary'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'salary'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moneybag" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='salary'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z" />
                      <path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                    </svg>
                </span>
                <span class="hide-menu">Salary</span>
              </router-link>
            </li>
            <li :class="$route.name == 'referrals'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'referrals'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='referrals'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              </router-link>
            </li>
            <!-- ============================= -->
            <!-- PAGES -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Other Actions</span>
            </li>
            <li :class="$route.name == 'level_charts'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'level_charts'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='level_charts'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12.483 20.935c-.862 .239 -1.898 -.178 -2.158 -1.252a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.08 .262 1.496 1.308 1.247 2.173" />
                    <path d="M16 19h6" />
                    <path d="M19 16v6" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  </svg>  
                </span>
                <span class="hide-menu">Level Chart</span>
              </router-link>
            </li>
            <li :class="$route.name == 'roi'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'roi'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-dollar" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='roi'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M13.038 20.666c-.902 .665 -2.393 .337 -2.713 -.983a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 .402 2.248" />
                      <path d="M15 12a3 3 0 1 0 -1.724 2.716" />
                      <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                      <path d="M19 21v1m0 -8v1" />
                  </svg>
                </span>
                <span class="hide-menu">ROI</span>
              </router-link>
            </li>
            <li :class="$route.name == 'salary_setting'?'sidebar-item selected':'sidebar-item'">
              <router-link class="sidebar-link" :to="{name:'salary_setting'}" aria-expanded="false">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-dollar" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" :stroke="$route.name =='salary_setting'? '#fff':'#2c3e50'" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M13.038 20.666c-.902 .665 -2.393 .337 -2.713 -.983a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 .402 2.248" />
                    <path d="M15 12a3 3 0 1 0 -1.724 2.716" />
                    <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M19 21v1m0 -8v1" />
                  </svg>
                </span>
                <span class="hide-menu">Salary Setting</span>
              </router-link>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
              </div>
              <div class="unlimited-access-img">
                <img :src="url+'admin/images/rocket.png'" alt="" class="img-fluid">
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
  </template>
  
  <script>
  export default {
      data(){
          return {
              url:process.env.MIX_APP_URL,
              message:{
                  error:false,
                  success:false
              }
          }
      },
      created(){
          console.log(this.url);
      },
      methods:{
         
      },
      mounted(){
        
      }
  }
  </script>