(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

__webpack_require__(/*! ./custome-file-input */ "./resources/js/custome-file-input.js");

document.addEventListener("DOMContentLoaded", function () {
  /////// Prevent closing from click inside dropdown
  document.querySelectorAll('.dropdown-menu').forEach(function (element) {
    element.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });
});

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

// Load Lodash
//window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
// Load Popper.js and Bootstrap js
window.Popper = __webpack_require__(/*! @popperjs/core */ "./node_modules/@popperjs/core/lib/index.js").default; // Import just what we need

__webpack_require__(/*! bootstrap/js/dist/alert */ "./node_modules/bootstrap/js/dist/alert.js"); //require(bootstrap/js/dist/button');


__webpack_require__(/*! bootstrap/js/dist/carousel */ "./node_modules/bootstrap/js/dist/carousel.js");

__webpack_require__(/*! bootstrap/js/dist/collapse */ "./node_modules/bootstrap/js/dist/collapse.js");

__webpack_require__(/*! bootstrap/js/dist/dropdown */ "./node_modules/bootstrap/js/dist/dropdown.js"); //require('bootstrap/js/dist/modal');
//require('bootstrap/js/dist/offcanvas');
//require('bootstrap/js/dist/popover');
//require( 'bootstrap/js/dist/scrollspy');
//require( 'bootstrap/js/dist/tab');
//require('bootstrap/js/dist/toast');
//require('bootstrap/js/dist/tooltip');
//Load Axios
// window.axios = require('axios');
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/***/ }),

/***/ "./resources/js/custome-file-input.js":
/*!********************************************!*\
  !*** ./resources/js/custome-file-input.js ***!
  \********************************************/
/***/ (() => {

"use strict";
/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/


;

(function (document, window, index) {
  var inputs = document.querySelectorAll('.custome-file-input');
  Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
        labelVal = label.innerHTML;
    input.addEventListener('change', function (e) {
      var fileName = '';
      if (this.files && this.files.length > 1) fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);else fileName = e.target.value.split('\\').pop();
      if (fileName) label.querySelector('span').innerHTML = fileName;else label.innerHTML = labelVal;
    }); // Firefox bug fix

    input.addEventListener('focus', function () {
      input.classList.add('has-focus');
    });
    input.addEventListener('blur', function () {
      input.classList.remove('has-focus');
    });
  });
})(document, window, 0);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","/js/vendor"], () => (__webpack_exec__("./resources/js/app.js"), __webpack_exec__("./resources/sass/app.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);