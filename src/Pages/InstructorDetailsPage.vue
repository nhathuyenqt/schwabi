<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Coralina Cloud" mainTitle="About Instructor" />
  <InstructorDetails />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import InstructorDetails from "../components/InstructorDetails/InstructorDetails.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "InstructorDetailsPage",
  components: {
    MainNavbar,
    PageTitle,
    InstructorDetails,
    MainFooter,
  },
});
</script>