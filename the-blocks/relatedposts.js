wp.blocks.registerBlockType("theblocktheme/relatedposts", {
    title: "Related Posts",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Related Posts")
    },
    save: function () {
        return null
    }
})