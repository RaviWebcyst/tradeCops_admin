<template>
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" >
    <sidebar />
    <div class="body-wrapper">
      <navbar  />
      <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8"> Deposits</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <router-link class="text-muted " :to="{name:'admin_home'}">Dashboard</router-link>
                      </li>
                      <li class="breadcrumb-item" aria-current="page"> Deposits</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img :src="url+'admin/images/ChatBc.png'" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom">
              <h5 class="card-title fw-semibold mb-0 lh-sm"> Deposits</h5>
            </div>
            <div class="card-body p-4">
              <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th><h6 class="fs-4 fw-semibold mb-0">#</h6></th>
                      <th><h6 class="fs-4 fw-semibold mb-0">Submit Date</h6></th>
                      <th><h6 class="fs-4 fw-semibold mb-0">TN. Date</h6></th>
                      <th><h6 class="fs-4 fw-semibold mb-0">Amount</h6></th>
                      <th><h6 class="fs-4 fw-semibold mb-0">Owner Email</h6></th>
                      <th><h6 class="fs-4 fw-semibold mb-0">Transaction No.</h6></th>
                      <th><h6 class="fs-4 fw-semibold mb-0">Status</h6></th>
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
  </div>
  </template>
  
  <script>
  import navbar from "./header.vue";
  import sidebar from "./sidebar.vue";
  
  export default {
    components:{
      navbar,
      sidebar
    },
    data(){
      return {
              url:process.env.MIX_APP_URL,
              api_url:process.env.MIX_API_URL,
              message:{
                  error:false,
                  success:false
              },
              user:"",
          }
    },

    methods:{
      
    }
  }
  </script>