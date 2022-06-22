wp.blocks.registerBlockType("theblocktheme/rightsidebar", {
    title: "Right Sidebar",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Right Sidebar")
    },
    save: function () {
        return null
    }
})