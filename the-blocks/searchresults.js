wp.blocks.registerBlockType("theblocktheme/searchresults", {
    title: "Search Results",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Search Results")
    },
    save: function () {
        return null
    }
})