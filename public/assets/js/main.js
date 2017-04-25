! function(a) {
    skel.breakpoints({
        xlarge: "(max-width: 1680px)",
        large: "(max-width: 1280px)",
        medium: "(max-width: 980px)",
        small: "(max-width: 736px)",
        xsmall: "(max-width: 480px)"
    }), a(function() {
        var b = a(window),
            c = a("body"),
            e = (a("#page-wrapper"), a("#banner")),
            f = a("#header");
        c.addClass("is-loading"), b.on("load", function() {
            window.setTimeout(function() {
                c.removeClass("is-loading")
            }, 100)
        }), skel.vars.mobile ? c.addClass("is-mobile") : skel.on("-medium !medium", function() {
            c.removeClass("is-mobile")
        }).on("+medium", function() {
            c.addClass("is-mobile")
        }), a("form").placeholder(), skel.on("+medium -medium", function() {
            a.prioritize(".important\\28 medium\\29", skel.breakpoint("medium").active)
        }), a(".scrolly").scrolly({
            speed: 1500,
            offset: f.outerHeight()
        }), a("#menu").append('<a href="#menu" class="close"></a>').appendTo(c).panel({
            delay: 500,
            hideOnClick: !0,
            hideOnSwipe: !0,
            resetScroll: !0,
            resetForms: !0,
            side: "right",
            target: c,
            visibleClass: "is-menu-visible"
        }), skel.vars.IEVersion < 9 && f.removeClass("alt"), e.length > 0 && f.hasClass("alt") && (b.on("resize", function() {
            b.trigger("scroll")
        }), e.scrollex({
            bottom: f.outerHeight() + 1,
            terminate: function() {
                f.removeClass("alt")
            },
            enter: function() {
                f.addClass("alt")
            },
            leave: function() {
                f.removeClass("alt")
            }
        }))
    })
}(jQuery);