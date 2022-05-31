<template>
<div class=""> 
<div class="bo" @click="inputFocuss()" style=" background-image:linear-gradient(#0000008f, #000000), url('assets/22.jpg');
background-size:cover;
height:100%;
">

<div class="log">
<img src="assets/woll.png" alt="" srcset="">
</div>
<div class="text-container">
  <span>W</span>
  <span>E</span>
  <span>L</span>
  <span>C</span>
  <span>o</span>
  <span>m</span>
  <span>e</span>
</div>
<br>
<div class="container">

  <div class="text-light">
     <h3>KIOT- LIBRARY</h3>
     <input type="text" name="" style="opacity:1;"  v-model="form.qr"  @keyup="qrScanned"  @blur="inputFocuss()" id="qr">
  </div>

</div>

  </div>
  <div @click="inputFocuss()" class="modal fade userInfo show " tabindex="-1" v-if="isExist" 
  style="height:90vh; "  aria-labelledby="myLargeModalLabel" aria-modal="true" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="myLargeModalLabel">Large</h5>
                      <button @click="inputFocuss()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                      </button>
                  </div>
                  <div class="modal-body">
                     
                    <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-5 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                
                                <div class="text-center user-info"  >
                                    <img :src="scannedInfo.profile_photo_path"
                                    style="width:100%;height:20rem; margin-top:-2rem;  "
                                     alt="avatar">
                                    <p class="">  {{ scannedInfo.name }}</p>
                                </div>
                                
                            </div>
                        </div>
 
                    </div>

                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                         <div class="bio layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Book Info</h3>
                                <h3> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                  <span v-if="isBook" class="text-danger">
                                  you Cannot Enter into Library 
                                  </span>
                                   <span v-else class="text-success">
                                 welcome
                                  </span>
                                </h3>
                           <div class="widget-content widget-content-area">
                                
                                
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                         <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 
                                                 {{ scannedInfo.phoneNumber }}
                                            </li>
                                            
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                                {{ scannedInfo.role }}
                                            </li>
                                             
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                               {{ scannedInfo.department }}
                                            </li>
                                            <li class="contacts-block__item">
                                                <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                 {{ scannedInfo.email }}
                                                </a>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 
                                                 {{ scannedInfo.phoneNumber }}
                                            </li>
                                            
                                                
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>

                            </div>                                
                        </div>

                            <div class="modal-footer">
                      <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                      <button type="button" @click="SubmitBorrow()" class="btn btn-primary">Save</button>
                  </div>
                    </div>

                </div>
                </div>
                     
                  </div>
                 
              </div>
          </div>
      </div>
</div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Baloo+Thambi');
.container{
     display: flex;
     justify-content: center;
     align-items: center;
     
}
.contacts-block li{
    margin-top:1rem;
}
.log{
  display: flex;
     justify-content: center;
     align-items: center;
       animation: MoveUpDown 1s linear 10;
  position: relative;
}
@keyframes MoveUpDown {
  0%, 100% {
    bottom: 0;
  }
  50% {
    bottom: 10px;
  }
}
.container .button{
  width:25%;
  border:none;
  border-radius: 10px;
  background:none;
  padding:1rem 2rem;
  color: #FFF;
    font-family: 'Baloo Thambi', cursive;
  transition: 0.5s ease-in-out;
  border:2px solid #03d9ff;
}
.container .button:hover{
  background:#03d9ff;
  box-shadow: 1px 5px 30px #03d9ff;
  color: #2b0124;
}
.bo {
     height: 100vh!important;
     background-repeat: no-repeat;
     background-size: cover;
     background-position:center;
    
    
}

 .text-container{
    display: flex;
     justify-content: center;
     align-items: center;
 }
.text-container > span {
  
  text-transform: uppercase;
  animation: glow 2s ease-in-out infinite;
  font-size: 3rem;
  font-family: 'Baloo Thambi', cursive;
    font-size: 7rem;
  font-weight: 10rem;
}

@keyframes glow {
  0%, 100% {
    color: #FFF;
    text-shadow: 0 0 10px #0652DD, 0 0 50px #0652DD, 0 0 100px #0652DD;
  }
  
  10%, 90% {
    color: #858585;
    text-shadow: none;
  }
}

.text-container > span:nth-child(2) {
	animation-delay: 0.25s;
}

.text-container > span:nth-child(3) {
	animation-delay: 0.5s;
}

.text-container > span:nth-child(4) {
	animation-delay: 0.75s;
}

.text-container > span:nth-child(5) {
	animation-delay: 1s;
}

.text-container > span:nth-child(6) {
	animation-delay: 1.25s;
}

.text-container > span:nth-child(7) {
	animation-delay: 1.5s;
}
</style>

<script>
import { Inertia } from "@inertiajs/inertia";
export default {
   
   data(){
    return {
     isExist: false,
     isFocus: false,
     
    
      form: {
        book_id:"",
        qr: "",
       
      },
    }
  },
props:{
  books: Object,
  scannedInfo: Object,
  isBook:Boolean,
   id_Book_id_Exit: Object,
   isUser:Boolean,
},
   mounted() {
  document.getElementById('qr').focus();
     
  },
  methods:{
    inputFocuss() {
  document.querySelector('#qr').focus();
},
  qrScanned(){

      setTimeout(() => { 

        Inertia.post(route('front-qrs'), this.form,{
  onStart(){
    
  },
   onSuccess: (page) => {
console.log(this.isBook);
if(!this.scannedInfo){
  console.log('is Empity ')
  this.isExist = false
}
else {
  this.isExist = true
  document.getElementById('qr').focus();
  $('.userInfo').modal('show');

  
}

if(!this.isUser){
  this.form.qr = null
     const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "error",
            title: "User is not found",
            padding: "2em",
          });
}
 
  },
  onFinish(page){
     
 
       
     
  }

        })
         
         }, 500);

      
    }
}

}
</script>
