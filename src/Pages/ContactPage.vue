<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Contact Us" mainTitle="Contact Us" />
  <ContactUs />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import ContactUs from "../components/Contact/ContactUs.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "ContactPage",
  components: {
    MainNavbar,
    PageTitle,
    ContactUs,
    MainFooter,
  },
});
</script>