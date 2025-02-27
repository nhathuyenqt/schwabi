<template>
  <TopBar />
  <MainNavbar class="edu-navbar-area2" />
  <MainBanner />
  <CourseCategories />
  <AboutUs />
  <FeaturedCourses />
  <FunFacts />
  <VideoContent />
  <WhyChooseUs />
  <OurGreatAchievement />
  <OurBlogs />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import TopBar from "../components/Layouts/TopBar.vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import MainBanner from "../components/HomeTwo/MainBanner.vue";
import CourseCategories from "../components/HomeTwo/CourseCategories.vue";
import AboutUs from "../components/HomeTwo/AboutUs.vue";
import FeaturedCourses from "../components/HomeTwo/FeaturedCourses.vue";
import FunFacts from "../components/HomeTwo/FunFacts.vue";
import VideoContent from "../components/HomeTwo/VideoContent.vue";
import WhyChooseUs from "../components/HomeTwo/WhyChooseUs.vue";
import OurGreatAchievement from "../components/HomeTwo/OurGreatAchievement.vue";
import OurBlogs from "../components/Common/OurBlogs.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "HomeTwoPage",
  components: {
    TopBar,
    MainNavbar,
    MainBanner,
    CourseCategories,
    AboutUs,
    FeaturedCourses,
    FunFacts,
    VideoContent,
    WhyChooseUs,
    OurGreatAchievement,
    OurBlogs,
    MainFooter,
  },
});
</script>