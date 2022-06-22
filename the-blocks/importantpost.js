wp.blocks.registerBlockType("theblocktheme/importantpost", {
    title: "Important Post",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Important Post")
    },
    save: function () {
        return null
    }
})