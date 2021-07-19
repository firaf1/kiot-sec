<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="row layout-spacing">
        <div class="col-lg-12">
          <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
              <div class="table-responsive mb-4">
                <div
                  id="style-3_wrapper"
                  class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"
                >
                  <div class="dt--top-section">
                    <div class="row">
                      <div
                        class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center"
                      >
                        <div class="dataTables_length" id="style-3_length">
                          <button
                            class="btn btn-primary"
                            data-toggle="modal"
                            data-target=".bd-example-modal-lg"
                          >
                            Add
                          </button>
                        </div>
                      </div>
                      <div
                        class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3"
                      >
                        <div id="style-3_filter" class="dataTables_filter">
                          <label
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="feather feather-search"
                            >
                              <circle cx="11" cy="11" r="8"></circle>
                              <line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg
                            ><input
                              type="search"
                              class="form-control"
                              placeholder="Search..."
                              aria-controls="style-3"
                          /></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="style-3"
                      class="table style-3 table-hover dataTable no-footer"
                      role="grid"
                      aria-describedby="style-3_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="checkbox-column text-center sorting_asc"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label=" Record Id : activate to sort column descending"
                            style="width: 76.9062px"
                          >
                            Record Id
                          </th>
                          <th
                            class="text-center sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Image: activate to sort column ascending"
                            style="width: 50.2812px"
                          >
                            Image
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="First Name: activate to sort column ascending"
                            style="width: 88.0938px"
                          >
                            First Name
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Last Name: activate to sort column ascending"
                            style="width: 85.4844px"
                          >
                            Last Name
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Email: activate to sort column ascending"
                            style="width: 126.516px"
                          >
                            Email
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Mobile No.: activate to sort column ascending"
                            style="width: 88.3594px"
                          >
                            Mobile No.
                          </th>
                          <th
                            class="text-center sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Status: activate to sort column ascending"
                            style="width: 71.5px"
                          >
                            Status
                          </th>
                          <th
                            class="text-center dt-no-sorting sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Action: activate to sort column ascending"
                            style="width: 56.8594px"
                          >
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr role="row">
                          <td class="checkbox-column text-center sorting_1">1</td>
                          <td class="text-center">
                            <span
                              ><img
                                src="assets/assets/img/profile-17.jpg"
                                class="profile-img"
                                alt="avatar"
                            /></span>
                          </td>
                          <td>Donna</td>
                          <td>Rogers</td>
                          <td>donna@yahoo.com</td>
                          <td>555-555-5555</td>
                          <td class="text-center">
                            <span class="shadow-none badge badge-primary">Approved</span>
                          </td>
                          <td class="text-center">
                            <ul class="table-controls">
                              <li>
                                <a
                                  href="javascript:void(0);"
                                  class="bs-tooltip"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title=""
                                  data-original-title="Edit"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-edit-2 p-1 br-6 mb-1"
                                  >
                                    <path
                                      d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"
                                    ></path></svg
                                ></a>
                              </li>
                              <li>
                                <a
                                  href="javascript:void(0);"
                                  class="bs-tooltip"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title=""
                                  data-original-title="Delete"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-trash p-1 br-6 mb-1"
                                  >
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                      d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                    ></path></svg
                                ></a>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div
                    class="dt--bottom-section d-sm-flex justify-content-sm-between text-center"
                  >
                    <div class="dt--pages-count mb-sm-0 mb-3">
                      <div
                        class="dataTables_info"
                        id="style-3_info"
                        role="status"
                        aria-live="polite"
                      >
                        Showing page 1 of 2
                      </div>
                    </div>
                    <div class="dt--pagination">
                      <div
                        class="dataTables_paginate paging_simple_numbers"
                        id="style-3_paginate"
                      >
                        <ul class="pagination">
                          <li
                            class="paginate_button page-item previous disabled"
                            id="style-3_previous"
                          >
                            <a
                              href="#"
                              aria-controls="style-3"
                              data-dt-idx="0"
                              tabindex="0"
                              class="page-link"
                              ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-arrow-left"
                              >
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline></svg
                            ></a>
                          </li>
                          <li class="paginate_button page-item active">
                            <a
                              href="#"
                              aria-controls="style-3"
                              data-dt-idx="1"
                              tabindex="0"
                              class="page-link"
                              >1</a
                            >
                          </li>
                          <li class="paginate_button page-item">
                            <a
                              href="#"
                              aria-controls="style-3"
                              data-dt-idx="2"
                              tabindex="0"
                              class="page-link"
                              >2</a
                            >
                          </li>
                          <li class="paginate_button page-item next" id="style-3_next">
                            <a
                              href="#"
                              aria-controls="style-3"
                              data-dt-idx="3"
                              tabindex="0"
                              class="page-link"
                              ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-arrow-right"
                              >
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline></svg
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade bd-example-modal-lg show"
      tabindex="-1"
      aria-labelledby="myLargeModalLabel"
      aria-modal="true"
      role="dialog"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Large</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <svg
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <input
                    id="t-text"
                    v-model="form.fullname"
                    type="text"
                    name="txt"
                    placeholder="Staff Full Name"
                    class="form-control"
                    required=""
                  />
                </div>
                <div class="col-md-6">
                  <input
                    id="t-text"
                    type="text"
                    v-model="form.email"
                    name="email"
                    placeholder="Staff E-mail"
                    class="form-control"
                    required=""
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <input
                    id="t-text"
                    v-model="form.PhoneNumber"
                    type="text"
                    name="txt"
                    placeholder="Staff Phone Number"
                    class="form-control"
                    required=""
                  />
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                 <h6 class=" ">Select Shift</h6>
                  <div class=" bootstrap-select">
                      
                    <select class="selectpicker " tabindex="-98">
                      <option title="Morning">
                        Morning
                      </option>
                      <option title="Afternoon">Afternoon</option>
                      <option title="Night">Night</option>
                    </select>
                  </div>
                </div>
               
              <div class="col-md-6">

                <h6 class=" ">Gender</h6>
                <div class="container" >
                  <div class="n-chk">
                    <label class="new-control new-radio new-radio-text radio-danger">
                      <input
                        type="radio"
                         v-model="form.sex"
                         value="male"
                        class="new-control-input"
                        name="custom-radio-4"
                      />
                      <span class="new-control-indicator"></span
                      ><span class="new-radio-content">Male</span>
                    </label>
                  </div>
                  <div class="n-chk">
                    <label class="new-control new-radio new-radio-text radio-primary">
                      <input
                        type="radio"
                         v-model="form.sex"
                        class="new-control-input"
                        name="custom-radio-4"
                        value="female"
                        checked=""
                      />
                      <span class="new-control-indicator"></span
                      ><span class="new-radio-content">Female</span>
                    </label>
                  </div>
                </div>


              </div>
               
              </div>
             <hr>
 <div class="row d-flex justify-content-center" >
 <div class="col-md-5" >
 <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Kebele Id  <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file">
                                            <input type="file" accept="image/*"
                                             enctype="multipart/form-data" 
                                            
                                                 @input="form.scannedKebeleId = $event.target.files[0]"
                                             class="custom-file-container__custom-file__custom-file-input"
                                             @change="previewKebele"
                                               >
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                            <span class="custom-file-container__custom-file__custom-file-control">Choose file...
                                            <span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
                                        </label>
                                         <div class="mt-5" style="height:15rem; border:2px solid #7d93f9; 
                                         border-radius: 10px;
                                          overflow:hidden;  " >
                                         <img v-if(preview2) :src="preview2"  style="width:100%; height:100%; " class="img-fluid" />
 <img v-if(!preview2) src="assets/assets/img/imagepreview.png"
                                         style="width:100%; height:100%; "
                                          alt="" srcset="">
                                         
                                         </div>
                                    </div>
 </div>
  <div class="col-md-5" >
 <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Profile Picture <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file">
                                        
                                            <input  type="file" enctype="multipart/form-data"     @change="previewImage"
                                             @input="form.profile = $event.target.files[0]"
                                             class="custom-file-container__custom-file__custom-file-input" 
                                             accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                            <span class="custom-file-container__custom-file__custom-file-control">Choose file...<span class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
                                        </label>
                                         <div class="mt-5" style="height:15rem; border:2px solid #7d93f9; 
                                         border-radius: 10px;
                                          overflow:hidden;  " >
 <img v-if(preview) :src="preview"  style="width:100%; height:100%; " class="img-fluid" />
 <img v-if(!preview) src="assets/assets/img/imagepreview.png"
                                         style="width:100%; height:100%; "
                                          alt="" srcset="">
                                         
                                         </div>
                                    </div>
 </div>
 </div>
            </div>
           
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal">
            <i class="flaticon-cancel-12"></i> Discard
          </button>
          <button type="button" @click="submit" class="btn btn-primary">Save</button>
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

let a = document.createElement("css");
a.setAttribute("src", "assets/plugins/table/datatable/dt-global_style.css");
document.head.appendChild(a);

let b = document.createElement("script");
b.setAttribute("src", "assets/plugins/table/datatable/datatables.js");
document.head.appendChild(b);

export default {
  components: {
    AppLayout,
    Welcome,
    Header,
  },
  data() {
    return {
       preview: null,
         preview2: null,
      form: this.$inertia.form({
        fullname: "",
        email: "",
        profile: null,
        PhoneNumber: "",
        role: "",
        scannedKebeleId: "",
        qr: "",
        password: "123",
        shift: "",
      }),
      
    };
  },
  methods:{

    

    previewImage: function(event) {
      var input = event.target;
      if (input.files) {
        var reader = new FileReader();
        reader.onload = (e) => {
          this.preview = e.target.result;
        }
        this.image=input.files[0];
        
        reader.readAsDataURL(input.files[0]);
      }
    },
     previewKebele: function(event) {
      var input = event.target;
      if (input.files) {
        var reader = new FileReader();
        reader.onload = (e) => {
          this.preview2 = e.target.result;
        }
        this.image=input.files[0];
        reader.readAsDataURL(input.files[0]);
      }
    },

      submit() {
       this.form.post(this.route('user.store'))
    },
  },
  mounted() {
    document.addEventListener("scroll", this.test);
  },
};

 
</script>
