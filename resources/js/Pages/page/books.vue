<template>
  <app-layout>
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="dataTables_length" id="style-3_length">
          <button @click="addModal" class="btn btn-primary">Add Book</button>
        </div>
        <div
          class="row layout-top-spacing"
          style="display: flex; justify-content: center"
        >
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
                          <div class="th-content th-heading">Amount</div>
                        </th>
                        <th>
                          <div class="th-content th-heading">Available</div>
                        </th>
                        <th>
                          <div class="th-content">Book ID</div>
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
                      <tr v-for="book in books" :key="book.id">
                        <td>
                          <div class="td-content product-name">
                            <img :src="'KIOT_BOOKS/' + book.tumb" alt="product" />
                            <div class="align-self-center">
                              <p class="prd-name">{{ book.title }}</p>
                              <p class="prd-category text-primary">Digital</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="td-content">
                            <span class="pricing"> {{ book.amount }} </span>
                          </div>
                        </td>
                        <td>
                          <div class="td-content">
                            <span class="discount-pricing"> {{ book.amount }} </span>
                          </div>
                        </td>
                        <td>
                          <span class="badge outline-badge-danger">
                            {{ book.book_id }}
                          </span>
                        </td>
                        <td>
                          <div class="btn-group mb-4 mr-2">
                            <button
                              :class="{
                                'btn-primary': book.status == 'Approved',
                                'btn-success': book.status == 'pending',
                                'btn-danger': book.status == 'Blocked',
                              }"
                              class="btn btn-sm dropdown-toggle"
                              type="button"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              {{ book.status }}
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
                                @click="ApproveBook(book.id)"
                                class="dropdown-item"
                                >Approved</a
                              >
                              <a
                                href="javascript:void(0);"
                                @click="UnapproveBook(book.id)"
                                class="dropdown-item"
                                >Blocked</a
                              >
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown">
                            <a
                              class="dropdown-toggle"
                              href="#"
                              role="button"
                              id="dropdownMenuLink6"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
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
                                class="feather feather-more-horizontal"
                              >
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>
                            <div
                              class="dropdown-menu"
                              aria-labelledby="dropdownMenuLink6"
                              style="will-change: transform"
                            >
                              <a
                                class="dropdown-item"
                                @click="editBook(book)"
                                data-toggle="modal"
                                data-target=".EditBookModal"
                                href="javascript:void(0);"
                                >Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                              
                              @click="deleteBook(book)"
                                >Delete</a
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

    <div
      class="modal fade bd-example-modal-lg show"
      id="AddBookModal"
      tabindex="-1"
      aria-labelledby="myLargeModalLabel"
      aria-modal="true"
      role="dialog"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Add Book</h5>
            <h3 class="text-danger">{{ $page.props.errors.temb }}</h3>
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
              <div class="row1">
                <div class="row">
                  <div class="col-md-6">
                    <div
                      class="text-danger text-center"
                      style="display: none; height: 20rem"
                      id="boodMessage"
                    >
                      Book Picture is requered
                    </div>
                    <video
                      id="video"
                      class=""
                      style="width: 100%; border: 3px solid #3659ff; border-radius: 10px"
                      autoplay
                    ></video>
                    <button class="btn btn-primary" id="snap">Snap Photo</button>
                  </div>
                  <div class="col-md-5">
                    <div
                      class=""
                      style="
                        width: 100%;
                        height: 17.5rem;
                        border: 3px solid #3659ff;
                        border-radius: 10px;
                      "
                    >
                      <img
                        src=""
                        id="image"
                        class="dddd"
                        style="width: 100%; heigth: 100%"
                      />
                      <canvas
                        id="canvas"
                        style="display: none"
                        width="640"
                        height="480"
                      ></canvas>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="exampleFormControlTextarea1" id="sss">Book Title</label>
                      <p class="text-danger">{{ $page.props.errors.title }}</p>
                      <input
                        type="text"
                        v-bind:class="{
                          'is-invalid': $page.props.errors.title,
                        }"
                        v-model="form.title"
                        class="form-control"
                        aria-describedby="emailHelp1"
                        placeholder="Book Title"
                      />
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="exampleFormControlTextarea1">Amount of Book</label>
                      <p class="text-danger">{{ $page.props.errors.amount }}</p>
                      <input
                        v-model="form.amount"
                        v-bind:class="{
                          'is-invalid': $page.props.errors.amount,
                        }"
                        type="number"
                        class="form-control"
                        aria-describedby="emailHelp1"
                        placeholder="Book Amount"
                      />
                    </div>

                    <label for="exampleFormControlTextarea1">Description</label>
                    <p class="text-danger">{{ $page.props.errors.desc }}</p>
                    <textarea
                      v-model="form.desc"
                      class="form-control"
                      v-bind:class="{
                        'is-invalid': $page.props.errors.desc,
                      }"
                      id="exampleFormControlTextarea1"
                      rows="4"
                    ></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal">
              <i class="flaticon-cancel-12"></i> Discard
            </button>
            <button
              type="button"
              id="submitButton"
              @click="bookSubmit"
              class="btn btn-primary"
            >
              Save
            </button>
           
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade EditBookModal show"
     
      tabindex="-1"
      aria-labelledby="myLargeModalLabel"
      aria-modal="true"
      role="dialog"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myLargeModalLabel">Edit Book</h5>
            <h3 class="text-danger">{{ $page.props.errors.temb }}</h3>
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
              <div class="row1">
                <div class="row">
                  <div class="col-md-6">
                    <div
                      class="text-danger text-center"
                      style="display: none; height: 20rem"
                      id="boodMessage"
                    >
                      Book Picture is requered
                    </div>
                    <video
                      id="video1"
                      class=""
                      style="width: 100%; border: 3px solid #3659ff; border-radius: 10px"
                      autoplay
                    ></video>
                    <button class="btn btn-primary" id="snap1">Snap Photo</button>
                  </div>
                  <div class="col-md-5">
                    <div
                      class=""
                      style="
                        width: 100%;
                        height: 17.5rem;
                        border: 3px solid #3659ff;
                        border-radius: 10px;
                      "
                    >
                      <img
                        src=""
                        id="image1"
                        class="dddd"
                        style="width: 100%; heigth: 100%"
                      />
                      <canvas
                        id="canvas1"
                        style="display: none"
                        width="640"
                        height="480"
                      ></canvas>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="exampleFormControlTextarea1" id="sss">Book Title</label>
                      <p class="text-danger">{{ $page.props.errors.title }}</p>
                      <input
                        type="text"
                        v-bind:class="{
                          'is-invalid': $page.props.errors.title,
                        }"
                        v-model="form.title"
                        class="form-control"
                        aria-describedby="emailHelp1"
                        placeholder="Book Title"
                      />
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="exampleFormControlTextarea1">Amount of Book</label>
                      <p class="text-danger">{{ $page.props.errors.amount }}</p>
                      <input
                        v-model="form.amount"
                        v-bind:class="{
                          'is-invalid': $page.props.errors.amount,
                        }"
                        type="number"
                        class="form-control"
                        aria-describedby="emailHelp1"
                        placeholder="Book Amount"
                      />
                    </div>

                    <label for="exampleFormControlTextarea1">Description</label>
                    <p class="text-danger">{{ $page.props.errors.desc }}</p>
                    <textarea
                      v-model="form.desc"
                      class="form-control"
                      v-bind:class="{
                        'is-invalid': $page.props.errors.desc,
                      }"
                      id="exampleFormControlTextarea1"
                      rows="4"
                    ></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal">
              <i class="flaticon-cancel-12"></i> Discard
            </button>
            
            <button
              type="button"
              id="updateButton"
              
              @click="bookUpdate"
              class="btn btn-primary"
            >
              Update
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade profile-modal " id="profileModal" tabindex="-1" 
    aria-labelledby="profileModalLabel"  aria-modal="true" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>

          <div class="modal-header justify-content-center" id="profileModalLabel">
            <div class="modal-profile  mt-4" style="width:5rem; height:5rem; overflow:hidden; ">
                <img alt="avatar" src="" style="width:100%; height:100%; " id="deleteModalImage" class="rounded-circle">
            </div>
          </div>
          <div class="modal-body text-center">
                <p class="mt-2">Are you sure want to delete this book permanently </p>
          </div>
          <div class="modal-footer justify-content-center mb-4">
            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
              <button type="button" class="btn btn-danger" @click="DestroyBook" >
              <div id='bookDeleteSpinner' class=" d-none spinner-border text-white mr-2 align-self-center loader-sm "></div>
              Delete</button>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<style scoped>
.br-red {
  border: 3px solid red !important;
}
</style>
<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import Header from "@/includes/header.vue";
import { Inertia } from "@inertiajs/inertia";
export default {
  props: {
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
      image: "",
      idUpdate: "",
      take: "",
      form: {
        tumb: "",
        amount: "",
        desc: "",
        title: "",
      },
    };
  },
  methods: {
    addModal() {
      document.querySelector("#updateButton").style.display = "none";
      document.querySelector("#submitButton").style.display = "block";
      $(".bd-example-modal-lg").modal("show");

      var video = document.getElementById("video");

      // Get access to the camera!
      if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function (stream) {
          //video.src = window.URL.createObjectURL(stream);
          video.srcObject = stream;
          video.play();
        });
      }

      var canvas = document.getElementById("canvas");
      var context = canvas.getContext("2d");
      var video = document.getElementById("video");
      canvas.style.width = "100%";
      canvas.style.height = "100%";

      // Trigger photo take
      document.getElementById("snap").addEventListener("click", function () {
        context.drawImage(video, 0, 0, 640, 480);

        var canvasData = canvas.toDataURL("image/png");
        this.image = canvas.toDataURL("image/png");
        document.getElementById("image").style.height = "100%";
        document.getElementById("image").src = this.image;
        this.image = canvas.toDataURL("image/png");
        var d = document.getElementById("video");

        this.take = true;
        console.log(this.take);
      });
    },
    bookUpdate() {
     var canvas = document.getElementById("canvas1");
      var context = canvas.getContext("2d");
      var video = document.getElementById("video1");
      canvas.style.width = "100%";
      canvas.style.height = "100%";

      // Trigger photo take
      
        context.drawImage(video, 0, 0, 640, 480);

        var canvasData = canvas.toDataURL("image/png");
   this.form.tumb = canvas.toDataURL("image/png");
  Inertia.post(route("book-update", this.isUpdate), this.form, {
onFinish(){
  $('.EditBookModal').modal('hide')
    const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "success",
            title: "Book Successfully Updated",
            padding: "2em",
          });
}

  });
       
    },
    UnapproveBook(id) {
      Inertia.get(this.route("block-unapprove", id), this, {
        onBefore: (visit) => {},
        onStart: (visit) => {
          document.querySelector(".myspinner").style.visibility = "visible";
        },
        onProgress: (progress) => {},
        onSuccess: (page) => {
          document.querySelector(".myspinner").style.visibility = "hidden";
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "success",
            title: "Book Successfully Blocked",
            padding: "2em",
          });
        },
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => {},
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
    ApproveBook(id) {
      Inertia.get(this.route("approve-book", id), this, {
        onBefore: (visit) => {},
        onStart: (visit) => {
          document.querySelector(".myspinner").style.visibility = "visible";
        },
        onProgress: (progress) => {},
        onSuccess: (page) => {
          document.querySelector(".myspinner").style.visibility = "hidden";
          const toast = swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            padding: "2em",
          });
          toast({
            type: "success",
            title: "Book Successfully Approved",
            padding: "2em",
          });
        },
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => {},
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
    bookSubmit() {
      var i = document.querySelector(".dddd");
      console.log(i.src);

      var canvas = document.getElementById("canvas");
      var canvasData = canvas.toDataURL("image/png");
      this.form.tumb = canvasData;

      Inertia.post(this.route("add-book", this.isUpdate), this.form, {
        onBefore: (visit) => {},
        onStart: (visit) => {},
        onProgress: (progress) => {},
        onSuccess: (page) => {
          $(AddBookModal).modal("hide");
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
        },
        onError: (errors) => {},
        onCancel: () => {},
        onFinish: (visit) => {},
        preserveState: (page) => Object.keys(page.props.errors).length,
      });
    },
    onFileChange(e) {
      setTimeout(function () {
        console.log("is ssssss");
      }, 3000);

      const file = e.target.files[0];
      this.url = URL.createObjectURL(file);
      console.log("is in ti");
    },

    editBook(book) {
  
      
      this.isUpdate = book.id;
      var str = "KIOT_BOOKS/";
      document.querySelector("#image1").src = str + book.tumb;
      this.form.title = book.title;
      this.form.amount = book.amount;
      this.form.desc = book.description;
      this.image = book.tumb;
      console.log(this.image);

       var video = document.getElementById("video1");

      // Get access to the camera!
      if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ video: true }).then(function (stream) {
          //video.src = window.URL.createObjectURL(stream);
          video.srcObject = stream;
          video.play();
        });
      }

      var canvas = document.getElementById("canvas1");
      var context = canvas.getContext("2d");
      var video = document.getElementById("video1");
      canvas.style.width = "100%";
      canvas.style.height = "100%";

      // Trigger photo take
      document.getElementById("snap1").addEventListener("click", function () {
        context.drawImage(video, 0, 0, 640, 480);

        var canvasData = canvas.toDataURL("image/png");
        this.image = canvas.toDataURL("image/png");
        document.getElementById("image1").style.height = "100%";
             
        document.getElementById("image1").src = this.image;
    
        this.image = canvas.toDataURL("image/png");
        var d = document.getElementById("video1");

        this.take = true;
    
      });
    },
    deleteBook(book){
this.isUpdate = book.id;
$('#profileModal').modal('show')
document.getElementById('deleteModalImage').src = "KIOT_BOOKS/"+book.tumb
    },

    DestroyBook(){
      $('#profileModal').modal('hide')
Inertia.get(route('book-destroy', this.isUpdate), {
  onStart(){
    

  },
  
   onSuccess: (page) => {
          $(AddBookModal).modal("hide");
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
 


})
    }
  },
  mounted() {},
};
</script>
