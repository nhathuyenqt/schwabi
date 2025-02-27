<template>
  <div class="edu-banner-area banner01">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="edu-banner-content">
            <h1>
              Classical <span class="shape01">Education</span> For The Future
            </h1>
            <p>
              It is long established fact that reader distracted by the readable
              content.
            </p>

            <div class="subscribe-inner-area">
              <form class="newsletter-form" data-toggle="validator">
                <label><i class="bx bx-envelope-open"></i></label>
                <input
                  type="text"
                  class="input-newsletter"
                  placeholder="Enter your mail"
                  name="EMAIL"
                  required
                  autocomplete="off"
                />
                <button type="submit" class="default-btn">
                  Get Started Now
                </button>
                <div id="validator-newsletter1" class="form-result"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="edu-banner-image">
            <img src="../../assets/img/banner/man1.png" alt="banner-img" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "MainBanner",
});
</script>