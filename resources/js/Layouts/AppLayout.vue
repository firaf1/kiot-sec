<template>
  <div>
    <div class="">
      <div id="load_screen">
        <div class="loader">
          <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
          </div>
        </div>
      </div>
      <Header />
      <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <Sidebar />
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
import JetApplicationMark from "@/Jetstream/ApplicationMark";
import JetBanner from "@/Jetstream/Banner";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import JetNavLink from "@/Jetstream/NavLink";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink";
import Header from "../includes/header.vue";
import Sidebar from "../includes/sidebar.vue";

export default {
  components: {
    JetApplicationMark,
    JetBanner,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    JetResponsiveNavLink,
    Header,
    Sidebar,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    };
  },

  methods: {
    switchToTeam(team) {
      this.$inertia.put(
        route("current-team.update"),
        {
          team_id: team.id,
        },
        {
          preserveState: false,
        }
      );
    },

    logout() {
      this.$inertia.post(route("logout"));
    },
  },
};
</script>
