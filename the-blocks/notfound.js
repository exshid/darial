wp.blocks.registerBlockType("theblocktheme/notfound", {
    title: "404 (Not Found)",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For 404 notfound")
    },
    save: function () {
        return null
    }
})