import {defineStore} from 'pinia';
import { ref } from 'vue';


const auth = defineStore("auth", ()=>{
   const  token = ref("");
   const  user = ref("");

   const url = process.env.MIX_API_URL;
    function setToken(val){
        token.value = val;
    }

    function userDetails(){
       axios.get(url+'userDetails',{
        headers:{
           'Authorization': `Bearer ${localStorage.token}` 
        }
       }).then(res=>{
        console.log(res);
        user.value = res.data;
       }).catch(err=>{
            console.log(err);
            user.value = err.response.data;
       })
    }
    return {
        user,
        token,
        setToken,
        userDetails
    }
    
}, {
    persist: true
}
    
);

export default auth;