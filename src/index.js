import "../css/style.scss"
import Accessiblity from "./modules/Accessiblity"


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

})

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

postsByCat()
$("input#keyword").keyup(function () {
    if ($(this).val().length > 2) {
        $("#datafetch").show();
    } else {
        $("#datafetch").hide();
    }
});

const myTodayPosts = document.querySelector(".offcanvas");
const mySearchField = document.querySelector(".searchoffcanvas");

const mediaQuery = window.matchMedia('(max-width: 920px)')
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
    image.classList.add("contentimage")
}
for (const myhr of hr) {
    myhr.classList.remove("wp-block-separator", "has-alpha-channel-opacity")
}


for (const recent of contentRecent) {
    recent.classList.add("contentrecent")
}

let transparentBox = [];
let postImg = document.querySelectorAll('.postbycategorycontainer .wp-block-post-featured-image');

let innerImg = document.querySelectorAll('.postbycategorycontainer .wp-block-post-featured-image img');
for (let i = 0; i < postImg.length; i++) {
    transparentBox[i] = document.createElement('div');

    transparentBox[i].classList.add("transparent-box2")

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
        page.classList.add("page-link")
    }

}


if (paginationDot !== null) {
    for (const page of paginationDot) {
        page.classList.add("page-link")
    }

}


if (paginationNum !== null) {
    for (const page of paginationNum) {
        page.classList.add("pagination", "pagination-lg")
    }

}


if (blockPaginationNextPage !== null) {

    for (const page of blockPaginationNextPage) {
        page.classList.add("page-link", "pagination", "pagination-lg")
    }

}


if (blockPaginationPrevPage !== null) {
    for (const page of blockPaginationPrevPage) {
        page.classList.add("page-link", "pagination", "pagination-lg")
    }

}


for (const page of pages) {
    page.classList.add('page-link');
    page.setAttribute("style", "display: inline-block");
}

for (const current of currentPage) {
    current.classList.add("disabled", "page-item", "bg-danger", "page-link")
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
    video.classList.add("video-image-container")
}
for (const video of videoBlockSpan) {
    video.classList.add("videospan")
}

for (const video of firstVideoBlock) {
    video.classList.add("video-image-containerfirst")
}
for (const video of firsrVideoBlockSpan) {
    video.classList.add("videospan")
}

for (const video of videoBlockFigure) {
    video.remove();
}
if (firsrVideoBlockFigure !== null) {

    firsrVideoBlockFigure.remove();

}