<template>
  <div class="edu-courseBlock-area pt-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="single-courseBlock-box cblockBg mb-30">
            <div class="content">
              <p class="sub-title">Build Your Career</p>
              <h3>Become an <span class="shape02">Instructor</span></h3>
              <p>Learn at your own pace, move the between multiple courses.</p>
              <router-link to="/contact" class="default-btn">
                Book A Seat
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="single-courseBlock-box cblockBg02">
            <div class="content">
              <p class="sub-title">Build Your Career</p>
              <h3>Get Free <span class="shape02">Courses</span></h3>
              <p>Learn at your own pace, move the between multiple courses.</p>
              <router-link to="/contact" class="default-btn">
                Book A Seat
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BuildYourCareer",
};
</script>