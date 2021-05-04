<template>
    <div>
        <Sidebar/>
        <div class="relative md:ml-64 bg-blueGray-100">
            <AdminNavbar :description="description" :routeLink="routeLink"/>
            <HeaderStats/>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <slot></slot>
                <FooterAdmin/>
            </div>
        </div>
    </div>
</template>
<script>
import AdminNavbar from "@/Components/Navbars/AdminNavbar.vue";
import Sidebar from "@/Components/Sidebar/Sidebar.vue";
import HeaderStats from "@/Components/Headers/HeaderStats.vue";
import FooterAdmin from "@/Components/Footers/FooterAdmin.vue";

export default {
  name: "admin-layout",
  props: {
    description: {
      type: String,
      default: "Dashboard",
    },
    routeLink: {
      type: String,
      default: "dashboard",
    },
  },
  components: {
    AdminNavbar,
    Sidebar,
    HeaderStats,
    FooterAdmin,
  },
};
</script>
