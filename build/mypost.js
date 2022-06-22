/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./the-blocks/mypost.js ***!
  \******************************/
wp.blocks.registerBlockType("theblocktheme/mypost", {
  title: "Post Content",
  edit: function () {
    return wp.element.createElement("div", {
      className: "our-placeholder-block"
    }, "Placeholder For Post Content");
  },
  save: function () {
    return null;
  }
});
/******/ })()
;
//# sourceMappingURL=mypost.js.map