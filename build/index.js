/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/style.scss */ "./css/style.scss");
/* harmony import */ var _modules_Accessiblity__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Accessiblity */ "./src/modules/Accessiblity.js");


const url = darialData.template_url;
const btn = document.querySelector(".btn-toggle");
const btnClose = document.querySelector("#canvasdismiss");
const searchBtnClose = document.querySelector("#searchcanvasdismiss");
const theme = document.querySelector("#darial_light_style-css");
const navbar = document.querySelector("nav.navbar");
const secondNavbar = document.querySelector(".secondnavbar");
btn.addEventListener("click", function () {
  if (theme.getAttribute("href") == url.concat("/css/dark-theme.css?ver=6.0")) {
    theme.href = url.concat('/css/light-theme.css?ver=6.0');
    btnClose.classList.remove("btn-close-white");
    searchBtnClose.classList.remove("btn-close-white");
    navbar.classList.remove("bg-dark");
    navbar.classList.add("bg-light");
    secondNavbar.classList.remove("bg-dark");
    secondNavbar.classList.add("bg-light");
  } else {
    theme.href = url.concat("/css/dark-theme.css?ver=6.0");
    btnClose.classList.add("btn-close-white");
    searchBtnClose.classList.add("btn-close-white");
    navbar.classList.add("bg-dark");
    secondNavbar.classList.add("bg-dark");
    navbar.classList.remove("bg-light");
    secondNavbar.classList.remove("bg-light");
  }
});

function searchclasses() {
  const search = document.querySelector(".search-field");
  search.classList.add("form-control", "rounded-0", "me-2", "dropdown-toggle", "seform", "input_search");
  const searchsubmit = document.querySelector(".search-submit");
  searchsubmit.classList.add("btn", "btn-outline-danger", "rounded-0");
  search.setAttribute("data-bs-toggle", "offcanvas");
  search.setAttribute("data-bs-target", "#offcanvasSearch");
  searchsubmit.setAttribute("style", "width: 25%");
  search.setAttribute("id", "keyword");
  search.setAttribute("onkeyup", "fetch()");
}

searchclasses();

function postsByCat() {
  const postByCatContent = document.querySelectorAll(".postbycategorycontainer li");

  for (const post of postByCatContent) {
    post.classList.add('contentrecent');
  }
}

postsByCat();
$("input#keyword").keyup(function () {
  if ($(this).val().length > 2) {
    $("#datafetch").show();
  } else {
    $("#datafetch").hide();
  }
});
const myTodayPosts = document.querySelector(".offcanvas");
const mySearchField = document.querySelector(".searchoffcanvas");
const mediaQuery = window.matchMedia('(max-width: 920px)');

if (mediaQuery.matches) {
  mySearchField.classList.remove("offcanvas-start");
  mySearchField.classList.add("offcanvas-bottom");
  mySearchField.setAttribute("style", "height: 50%");
  myTodayPosts.classList.remove("offcanvas-start");
  myTodayPosts.classList.add("offcanvas-bottom");
  myTodayPosts.setAttribute("style", "height: 50%");
}

let postImage = document.querySelectorAll('.postbycategorycontainer .wp-block-post-featured-image');
let hr = document.querySelectorAll('hr');
let contentRecent = document.querySelectorAll('.postbycategorycontainer .wp-block-post');

for (const image of postImage) {
  image.classList.add("contentimage");
}

for (const myhr of hr) {
  myhr.classList.remove("wp-block-separator", "has-alpha-channel-opacity");
}

for (const recent of contentRecent) {
  recent.classList.add("contentrecent");
}

let transparentBox = [];
let postImg = document.querySelectorAll('.postbycategorycontainer .wp-block-post-featured-image');
let innerImg = document.querySelectorAll('.postbycategorycontainer .wp-block-post-featured-image img');

for (let i = 0; i < postImg.length; i++) {
  transparentBox[i] = document.createElement('div');
  transparentBox[i].classList.add("transparent-box2");
  postImg[i].setAttribute("style", `background-image: url(${innerImg[i].currentSrc})`);
  postImg[i].appendChild(transparentBox[i]);
}

for (const img of innerImg) {
  img.remove();
}

let currentPage = document.querySelectorAll(".current");
let pages = document.querySelectorAll('a.page-numbers');
let pagesSpan = document.querySelectorAll('span.page-numbers');
let blockPagination = document.querySelectorAll('.wp-block-query-pagination');
let blockPaginationNextPage = document.querySelectorAll('.wp-block-query-pagination-next');
let blockPaginationPrevPage = document.querySelectorAll('.wp-block-query-pagination-previous');
let paginationNum = document.querySelectorAll('.wp-block-query-pagination-numbers');
let paginationDot = document.querySelectorAll('span.dots');

if (blockPagination !== null) {
  for (const page of blockPagination) {
    page.classList.add("page-link");
  }
}

if (paginationDot !== null) {
  for (const page of paginationDot) {
    page.classList.add("page-link");
  }
}

if (paginationNum !== null) {
  for (const page of paginationNum) {
    page.classList.add("pagination", "pagination-lg");
  }
}

if (blockPaginationNextPage !== null) {
  for (const page of blockPaginationNextPage) {
    page.classList.add("page-link", "pagination", "pagination-lg");
  }
}

if (blockPaginationPrevPage !== null) {
  for (const page of blockPaginationPrevPage) {
    page.classList.add("page-link", "pagination", "pagination-lg");
  }
}

for (const page of pages) {
  page.classList.add('page-link');
  page.setAttribute("style", "display: inline-block");
}

for (const current of currentPage) {
  current.classList.add("disabled", "page-item", "bg-danger", "page-link");
}

for (const span of pagesSpan) {
  span.setAttribute("style", "display: inline-block");
}

let searchsub = document.querySelector(".alert .search-submit");

if (searchsub !== null) {
  searchsub.classList.add('btn', 'btn-outline-danger', 'rounded-0');
}

let videoQuery = document.querySelectorAll(".container33 .wp-block-post");
let firstVideoQuery = document.querySelectorAll(".container35 .wp-block-post");

for (let i = 0; i < firstVideoQuery.length; i++) {
  firstVideoQuery[i].setAttribute("style", `background-image: url(${innerImg[i].currentSrc})`);
}

for (let i = 0; i < videoQuery.length; i++) {
  videoQuery[i].setAttribute("style", `background-image: url(${innerImg[i].currentSrc})`);
}

let videoBlock = document.querySelectorAll(".container33 .wp-block-post");
let videoBlockSpan = document.querySelectorAll(".container33 .wp-block-post-title a");
let firstVideoBlock = document.querySelectorAll(".container35 .wp-block-post");
let firsrVideoBlockSpan = document.querySelectorAll(".container35 .wp-block-post-title a");
let videoBlockFigure = document.querySelectorAll(".container33 figure.contentimage");
let firsrVideoBlockFigure = document.querySelector(".container35 figure.contentimage");

for (const video of videoBlock) {
  video.classList.add("video-image-container");
}

for (const video of videoBlockSpan) {
  video.classList.add("videospan");
}

for (const video of firstVideoBlock) {
  video.classList.add("video-image-containerfirst");
}

for (const video of firsrVideoBlockSpan) {
  video.classList.add("videospan");
}

for (const video of videoBlockFigure) {
  video.remove();
}

if (firsrVideoBlockFigure !== null) {
  firsrVideoBlockFigure.remove();
}

/***/ }),

/***/ "./src/modules/Accessiblity.js":
/*!*************************************!*\
  !*** ./src/modules/Accessiblity.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function Accessiblity() {
  const author = document.querySelector("#author");
  author.setAttribute("placeholder", "Name*");
  const authorLabel = document.querySelector(".comment-form-author label");
  authorLabel.classList.add("visually-hidden");
  const email = document.querySelector("#email");
  email.setAttribute("placeholder", "Email*");
  const emailLabel = document.querySelector(".comment-form-email label");
  emailLabel.classList.add("visually-hidden");
  const website = document.querySelector("#url");
  website.setAttribute("placeholder", "Website");
  const websiteLabel = document.querySelector(".comment-form-url label");
  websiteLabel.classList.add("visually-hidden");
}

if (typeof author !== "undefined") {
  Accessiblity();
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Accessiblity);

/***/ }),

/***/ "./css/style.scss":
/*!************************!*\
  !*** ./css/style.scss ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"index": 0,
/******/ 			"./style-index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = globalThis["webpackChunktheblocktheme"] = globalThis["webpackChunktheblocktheme"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-index"], () => (__webpack_require__("./src/index.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map