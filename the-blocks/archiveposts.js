wp.blocks.registerBlockType("theblocktheme/archiveposts", {
    title: "Archive Posts",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Archive Posts")
    },
    save: function () {
        return null
    }
})