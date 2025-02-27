<template>
  <div>
    <div class="single-course-sidebar">
      <div class="course-widget">
        <div class="course-video">
          <div
            class="video-btn popup-youtube"
            @click="togglePopup"
            style="cursor: pointer"
          >
            <img src="../../assets/img/all-img/thumb.png" alt="image" />
            <i class="bx bx-play cr-video-btn"></i>
          </div>
        </div>
        <div class="sidebar-content">
          <h3>Free</h3>
          <a href="#" class="default-btn course-btn">Enroll Now</a>
          <ul class="courses-details">
            <li>
              <div class="icon">
                <img src="../../assets/img/icon/user.svg" alt="icon" />
                Instructor
              </div>
              <p>Daniel Smith</p>
            </li>
            <li>
              <div class="icon">
                <img src="../../assets/img/icon/file2.svg" alt="icon" />
                Lectures
              </div>
              <p>23</p>
            </li>
            <li>
              <div class="icon">
                <img src="../../assets/img/icon/clock.svg" alt="icon" />
                Duration
              </div>
              <p>2Hr 36Minutes</p>
            </li>
            <li>
              <div class="icon">
                <img src="../../assets/img/icon/star.svg" alt="icon" />
                Enrolled
              </div>
              <p>2k Students</p>
            </li>
            <li>
              <div class="icon">
                <img src="../../assets/img/icon/target.svg" alt="icon" />
                Course level
              </div>
              <p>Intermediate</p>
            </li>
            <li>
              <div class="icon">
                <img src="../../assets/img/icon/web.svg" alt="icon" />
                Language
              </div>
              <p>English</p>
            </li>
          </ul>
          <ul class="course-shared">
            <li class="title">Share On:</li>
            <li>
              <a href="#">
                <img src="../../assets/img/icon/fb.svg" alt="icon" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="../../assets/img/icon/tw.svg" alt="icon" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="../../assets/img/icon/ins.svg" alt="icon" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="../../assets/img/icon/pn.svg" alt="icon" />
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="widget widget-resent-course">
        <h3 class="widget-title">Related Courses</h3>
        <div class="item">
          <a href="#" class="thumb">
            <img src="../../assets/img/all-img/rc-1.png" alt="iamge" />
          </a>
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star disstar"></i></li>
            <li><i class="bx bxs-star disstar"></i></li>
          </ul>
          <div class="info">
            <h4 class="title"><a href="#">Greatest Passion In...</a></h4>
            <span>$38.00</span>
          </div>
        </div>
        <div class="item">
          <a href="#" class="thumb">
            <img src="../../assets/img/all-img/rc-2.png" alt="iamge" />
          </a>
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star disstar"></i></li>
            <li><i class="bx bxs-star disstar"></i></li>
          </ul>
          <div class="info">
            <h4 class="title"><a href="#">Greatest Passion In...</a></h4>
            <span>$38.00</span>
          </div>
        </div>
        <div class="item">
          <a href="#" class="thumb">
            <img src="../../assets/img/all-img/rc-3.png" alt="iamge" />
          </a>
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star disstar"></i></li>
            <li><i class="bx bxs-star disstar"></i></li>
          </ul>
          <div class="info">
            <h4 class="title"><a href="#">Greatest Passion In...</a></h4>
            <span>$38.00</span>
          </div>
        </div>
      </div>
    </div>

    <div class="popup-video" v-if="isPopup">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="popup-overlay-close" @click="togglePopup">
            <div class="popup-overlay-close-line"></div>
            <div class="popup-overlay-close-line"></div>
          </div>
          <div class="play-video">
            <iframe
              src="https://www.youtube.com/embed/PWvPbGWVRrU"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "CourseSidebar",
  data() {
    return {
      isPopup: false,
    };
  },
  methods: {
    togglePopup() {
      this.isPopup = !this.isPopup;
    },
  },
});
</script>