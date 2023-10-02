<template>
   <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
          <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
              <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="alert alert-danger" v-if="message.error">{{ message.error }}</div>
                <div class="card mb-0">
                  <div class="card-body">
                     <h4 class="text-nowrap logo-img text-center d-block mb-5 w-100">Admin Login </h4>
                    <form @submit.prevent="login">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="form.email">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" v-model="form.password">
                      </div>
                     
                      <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
import auth from '../../../../store/auth';

export default {
    data(){
        return {
            form:{
                email:"",
                password:""
            },
            api_url:process.env.MIX_API_URL,
            message:{
                error:false,
                success:false
            }
        }
    },
    created(){
        if(localStorage.token){
            this.$router.push({name:'admin_home'});
        }
    },
   
    methods:{
        login(){
            axios.post(this.api_url+'login',this.form).then(res=>{
              console.log(res);
                this.form = {};
                auth().setToken(res.data.token);
                localStorage.setItem("token",res.data.token);
                this.$router.push({name:'admin_home'});
            }).catch(err=>{
                console.log(err);
                // this.message.error = err.response.data.message;
            });
        }
    }
}
</script>