import { createRouter, createWebHistory } from 'vue-router'

import HomeOnePage from "../Pages/HomeOnePage.vue";
import HomeTwoPage from "../Pages/HomeTwoPage.vue";
import HomeThreePage from "../Pages/HomeThreePage.vue";
import AboutPage from "../Pages/AboutPage.vue";
import AboutTwoPage from "../Pages/AboutTwoPage.vue";
import InstructorPage from "../Pages/InstructorPage.vue";
import InstructorTwoPage from "../Pages/InstructorTwoPage.vue";
import InstructorDetailsPage from "../Pages/InstructorDetailsPage.vue";
import EventsPage from "../Pages/EventsPage.vue";
import EventsDetailsPage from "../Pages/EventsDetailsPage.vue";
import CoursesPage from "../Pages/CoursesPage.vue";
import CoursesListPage from "../Pages/CoursesListPage.vue";
import CoursesSidebarPage from "../Pages/CoursesSidebarPage.vue";
import CoursesDetailsPage from "../Pages/CoursesDetailsPage.vue";
import BlogPage from "../Pages/BlogPage.vue";
import BlogSidebarPage from "../Pages/BlogSidebarPage.vue";
import BlogStandardPage from "../Pages/BlogStandardPage.vue";
import BlogDetailsPage from "../Pages/BlogDetailsPage.vue";
import ContactPage from "../Pages/ContactPage.vue";
import ErrorPage from "../Pages/ErrorPage.vue";

const routes = [
  {
    path: "/",
    name: "HomeOnePage",
    component: HomeOnePage,
  },
  {
    path: "/home-two",
    name: "HomeTwoPage",
    component: HomeTwoPage,
  },
  {
    path: "/home-three",
    name: "HomeThreePage",
    component: HomeThreePage,
  },
  {
    path: "/about",
    name: "AboutPage",
    component: AboutPage,
  },
  {
    path: "/about-two",
    name: "AboutTwoPage",
    component: AboutTwoPage,
  },
  {
    path: "/instructor",
    name: "InstructorPage",
    component: InstructorPage,
  },
  {
    path: "/instructor-two",
    name: "InstructorTwoPage",
    component: InstructorTwoPage,
  },
  {
    path: "/instructor-details",
    name: "InstructorDetailsPage",
    component: InstructorDetailsPage,
  },
  {
    path: "/event",
    name: "EventsPage",
    component: EventsPage,
  },
  {
    path: "/event-details",
    name: "EventsDetailsPage",
    component: EventsDetailsPage,
  },
  {
    path: "/courses",
    name: "CoursesPage",
    component: CoursesPage,
  },
  {
    path: "/courses-list",
    name: "CoursesListPage",
    component: CoursesListPage,
  },
  {
    path: "/courses-sidebar",
    name: "CoursesSidebarPage",
    component: CoursesSidebarPage,
  },
  {
    path: "/courses-details",
    name: "CoursesDetailsPage",
    component: CoursesDetailsPage,
  },
  {
    path: "/blog",
    name: "BlogPage",
    component: BlogPage,
  },
  {
    path: "/blog-sidebar",
    name: "BlogSidebarPage",
    component: BlogSidebarPage,
  },
  {
    path: "/blog-standard",
    name: "BlogStandardPage",
    component: BlogStandardPage,
  },
  {
    path: "/blog-details",
    name: "BlogDetailsPage",
    component: BlogDetailsPage,
  },
  {
    path: "/contact",
    name: "ContactPage",
    component: ContactPage,
  },
  {
    path: "/:pathMatch(.*)*",
    name: "ErrorPage",
    component: ErrorPage,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  linkExactActiveClass: "active",
  scrollBehavior() {
    return { top: 0, behavior: "smooth" };
  },
})

export default router
