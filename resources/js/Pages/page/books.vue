<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="dataTables_length" id="style-3_length">
            <button
            data-toggle="modal" data-target=".bd-example-modal-lg"
             class="btn btn-primary"> Add Book </button>
        </div>
        <div class="row layout-top-spacing" style="display:flex;     justify-content: center;">
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
                          <div class="th-content">Product</div>
                        </th>
                        <th>
                          <div class="th-content th-heading">Price</div>
                        </th>
                        <th>
                          <div class="th-content th-heading">Discount</div>
                        </th>
                        <th>
                          <div class="th-content">Status</div>
                        </th>
                        <th>
                          <div class="th-content">Action</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="book in books" :key="book.id" >
                        <td >
                          <div class="td-content product-name">
                            <img
                              src="assets/assets/img/product-headphones.jpg"
                              alt="product"
                            />
                            <div class="align-self-center">
                              <p class="prd-name">Headphone</p>
                              <p class="prd-category text-primary">Digital</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="td-content">
                            <span class="pricing">$168.09</span>
                          </div>
                        </td>
                        <td>
                          <div class="td-content">
                            <span class="discount-pricing">$60.09</span>
                          </div>
                        </td>
                        <td>
                          <div class="td-content">
                            <span class="badge badge-success">Success</span>
                          </div>
                        </td>
                        <td>
                          <div class="btn-group mb-4 mr-2">
                            <button
                              class="btn btn-primary btn-sm dropdown-toggle"
                              type="button"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Approved
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-chevron-down"
                              >
                                <polyline points="6 9 12 15 18 9"></polyline>
                              </svg>
                            </button>
                            <div class="dropdown-menu" style="will-change: transform">
                              <a href="javascript:void(0);" class="dropdown-item"
                                >Approved</a
                              ><a href="javascript:void(0);" class="dropdown-item"
                                >Blocked</a
                              >
                            </div>
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

    <div class="modal fade bd-example-modal-lg show" tabindex="-1" aria-labelledby="myLargeModalLabel"   aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Add Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-4" >
                    <img v-if="url" style="width:100%; border-radius:50%; border: 2px solid #4361e;  " :src="url" />
                    <img v-else src="assets/woll.png" style="width:100%; " alt="" srcset="">
                    <div class=" d-flex justify-content-center mt-1">
                     <input type="file" @change="onFileChange"  name="" hidden id="booktemp">
                    <label for="booktemp">
                    <p     class=" btn btn-primary">
                   
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                    Uplaod 
                    </p>
                    </label>
                    </div>
                    </div>
                    <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-12 form-group">
                     <label for="exampleFormControlTextarea1">Book Title</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp1"
                     placeholder="Book Title">
                    </div>
                                 <div class="col-md-12   form-group">
                                  <label for="exampleFormControlTextarea1">Amount of Book</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp1"
                     placeholder="Book Amount">
                     <div class="form-group mb-4  ">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    </div>
                    </div>
</div>
                    </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="button" class="btn btn-primary">Save</button>
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
    props:{
        books: Object,
    },
  components: {
    AppLayout,
    Welcome,
    Header,
  },
data() {
    return {
      url: null,
    }
  },
  methods: {
    onFileChange(e) {
      const file = e.target.files[0];
      this.url = URL.createObjectURL(file);
    }
  },
  mounted() {
    document.addEventListener("scroll", this.test);
  },
};
</script>
