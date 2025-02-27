<template>
  <div class="edu-testimonial-area sectionBg12 ptb-100">
    <div class="container">
      <div class="edu-testimonial-navigator">
        <carousel
          :autoplay="5000"
          :settings="settings"
          :wrap-around="true"
          :breakpoints="breakpoints"
        >
          <slide v-for="slide in carouselItems" :key="slide.id">
            <div class="edu-testimonial-navigator-item align-items-center">
              <div class="edu-testimonial-image">
                <img :src="slide.image" alt="image" />
              </div>
              <div class="edu-testimonial-nav-content">
                <p class="sub-title">{{ slide.subTitle }}</p>
                <h2>
                  {{ slide.heading }}
                  <span class="shape02">Feedback</span>
                </h2>
                <h3>{{ slide.title }}</h3>
                <p>
                  {{ slide.desc }}
                </p>
                <span class="client-name">
                  {{ slide.name }}
                </span>
                <span class="client-title">
                  {{ slide.designation }}
                </span>
              </div>
            </div>
          </slide>

          <template #addons>
            <navigation>
              <template #next>
                <i class="bx bx-right-arrow-alt"></i>
              </template>
              <template #prev>
                <i class="bx bx-left-arrow-alt"></i>
              </template>
            </navigation>
          </template>
        </carousel>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Slide, Navigation } from "vue3-carousel";

export default defineComponent({
  name: "OurTestimonial",
  components: {
    Carousel,
    Slide,
    Navigation,
  },
  data: () => ({
    carouselItems: [
      {
        id: 1,
        image: require("../../assets/img/all-img/t1.png"),
        subTitle: "Testimonial",
        heading: "Our Tallented Students Valuable",
        title: "“It’s Truly The Best Solution For Me”",
        desc: "There are many variations of passages of Lorem Ipsum available, but the majority have suffered.",
        name: "Alfred Helmerich",
        designation: "Executive Training Manager",
      },
      {
        id: 2,
        image: require("../../assets/img/all-img/t1.png"),
        subTitle: "Testimonial",
        heading: "Our Tallented Students Valuable",
        title: "“Get The Best Advice Form Our Teachers”",
        desc: "There are many variations of passages of Lorem Ipsum available, but the majority Lorem ipsum dolor sit amet consectetur adipisicing elit Illum voluptatibus have suffered.",
        name: "Alfred Helmerich",
        designation: "Executive Training Manager",
      },
    ],
    settings: {
      itemsToShow: 1,
      snapAlign: "center",
    },
  }),
});
</script>