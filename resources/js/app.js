// Grab HTML Elements
const btn = document.querySelector('#toggle-mobile-nav')
const menu = document.querySelector('.mobile-menu')
/* const hamburger = document.querySelector('#hamburger')
const logo = document.querySelector('#logo_face') */

const classToggle = (el, ...args) => args.map((e) => el.classList.toggle(e))

// Add Event Listeners
btn.addEventListener('click', (e) => {
  e.preventDefault()
  //classToggle(menu, 'scale-y-0')
  //classToggle(menu, 'w-0', 'w-full', 'md:w-1/2')
  //classToggle(menu, 'left-0', '-left-full')
  //classToggle(menu, '-translate-y-full', 'opacity-0')
  //menu.classList.toggle('-translate-y-full')
  menu.classList.toggle('h-0')
  //menu.classList.toggle('-translate-x-full')
  //hamburger.classList.toggle('active')
  //logo.classList.toggle('active')
})

const swiper = new Swiper('.swiper', {
  // Optional parameters
  //direction: 'vertical',
  loop: false,
  //speed: 2000,
  /*   autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  }, */

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>'
    },
  },

  // Navigation arrows
  /*   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }, */

  // And if we need scrollbar
  /*   scrollbar: {
    el: '.swiper-scrollbar',
  }, */
})
/*
const nav = document.querySelector('nav')

window.onscroll = function () {
  if (document.body.scrollTop >= 300 || document.documentElement.scrollTop >= 300) {
    nav.classList.add('bg-joy-gray')
    nav.classList.remove('bg-transparent')
    hamburger.classList.add('scrolled')
  } else {
    console.log('scrolled')
    nav.classList.add('bg-transparent')
    nav.classList.remove('bg-joy-gray')
    hamburger.classList.remove('scrolled')
  }
}

import Animasection from './animation.js'
Animasection.observeAll() */
