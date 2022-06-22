wp.blocks.registerBlockType("theblocktheme/firstpost", {
    title: "First Post",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For First Post")
    },
    save: function () {
        return null
    }
})