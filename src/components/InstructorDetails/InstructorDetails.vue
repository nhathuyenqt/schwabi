<template>
  <div class="instructor-single-details ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="instructor-sidebar-sticky">
            <div class="image">
              <img src="../../assets/img/all-img/single-ins.png" alt="image" />
            </div>
            <div class="content">
              <div class="instructor-content">
                <h3>Coralina Cloud</h3>
                <p>
                  Professor & Chair of Department of Computer Science at
                  University the where been since 1994. vulput for the
                  pellentesque commodo.
                </p>
              </div>
              <div class="instructor-info">
                <ul>
                  <li>
                    <i class="bx bx-envelope"></i>
                    <span>info@designpixls.com</span>
                  </li>
                  <li>
                    <i class="bx bx-phone"></i> <span>8939 2390 3879 29</span>
                  </li>
                  <li>
                    <i class="bx bx-map"></i>
                    <span>6/2, Stavello Hall, Sydney</span>
                  </li>
                </ul>
              </div>
              <div class="instructor-social">
                <h4>Follow Me On:</h4>
                <ul>
                  <li>
                    <a href="#"
                      ><img src="../../assets/img/icon/fb.svg" alt="icon"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="../../assets/img/icon/ins.svg" alt="icon"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="../../assets/img/icon/tw.svg" alt="icon"
                    /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="../../assets/img/icon/pn.svg" alt="icon"
                    /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="instructor-single-content">
            <h2>Coralina Cloud</h2>
            <p class="sub-title">UI/UX Designer</p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
              vulputate pellentesque commodo. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>
            <p>
              Donec faucibus imperdiet libero, at lacinia metus. Quisque finibus
              ante non arcu aliquet, nec vestibulum dolor condimentum. Nulla
              facilisi. Vestibulum porttitor vestibulum est eu dignissim.
              Quisque blandit elementum convallis. Ut et mi hendrerit, posuere
              purus ac, facilisis nibh.
            </p>
            <FunFacts />
            <PopularCourses />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import FunFacts from "./FunFacts.vue";
import PopularCourses from "./PopularCourses.vue";

export default defineComponent({
  name: "InstructorDetails",
  components: {
    FunFacts,
    PopularCourses,
  },
});
</script>