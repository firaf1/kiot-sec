<template>
  <div
    class="sidebar-wrapper sidebar-theme"
    style="margin-top: -2.1rem; height: 100% !important"
  >
    <nav id="sidebar">
      <ul class="navbar-nav theme-brand flex-row text-center">
        <li class="nav-item theme-text">
          <a href="index-2.html" class="nav-link"> wollo University </a>
        </li>
        <li class="nav-item toggle-sidebar">
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
            class="feather sidebarCollapse feather-chevrons-left"
          >
            <polyline points="11 17 6 12 11 7"></polyline>
            <polyline points="18 17 13 12 18 7"></polyline>
          </svg>
        </li>
      </ul>
      <div class="shadow-bottom"></div>
      <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu active">
          <inertia-link
            :href="route('dashboard')"
            data-toggle="collapse"
            aria-expanded="true"
            class="dropdown-toggle"
          >
            <div class="">
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
                class="feather feather-home"
              >
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              <span>Dashboard</span>
            </div>
          </inertia-link>
        </li>

        <li class="menu menu-heading">
          <div class="heading">
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
              class="feather feather-circle"
            >
              <circle cx="12" cy="12" r="10"></circle></svg
            ><span>APPS</span>
          </div>
        </li>

        <li class="menu" v-if="$page.props.user.role == 'admin'">
          <inertia-link
            :href="route('librarist')"
            aria-expanded="false"
            class="dropdown-toggle"
          >
            <div class="">
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
                class="feather feather-briefcase"
              >
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              </svg>
              <span>Staff </span>
            </div>
          </inertia-link>
        </li>

        <li class="menu" v-if="$page.props.user.role == 'admin'">
          <inertia-link
            :href="route('student')"
            aria-expanded="false"
            class="dropdown-toggle"
          >
            <div class="">
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
                class="feather feather-users"
              >
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              <span>Student </span>
            </div>
          </inertia-link>
        </li>
        <li class="menu" v-if="$page.props.user.role == 'admin'">
          <inertia-link
            :href="route('books')"
            aria-expanded="false"
            class="dropdown-toggle"
          >
            <div class="">
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
                class="feather feather-book-open"
              >
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
              </svg>
              <span>Books </span>
            </div>
          </inertia-link>
        </li>
        <li class="menu">
          <inertia-link :href="route('book-borrow')" aria-expanded="false" class="dropdown-toggle">
            <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
              <span>Approved Book</span>
            </div>
          </inertia-link >
        </li>
  <li class="menu" v-if="$page.props.user.role == 'staff'">
          <inertia-link :href="route('borrow')" aria-expanded="false" class="dropdown-toggle">
            <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
              <span>Borrow</span>
            </div>
          </inertia-link >
        </li>
        
  <li class="menu" v-if="$page.props.user.role == 'staff'">
          <inertia-link :href="route('ReturnBookIn')" aria-expanded="false" class="dropdown-toggle">
            <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
              <span>Return</span>
            </div>
          </inertia-link >
        </li>
 
  <li class="menu" v-if="$page.props.user.role != 'student'">
          <inertia-link :href="route('frontWelcome1')" aria-expanded="false" class="dropdown-toggle">
            <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
              <span>Front-Welcome</span>
            </div>
          </inertia-link >
        </li>

        <li class="menu" >
          <inertia-link :href="route('developer1')"   class="dropdown-toggle">
            <div class="">
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
                class="feather feather-map-pin"
              >
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              <span>Developer</span>
            </div>
          </inertia-link>
        </li>
 

        <li class="menu menu-heading">
          <div class="heading">
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
              class="feather feather-circle"
            >
              <circle cx="12" cy="12" r="10"></circle></svg
            ><span>USER INTERFACE</span>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  props: {
    user: Object,
  },
  data() {
    return {
      role: "",
    };
  },
  mounted() {},
};
</script>

<style></style>
