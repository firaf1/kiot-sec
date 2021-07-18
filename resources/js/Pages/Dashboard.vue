<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
          <h2>This is dashboard :)</h2>
        </div>
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
