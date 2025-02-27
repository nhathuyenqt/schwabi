<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="About Us" mainTitle="About Us" />
  <AboutUs />
  <CoreFeatures />
  <FunFacts />
  <TestimonialContent />
  <TeamMembers />
  <FAQ />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import AboutUs from "../components/About/AboutUs.vue";
import CoreFeatures from "../components/About/CoreFeatures.vue";
import FunFacts from "../components/About/FunFacts.vue";
import TestimonialContent from "../components/About/TestimonialContent.vue";
import TeamMembers from "../components/About/TeamMembers.vue";
import FAQ from "../components/About/FAQ.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "AboutPage",
  components: {
    MainNavbar,
    PageTitle,
    AboutUs,
    CoreFeatures,
    FunFacts,
    TestimonialContent,
    TeamMembers,
    FAQ,
    MainFooter,
  },
});
</script>