// burger menu pleine page

jQuery(document).ready(function($) {
  jQuery('.menu-toggle').click(function() {
    jQuery('body').toggleClass('menu-open');
    jQuery(this).toggleClass('active');
  });
});

// effet parallax sur video et titre

window.addEventListener("scroll", function() {
  var scrolled = window.pageYOffset;
  var parallaxWrapper = document.getElementById("parallax-wrapper");
  parallaxWrapper.style.transform = "translateY(" + (+scrolled * 1.0) + "px)";
});

// carrousel

var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true, 
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }, 
  loop: true,
});

// nuages

var bigCloud = document.querySelector('.big_cloud');
var littleCloud = document.querySelector('.little_cloud');

function moveClouds() {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var displacement = scrollTop * -1 / 3;
  bigCloud.style.transform = `translateX(${displacement}px)`;
  littleCloud.style.transform = `translateX(${displacement}px)`;
}
window.addEventListener('scroll', moveClouds);

// animation fade-in des sections


document.addEventListener('DOMContentLoaded', function () {
  const sections = document.querySelectorAll('.animate-on-scroll');

  const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
          if (entry.isIntersecting) {
              entry.target.classList.add('fade-in-active');
          }
      });
  }, { threshold: 0.5 });

  sections.forEach(function (section) {
      observer.observe(section);
  });
});

// animation des titres des sections

function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  return (
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function handleScroll() {
  var titles = document.querySelectorAll('.section-title');
  titles.forEach(function(title) {
    if (isInViewport(title)) {
      title.classList.add('fade-in');
    } else {
      title.classList.remove('fade-in');
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
  handleScroll();
});
window.addEventListener('scroll', function() {
  handleScroll();
});



