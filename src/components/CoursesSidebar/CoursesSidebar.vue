<template>
  <div class="course-sidebar-widgets">
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
    <div class="widget widget-checkbox">
      <h3 class="widget-title">Skill Level</h3>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="defaultCheck1"
        />
        <label class="form-check-label edu-check-label" for="defaultCheck1">
          All Levels (27)
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="defaultCheck2"
        />
        <label class="form-check-label edu-check-label" for="defaultCheck2">
          Beginner Levels (56)
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="defaultCheck3"
        />
        <label class="form-check-label edu-check-label" for="defaultCheck3">
          Intermediate Level (45)
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="defaultCheck4"
        />
        <label class="form-check-label edu-check-label" for="defaultCheck4">
          Expert Level (22)
        </label>
      </div>
    </div>
    <div class="widget widget-language">
      <h3 class="widget-title">Language</h3>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="language1"
        />
        <label class="form-check-label edu-check-label" for="language1">
          Spanish Language
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="language2"
        />
        <label class="form-check-label edu-check-label" for="language2">
          Arabic Language
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="language3"
        />
        <label class="form-check-label edu-check-label" for="language3">
          United States (US)
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="language4"
        />
        <label class="form-check-label edu-check-label" for="language4">
          United Kingdom (UK)
        </label>
      </div>
    </div>
    <div class="widget widget-rating">
      <h3 class="widget-title">Rating By</h3>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="rating1"
        />
        <label class="form-check-label edu-check-label" for="rating1">
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
          </ul>
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="rating2"
        />
        <label class="form-check-label edu-check-label" for="rating2">
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star desstar"></i></li>
          </ul>
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="rating3"
        />
        <label class="form-check-label edu-check-label" for="rating3">
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star desstar"></i></li>
            <li><i class="bx bxs-star desstar"></i></li>
          </ul>
        </label>
      </div>
      <div class="form-check edu-check">
        <input
          class="form-check-input edu-check-input"
          type="checkbox"
          value=""
          id="rating5"
        />
        <label class="form-check-label edu-check-label" for="rating5">
          <ul>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star"></i></li>
            <li><i class="bx bxs-star desstar"></i></li>
            <li><i class="bx bxs-star desstar"></i></li>
            <li><i class="bx bxs-star desstar"></i></li>
          </ul>
        </label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CoursesSidebar",
};
</script>