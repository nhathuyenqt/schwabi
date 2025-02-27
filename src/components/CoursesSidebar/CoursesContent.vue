<template>
  <div class="edu-courses-area pt-70 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row justify-content-center">
            <div class="edu-grid-sorting">
              <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 result-count">
                  <router-link
                    to="/courses-sidebar"
                    class="courbtn active-courbtn"
                  >
                    <i class="bx bx-grid-alt"></i>
                  </router-link>
                  <router-link to="/courses-list" class="courbtn">
                    <i class="bx bx-list-ul"></i>
                  </router-link>
                  <p>Showing 12 Courses of 52</p>
                </div>
                <div class="col-lg-4 col-md-6 ordering">
                  <div class="select-box">
                    <label></label>
                    <select>
                      <option>Sort By: Popularity</option>
                      <option>Popularity</option>
                      <option>Another option</option>
                      <option>Potato</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c1.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Development</span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$10</span>
                  <h3>
                    <router-link to="/courses-details">
                      Financial Security Thinking and Principles Theory
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>2.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c2.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Art & Design </span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$18.27</span>
                  <h3>
                    <router-link to="/courses-details">
                      Basic Fundamentals of Interior & Graphics Design
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c3.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Art & Design </span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$20.07</span>
                  <h3>
                    <router-link to="/courses-details">
                      Increasing Engagement with Instagram & Facebook
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>2.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c4.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Art & Design </span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$19</span>
                  <h3>
                    <router-link to="/courses-details">
                      Increasing Engagement with Instagram & Facebook
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>4.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c3.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Drawing</span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$40.23</span>
                  <h3>
                    <router-link to="/courses-details">
                      Introduction to Color Theory & Basic UI/UX
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>3.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c4.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Drawing</span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$21.50</span>
                  <h3>
                    <router-link to="/courses-details">
                      Introduction to Color Theory & Basic UI/UX
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>1.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c5.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Technology</span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$89</span>
                  <h3>
                    <router-link to="/courses-details">
                      Financial Security Thinking and Principles Theory
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>1.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-courses-box">
                <div class="image">
                  <router-link to="/courses-details" class="d-block">
                    <img src="../../assets/img/all-img/c6.png" alt="image" />
                  </router-link>
                  <div class="cr-tag">
                    <a href="#"><span>Data Science</span></a>
                  </div>
                </div>
                <div class="content">
                  <span class="cr-price">$50.55</span>
                  <h3>
                    <router-link to="/courses-details">
                      Free Logo Design: From Concept to Presentation
                    </router-link>
                  </h3>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-food-menu"></i> <span>2 Lessons</span>
                    </li>
                    <li><i class="bx bx-time-five"></i> <span>4h 30m</span></li>
                    <li><i class="bx bx-star"></i> <span>2.5</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="section-button">
              <a href="#" class="default-btn">
                Load More
                <i class="bx bx-revision"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <CoursesSidebar />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import CoursesSidebar from "./CoursesSidebar.vue";

export default defineComponent({
  name: "CoursesContent",
  components: {
    CoursesSidebar,
  },
});
</script>