<template>
  <router-view />
</template>

<script>
import $ from 'jquery';
export default {
    created() {
    const recaptchaScript = document.createElement("script");
    recaptchaScript.setAttribute(
      "src",
      "/admin/js/owl.carousel.min.js"
    );
    document.head.appendChild(recaptchaScript);
  },
  
}
</script>