<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Events" mainTitle="Events" />
  <EventsContent />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import EventsContent from "../components/Events/EventsContent.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "EventsPage",
  components: {
    MainNavbar,
    PageTitle,
    EventsContent,
    MainFooter,
  },
});
</script>