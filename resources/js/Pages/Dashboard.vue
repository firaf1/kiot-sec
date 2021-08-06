<template>
  <app-layout>
    <div id="content" class="main-content " style="background:#e9e9e9; ">
      <div class="layout-px-spacing">
        <h1 class="text-center">Welcome to Kiot Library</h1>

         <img
         style="margin-left:40%; "
          src="assets/woll.png" alt="">
                
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import Header from "../includes/header.vue";

export default {
  components: {
    AppLayout,
    Welcome,
    Header,
  },

  mounted() {
    document.addEventListener("scroll", this.test);
  },
};
</script>
