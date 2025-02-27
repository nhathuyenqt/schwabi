<template>
  <div class="edu-courses-area sectionBg11 ptb-100">
    <div class="container">
      <div class="edu-section-title text-start">
        <p class="sub-title">Popular Courses</p>
        <h2>Choose Our Top <span class="shape02">Courses</span></h2>
        <div class="sorting-menu">
          <ul>
            <li
              class="filter"
              :class="{ active: itemFilterKey == 'all' }"
              @click="itemFilterKey = 'all'"
            >
              See All
            </li>
            <li
              class="filter"
              :class="{ active: itemFilterKey == 'marketing' }"
              @click="itemFilterKey = 'marketing'"
            >
              Marketing
            </li>
            <li
              class="filter"
              :class="{ active: itemFilterKey == 'design' }"
              @click="itemFilterKey = 'design'"
            >
              Design
            </li>
            <li
              class="filter"
              :class="{ active: itemFilterKey == 'finance' }"
              @click="itemFilterKey = 'finance'"
            >
              Finance
            </li>
          </ul>
        </div>
      </div>
      <div class="edu-mix-wrapper">
        <div class="row justify-content-center">
          <div
            class="col-lg-4 col-md-6 col-sm-6"
            v-for="item in itemFilter"
            :key="item.id"
          >
            <div class="single-courses-box">
              <div class="image">
                <router-link to="/courses-details" class="d-block">
                  <img :src="item.image" alt="image" />
                </router-link>
                <div class="cr-tag">
                  <router-link to="/courses">
                    <span>{{ item.category }}</span>
                  </router-link>
                </div>
              </div>
              <div class="content">
                <span class="cr-price">${{ item.price }}</span>
                <h3>
                  <router-link to="/courses-details">
                    {{ item.title }}
                  </router-link>
                </h3>
                <ul class="cr-items">
                  <li>
                    <i class="bx bx-food-menu"></i>
                    <span>{{ item.lessons }} Lessons</span>
                  </li>
                  <li>
                    <i class="bx bx-time-five"></i>
                    <span>{{ item.time }}</span>
                  </li>
                  <li>
                    <i class="bx bx-star"></i>
                    <span>{{ item.review }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="section-button">
            <router-link to="/courses" class="default-btn">
              View All Courses
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PopularCourses",
  data() {
    return {
      itemFilterKey: "all",
      items: [
        {
          id: 1,
          image: require("../../assets/img/all-img/c1.png"),
          category: "Development",
          price: "80",
          title: "Financial Security Thinking and Principles Theory",
          lessons: "2",
          time: "4h 30m",
          review: "4.5",
          key: "marketing",
        },
        {
          id: 2,
          image: require("../../assets/img/all-img/c2.png"),
          category: "Art",
          price: "95",
          title: "Basic Fundamentals of Interior & Graphics Design",
          lessons: "2",
          time: "4h 30m",
          review: "4.5",
          key: "finance",
        },
        {
          id: 3,
          image: require("../../assets/img/all-img/c3.png"),
          category: "Design",
          price: "25.55",
          title: "Increasing Engagement with Instagram & Facebook",
          lessons: "2",
          time: "4h 30m",
          review: "4.5",
          key: "design",
        },
        {
          id: 4,
          image: require("../../assets/img/all-img/c4.png"),
          category: "Drawing",
          price: "28.05",
          title: "Introduction to Color Theory & Basic UI/UX",
          lessons: "2",
          time: "4h 30m",
          review: "4.5",
          key: "finance",
        },
        {
          id: 5,
          image: require("../../assets/img/all-img/c5.png"),
          category: "Technology",
          price: "22.55",
          title: "Financial Security Thinking and Principles Theory",
          lessons: "2",
          time: "4h 30m",
          review: "4.5",
          key: "design",
        },
        {
          id: 6,
          image: require("../../assets/img/all-img/c6.png"),
          category: "Data Science",
          price: "35.05",
          title: "Free Logo Design: From Concept to Presentation",
          lessons: "2",
          time: "4h 30m",
          review: "4.5",
          key: "marketing",
        },
      ],
    };
  },
  computed: {
    itemFilter() {
      if (this.itemFilterKey === "all") {
        return this.items;
      } else {
        return this.items.filter((item) => item.key === this.itemFilterKey);
      }
    },
    all() {
      return this.items;
    },
    development() {
      return this.items.filter((item) => item.key == "marketing");
    },
    design() {
      return this.items.filter((item) => item.key == "design");
    },
    marketing() {
      return this.items.filter((item) => item.key == "finance");
    },
  },
};
</script>