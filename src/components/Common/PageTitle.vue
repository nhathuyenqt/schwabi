<template>
  <div class="page-title-area item-bg1">
    <div class="container">
      <div class="page-title-content">
        <h2>{{ pageTitle }}</h2>
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <router-link to="/">Home</router-link>
          </li>
          <li class="breadcrumb-item"></li>
          <li class="primery-link">{{ mainTitle }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageTitle",
  props: ["pageTitle", "mainTitle"],
});
</script>