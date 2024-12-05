"use strict";function _createForOfIteratorHelper(e,t){var r="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!r){if(Array.isArray(e)||(r=_unsupportedIterableToArray(e))||t&&e&&"number"==typeof e.length){r&&(e=r);var n=0,o=function(){};return{s:o,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,i=!0,u=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return i=e.done,e},e:function(e){u=!0,a=e},f:function(){try{i||null==r.return||r.return()}finally{if(u)throw a}}}}function _unsupportedIterableToArray(e,t){if(e){if("string"==typeof e)return _arrayLikeToArray(e,t);var r={}.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?_arrayLikeToArray(e,t):void 0}}function _arrayLikeToArray(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=Array(t);r<t;r++)n[r]=e[r];return n}console.log("HELLO");var main=document.querySelector("#main"),body=document.querySelector("body"),footer=document.querySelector("#footer"),btnOpen=document.querySelector("#btnOpen"),btnClose=document.querySelector("#btnClose"),menuTopNav=document.querySelector("#menuTopNav"),overlay=document.querySelector("#overlay"),breakpoint=window.matchMedia("(width < 30em)"),menu=document.querySelector(".menu"),nav__items=document.querySelectorAll(".nav__item"),btnHamburger=document.querySelector("#btnHamburger"),faders=document.querySelectorAll(".fade-in"),setupTopNav=function(){breakpoint.matches?menuTopNav.setAttribute("inert",""):menuTopNav.removeAttribute("inert")};function openMobileMenu(){btnOpen.setAttribute("aria-expanded","true"),main.setAttribute("inert",""),footer.setAttribute("inert",""),menuTopNav.removeAttribute("inert"),menuTopNav.style.transitionDuration="400ms",overlay.style.transitionDuration="400ms",bodyScrollLock.disableBodyScroll(menuTopNav),btnClose.focus()}function closeMobileMenu(){btnOpen.setAttribute("aria-expanded","false"),main.removeAttribute("inert"),footer.removeAttribute("inert"),menuTopNav.setAttribute("inert",""),bodyScrollLock.enableBodyScroll(menuTopNav),btnOpen.focus(),setTimeout((function(){menuTopNav.removeAttribute("style"),overlay.removeAttribute("style")}),500)}function toggleItem(){this.classList.contains("sub-menu-active")?this.classList.remove("sub-menu-active"):menu.querySelector(".sub-menu-active")?(menu.querySelector(".sub-menu-active").classList.remove("sub-menu-active"),this.classList.add("sub-menu-active")):this.classList.add("sub-menu-active")}btnOpen.addEventListener("click",openMobileMenu),btnClose.addEventListener("click",closeMobileMenu),breakpoint.addEventListener("change",(function(){setupTopNav()}));var _step,_iterator=_createForOfIteratorHelper(nav__items);try{for(_iterator.s();!(_step=_iterator.n()).done;){var nav__item=_step.value;nav__item.querySelector(".sub-menu")&&(nav__item.addEventListener("click",toggleItem,!1),nav__item.addEventListener("keypress",toggleItem,!1))}}catch(e){_iterator.e(e)}finally{_iterator.f()}function closeSubmenu(e){!menu.contains(e.target)&&menu.querySelector(".sub-menu-active")&&menu.querySelector(".submenu-active").classList.remove("sub-menu-active")}document.addEventListener("click",closeSubmenu,!1);var appearOptions={threshold:1,rootMargin:"0px 0px -10px 0px"},appearOnScroll=new IntersectionObserver((function(e,t){e.forEach((function(e){e.isIntersecting&&(e.target.classList.add("appear"),t.unobserve(e.target))}))}),appearOptions);faders.forEach((function(e){appearOnScroll.observe(e)}));
//# sourceMappingURL=script.js.map