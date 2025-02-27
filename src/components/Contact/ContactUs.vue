<template>
  <div class="edu-contact-area ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12">
          <div class="edu-content">
            <div class="edu-contact-title">
              <p class="sub-title">Contact Us</p>
              <h2>Get In Touch <span class="shape02">Today</span></h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered.
              </p>
            </div>
            <div class="edu-contact-info-box">
              <div class="icon">
                <img src="../../assets/img/svg/mail.svg" alt="icon" />
              </div>
              <h3>Email-Us :</h3>
              <p>
                <a href="mailto:hello@guto.com">Contactyourmail@gmail.com</a>
              </p>
            </div>

            <div class="edu-contact-info-box">
              <div class="icon">
                <img src="../../assets/img/svg/call.svg" alt="icon" />
              </div>
              <h3>Call Us:</h3>
              <p>
                <a href="tel:+44457895789">
                  +88012 2910 1781, +88019 6128 1689
                </a>
              </p>
            </div>

            <div class="edu-contact-info-box">
              <div class="icon">
                <img src="../../assets/img/svg/map.svg" alt="icon" />
              </div>
              <h3>Office :</h3>
              <p>Mountain Green Road 2389, NY, USA</p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="contact-form">
            <form id="contactForm">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      required
                      placeholder="Name"
                    />
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      id="email"
                      required
                      placeholder="Email"
                    />
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="phone"
                      class="form-control"
                      id="phone_number"
                      required
                      placeholder="Phone No*"
                    />
                  </div>
                </div>

                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="website"
                      class="form-control"
                      id="web_link"
                      required
                      placeholder="Website Address"
                    />
                  </div>
                </div>

                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea
                      name="message"
                      id="message"
                      class="form-control"
                      cols="30"
                      rows="6"
                      required
                      placeholder="Write your message..."
                    ></textarea>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="default-btn">
                    <i class="bx bx-paper-plane"></i> Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactUs",
};
</script>