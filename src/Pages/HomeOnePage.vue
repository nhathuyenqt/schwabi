<template>
  <MainNavbar />
  <MainBanner />
  <AboutUs />
  <TrustedByBrands />
  <CoreFeatures />
  <PopularCourses />
  <BestOnlineLearningPlatform />
  <SubscribeNewsletter />
  <PopularTopics />
  <FunFacts />
  <TestimonialContent />
  <TeamMembers />
  <OurBlogs />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import MainBanner from "../components/HomeOne/MainBanner.vue";
import AboutUs from "../components/HomeOne/AboutUs.vue";
import TrustedByBrands from "../components/HomeOne/TrustedByBrands.vue";
import CoreFeatures from "../components/HomeOne/CoreFeatures.vue";
import PopularCourses from "../components/HomeOne/PopularCourses.vue";
import BestOnlineLearningPlatform from "../components/HomeOne/BestOnlineLearningPlatform.vue";
import SubscribeNewsletter from "../components/HomeOne/SubscribeNewsletter.vue";
import PopularTopics from "../components/HomeOne/PopularTopics.vue";
import FunFacts from "../components/HomeOne/FunFacts.vue";
import TestimonialContent from "../components/HomeOne/TestimonialContent.vue";
import TeamMembers from "../components/HomeOne/TeamMembers.vue";
import OurBlogs from "../components/HomeOne/OurBlogs.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "HomeOnePage",
  components: {
    MainNavbar,
    MainBanner,
    AboutUs,
    TrustedByBrands,
    CoreFeatures,
    PopularCourses,
    BestOnlineLearningPlatform,
    SubscribeNewsletter,
    PopularTopics,
    FunFacts,
    TestimonialContent,
    TeamMembers,
    OurBlogs,
    MainFooter,
  },
});
</script>