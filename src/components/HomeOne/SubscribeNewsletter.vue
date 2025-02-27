<template>
  <div class="subscribe-area pt-100 pb-70">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="subcribe-content">
            <img src="../../assets/img/svg/big-mail.svg" alt="mail" />
            <h2>Subscribe to My Newsletter</h2>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="subscribe-from">
            <form class="newsletter-form" data-toggle="validator">
              <input
                type="text"
                class="input-newsletter"
                placeholder="Enter your email address"
                name="EMAIL"
                required
                autocomplete="off"
              />
              <button type="submit" class="default-btn">Get Started Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SubscribeNewsletter",
};
</script>