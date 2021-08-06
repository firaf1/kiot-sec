<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
             
   <select class="form-control col-md-4" id="exampleFormControlSelect1">
                                                <option>Science</option>
                                                <option>Informatics</option>
                                                <option>Enginering</option>
                                                <option>Fresh man course</option>
                                             
                                            </select>
        <div class="row layout-top-spacing">

 <div class="col-md-4" v-for="book in books" :key="book.id">
           <div class="card component-card_1">
                <div class="card-body ">
                     <div class="user-profile ">
                          <img :src="'KIOT_BOOKS/' + book.tumb" 
                          style="width:6rem; height:7rem; border-radius:10px; 
                          margin-left:3.5rem; 
                           border: 4px solid #b5b5b5; "
                          class="" alt="...">
                      </div>

                    <h5 class="card-title">{{ book.title }}</h5>
                    <button type="button" class="btn btn-dark mt-3 mb-3 ml-2">
                                      Available:- <span class="badge badge-light ml-2"> {{ book.available }} </span>
                                    </button>
                    <p class="card-text"> {{ book.description }}</p>
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
props:{
  books: Object
},
  mounted() {
    document.addEventListener("scroll", this.test);
  },
};
</script>
