<template>
  <div class="edu-blog-area sectionBg05 ptb-100">
    <div class="container">
      <div class="edu-section-title text-start">
        <p class="sub-title">Our Blogs</p>
        <h2>Our Latest <span class="shape02">Blogs</span></h2>
        <a href="#" class="default-btn">Read All Blog</a>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-blog-box">
            <div class="image">
              <router-link to="/blog-details" class="d-block">
                <img src="../../assets/img/all-img/blog-1.png" alt="image" />
              </router-link>
              <div class="cr-tag">
                <a href="#"><span>Development</span></a>
              </div>
            </div>
            <div class="content">
              <ul class="cr-items">
                <li>
                  <a href="#"><i class="bx bx-user"></i><span>Admin</span></a>
                </li>
                <li><i class="bx bx-star"></i><span>Jan 29, 2023</span></li>
              </ul>
              <h3>
                <router-link to="/blog-details">
                  Financial Security Thinking and Principles Theory
                </router-link>
              </h3>
              <router-link class="blog-btn" to="/blog-details">
                Read More
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-blog-box">
            <div class="image">
              <router-link to="/blog-details" class="d-block">
                <img src="../../assets/img/all-img/blog-2.png" alt="image" />
              </router-link>
              <div class="cr-tag">
                <a href="#"><span>Education</span></a>
              </div>
            </div>
            <div class="content">
              <ul class="cr-items">
                <li>
                  <a href="#"><i class="bx bx-user"></i><span>Admin</span></a>
                </li>
                <li><i class="bx bx-star"></i><span>Jan 29, 2023</span></li>
              </ul>
              <h3>
                <router-link to="/blog-details">
                  Professional Ceramic Moulding for Beginners
                </router-link>
              </h3>
              <router-link class="blog-btn" to="/blog-details">
                Read More
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-blog-box">
            <div class="image">
              <router-link to="/blog-details" class="d-block">
                <img src="../../assets/img/all-img/blog-3.png" alt="image" />
              </router-link>
              <div class="cr-tag">
                <a href="#"><span>Education</span></a>
              </div>
            </div>
            <div class="content">
              <ul class="cr-items">
                <li>
                  <a href="#"><i class="bx bx-user"></i><span>Admin</span></a>
                </li>
                <li><i class="bx bx-star"></i><span>Jan 29, 2023</span></li>
              </ul>
              <h3>
                <router-link to="/blog-details">
                  Education Is About Create Leaders For Tomorrow
                </router-link>
              </h3>
              <router-link class="blog-btn" to="/blog-details">
                Read More
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
  name: "OurBlogs",
};
</script>