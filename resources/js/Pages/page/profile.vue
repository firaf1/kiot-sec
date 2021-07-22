<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
          <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="general-info" @submit.prevent="Updatedinfo" class="section general-info">
                                        <div class="info">
                                            <h6 class="">Your Information</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
 
                                                                <input type="file" id="input-file-max-fs" style="height:100%" class="dropify" :data-default-file="$page.props.user.profile_photo_path" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Full Name</label>
                                                                            <input type="text" class="form-control mb-4" v-model="form.name" id="fullName" placeholder="Full Name">
                                                                        </div>
                                                                    </div>
                                                                  <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">E-mail</label>
                                                                            <input type="text" class="form-control mb-4"
                                                                            v-bind:class="{
                                                    'is-invalid': $page.props.errors.email,
                                                    }"
                                                                              v-model="form.email" placeholder="E-mail">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="profession">Phone Number</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                    v-bind:class="{
                                                    'is-invalid': $page.props.errors.phoneNumber,
                                                    }"
                                                                     v-model="form.phoneNumber" placeholder="Phone Number">
                                                                </div>
                                                                 <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Department</label>
                                                                            <input type="text" class="form-control mb-4" 
                                                                                                                                            v-bind:class="{
                                                    'is-invalid': $page.props.errors.department,
                                                    }"
                                                                            v-model="form.department"   placeholder="Department">
                                                                        </div>
                                                                    </div>
                                                                  <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Campas</label>
                                                                            <input type="text" class="form-control mb-4"  
                                                                                                                                                                   v-bind:class="{
                                                    'is-invalid': $page.props.errors.campos,
                                                    }"
                                                                            v-model="form.campos" placeholder="Campas">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="profession">Phone Number</label>
                                                                    <input type="text" class="form-control mb-4"
                                                                                                                                                                       v-bind:class="{
                                                    'is-invalid': $page.props.errors.user_id,
                                                    }"
                                                                     v-model="form.user_id" placeholder="Id Number">
                                                                </div>
                                                                <button    class="btn btn-primary">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
        </div>
      </div>
    </div>
    
  </app-layout>
</template>
<style scoped>
.myspinner{
    display: flex;
    align-items:center;
    justify-content:center;
    visibility: hidden;
    width:100%;
    position:fixed;
    top:0px;
    left:0px;
    color:white;
    z-index: 100;
    height: 100%;
    background:#000000c2;
}
</style>
<script>

import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import Header from "@/includes/header.vue";
import { Inertia } from "@inertiajs/inertia";
export default {
  components: {
    AppLayout,
    Welcome,
    Header,
  },
  props: {
     user: Object,
    },
  data(){
      return{
            form: this.$inertia.form({
               
          }),
      }
  },
  methods:{
   Updatedinfo() {
        Inertia.post(this.route("profile.update"), this.form, {
        onBefore: (visit) => {},
        onStart: (visit) => { 
            document.querySelector('.myspinner').style.visibility="visible"
        

          
         
        
        },
        onProgress: (progress) => {},
        onSuccess: (page) => {

                const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });
  toast({
    type: 'success',
    title: 'Successfully Updated',
    padding: '2em',
  })
        },
        onError: (errors) => {

                const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });
  toast({
    type: 'error',
    title: 'Oops! something went wrong',
    padding: '2em',
  })
        },
        onCancel: () => {},
           onFinish: (visit) => {
              
               document.querySelector('.myspinner').style.visibility="hidden"
        },
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
            }
  },
mounted() {
   this.form = this.user
     
}, 
 
 
};
</script>
