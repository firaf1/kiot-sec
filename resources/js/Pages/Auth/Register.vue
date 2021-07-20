<template>
   <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
 
                        <form class="text-left"  @submit.prevent="frontReg">
                             <div class="form " style="width:100%; ">
         
 
                       

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="username" 
                                      v-bind:class="{
                                                    'is-invalid': $page.props.errors.name,
                                                    }"
                                    v-model="form.name" type="text" class="form-control" placeholder="Username">
                                      <div class="text-danger"> {{ $page.props.errors.name }}</div>
                                </div>
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input v-model="form.email" id="email" name="email" 
                                     v-bind:class="{
                                                    'is-invalid': $page.props.errors.email,
                                                    }"
                                    type="text" value="" placeholder="Email">
                                      <div class="text-danger"> {{ $page.props.errors.email }}</div>
                                </div>

                               <div class="row">
                                <div  class="field-wrapper input mb-2 col-md-5 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input v-model="form.password" 
                                      v-bind:class="{
                                                    'is-invalid': $page.props.errors.password,
                                                    }"
                                     name="password" type="password" value="" placeholder="Password">
                                     <div class="text-danger"> {{ $page.props.errors.password }}</div>
                                </div>
                                <div  class="field-wrapper input mb-2 col-md-5 mr-4   ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input v-model="form.password_confirmation"
                                     v-bind:class="{
                                                    'is-invalid': $page.props.errors.password_confirmation,
                                                    }"
                                     id="password" name="password" type="password" value="" 
                                     placeholder="confirm password">
                                      <div class="text-danger"> {{ $page.props.errors.password_confirmation }}</div>
                                </div>
                               </div>
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input v-model="form.dept_id"  name="username" type="text"
                                      v-bind:class="{
                                                    'is-invalid': $page.props.errors.dept_id,
                                                    }"
                                     class="form-control" placeholder="Department">
                                     <div class="text-danger"> {{ $page.props.errors.dept_id }}</div>
                                </div>
                                 <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                                    <input v-model="form.id_num"  name="username"
                                     v-bind:class="{
                                                    'is-invalid': $page.props.errors.id_num,
                                                    }"
                                     type="text" class="form-control" placeholder="Id Number ">
                                       <div class="text-danger"> {{ $page.props.errors.id_num }}</div>
                                </div>
                                 <div id="username-field" class="field-wrapper input">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <input v-model="form.PhoneNumber" name="username" 
                                     v-bind:class="{
                                                    'is-invalid': $page.props.errors.PhoneNumber,
                                                    }"
                                    type="number" class="form-control" placeholder="Phone Number">
                                     <div class="text-danger"> {{ $page.props.errors.PhoneNumber }}</div>
                                </div>
                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" v-model="agree"   class="new-control-input">
                                          <span class="new-control-indicator"></span><span>I agree to the <a href="javascript:void(0);">  terms and conditions </a></span>
                                     
                                        </label>
                                         <p class="signup-link">Already have an account?
                         <inertia-link  :href="route('login')">Log in</inertia-link>
                         </p>
                                    </div>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    
                                    <div class="field-wrapper">
                                        <button type="submit"
                                         v-bind:class="{
                                                    'disabled': isloading == true,
                                                    }"
                                         class="btn btn-primary " value="">
                                         <div class="spinner-border mx-4 text-white mr-2 align-self-center loader-xm"
                                           v-bind:class="{
                                                    'd-none': isloading == false,
                                                    }"
                                         
                                         ></div>
                                         <span style="margin:1rem!important; "
                                           v-bind:class="{
                                                    'd-none': isloading == true,
                                                    }"
                                         >Get Started!</span>
                                         </button>
                                    </div>
                                </div>

                                                 
                        

                 
                            </div>
                    </form>                        
                        <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index-2.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>
</template>

<script>
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetButton from '@/Jetstream/Button'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from "@/Jetstream/Checkbox";
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
import { Inertia } from "@inertiajs/inertia";
    export default {
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors
        },

        data() {
            return {
                isloading:false,
                agree:true,
                form: this.$inertia.form({
        name: "",
  
        email: "",
        profile: null,
        PhoneNumber: "",
        role: "",
        scannedKebeleId: "",
        qr: "",
        password: "",
        password_confirmation: "",
        shift_id: "",
        id_num:"",
        dept_id:"",

                })
            }
        },

        methods: {
            frontReg() {
                 


        Inertia.post(this.route("front.register"), this.form, {
        onBefore: (visit) => {},
        onStart: (visit) => { this.isloading = true },
        onProgress: (progress) => {},
        onSuccess: (page) => {},
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => { this.isloading = false},
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
            }
        }
    }
</script>
