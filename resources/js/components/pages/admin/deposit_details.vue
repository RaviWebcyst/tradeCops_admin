<template>
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" >
    <sidebar />
    <div class="body-wrapper">
      <navbar  />

      
      
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