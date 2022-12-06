(() => {
    "use strict"; $(document).ready((function () {
        var e = $(".no-results"); $("#searchText").on("keyup", (function () { var s = $(this).val(), t = !1, n = this.value.toLowerCase().trim(); $(document).on("click", ".close-sign", (function () { $("#searchText").val(""), $(".side-menus").show().filter(), $(".close-sign").hide(), $(".search-sign").show(), $(".no-results").css("display", "none"), toggleSubMenu() })), $(".side-menus").show().filter((function () { $(document).find(".nav-item .collapse ul li").parent("ul").parent("ul").addClass("show"), $(document).find(".nav-item a").attr("aria-expanded", "true"), "" == s && ($(".close-sign").hide(), $(".search-sign").show(), toggleSubMenu()), -1 == $(this).text().toLowerCase().trim().indexOf(n) ? ($(this).hide(), $(".close-sign").show(), $(".search-sign").hide()) : (t = !0, $(this).show()) })), e.toggle(!t) })), window.toggleSubMenu = function () {
            $(document).find(".side-menus").hasClass("list-unstyled") && ($(".list-unstyled").removeClass("show").removeAttr("style"),
                $(document).find(".nav-item a").attr("aria-expanded", "false"))
        }
    }))
})();
