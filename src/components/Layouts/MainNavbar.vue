<template>
  <div :class="['edu-navbar-area navbar-area', { 'is-sticky': isSticky }]">
    <!-- <div class="edumim-responsive-nav">
      <div class="container">
        <div class="edumim-responsive-menu">
          <div class="logo">
            <router-link to="/">
              <img src="../../assets/img/logo/logo.svg" alt="logo" />
            </router-link>
          </div>
        </div>
      </div>
    </div> -->
    <div class="edumim-nav">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <router-link class="navbar-brand" to="/">
            <img src="../../assets/img/logo/logo.svg" alt="logo" />
          </router-link>

          <div
            class="navbar-toggler"
            @click="active = !active"
            :aria-pressed="active ? 'true' : 'false'"
            v-bind:class="{ active: button_active_state }"
            v-on:click="button_active_state = !button_active_state"
          >
            <i class="bx bx-menu"></i>
            <i class="bx bx-x"></i>
          </div>

          <div class="collapse navbar-collapse" :class="{ show: active }">
            <ul class="navbar-nav">
              <li class="nav-item">
                <router-link to="/" class="nav-link dropdown-toggle">
                  Home
                </router-link>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <router-link to="/" class="nav-link">
                      Home One
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/home-two" class="nav-link">
                      Home Two
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/home-three" class="nav-link">
                      Home Three
                    </router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                  Pages
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <router-link to="/about" class="nav-link">
                      About 1
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/about-two" class="nav-link">
                      About 2
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/instructor" class="nav-link">
                      Instructor 1
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/instructor-two" class="nav-link">
                      Instructor 2
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/instructor-details" class="nav-link">
                      Instructor Single
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/event" class="nav-link">
                      Event
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/event-details" class="nav-link">
                      Event Single
                    </router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                  Courses
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <router-link to="/courses" class="nav-link">
                      Courses
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/courses-sidebar" class="nav-link">
                      Courses Sidebar
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/courses-details" class="nav-link">
                      Courses Details
                    </router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                  Blog
                </a>
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <router-link to="/blog" class="nav-link">
                      Blog
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/blog-sidebar" class="nav-link">
                      Blog Sidebar
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/blog-standard" class="nav-link">
                      Blog Standard
                    </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/blog-details" class="nav-link">
                      Blog Details
                    </router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <router-link to="/contact" class="nav-link">
                  Contact
                </router-link>
              </li>
            </ul>
          </div>
          <div class="nav-btn">
            <router-link to="/contact" class="default-btn">
              Start Free Trial
            </router-link>
          </div>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "MainNavbar",
  data() {
    return {
      isSticky: false,
      active: false,
      button_active_state: false,
    };
  },
  mounted() {
    window.addEventListener("scroll", () => {
      const scrollPos = window.scrollY;
      this.isSticky = scrollPos >= 100;
    });
  },
});
</script>