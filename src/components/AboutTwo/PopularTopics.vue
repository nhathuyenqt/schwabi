<template>
  <div class="edu-topics-area pb-100">
    <div class="container">
      <div class="edu-section-title">
        <p class="sub-title">Start Learning From Today</p>
        <h2>Popular <span class="shape02">Topics</span> To Learn</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-01">
              <div class="icon">
                <img src="../../assets/img/icon/t1.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Data Science</h3>
                <p>68 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-02">
              <div class="icon">
                <img src="../../assets/img/icon/t2.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>UI/UX Design</h3>
                <p>45 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-03">
              <div class="icon">
                <img src="../../assets/img/icon/t3.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Modern Physics</h3>
                <p>44 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-02">
              <div class="icon">
                <img src="../../assets/img/icon/t4.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Music Production</h3>
                <p>21 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-03">
              <div class="icon">
                <img src="../../assets/img/icon/t5.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Data Science</h3>
                <p>80 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-04">
              <div class="icon">
                <img src="../../assets/img/icon/t6.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Finances</h3>
                <p>22 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-05">
              <div class="icon">
                <img src="../../assets/img/icon/t7.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Global Science</h3>
                <p>45 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <router-link to="/courses" class="topic-box">
            <div class="single-topic-box lg-01">
              <div class="icon">
                <img src="../../assets/img/icon/t8.svg" alt="icon" />
              </div>
              <div class="content">
                <h3>Game Design</h3>
                <p>36 Courses</p>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PopularTopics",
};
</script>