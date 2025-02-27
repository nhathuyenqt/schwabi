<template>
  <div class="single-course-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="single-course-desc">
            <div class="single-course-image">
              <img
                src="../../assets/img/all-img/single-course-thumb.png"
                alt="image"
              />
            </div>
            <div class="single-course-content">
              <p class="course-catgy">Data Science</p>
              <h2>UI/UX Design and Graphics Learning Bootcamp 2023</h2>

              <div class="user-details">
                <img src="../../assets/img/all-img/author-1.png" alt="image" />
                <p><span>Trainer :</span> <a href="#">Md Shamim Hossain</a></p>
                <p class="course-date">
                  <span>Last Update:</span> <a href="#">10 February, 2023</a>
                </p>
              </div>
            </div>
            <div class="course-tabs">
              <nav>
                <div class="nav course-nav" id="nav-tab" role="tablist">
                  <button
                    class="course-link active"
                    id="nav-overview-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-overview"
                    type="button"
                    role="tab"
                    aria-controls="nav-overview"
                    aria-selected="true"
                  >
                    Overview
                  </button>
                  <button
                    class="course-link"
                    id="nav-carriculum-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-carriculum"
                    type="button"
                    role="tab"
                    aria-controls="nav-carriculum"
                    aria-selected="false"
                  >
                    Carriculum
                  </button>
                  <button
                    class="course-link"
                    id="nav-instructor-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-instructor"
                    type="button"
                    role="tab"
                    aria-controls="nav-instructor"
                    aria-selected="false"
                  >
                    Instructor
                  </button>
                  <button
                    class="course-link"
                    id="nav-reviews-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#nav-reviews"
                    type="button"
                    role="tab"
                    aria-controls="nav-reviews"
                    aria-selected="false"
                  >
                    Reviews
                  </button>
                </div>
              </nav>
              <div class="single-course-tab" id="nav-tabContent">
                <div
                  class="overview-panel fade active show"
                  id="nav-overview"
                  role="tabpanel"
                  aria-labelledby="nav-overview-tab"
                >
                  <div class="overview-content cmb-30">
                    <h3 class="course-desc-heading">Course Description</h3>
                    <p>
                      This tutorial will help you learn quickly and thoroughly.
                      Lorem ipsum, or lipsum as it sometimes known, is dummy
                      text used in laying out print, graphic or web designs.
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                      Donec odio. Quisque volutpat mattis eros.
                    </p>
                    <p>
                      You’ll be exposed to principles and strategies, but, more
                      importantly, you’ll learn how actually apply these
                      abstract concepts by coding three different websites for
                      three very different the audiences. Lorem ipsum is dummy
                      text used in laying out print, graphic or web designs
                      Lorem ipsum blinding shot chinwag knees.
                    </p>
                  </div>
                  <div class="overview-otp cmb-30">
                    <h3 class="course-desc-heading">What You will Learn?</h3>
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="course-single-otp">
                          <img src="../../assets/img/icon/ck.svg" alt="icon" />
                          <p>
                            Learn how perspective works and how to incorporate
                            your art
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="course-single-otp">
                          <img src="../../assets/img/icon/ck.svg" alt="icon" />
                          <p>
                            Learn how perspective works and how to incorporate
                            your art
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="course-single-otp">
                          <img src="../../assets/img/icon/ck.svg" alt="icon" />
                          <p>
                            Learn how perspective works and how to incorporate
                            your art
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="course-single-otp">
                          <img src="../../assets/img/icon/ck.svg" alt="icon" />
                          <p>
                            Learn how perspective works and how to incorporate
                            your art
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="overview-extra">
                    <h3 class="course-desc-heading">Our Extra Fcilities!</h3>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="extra-otp">
                          <img
                            src="../../assets/img/icon/laptop.svg"
                            alt="icon"
                          />
                          <p>Computer/Mobile</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="extra-otp">
                          <img
                            src="../../assets/img/icon/pencil.svg"
                            alt="icon"
                          />
                          <p>Paper & Pencil</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="extra-otp">
                          <img
                            src="../../assets/img/icon/wifi.svg"
                            alt="icon"
                          />
                          <p>Internet Connect</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="carriculum-panel fade"
                  id="nav-carriculum"
                  role="tabpanel"
                  aria-labelledby="nav-carriculum-tab"
                >
                  <div class="carriculum-content cmb-30">
                    <h3 class="course-desc-heading">Course Description</h3>
                    <ul>
                      <li><p>Level Beginner</p></li>
                      <li><p>12 Lectures</p></li>
                      <li><p>Total: 5 Hours 56 Minutes 24 Seconds</p></li>
                    </ul>
                  </div>
                  <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item lesson-item">
                      <h2 class="lesson-header" id="flush-headingOne">
                        <button
                          class="accordion-button lession-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne"
                          aria-expanded="false"
                          aria-controls="flush-collapseOne"
                        >
                          Introduction <span>3 Lectures, 34:51 min</span>
                        </button>
                      </h2>
                      <div
                        id="flush-collapseOne"
                        class="accordion-collapse collapse lesson-collapse"
                        aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample"
                      >
                        <div class="lesson-item-body">
                          <h3>Intermediate Level</h3>
                          <p>
                            This tutorial will help you learn quickly and
                            thoroughly. Lorem ipsum is dummy text used in laying
                            out print, graphic or web designs
                          </p>
                          <h4>2 Videos, 1 Audio, 1 Notebook</h4>
                          <ul class="lesson-item-list">
                            <a href="#">
                              <li>
                                <div class="lession-item-title">
                                  <img
                                    src="../../assets/img/icon/camera.svg"
                                    alt="icon"
                                  />
                                  <p>
                                    Video: Getting Started and Introductions
                                  </p>
                                </div>
                                <div class="lession-item-status">
                                  <span>Preview</span>
                                  <img
                                    src="../../assets/img/icon/lock.svg"
                                    alt="icon"
                                  />
                                </div>
                              </li>
                            </a>
                            <a href="#">
                              <li>
                                <div class="lession-item-title">
                                  <img
                                    src="../../assets/img/icon/headphone.svg"
                                    alt="icon"
                                  />
                                  <p>Audio: Connectig Throgh Technology</p>
                                </div>
                                <div class="lession-item-status">
                                  <span>Preview</span>
                                  <img
                                    src="../../assets/img/icon/lock.svg"
                                    alt="icon"
                                  />
                                </div>
                              </li>
                            </a>
                            <a href="#">
                              <li>
                                <div class="lession-item-title">
                                  <img
                                    src="../../assets/img/icon/file.svg"
                                    alt="icon"
                                  />
                                  <p>Video: Connectig Throgh Technology</p>
                                </div>
                                <div class="lession-item-status">
                                  <img
                                    src="../../assets/img/icon/lock.svg"
                                    alt="icon"
                                  />
                                </div>
                              </li>
                            </a>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item lesson-item">
                      <h2 class="lesson-header" id="flush-headingTow">
                        <button
                          class="accordion-button lession-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseTow"
                          aria-expanded="false"
                          aria-controls="flush-collapseTow"
                        >
                          Getting Started
                          <span>3 Lectures, 34:51 min</span>
                        </button>
                      </h2>
                      <div
                        id="flush-collapseTow"
                        class="accordion-collapse collapse lesson-collapse"
                        aria-labelledby="flush-headingTow"
                        data-bs-parent="#accordionFlushExample"
                      >
                        <div class="lesson-item-body">
                          <h3>Intermediate Level</h3>
                          <p>
                            This tutorial will help you learn quickly and
                            thoroughly. Lorem ipsum is dummy text used in laying
                            out print, graphic or web designs
                          </p>
                          <h4>2 Videos, 1 Audio, 1 Notebook</h4>
                          <ul class="lesson-item-list">
                            <a href="#">
                              <li>
                                <div class="lession-item-title">
                                  <img
                                    src="../../assets/img/icon/camera.svg"
                                    alt="icon"
                                  />
                                  <p>
                                    Video: Getting Started and Introductions
                                  </p>
                                </div>
                                <div class="lession-item-status">
                                  <span>Preview</span>
                                  <img
                                    src="../../assets/img/icon/lock.svg"
                                    alt="icon"
                                  />
                                </div>
                              </li>
                            </a>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="instructor-panel fade"
                  id="nav-instructor"
                  role="tabpanel"
                  aria-labelledby="nav-instructor-tab"
                >
                  <div class="single-instructor-content">
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="instructor-img">
                          <img
                            src="../../assets/img/all-img/ux.png"
                            alt="image"
                          />
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <div class="single-instructor-info">
                          <h2>Daniel Smith</h2>
                          <p class="sub-title">User Experience Designer</p>
                          <ul>
                            <li>
                              <img
                                src="../../assets/img/icon/file2.svg"
                                alt="icon"
                              />
                              <span>65+ Courses</span>
                            </li>
                            <li>
                              <img
                                src="../../assets/img/icon/user2.svg"
                                alt="icon"
                              />
                              <span>2k+ Student Learned</span>
                            </li>
                            <li>
                              <img
                                src="../../assets/img/icon/star.svg"
                                alt="icon"
                              />
                              <span>547+ Reviews</span>
                            </li>
                            <li>
                              <img
                                src="../../assets/img/icon/like.svg"
                                alt="icon"
                              />
                              <span>4.9 Average Rating</span>
                            </li>
                          </ul>
                          <ul class="social-links">
                            <li>
                              <a href="#">
                                <img
                                  src="../../assets/img/social/fb.svg"
                                  alt="icon"
                                />
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img
                                  src="../../assets/img/social/ln.svg"
                                  alt="icon"
                                />
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img
                                  src="../../assets/img/social/twiiter.svg"
                                  alt="icon"
                                />
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img
                                  src="../../assets/img/social/instra.svg"
                                  alt="icon"
                                />
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img
                                  src="../../assets/img/social/youtube.svg"
                                  alt="icon"
                                />
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="single-instructor-desc">
                      <p>
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to
                        use a passage of Lorem Ipsum, you need to be sure there
                        isn't anything embarrassing hidden in the middle of
                        text. All the Lorem Ipsum generators on the Internet
                        tend.
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="reviews-panel fade"
                  id="nav-reviews"
                  role="tabpanel"
                  aria-labelledby="nav-reviews-tab"
                >
                  <div class="lesseon-review-section">
                    <div class="student-reating">
                      <div class="row">
                        <div class="col-lg-8 col-md-6">
                          <div class="lession-review-items">
                            <ul>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                            </ul>
                            <div class="progress-section">
                              <div class="progress">
                                <div
                                  class="progress-bar psc02"
                                  role="progressbar"
                                  aria-valuenow="67"
                                  aria-valuemin="0"
                                  aria-valuemax="67"
                                  style="max-width: 67%"
                                ></div>
                              </div>
                            </div>
                            <div class="progress-title">
                              <span class="title">67%</span>
                            </div>
                          </div>
                          <div class="lession-review-items">
                            <ul>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                            </ul>
                            <div class="progress-section">
                              <div class="progress">
                                <div
                                  class="progress-bar psc02"
                                  role="progressbar"
                                  aria-valuenow="67"
                                  aria-valuemin="0"
                                  aria-valuemax="67"
                                  style="max-width: 67%"
                                ></div>
                              </div>
                            </div>
                            <div class="progress-title">
                              <span class="title">67%</span>
                            </div>
                          </div>
                          <div class="lession-review-items">
                            <ul>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                            </ul>
                            <div class="progress-section">
                              <div class="progress">
                                <div
                                  class="progress-bar psc02"
                                  role="progressbar"
                                  aria-valuenow="67"
                                  aria-valuemin="0"
                                  aria-valuemax="67"
                                  style="max-width: 67%"
                                ></div>
                              </div>
                            </div>
                            <div class="progress-title">
                              <span class="title">67%</span>
                            </div>
                          </div>
                          <div class="lession-review-items">
                            <ul>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                            </ul>
                            <div class="progress-section">
                              <div class="progress">
                                <div
                                  class="progress-bar psc02"
                                  role="progressbar"
                                  aria-valuenow="67"
                                  aria-valuemin="0"
                                  aria-valuemax="67"
                                  style="max-width: 67%"
                                ></div>
                              </div>
                            </div>
                            <div class="progress-title">
                              <span class="title">67%</span>
                            </div>
                          </div>
                          <div class="lession-review-items">
                            <ul>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                            </ul>
                            <div class="progress-section">
                              <div class="progress">
                                <div
                                  class="progress-bar psc02"
                                  role="progressbar"
                                  aria-valuenow="67"
                                  aria-valuemin="0"
                                  aria-valuemax="67"
                                  style="max-width: 67%"
                                ></div>
                              </div>
                            </div>
                            <div class="progress-title">
                              <span class="title">67%</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <div class="lession-total-review">
                            <h3>4.9</h3>
                            <ul>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                              <li><i class="bx bxs-star disstar"></i></li>
                            </ul>
                            <p>(2 Review)</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="student-review-section">
                      <h4>Reviews</h4>
                      <div class="student-review-items">
                        <img
                          src="../../assets/img/all-img/cmnt-1.png"
                          alt="image"
                        />
                        <ul>
                          <li><i class="bx bxs-star"></i></li>
                          <li><i class="bx bxs-star"></i></li>
                          <li><i class="bx bxs-star"></i></li>
                          <li><i class="bx bxs-star disstar"></i></li>
                          <li><i class="bx bxs-star disstar"></i></li>
                        </ul>
                        <p>
                          There are many variations of passages of Lorem Ipsum
                          available, but the majority have suffered alteration.
                        </p>
                        <h3>Daniel Smith</h3>
                        <span>Jan 24, 2023</span>
                      </div>
                      <div class="student-review-items">
                        <img
                          src="../../assets/img/all-img/cmnt-2.png"
                          alt="image"
                        />
                        <ul>
                          <li><i class="bx bxs-star"></i></li>
                          <li><i class="bx bxs-star"></i></li>
                          <li><i class="bx bxs-star"></i></li>
                          <li><i class="bx bxs-star disstar"></i></li>
                          <li><i class="bx bxs-star disstar"></i></li>
                        </ul>
                        <p>
                          There are many variations of passages of Lorem Ipsum
                          available, but the majority have suffered alteration.
                        </p>
                        <h3>Daniel Smith</h3>
                        <span>Jan 24, 2023</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <CourseSidebar />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import CourseSidebar from "./CourseSidebar.vue";

export default defineComponent({
  name: "CoursesDetails",
  components: {
    CourseSidebar,
  },
});
</script>