<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Instructor" mainTitle="Instructor 2" />
  <TeamMembers />
  <TestimonialContent />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import TeamMembers from "../components/InstructorTwo/TeamMembers.vue";
import TestimonialContent from "../components/InstructorTwo/TestimonialContent.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "InstructorTwoPage",
  components: {
    MainNavbar,
    PageTitle,
    TeamMembers,
    TestimonialContent,
    MainFooter,
  },
});
</script>