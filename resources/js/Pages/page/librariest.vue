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
                          <button class="btn btn-primary" @click="AddModalTriger">
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
                          >
                            First Name
                          </th>

                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Email: activate to sort column ascending"
                          >
                            card
                          </th>
                          <th class="sorting">Mobile No.</th>
                          <th
                            class="text-center sorting"
                            tabindex="0"
                            aria-controls="style-3"
                            rowspan="1"
                            colspan="1"
                            aria-label="Status: activate to sort column ascending"
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
                          >
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="staff in staffs" :key="staff.id" role="row">
                          <td class="checkbox-column text-center sorting_1">
                            {{ staff.user_id }}
                          </td>
                          <td class="text-center">
                            <span
                              style="cursor: pointer"
                              data-toggle="modal"
                              data-target="#registerModal"
                              ><img
                                :src="staff.profile_photo_path"
                                @click="cardModal(staff.profile_photo_path)"
                                class="profile-img"
                                alt="avatar"
                            /></span>
                          </td>
                          <td>{{ staff.name }}</td>
                          <td>
                            <span
                              style="cursor: pointer"
                              data-toggle="modal"
                              data-target="#registerModal"
                            >
                              <img
                                @click="cardModal(staff.qr)"
                                :src="staff.qr"
                                class="profile-img"
                                alt="avatar"
                            /></span>
                          </td>
                          <td>{{ staff.phoneNumber }}</td>
                          <td class="text-center">
                            <span class="shadow-none badge badge-primary">{{
                              staff.status
                            }}</span>
                          </td>
                          <td class="text-center">
                            <ul class="table-controls">
                              <li>
                                <a
                                  @click="editStaff(staff)"
                                  data-toggle="modal"
                                  data-target=".bd-example-modal-lg"
                                  href="javascript:void(0);"
                                  class="bs-tooltip"
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
                                  data-toggle="modal"
                                  data-target=".delete-modal"
                                  data-placement="top"
                                  @click="deleteStaff(staff)"
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
      id="RegModal"
      aria-labelledby="myLargeModalLabel"
      aria-modal="true"
      role="dialog"
    >
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Staff Registration </h5>
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
                    v-model="form.name"
                    type="text"
                    name="txt"
                    v-bind:class="{
                      'is-invalid': $page.props.errors.name,
                    }"
                    placeholder="Staff Full Name"
                    class="form-control"
                    required=""
                  />
                  <p class="text-danger">
                    {{ $page.props.errors.name }}
                  </p>
                </div>
                <div class="col-md-6">
                  <input
                    v-bind:class="{
                      'is-invalid': $page.props.errors.email,
                    }"
                    type="text"
                    v-model="form.email"
                    name="email"
                    placeholder="Staff E-mail"
                    class="form-control"
                    required=""
                  />
                  <p class="text-danger">
                    {{ $page.props.errors.email }}
                  </p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <input
                    v-model="form.password"
                    type="password"
                    name="txt1"
                    v-bind:class="{
                      'is-invalid': $page.props.errors.password,
                    }"
                    placeholder="Password "
                    class="form-control"
                    required=""
                  />
                  <p class="text-danger">
                    {{ $page.props.errors.password }}
                  </p>
                </div>
                <div class="col-md-4">
                  <input
                    v-bind:class="{
                      'is-invalid': $page.props.errors.password_confirmation,
                    }"
                    type="password"
                    v-model="form.password_confirmation"
                    name="email"
                    placeholder="Confirm Password"
                    class="form-control"
                    required=""
                  />
                  <p class="text-danger">
                    {{ $page.props.errors.password_confirmation }}
                  </p>
                </div>

                <div class="col-md-4">
                 <input
                    v-bind:class="{
                      'is-invalid': $page.props.errors.user_id,
                    }"
                    type="text"
                    v-model="form.user_id"
                    name="id"
                    placeholder="ID Number "
                    class="form-control"
                    required=""
                    
                  />
                  <p class="text-danger">
                    {{ $page.props.errors.user_id }}
                  </p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <div class=" ">
                    <p class="text-danger">
                      {{ $page.props.errors.shift_id }}
                    </p>
                    <select   class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example"
                      v-model="form.shift_id"
                      v-bind:class="{
                        'is-invalid': $page.props.errors.shift_id,
                      }"
                      tabindex="-98"
                    >
                      <option  selected value="ddd" >  Select Staff Shift </option>
                      <option value="Morning">Morning</option>
                      <option  value="Afternoon" >Afternoon</option>
                      <option  value="Night">Night</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <input
                    v-model="form.PhoneNumber"
                    type="text"
                    v-bind:class="{
                      'is-invalid': $page.props.errors.PhoneNumber,
                    }"
                    name="txt"
                    placeholder="Staff Phone Number"
                    class="form-control"
                    required=""
                  />
                  <p class="text-danger">
                    {{ $page.props.errors.PhoneNumber }}
                  </p>
                </div>
              </div>
            </div>
            <hr />
            <div class="row d-flex justify-content-center">
              <div class="col-md-5">
                <div class="custom-file-container" data-upload-id="myFirstImage">
                  <label
                    >Kebele Id

                    <a
                      href="javascript:void(0)"
                      class="custom-file-container__image-clear"
                      title="Clear Image"
                      >x</a
                    ></label
                  >
                  <p class="text-danger">
                    {{ $page.props.errors.scannedKebeleId }}
                  </p>
                  <label class="custom-file-container__custom-file">
                    <input
                      type="file"
                      accept="image/*"
                      enctype="multipart/form-data"
                      @input="form.scannedKebeleId = $event.target.files[0]"
                      class="custom-file-container__custom-file__custom-file-input"
                      @change="previewKebele"
                    />
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"
                      >Choose file...
                      <span
                        class="custom-file-container__custom-file__custom-file-control__button"
                      >
                        Browse
                      </span></span
                    >
                  </label>
                  <div
                    class="mt-5"
                    style="
                      height: 15rem;
                      border: 2px solid #7d93f9;
                      border-radius: 10px;
                      overflow: hidden;
                    "
                  >
                    <img
                      v-if="preview2"
                      :src="preview2"
                      style="width: 100%; height: 100%"
                      class="img-fluid"
                    />
                    <img
                      v-if="!preview2"
                      src="assets/assets/img/imagepreview.png"
                      style="width: 100%; height: 100%"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="custom-file-container" data-upload-id="myFirstImage">
                  <label
                    >Profile Picture
                    <a
                      href="javascript:void(0)"
                      class="custom-file-container__image-clear"
                      title="Clear Image"
                      >x</a
                    ></label
                  >
                  <p class="text-danger">
                    {{ $page.props.errors.profile }}
                  </p>
                  <label class="custom-file-container__custom-file">
                    <input
                      type="file"
                      enctype="multipart/form-data"
                      @change="previewImage"
                      @input="form.profile = $event.target.files[0]"
                      class="custom-file-container__custom-file__custom-file-input"
                      accept="image/*"
                    />
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"
                      >Choose file...<span
                        class="custom-file-container__custom-file__custom-file-control__button"
                      >
                        Browse
                      </span></span
                    >
                  </label>
                  <div
                    class="mt-5"
                    style="
                      height: 15rem;
                      border: 2px solid #7d93f9;
                      border-radius: 10px;
                      overflow: hidden;
                    "
                  >
                    <img
                      v-if="preview"
                      :src="preview"
                      style="width: 100%; height: 100%"
                      class="img-fluid"
                    />
                    <img
                      v-else-if="!preview"
                      src="assets/assets/img/imagepreview.png"
                      style="width: 100%; height: 100%"
                      alt=""
                      srcset=""
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">
                <i class="flaticon-cancel-12"></i> Discard
              </button>
              <button
                v-if="isUpdate"
                type="button"
                @click="UpdateStaff1"
                class="btn btn-primary"
              >
                Update
              </button>

              <button v-else type="button" @click="submit" class="btn btn-primary">
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade delete-modal show"
      tabindex="-1"
      aria-labelledby="mySmallModalLabel"
      aria-modal="true"
      role="dialog"
    >
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mySmallModalLabel">Are you sure</h5>
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
            <p class="modal-text text-danger">
              this data if once deleted form database we will not able to recover data
              please make sure before take action
            </p>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal">
              <i class="flaticon-cancel-12"></i> Discard
            </button>
            <button type="button" @click="deletedStaff" class="btn btn-danger">
              Delete
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade register-modal show"
      id="registerModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="registerModalLabel"
      aria-modal="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="registerModalLabel">
            <h4 class="modal-title">Card</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
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
          <div class="modal-body" style="overflow: hidden">
            <img style="width: 100%; height: 65vh" :src="cardPreview" alt="" srcset="" />
          </div>
          <div class="modal-footer justify-content-center">
            <div class="forgot login-footer">
              <span>
                <a href="javascript:void(0);">
                  <button class="btn btn-danger px-3 mb-2 mr-2">
                    Download<svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-download"
                    >
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                  </button> </a
              ></span>
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
let a = document.createElement("css");
a.setAttribute("src", "assets/plugins/table/datatable/dt-global_style.css");
document.head.appendChild(a);

let b = document.createElement("script");
b.setAttribute("src", "assets/plugins/table/datatable/datatables.js");
document.head.appendChild(b);

export default {
  props: {
    staffs: Object,
  },
  components: {
    AppLayout,
    Welcome,
    Header,
  },

  data() {
    return {
      preview: null,
      preview2: null,
      cardPreview: null,
      isUpdate: null,
      form: {
        name: "",
        email: "",
        profile: null,
        PhoneNumber: "",
        role: "",
        scannedKebeleId: "",
        qr: "",
        user_id:"WOUR/",
        password: "",
        password_confirmation: "",
        shift_id: "",
      },
    };
  },
  methods: {
    previewImage: function (event) {
      var input = event.target;
      if (input.files) {
        var reader = new FileReader();
        reader.onload = (e) => {
          this.preview = e.target.result;
        };
        this.image = input.files[0];

        reader.readAsDataURL(input.files[0]);
      }
    },
    previewKebele: function (event) {
      var input = event.target;
      if (input.files) {
        var reader = new FileReader();
        reader.onload = (e) => {
          this.preview2 = e.target.result;
        };
        this.image = input.files[0];
        reader.readAsDataURL(input.files[0]);
      }
    },

    submit() {
      //  this.form.post(this.route('user.store'))
      Inertia.post(this.route("user.store"), this.form, {
        onBefore: (visit) => {},
        
        
        
        onError: (errors) => {},
        onCancel: () => {},

         onStart: (visit) => {
              $(".bd-example-modal-lg").modal("hide");
         document.querySelector('.myspinner').style.visibility="visible"
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
            title: "Info Successfully Updated",
            padding: "2em",
          });
        },
        onFinish: (visit) => {
  document.querySelector('.myspinner').style.visibility="hidden"

        },
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
    cardModal(data) {
      this.cardPreview = data;
    },
    editStaff(staff) {
      (this.isUpdate = staff.id), (this.form.name = staff.name);
      this.form.email = staff.email;
      this.form.PhoneNumber = staff.phoneNumber;
      this.form.password = staff.password;
      this.form.shift_id = staff.shift_id;
      this.form.user_id = staff.user_id;
      this.form.scannedKebeleId = staff.scannedKebeleId;
      this.form.role = staff.role;
      this.preview2 = staff.scanned_kebele_id;
      this.preview = staff.profile_photo_path;

      // this.form =  staff
    },
    AddModalTriger() {
      this.isUpdate = false;

      $(".bd-example-modal-lg").modal("show");
    },
    UpdateStaff1() {
      console.log("is ");

      Inertia.post(this.route("user.update", this.isUpdate), this.form, {
        onBefore: (visit) => {},
        onStart: (visit) => {},
        onProgress: (progress) => {},
        onSuccess: (page) => {
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
            title: "Info Successfully Updated",
            padding: "2em",
          });
        },
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => {},
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
    deleteStaff(staff) {
      this.isUpdate = staff.id;
    },

    deletedStaff() {
      $(".delete-modal").modal("hide");
      console.log("is deleting");
      Inertia.post(this.route("user.delete", this.isUpdate), this.form, {
        onBefore: (visit) => {},
        onStart: (visit) => {
          $.blockUI({
            message:
              '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin ml-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>',
            fadeIn: 800,
            timeout: 40000, //unblock after 2 seconds
            overlayCSS: {
              backgroundColor: "#1b2024",
              opacity: 0.8,
              zIndex: 1200,
              cursor: "wait",
            },
            css: {
              border: 0,
              color: "#fff",
              zIndex: 1201,
              padding: 0,
              backgroundColor: "transparent",
            },
          });
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
            title: "Info Successfully Updated",
            padding: "2em",
          });
        },
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => {
          console.log("is finished");

          document.querySelector(".blockOverlay").style.display = "none";
          document.querySelector(".blockMsg").style.display = "none";
        },
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
  },
};
</script>
