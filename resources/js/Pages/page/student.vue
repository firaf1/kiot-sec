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
                      ></div>
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
                            Department
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
                            <span class="badge outline-badge-primary">
                              {{ staff.department }}
                            </span>
                          </td>
                          <td class="text-center">
                            <div
                              class="btn-group mb-4 mr-2"
                              v-if="staff.status == 'pending'"
                            >
                              <button
                                class="btn btn-success btn-sm dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Pending
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
                                <a
                                  href="javascript:void(0);"
                                  class="dropdown-item"
                                  @click="ApprovedStudent(staff.id)"
                                  >Approved</a
                                >
                                <a
                                  href="javascript:void(0);"
                                  class="dropdown-item"
                                  @click="BlockedStudent(staff.id)"
                                  >Blocked</a
                                >
                              </div>
                            </div>

                            <div
                              class="btn-group mb-4 mr-2"
                              v-if="staff.status == 'Approved'"
                            >
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
                                <a
                                  href="javascript:void(0);"
                                  @click="ApprovedStudent(staff.id)"
                                  class="dropdown-item"
                                  >Approved</a
                                >
                                <a
                                  href="javascript:void(0);"
                                  class="dropdown-item"
                                  @click="BlockedStudent(staff.id)"
                                  >Blocked</a
                                >
                              </div>
                            </div>

                            <div
                              class="btn-group mb-4 mr-2"
                              v-if="staff.status == 'Blocked'"
                            >
                              <button
                                class="btn btn-danger btn-sm dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                Blocked
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
                                <a
                                  href="javascript:void(0);"
                                  class="dropdown-item"
                                  @click="ApprovedStudent(staff.id)"
                                  >Approved</a
                                >
                                <a
                                  href="javascript:void(0);"
                                  class="dropdown-item"
                                  @click="BlockedStudent(staff.id)"
                                  >Blocked</a
                                >
                              </div>
                            </div>
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
        onStart: (visit) => {},
        onProgress: (progress) => {},
        onSuccess: (page) => {},
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => {},
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

      Inertia.post(this.route("student.update", this.isUpdate), this.form, {
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

    ApprovedStudent(id) {
      Inertia.post(this.route("students.approved", id), this.form, {
        onStart: (visit) => {
          console.log("is start");
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
            title: "Successfully Approved",
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
            title: "Ops! something went wrong",
            padding: "2em",
          });
        },

        onFinish: (visit) => {
          document.querySelector(".blockOverlay").style.display = "none";
          document.querySelector(".blockMsg").style.display = "none";
        },
      });
    },

    BlockedStudent(id) {
      Inertia.post(this.route("student.Blocked", id), this.form, {
        onStart: (visit) => {
          console.log("is start");
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
            title: "Successfully Blocked",
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
            title: "Ops! something went wrong",
            padding: "2em",
          });
        },

        onFinish: (visit) => {
          document.querySelector(".blockOverlay").style.display = "none";
          document.querySelector(".blockMsg").style.display = "none";
        },
      });
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
          document.querySelector(".blockOverlay").style.display = "none";
          document.querySelector(".blockMsg").style.display = "none";
        },
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
  },
};
</script>
