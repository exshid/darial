wp.blocks.registerBlockType("theblocktheme/latestpostscustom", {
    title: "Latest Posts",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Latest Posts")
    },
    save: function () {
        return null
    }
})