<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Painting Contest 2024" mainTitle="Events Details" />
  <EventsDetails />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import EventsDetails from "../components/EventsDetails/EventsDetails.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "EventsDetailsPage",
  components: {
    MainNavbar,
    PageTitle,
    EventsDetails,
    MainFooter,
  },
});
</script>