<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
             <div class="row">
             <select class="form-control col-md-4" id="exampleFormControlSelect1">
      <option>Science</option>
      <option>Informatics</option>
      <option>Enginering</option>
      <option>Fresh man course</option>
                                             
    </select>
    <div class="col-md-6">
    <input type="text" style="opacity:1; " class="form-control" @blur="inputFocuss()" 
      v-model="form.qr"  @keyup="qrScanned" name="" id="qr">
    </div>
             </div>
   
    
        <div class="row layout-top-spacing">

 
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-three">
              <div class="widget-heading">
                <h5 class="">Top Selling Product</h5>
              </div>

              <div class="widget-content">
                <div class="table-responsive">
                  <table class="table table-scroll">
                    <thead>
                      <tr>
                        <th>
                          <div class="th-content">Books</div>
                        </th>
                        <th>
                          <div class="th-content th-heading">User</div>
                        </th>
                        <th>
                          <div class="th-content th-heading">User Card</div>
                        </th>
                        <th>
                          <div class="th-content th-heading">Day</div>
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="book in books" :key="book.id">
                        <td>
                          <div class="td-content product-name">
                            <img :src="'KIOT_BOOKS/' + book.book.tumb" alt="product" />
                            <div class="align-self-center">
                              <p class="prd-name">{{ book.book.title }}</p>
                              <p class="prd-category text-primary"> {{ book.book.book_id }} </p>
                            </div>
                          </div>
                        </td>
                       <td>
                          <div class="td-content product-name">
                            <img :src="book.user.profile_photo_path" alt="product" />
                            <div class="align-self-center">
                              <p class="prd-name">{{ book.user.name }}</p>
                              <p class="prd-category text-primary"> {{ book.user.user_id }} </p>
                            </div>
                          </div>
                        </td>
                         <td>
                          <div class="td-content product-name">
                            <img :src="book.user.qr" alt="product" />
                            <div class="align-self-center">
                              <p class="prd-name">{{ book.user.department }}</p>
                              <p class="prd-category text-primary"> {{ book.user.user_id }} </p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="td-content">
                          <span class="badge badge-danger"> now </span>
                          </div>
                        </td>
                        
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


 

      
                
         
        </div>
      </div>
    </div>
 
    <div class="modal fade userInfo show " tabindex="-1" v-if="isExist" style="height:90vh; "  aria-labelledby="myLargeModalLabel" aria-modal="true" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="myLargeModalLabel">Large</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
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

                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                         <div class="bio layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Book Info</h3>
                                <p>Book Id</p>
                               <input type="text" name="" onblur="this.focus()" v-model="form.book_id"   id="Book_id" class="form-control">
                                <div class="bio-skill-box">

                                    

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
  </app-layout>
</template>

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
   id_Book_id_Exit: Object,
},
  mounted() {
  document.getElementById('qr').focus();
     
  },
  methods:{
    inputFocuss() {
  document.querySelector('#qr').focus();
},
    SubmitBorrow(){
      //  this.isExist = false
      // $('.userInfo').modal('hide');
       Inertia.post(route('SubmitBorrow'), this.form,{
   onSuccess: (page) => {
     console.log(this.id_Book_id_Exit)
     console.log(this.scannedInfo)
     if(!this.id_Book_id_Exit){
 $('.userInfo').modal("hide");
          document.querySelector(".modal-backdrop").style.display = "none";
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "success",
            title: "Info Successfully Inserted",
            padding: "2em",
          });
     }
         else {
              const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "error",
            title: "Book ID is Not Found",
            padding: "2em",
          });
         }
          
        },
       })
      
    },
 
    qrScanned(){

      setTimeout(() => { 

        Inertia.post(route('qr_Scanned'), this.form,{
  onStart(){
    
  },
   onSuccess: (page) => {

if(!this.scannedInfo){
  console.log('is Empity ')
  this.isExist = false
}
else {
  this.isExist = true
  document.getElementById('qr').focus();
  $('.userInfo').modal('show');

  
}
  },
  onFinish(page){
     
 
       
     
  }

        })
         
         }, 800);

      
    }
  }
};
 
</script>
