wp.blocks.registerBlockType("theblocktheme/videos", {
    title: "Videos",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Videos")
    },
    save: function () {
        return null
    }
})