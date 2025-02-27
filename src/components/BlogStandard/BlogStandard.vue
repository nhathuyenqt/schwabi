<template>
  <div class="edu-courses-area pt-70 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="single-blog-standard">
                <div class="image">
                  <router-link to="/blog-details" class="d-block">
                    <img
                      src="../../assets/img/all-img/b-thub-1.png"
                      alt="image"
                    />
                  </router-link>
                </div>
                <div class="content">
                  <div class="cr-tag">
                    <a href="#"><span>Development</span></a>
                  </div>
                  <h3>
                    <router-link to="/blog-details">
                      Financial Security Thinking and Principles Theory
                    </router-link>
                  </h3>
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in some
                    form, by injected humour.
                  </p>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-calendar"></i><span>Jan 30, 2023</span>
                    </li>
                    <li>
                      <i class="bx bx-time-five"></i><span>3 Min Read</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="single-blog-standard">
                <div class="image">
                  <router-link to="/blog-details" class="d-block">
                    <img
                      src="../../assets/img/all-img/b-thumb-2.png"
                      alt="image"
                    />
                  </router-link>
                </div>
                <div class="content">
                  <div class="cr-tag">
                    <a href="#"><span>Drawing</span></a>
                  </div>
                  <h3>
                    <router-link to="/blog-details">
                      Basic Fundamentals of Interior & Graphics Design
                    </router-link>
                  </h3>
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in some
                    form, by injected humour.
                  </p>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-calendar"></i><span>Jan 29, 2023</span>
                    </li>
                    <li>
                      <i class="bx bx-time-five"></i><span>3 Min Read</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="single-blog-standard">
                <div class="image">
                  <router-link to="/blog-details" class="d-block">
                    <img
                      src="../../assets/img/all-img/b-thub-3.png"
                      alt="image"
                    />
                  </router-link>
                </div>
                <div class="content">
                  <div class="cr-tag">
                    <a href="#"><span>Technology</span></a>
                  </div>
                  <h3>
                    <router-link to="/blog-details">
                      Introduction to Color Theory & Basic UI/UX
                    </router-link>
                  </h3>
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in some
                    form, by injected humour.
                  </p>
                  <ul class="cr-items">
                    <li>
                      <i class="bx bx-calendar"></i><span>Jan 22, 2023</span>
                    </li>
                    <li>
                      <i class="bx bx-time-five"></i><span>3 Min Read</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagination-area text-center">
                <a href="#" class="prev page-numbers">
                  <i class="bx bx-chevrons-left"></i>
                </a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="next page-numbers">
                  <i class="bx bx-chevrons-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <SideBar />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import SideBar from "./SideBar.vue";

export default defineComponent({
  name: "BlogStandard",
  components: {
    SideBar,
  },
});
</script>