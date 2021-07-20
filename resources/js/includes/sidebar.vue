<template>
    <div
        class="sidebar-wrapper sidebar-theme"
        style="margin-top: -2.1rem; height: 100% !important"
    >
        <nav id="sidebar">
            <ul class="navbar-nav theme-brand flex-row text-center">
                <li class="nav-item theme-text">
                    <a href="index-2.html" class="nav-link"> wollo Universi </a>
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
                                <path
                                    d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                                ></path>
                                <polyline
                                    points="9 22 9 12 15 12 15 22"
                                ></polyline>
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

               
                <li class="menu">
                    <inertia-link :href="route('librarist')"
                        aria-expanded="false"
                        class="dropdown-toggle"
                    >
                        <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Staff </span>
                        </div>
                    </inertia-link>
                </li>

                <li class="menu">
                    <a
                        href="apps_notes.html"
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
                                class="feather feather-file-text"
                            >
                                <path
                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                ></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                            <span>Notes</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a
                        href="apps_scrumboard.html"
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
                                class="feather feather-file-plus"
                            >
                                <path
                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                ></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="12" y1="18" x2="12" y2="12"></line>
                                <line x1="9" y1="15" x2="15" y2="15"></line>
                            </svg>
                            <span>Scrumboard</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a
                        href="apps_contacts.html"
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
                                class="feather feather-map-pin"
                            >
                                <path
                                    d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"
                                ></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a
                        href="#invoice"
                        data-toggle="collapse"
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
                                class="feather feather-dollar-sign"
                            >
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path
                                    d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                                ></path>
                            </svg>
                            <span>Invoice</span>
                        </div>
                        <div>
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
                                class="feather feather-chevron-right"
                            >
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul
                        class="collapse submenu list-unstyled"
                        id="invoice"
                        data-parent="#accordionExample"
                    >
                        <li>
                            <a href="apps_invoice-list.html"> List </a>
                        </li>
                        <li>
                            <a href="apps_invoice-preview.html"> Preview </a>
                        </li>
                        <li>
                            <a href="apps_invoice-add.html"> Add </a>
                        </li>
                        <li>
                            <a href="apps_invoice-edit.html"> Edit </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a
                        href="apps_calendar.html"
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
                                class="feather feather-calendar"
                            >
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="18"
                                    rx="2"
                                    ry="2"
                                ></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span>Calendar</span>
                        </div>
                    </a>
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
export default {};
</script>

<style></style>
