<template>
 <header class="app-header"> 
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)" >
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav quick-links d-none d-lg-flex">
      </ul>
      <div class="d-block d-lg-none">
       
      </div>
      <button class="navbar-toggler p-0 border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="p-2">
          <i class="ti ti-dots fs-7"></i>
        </span>
      </button>
      <div class="navbar-collapse justify-content-end collapse" id="navbarNav" >
        <div class="d-flex align-items-center justify-content-between">
          <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
            <i class="ti ti-align-justified fs-7"></i>
          </a>
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
            <li class="nav-item dropdown">
                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="d-flex align-items-center">
                    <div class="user-profile-img">
                      <img :src="url+'admin/images/user-1.jpg'" class="rounded-circle" width="35" height="35" alt="" />
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                  <div class="profile-dropdown position-relative" data-simplebar>
                    <div class="py-3 px-7 pb-0">
                      <h5 class="mb-0 fs-5 fw-semibold">Admin Profile</h5>
                    </div>
                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                      <img :src="url+'admin/images/user-1.jpg'" class="rounded-circle" width="80" height="80" alt="" />
                      <div class="ms-3">
                        <h5 class="mb-1 fs-3">{{ user.name }}</h5>
                        <span class="mb-1 d-block text-dark">Admin</span>
                        <p class="mb-0 d-flex text-dark align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                              </svg>
                              {{ user.email }}
                        </p>
                      </div>
                    </div>
                    <div class="d-grid py-4 px-7 pt-8">
                      <a href="javascript:;" class="btn btn-outline-primary" @click="logout">Log Out</a>
                    </div>
                  </div>
                </div>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>

import axios from 'axios';
import $ from 'jquery';
export default {
    data(){
        return {
            form:{
                email:"",
                password:""
            },
            url:process.env.MIX_APP_URL,
            api_url:process.env.MIX_API_URL,
            message:{
                error:false,
                success:false,
                sideToggle:false
            },
            user:""
        }
    },
    created(){
       this.details();
    },
   
    methods:{
      details(){
        axios.get(this.api_url+'userDetails',{
        headers:{
           'Authorization': `Bearer ${localStorage.token}` 
        }
       }).then(res=>{
        this.user = res.data.user;
       }).catch(err=>{
            console.log(err);
       });
      },
      logout(){
        axios.get(this.api_url+'logout',{
        headers:{
           'Authorization': `Bearer ${localStorage.token}` 
        }
       }).then(res=>{
          localStorage.removeItem('token');
          this.$router.push({name:'admin_login'});
        }).catch(err=>{
          console.log(err);
          this.$toaster.error(err.response.data.message);
        });
      }
    },
    mounted(){
      $(".sidebartoggler").click(function(){
        var size = "mini-sidebar";
        if($("#main-wrapper").hasClass("mini-sidebar")){
          size = "full"
        }
        $("#main-wrapper").attr("data-sidebartype",size);
        $("#main-wrapper").toggleClass("mini-sidebar show-sidebar");
      });
  }
}
</script>