<template>
  <div class="blog-sidebar-widgets">
    <div class="widget widget-search">
      <form class="search-form">
        <label>
          <input type="search" class="search-field" placeholder="Search..." />
        </label>
        <button class="widget-search-btn" type="submit">
          <i class="bx bx-search-alt"></i>
        </button>
      </form>
    </div>
    <div class="widget widget-catgory">
      <h3 class="widget-title">Categories</h3>
      <ul>
        <a href="#">
          <li>
            <span>Development (23)</span>
            <i class="bx bx-chevron-right"></i>
          </li>
        </a>
        <a href="#">
          <li>
            <span>Art & Design (45)</span>
            <i class="bx bx-chevron-right"></i>
          </li>
        </a>
        <a href="#">
          <li>
            <span>Data Science (14)</span>
            <i class="bx bx-chevron-right"></i>
          </li>
        </a>
        <a href="#">
          <li>
            <span>Digital Marketing (18)</span>
            <i class="bx bx-chevron-right"></i>
          </li>
        </a>
        <a href="#">
          <li>
            <span>Technology (28)</span>
            <i class="bx bx-chevron-right"></i>
          </li>
        </a>
        <a href="#">
          <li>
            <span>It Management (34)</span>
            <i class="bx bx-chevron-right"></i>
          </li>
        </a>
      </ul>
    </div>
    <div class="widget widget-recent-blog">
      <h3 class="widget-title">Related Blogs</h3>
      <div class="item">
        <a href="#" class="thumb">
          <img src="../../assets/img/all-img/rc-1.png" alt="iamge" />
        </a>
        <div class="info">
          <h4 class="title">
            <a href="#">How to Manage Ads For Clients The Right Way</a>
          </h4>
          <a href="#" class="re-blog-btn">Read More</a>
        </div>
      </div>
      <div class="item">
        <a href="#" class="thumb">
          <img src="../../assets/img/all-img/rc-2.png" alt="iamge" />
        </a>
        <div class="info">
          <h4 class="title">
            <a href="#">How to Manage Ads For Clients The Right Way</a>
          </h4>
          <a href="#" class="re-blog-btn">Read More</a>
        </div>
      </div>
      <div class="item">
        <a href="#" class="thumb">
          <img src="../../assets/img/all-img/rc-3.png" alt="iamge" />
        </a>
        <div class="info">
          <h4 class="title">
            <a href="#">How to Manage Ads For Clients The Right Way</a>
          </h4>
          <a href="#" class="re-blog-btn">Read More</a>
        </div>
      </div>
    </div>
    <div class="widget widget-tag-cloud">
      <h3 class="widget-title">Popular Tags</h3>
      <div class="tagcloud">
        <a href="#">Business</a>
        <a href="#">Design</a>
        <a href="#">Teachers</a>
        <a href="#">Education</a>
        <a href="#">Classroom</a>
        <a href="#">Students</a>
        <a href="#">e-Learning</a>
        <a href="#">Book</a>
      </div>
    </div>
    <div class="widget widget-ins-gallery">
      <h3 class="widget-title">Instagram Feed</h3>
      <div class="insta-gallery">
        <a href="https://www.instagram.com/">
          <div class="insta-item">
            <img src="../../assets/img/all-img/ins-1.png" alt="iamge" />
            <span class="post-icon"><i class="bx bxl-instagram"></i></span>
          </div>
        </a>
        <a href="https://www.instagram.com/">
          <div class="insta-item">
            <img src="../../assets/img/all-img/ins-2.png" alt="iamge" />
            <span class="post-icon"><i class="bx bxl-instagram"></i></span>
          </div>
        </a>
        <a href="https://www.instagram.com/">
          <div class="insta-item">
            <img src="../../assets/img/all-img/ins-3.png" alt="iamge" />
            <span class="post-icon"><i class="bx bxl-instagram"></i></span>
          </div>
        </a>
        <a href="https://www.instagram.com/">
          <div class="insta-item">
            <img src="../../assets/img/all-img/ins-4.png" alt="iamge" />
            <span class="post-icon"><i class="bx bxl-instagram"></i></span>
          </div>
        </a>
        <a href="https://www.instagram.com/">
          <div class="insta-item">
            <img src="../../assets/img/all-img/ins-5.png" alt="iamge" />
            <span class="post-icon"><i class="bx bxl-instagram"></i></span>
          </div>
        </a>
        <a href="https://www.instagram.com/">
          <div class="insta-item">
            <img src="../../assets/img/all-img/ins-6.png" alt="iamge" />
            <span class="post-icon"><i class="bx bxl-instagram"></i></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SideBar",
};
</script>