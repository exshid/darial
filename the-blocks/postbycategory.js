wp.blocks.registerBlockType("theblocktheme/postbycategory", {
    title: "Posts By Category",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Posts By Category")
    },
    save: function () {
        return null
    }
})