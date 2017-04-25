! function(a) {
    a.fn.navList = function() {
        var c = a(this);
        return $a = c.find("a"), b = [], $a.each(function() {
            var c = a(this),
                d = Math.max(0, c.parents("li").length - 1),
                e = c.attr("href"),
                f = c.attr("target");
            b.push('<a class="link depth-' + d + '"' + (void 0 !== f && "" != f ? ' target="' + f + '"' : "") + (void 0 !== e && "" != e ? ' href="' + e + '"' : "") + '><span class="indent-' + d + '"></span>' + c.text() + "</a>")
        }), b.join("")
    }, a.fn.panel = function(b) {
        if (0 == this.length) return d;
        if (this.length > 1) {
            for (var c = 0; c < this.length; c++) a(this[c]).panel(b);
            return d
        }
        var h, d = a(this),
            e = a("body"),
            f = a(window),
            g = d.attr("id");
        return h = a.extend({
            delay: 0,
            hideOnClick: !1,
            hideOnEscape: !1,
            hideOnSwipe: !1,
            resetScroll: !1,
            resetForms: !1,
            side: null,
            target: d,
            visibleClass: "visible"
        }, b), "jQuery" != typeof h.target && (h.target = a(h.target)), d._hide = function(a) {
            h.target.hasClass(h.visibleClass) && (a && (a.preventDefault(), a.stopPropagation()), h.target.removeClass(h.visibleClass), window.setTimeout(function() {
                h.resetScroll && d.scrollTop(0), h.resetForms && d.find("form").each(function() {
                    this.reset()
                })
            }, h.delay))
        }, d.css("-ms-overflow-style", "-ms-autohiding-scrollbar").css("-webkit-overflow-scrolling", "touch"), h.hideOnClick && (d.find("a").css("-webkit-tap-highlight-color", "rgba(0,0,0,0)"), d.on("click", "a", function(b) {
            var c = a(this),
                e = c.attr("href"),
                f = c.attr("target");
            e && "#" != e && "" != e && e != "#" + g && (b.preventDefault(), b.stopPropagation(), d._hide(), window.setTimeout(function() {
                "_blank" == f ? window.open(e) : window.location.href = e
            }, h.delay + 10))
        })), d.on("touchstart", function(a) {
            d.touchPosX = a.originalEvent.touches[0].pageX, d.touchPosY = a.originalEvent.touches[0].pageY
        }), d.on("touchmove", function(a) {
            if (null !== d.touchPosX && null !== d.touchPosY) {
                var b = d.touchPosX - a.originalEvent.touches[0].pageX,
                    c = d.touchPosY - a.originalEvent.touches[0].pageY,
                    e = d.outerHeight(),
                    f = d.get(0).scrollHeight - d.scrollTop();
                if (h.hideOnSwipe) {
                    var g = !1,
                        i = 20,
                        j = 50;
                    switch (h.side) {
                        case "left":
                            g = c < i && c > -1 * i && b > j;
                            break;
                        case "right":
                            g = c < i && c > -1 * i && b < -1 * j;
                            break;
                        case "top":
                            g = b < i && b > -1 * i && c > j;
                            break;
                        case "bottom":
                            g = b < i && b > -1 * i && c < -1 * j
                    }
                    if (g) return d.touchPosX = null, d.touchPosY = null, d._hide(), !1
                }(d.scrollTop() < 0 && c < 0 || f > e - 2 && f < e + 2 && c > 0) && (a.preventDefault(), a.stopPropagation())
            }
        }), d.on("click touchend touchstart touchmove", function(a) {
            a.stopPropagation()
        }), d.on("click", 'a[href="#' + g + '"]', function(a) {
            a.preventDefault(), a.stopPropagation(), h.target.removeClass(h.visibleClass)
        }), e.on("click touchend", function(a) {
            d._hide(a)
        }), e.on("click", 'a[href="#' + g + '"]', function(a) {
            a.preventDefault(), a.stopPropagation(), h.target.toggleClass(h.visibleClass)
        }), h.hideOnEscape && f.on("keydown", function(a) {
            27 == a.keyCode && d._hide(a)
        }), d
    }, a.fn.placeholder = function() {
        if (void 0 !== document.createElement("input").placeholder) return a(this);
        if (0 == this.length) return c;
        if (this.length > 1) {
            for (var b = 0; b < this.length; b++) a(this[b]).placeholder();
            return c
        }
        var c = a(this);
        return c.find("input[type=text],textarea").each(function() {
            var b = a(this);
            "" != b.val() && b.val() != b.attr("placeholder") || b.addClass("polyfill-placeholder").val(b.attr("placeholder"))
        }).on("blur", function() {
            var b = a(this);
            b.attr("name").match(/-polyfill-field$/) || "" == b.val() && b.addClass("polyfill-placeholder").val(b.attr("placeholder"))
        }).on("focus", function() {
            var b = a(this);
            b.attr("name").match(/-polyfill-field$/) || b.val() == b.attr("placeholder") && b.removeClass("polyfill-placeholder").val("")
        }), c.find("input[type=password]").each(function() {
            var b = a(this),
                c = a(a("<div>").append(b.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, "type=text"));
            "" != b.attr("id") && c.attr("id", b.attr("id") + "-polyfill-field"), "" != b.attr("name") && c.attr("name", b.attr("name") + "-polyfill-field"), c.addClass("polyfill-placeholder").val(c.attr("placeholder")).insertAfter(b), "" == b.val() ? b.hide() : c.hide(), b.on("blur", function(a) {
                a.preventDefault();
                var c = b.parent().find("input[name=" + b.attr("name") + "-polyfill-field]");
                "" == b.val() && (b.hide(), c.show())
            }), c.on("focus", function(a) {
                a.preventDefault();
                var b = c.parent().find("input[name=" + c.attr("name").replace("-polyfill-field", "") + "]");
                c.hide(), b.show().focus()
            }).on("keypress", function(a) {
                a.preventDefault(), c.val("")
            })
        }), c.on("submit", function() {
            c.find("input[type=text],input[type=password],textarea").each(function(b) {
                var c = a(this);
                c.attr("name").match(/-polyfill-field$/) && c.attr("name", ""), c.val() == c.attr("placeholder") && (c.removeClass("polyfill-placeholder"), c.val(""))
            })
        }).on("reset", function(b) {
            b.preventDefault(), c.find("select").val(a("option:first").val()), c.find("input,textarea").each(function() {
                var c, b = a(this);
                switch (b.removeClass("polyfill-placeholder"), this.type) {
                    case "submit":
                    case "reset":
                        break;
                    case "password":
                        b.val(b.attr("defaultValue")), c = b.parent().find("input[name=" + b.attr("name") + "-polyfill-field]"), "" == b.val() ? (b.hide(), c.show()) : (b.show(), c.hide());
                        break;
                    case "checkbox":
                    case "radio":
                        b.attr("checked", b.attr("defaultValue"));
                        break;
                    case "text":
                    case "textarea":
                        b.val(b.attr("defaultValue")), "" == b.val() && (b.addClass("polyfill-placeholder"), b.val(b.attr("placeholder")));
                        break;
                    default:
                        b.val(b.attr("defaultValue"))
                }
            })
        }), c
    }, a.prioritize = function(b, c) {
        var d = "__prioritize";
        "jQuery" != typeof b && (b = a(b)), b.each(function() {
            var e, b = a(this),
                f = b.parent();
            if (0 != f.length)
                if (b.data(d)) {
                    if (c) return;
                    e = b.data(d), b.insertAfter(e), b.removeData(d)
                } else {
                    if (!c) return;
                    if (e = b.prev(), 0 == e.length) return;
                    b.prependTo(f), b.data(d, e)
                }
        })
    }
}(jQuery);