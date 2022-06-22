/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./the-blocks/page.js ***!
  \****************************/
wp.blocks.registerBlockType("theblocktheme/page", {
  title: "Page",
  edit: function () {
    return wp.element.createElement("div", {
      className: "our-placeholder-block"
    }, "Placeholder For Page");
  },
  save: function () {
    return null;
  }
});
/******/ })()
;
//# sourceMappingURL=page.js.map