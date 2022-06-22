/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./the-blocks/comments.js ***!
  \********************************/
wp.blocks.registerBlockType("theblocktheme/comments", {
  title: "Comments",
  edit: function () {
    return wp.element.createElement("div", {
      className: "our-placeholder-block"
    }, "Placeholder For Comments");
  },
  save: function () {
    return null;
  }
});
/******/ })()
;
//# sourceMappingURL=comments.js.map