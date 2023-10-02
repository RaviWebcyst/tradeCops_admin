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
                  <h4 class="fw-semibold mb-8">Update Salary</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <router-link class="text-muted " :to="{name:'admin_home'}">Dashboard</router-link>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Update Salary</li>
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
              <h5 class="card-title fw-semibold mb-0 lh-sm">Update Salary</h5>
            </div>
            <div class="card-body p-4">
              form
            </div>
          </div>
    </div>
  </div>
  </div>
  </template>
  
  <script>
  import navbar from "../header.vue";
  import sidebar from "../sidebar.vue";
  
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