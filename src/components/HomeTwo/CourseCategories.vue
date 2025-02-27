<template>
  <div class="edu-topics-area banner06 ptb-100">
    <div class="container">
      <div class="edu-section-title">
        <p class="sub-title">Course Categories</p>
        <h2>Browse Top <span class="shape02">Categories</span></h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box02">
              <div class="icon">
                <img src="../../assets/img/icon/ct1.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Data Science</h3>
                <p>68 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box02">
              <div class="icon">
                <img src="../../assets/img/icon/ct2.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>UI/UX Design</h3>
                <p>65 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box02">
              <div class="icon">
                <img src="../../assets/img/icon/ct3.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Modern Physics</h3>
                <p>41 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box02">
              <div class="icon">
                <img src="../../assets/img/icon/ct4.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Music Production</h3>
                <p>89 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box02">
              <div class="icon">
                <img src="../../assets/img/icon/ct5.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Data Science</h3>
                <p>96 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box02">
              <div class="icon">
                <img src="../../assets/img/icon/ct6.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Finances</h3>
                <p>37 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="section-button">
          <router-link to="/courses" class="default-btn"
            >View All Categories</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CourseCategories",
};
</script>