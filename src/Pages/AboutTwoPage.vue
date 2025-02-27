<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="About Us" mainTitle="About Us 2" />
  <AboutUs />
  <PopularTopics />
  <BestOnlineLearningPlatform />
  <BuildYourCareer />
  <VideoContent />
  <TeamMembers />
  <SubscribeNewsletter />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import AboutUs from "../components/AboutTwo/AboutUs.vue";
import PopularTopics from "../components/AboutTwo/PopularTopics.vue";
import BestOnlineLearningPlatform from "../components/AboutTwo/BestOnlineLearningPlatform.vue";
import BuildYourCareer from "../components/AboutTwo/BuildYourCareer.vue";
import VideoContent from "../components/AboutTwo/VideoContent.vue";
import TeamMembers from "../components/AboutTwo/TeamMembers.vue";
import SubscribeNewsletter from "../components/AboutTwo/SubscribeNewsletter.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "AboutTwoPage",
  components: {
    MainNavbar,
    PageTitle,
    AboutUs,
    PopularTopics,
    BestOnlineLearningPlatform,
    BuildYourCareer,
    VideoContent,
    TeamMembers,
    SubscribeNewsletter,
    MainFooter,
  },
});
</script>