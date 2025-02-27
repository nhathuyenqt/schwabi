<template>
  <div class="preloader-area position-fixed text-center" id="preloader">
    <div class="loader">
      <div class="spinner-box">
        <div class="configure-border-1">
          <div class="configure-core"></div>
        </div>
        <div class="configure-border-2">
          <div class="configure-core"></div>
        </div>
        <img src="../../assets/img/favicon.png" alt="icon" />
      </div>
      <div class="waviy">
        <span>E</span>
        <span>D</span>
        <span>U</span>
        <span>M</span>
        <span>I</span>
        <span>M</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PreLoader",
};
</script>

<style lang="scss">
.preloader-area {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999999;
  background-color: var(--whiteColor);

  .loader {
    left: 0;
    right: 0;
    top: 48%;
    position: absolute;
    transform: translateY(-48%);

    .spinner-box {
      width: 80px;
      height: 80px;
      position: relative;
      margin-bottom: 30px;

      margin: {
        left: auto;
        right: auto;
      }

      .configure-border-1 {
        width: 80px;
        padding: 2px;
        height: 80px;
        position: absolute;
        background: var(--secounderyColor);
        animation: configure-clockwise 3s ease-in-out 0s infinite alternate;
      }

      .configure-border-2 {
        width: 80px;
        left: -80px;
        padding: 2px;
        height: 80px;
        transform: rotate(45deg);
        background: var(--secounderyColor);
        animation: configure-xclockwise 3s ease-in-out 0s infinite alternate;
      }

      .configure-core {
        width: 100%;
        height: 100%;
        background-color: var(--mainColor);
      }

      img {
        top: 50%;
        left: 30%;
        margin-top: -2px;
        position: absolute;
        transform: translateY(-50%);
      }
    }

    .waviy {
      span {
        animation: flip 2s infinite;
        text-transform: uppercase;
        color: var(--blackColor);
        display: inline-block;
        animation-delay: 0.2s;

        font: {
          size: 40px;
          weight: 700;
        }

        &:nth-child(2) {
          animation-delay: 0.2s;
        }

        &:nth-child(3) {
          animation-delay: 0.4s;
        }

        &:nth-child(4) {
          animation-delay: 0.6s;
        }

        &:nth-child(5) {
          animation-delay: 0.8s;
        }
      }
    }
  }
}

@keyframes flip {
  0%,
  80% {
    transform: rotateY(360deg);
  }
}
@keyframes configure-clockwise {
  0% {
    transform: rotate(0);
  }

  25% {
    transform: rotate(90deg);
  }

  50% {
    transform: rotate(180deg);
  }

  75% {
    transform: rotate(270deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
@keyframes configure-xclockwise {
  0% {
    transform: rotate(45deg);
  }

  25% {
    transform: rotate(-45deg);
  }

  50% {
    transform: rotate(-135deg);
  }

  75% {
    transform: rotate(-225deg);
  }

  100% {
    transform: rotate(-315deg);
  }
}
</style>