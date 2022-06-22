wp.blocks.registerBlockType("theblocktheme/navbar", {
    title: "Navbar",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Navbar")
    },
    save: function () {
        return null
    }
})