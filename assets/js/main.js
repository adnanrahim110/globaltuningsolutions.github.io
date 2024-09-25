// scrolling for top

const scroller = document.getElementById("progress-scroll");

if (scroller) {
  scroller.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  "use strict";
  const header = document.querySelector('#navbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  });
  // Scroll back to top

  const offset = 50;

  window.addEventListener('scroll', () => {
    const progressWrap = document.querySelector('.stt_1');
    if (window.scrollY > offset) {
      if (progressWrap) {
        progressWrap.classList.add('active-progress');
      }
    } else {
      if (progressWrap) {
        progressWrap.classList.remove('active-progress');
      }
    }
  });
  window.addEventListener('scroll', () => {
    const progressWrap = document.querySelector('.stt_2');
    if (window.scrollY > offset) {
      if (progressWrap) {
        progressWrap.classList.add('active-progress');
      }
    } else {
      if (progressWrap) {
        progressWrap.classList.remove('active-progress');
      }
    }
  });
});
