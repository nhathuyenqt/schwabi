<template>
  <MainNavbar />
  <MainBanner />
  <BrandsContent />
  <AboutUs />
  <PopularCourses />
  <TeamMember />
  <OurTestimonial />
  <UpcomingEvents />
  <BuildYourCareer />
  <FAQ />
  <OurBlogs />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import MainBanner from "../components/HomeThree/MainBanner.vue";
import BrandsContent from "../components/HomeThree/BrandsContent.vue";
import AboutUs from "../components/HomeThree/AboutUs.vue";
import PopularCourses from "../components/HomeThree/PopularCourses.vue";
import TeamMember from "../components/HomeThree/TeamMember.vue";
import OurTestimonial from "../components/HomeThree/OurTestimonial.vue";
import UpcomingEvents from "../components/HomeThree/UpcomingEvents.vue";
import BuildYourCareer from "../components/HomeThree/BuildYourCareer.vue";
import FAQ from "../components/HomeThree/FAQ.vue";
import OurBlogs from "../components/Common/OurBlogs.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "HomeThreePage",
  components: {
    MainNavbar,
    MainBanner,
    BrandsContent,
    AboutUs,
    PopularCourses,
    TeamMember,
    OurTestimonial,
    UpcomingEvents,
    BuildYourCareer,
    FAQ,
    OurBlogs,
    MainFooter,
  },
});
</script>