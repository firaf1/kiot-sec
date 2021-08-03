<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
         <div class="col-md-4">
           <div class="card component-card_1">
                <div class="card-body">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                    </div>
                    <h5 class="card-title">Simple</h5>
                    <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                </div>
            </div>
         </div>
 <div class="col-md-4">
           <div class="card component-card_1">
                <div class="card-body">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                    </div>
                    <h5 class="card-title">Simple</h5>
                    <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                </div>
            </div>
         </div>
 <div class="col-md-4">
           <div class="card component-card_1">
                <div class="card-body">
                     <div class="user-profile">
                          <img src="assets/assets/img/profile-7.jpg" class="" alt="...">
                      </div>

                    <h5 class="card-title">Simple</h5>
                    
                    <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                </div>
            </div>
         </div>
                
         
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import Header from "@/includes/header.vue";

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
