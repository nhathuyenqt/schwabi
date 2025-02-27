<template>
  <footer class="edu-footer-area">
    <div class="container">
      <div class="footer-top-area ptb-100">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <router-link to="/" class="logo">
                <img src="../../assets/img/logo/footer-logo.svg" alt="image" />
              </router-link>
              <p>
                Lorem ipsum amet, consectetur adipiscing elit. Suspendis varius
                enim eros elementum tristique. Duis cursus.
              </p>
              <ul class="social-links">
                <li>
                  <a href="https://www.facebook.com/" target="_blank">
                    <i class="bx bxl-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/" target="_blank">
                    <i class="bx bxl-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" target="_blank">
                    <i class="bx bxl-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank">
                    <i class="bx bxl-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget pl-5">
              <h3>Links</h3>
              <ul class="links-list">
                <li><router-link to="/services-details">Home</router-link></li>
                <li>
                  <router-link to="/services-details">About Us</router-link>
                </li>
                <li>
                  <router-link to="/services-details">Pricing</router-link>
                </li>
                <li>
                  <router-link to="/services-details">Courses</router-link>
                </li>
                <li>
                  <router-link to="/services-details">Contact Us</router-link>
                </li>
                <li><router-link to="/services-details">Blog</router-link></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>Legal</h3>
              <ul class="links-list">
                <li><router-link to="/">Legal</router-link></li>
                <li><router-link to="/about">Tearms of Use</router-link></li>
                <li>
                  <router-link to="/portfolio">Tearm & Condition</router-link>
                </li>
                <li>
                  <router-link to="/blog-grid">Payment Method</router-link>
                </li>
                <li><router-link to="/contact">Privacy Policy</router-link></li>
                <li><router-link to="/contact">Privacy Policy</router-link></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h3>Newsletter</h3>
              <div class="footer-newsletter-info">
                <p>
                  Join over <span>68,000</span> people getting our emails Lorem
                  ipsum dolor sit amet consectet
                </p>
                <form class="newsletter-form" data-toggle="validator">
                  <label><i class="bx bx-envelope-open"></i></label>
                  <input
                    type="text"
                    class="input-newsletter"
                    placeholder="Enter your email address"
                    name="EMAIL"
                    required
                    autocomplete="off"
                  />
                  <button type="submit" class="default-btn">
                    <i class="bx bx-paper-plane"></i> Subscribe Now
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pr-line"></div>
      <div class="footer-bottom-area">
        <p>
          © Copyright {{ currentYear }} |
          <a href="#" target="_blank">Edumim Template</a> | All Rights Reserved
          is Proudly
        </p>
      </div>
    </div>
  </footer>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";

export default defineComponent({
  name: "MainFooter",
  setup() {
    const currentYear = ref(new Date().getFullYear());

    return {
      currentYear,
    };
  },
});
</script>