<template>
  <div class="copyright-area">
    <div class="container">
      <div class="copyright-content">
        <p>
          © Adula is Proudly Owned by
          <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CopyRight",
};
</script>

<style lang="scss" scoped>
.copyright-area {
  padding-top: 20px;
  padding-bottom: 20px;
  background: #f6fafb;
  border-top: 1px solid rgba(0, 0, 0, 0.08);

  .copyright-content {
    text-align: center;

    p {
      margin-bottom: 0;

      a {
        color: var(--main-color);
      }
    }
  }
}
</style>