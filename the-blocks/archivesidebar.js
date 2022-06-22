wp.blocks.registerBlockType("theblocktheme/archivesidebar", {
    title: "Archive Sidebar",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Archive Sidebar")
    },
    save: function () {
        return null
    }
})