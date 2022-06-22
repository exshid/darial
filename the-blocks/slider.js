wp.blocks.registerBlockType("theblocktheme/slider", {
    title: "Slider",
    edit: function () {
        return wp.element.createElement("div", { className: "our-placeholder-block" }, "Placeholder For Slider")
    },
    save: function () {
        return null
    }
})