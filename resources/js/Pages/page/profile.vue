<template>
  <app-layout>
    <div id="content" class="main-content1">
      <div class="layout-px-spacing1">
        <div class="row1 layout-top-spacing1">
          <div class=" ">
           
              <div class="info">
                <h6 class="text-primary text-center">Your Information</h6>
                <div class="row">
                  <div class="col-lg-11 mx-auto">
                    <div class="row">
                      <div class="col-xl-2 col-lg-12 ">
                        <div class="upload1  " style="overflow:hidden; ">
                          <img
                      v-if="preview"
                      :src="preview"
                   style=" border-radius:50%; height:7rem; width:7rem;  " 
                      class="img-fluid"
                    />
                        <img   v-if="!preview"  style=" border-radius:50%; height:7rem; width:7rem;  "  :src="$page.props.user.profile_photo_path">
                          
                          <input
                            type="file"
                             hidden
                                 @input="form2.profileImage = $event.target.files[0]"
                              @change="profilechange"
                             id="profileImage1"
                            style="height: 100%"
                            class="dropify1" />
                            
                             
                           <label for="profileImage1" style="color:white; background-color:#3356e1;
                           font-size:0rem; cursor:pointer; 
                            margin-left:-1rem; margin-top:-2rem; border-radius:50%; padding:0.5rem;   ">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                          </label>
                        </div>
                         <button class=" btn btn-primary mt-2 ml-2" @click="ProfileImageUpload" v-if="preview" >Change</button>
                      </div>
                     
                       <form
              id="general-info"
              @submit.prevent="Updatedinfo"
              class="section general-info col-xl-10"
            >
                      <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                        <div class="form">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input
                                  type="text"
                                  class="form-control mb-4"
                                  v-model="form.name"
                                  id="fullName"
                                  placeholder="Full Name"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="fullName">E-mail</label>
                                <input
                                  type="text"
                                  class="form-control mb-4"
                                  v-bind:class="{
                                    'is-invalid': $page.props.errors.email,
                                  }"
                                  v-model="form.email"
                                  placeholder="E-mail"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="profession">Phone Number</label>
                            <input
                              type="text"
                              class="form-control mb-4"
                              v-bind:class="{
                                'is-invalid': $page.props.errors.phoneNumber,
                              }"
                              v-model="form.phoneNumber"
                              placeholder="Phone Number"
                            />
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="fullName">Department</label>
                                <input
                                  type="text"
                                  class="form-control mb-4"
                                  v-bind:class="{
                                    'is-invalid': $page.props.errors.department,
                                  }"
                                  v-model="form.department"
                                  placeholder="Department"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label for="fullName">Campas</label>
                                <input
                                  type="text"
                                  class="form-control mb-4"
                                  v-bind:class="{
                                    'is-invalid': $page.props.errors.campos,
                                  }"
                                  v-model="form.campos"
                                  placeholder="Campas"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="profession">Phone Number</label>
                            <input
                              type="text"
                              class="form-control mb-4"
                              v-bind:class="{
                                'is-invalid': $page.props.errors.user_id,
                              }"
                              v-model="form.user_id"
                              placeholder="Id Number"
                            />
                          </div>
                          <button class="btn btn-primary">Save Changes</button>
                        </div>
                      </div>
 </form>  

                    </div>
                  </div>
                </div>
              </div>
           
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<style scoped>
.myspinner {
  display: flex;
  align-items: center;
  justify-content: center;
  visibility: hidden;
  width: 100%;
  position: fixed;
  top: 0px;
  left: 0px;
  color: white;
  z-index: 100;
  height: 100%;
  background: #000000c2;
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
  data() {
    return {
      preview: null,
      form: this.$inertia.form({}),
      form2:{
        profileImage:"",

      }
    };
  },
  methods: {
   ProfileImageUpload(){
        Inertia.post(this.route("profileImage"), this.form2, {
   onBefore: (visit) => {},
        // onStart: (visit) => {
        //   document.querySelector(".myspinner").style.visibility = "visible";
        // },
        onProgress: (progress) => {},
        onSuccess: (page) => {
          this.preview = null
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "success",
            title: "Successfully Updated",
            padding: "2em",
          });
        },
        onError: (errors) => {
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "error",
            title: "Oops! something went wrong",
            padding: "2em",
          });
        },
        })
   },

   profilechange(e) {
         const file = e.target.files[0];
      this.preview = URL.createObjectURL(file);
      
        
    },




    Updatedinfo() {
      Inertia.post(this.route("profile.update"), this.form, {
        onBefore: (visit) => {},
        onStart: (visit) => {
          document.querySelector(".myspinner").style.visibility = "visible";
        },
        onProgress: (progress) => {},
        onSuccess: (page) => {
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "success",
            title: "Successfully Updated",
            padding: "2em",
          });
        },
        onError: (errors) => {
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "error",
            title: "Oops! something went wrong",
            padding: "2em",
          });
        },
        onCancel: () => {},
        onFinish: (visit) => {
          document.querySelector(".myspinner").style.visibility = "hidden";
        },
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
  },
  mounted() {
    this.form = this.user;
  },
};
</script>
