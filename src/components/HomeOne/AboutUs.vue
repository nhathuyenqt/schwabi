<template>
  <div class="edu-about-area ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="edu-about-image">
            <img src="../../assets/img/all-img/about1.png" alt="banner-img" />
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="edu-about-content">
            <p class="sub-title">About Edumim</p>
            <h2>
              The Place Where You Can <span class="shape02">Achieve</span>
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered.
            </p>
            <div class="about-list">
              <div class="items">
                <div class="about-single-content">
                  <div class="icon2">
                    <img src="../../assets/img/svg/light.svg" alt="icon" />
                  </div>
                  <div class="content">
                    <h3>Our Vision</h3>
                    <p>
                      There are many variations of passages of the Lorem Ipsum
                      available.
                    </p>
                  </div>
                </div>
              </div>
              <div class="items">
                <div class="about-single-content">
                  <div class="icon2">
                    <img src="../../assets/img/svg/target.svg" alt="icon" />
                  </div>
                  <div class="content">
                    <h3>Our Vision</h3>
                    <p>
                      There are many variations of passages of the Lorem Ipsum
                      available.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <router-link to="/about" class="default-btn">
              Read More Us
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AboutUs",
};
</script>