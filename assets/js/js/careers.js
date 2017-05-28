function faqList() {
    if ($(".js-faq-list-block").length > 0) {
        var t = $(".js-faq-list-block").data("pageurl");
        $(".js-button-holder").each(function() {
            var e = $(this),
                i = e.data("loadurl");
            e.find("a.button").on("click", function(n) {
                n.preventDefault();
                var a = t.split("[page]").join(i);
                $.get(a, function(t) {
                    var n = 1 == e.hasClass("js-button-holder-next"),
                        a = "#load-" + (n ? "next" : "previous") + "-url-param";
                    n ? $(".list-results").append(t) : $(".list-results").prepend(t), $(".list-results .js-new-item a").each(function() {
                        var t = $(this);
                        t.on("click", function(e) {
                            e.preventDefault();
                            var i = t.closest("li").data("page"),
                                n = t.closest("li").data("pageindex"),
                                a = "?page=" + i;
                            window.history.pushState({}, "", a);
                            var s = t.attr("href");
                            window.location.href = s
                        })
                    }), $(".list-results .js-new-item").removeClass("js-new-item"), i = $(a).html(), $("#load-next-url-param").remove(), $("#load-previous-url-param").remove(), "0" == i && e.remove()
                })
            })
        })
    }
}

function faqDetail() {
    $(".faq-detail").length > 0 && $(".breadcrumb").length > 0 && window.history.length > 1 && $(".breadcrumb a").on("click", function(t) {
        t.preventDefault(), window.history.back()
    })
}

function faqSubmitQuestion() {
    $("#faq-submit-question").length > 0 && $("#faq-submit-question").on("click", function(t) {
        t.preventDefault(), $("#frmSubmitQuestion").submit()
    })
}

function eventPages() {
    $(".js-event-list-block").length > 0 && ($(".js-event-list-finish").remove(), $(".js-button-holder").each(function() {
        var t = $(this),
            e = 1 == t.hasClass("js-button-holder-next"),
            i = e ? "next" : "previous",
            n = $(".js-" + i + "-elements").data("loadurl");
        t.find(".js-btn-load-more").on("click", function(i) {
            i.preventDefault();
            var a = "/connect/events/page-" + n + ".html";
            $.get(a, function(i) {
                var a = "#load-" + (e ? "next" : "previous") + "-url-param";
                e ? $(".js-next-elements").before(i) : $(".js-previous-elements").after(i), $(".js-new-event a").each(function() {
                    var t = $(this);
                    t.on("click", function(e) {
                        e.preventDefault();
                        var i = t.closest(".js-eventlist-item").data("page"),
                            n = t.closest(".js-eventlist-item").data("pageindex"),
                            a = "?page=" + i;
                        window.history.pushState({}, "", a);
                        var s = t.attr("href");
                        window.location.href = s
                    })
                }), $(".js-new-event").removeClass("js-new-event"), n = $(a).html(), $("#load-next-url-param").remove(), $("#load-previous-url-param").remove(), "0" == n && t.remove()
            })
        })
    }))
}

function eventDetail() {
    if ($(".js-event-sidebar-block").length > 0) {
        $(".breadcrumb").length > 0 && window.history.length > 1 && $(".breadcrumb a").on("click", function(t) {
            t.preventDefault(), window.history.back()
        });
        var t = 6e4,
            e = function(t) {
                try {
                    return t.toISOString().replace(/-|:|\.\d+/g, "")
                } catch (e) {
                    return ""
                }
            },
            i = function(i) {
                return void 0 === i || "" == i || "" == i.start ? "" : (console.log(i), e(i.end ? i.end : new Date(i.start.getTime() + i.duration * t)))
            },
            n = {
                google: function(t) {
                    var n = e(t.start),
                        a = i(t),
                        s = encodeURI(["https://www.google.com/calendar/render", "?action=TEMPLATE", "&text=" + (t.title || ""), "&dates=" + (n || ""), "/" + (a || ""), "&details=" + (t.description || ""), "&location=" + (t.address || ""), "&sprop=&sprop=name:"].join(""));
                    return '<a class="icon-google" target="_blank" href="' + s + '">Google Calendar</a>'
                },
                yahoo: function(i) {
                    var n = i.end ? (i.end.getTime() - i.start.getTime()) / t : i.duration,
                        a = 600 > n ? "0" + Math.floor(n / 60) : Math.floor(n / 60) + "",
                        s = 10 > n % 60 ? "0" + n % 60 : n % 60 + "",
                        o = a + s,
                        r = e(new Date(i.start - i.start.getTimezoneOffset() * t)) || "",
                        l = encodeURI(["http://calendar.yahoo.com/?v=60&view=d&type=20", "&title=" + (i.title || ""), "&st=" + r, "&dur=" + (o || ""), "&desc=" + (i.description || ""), "&in_loc=" + (i.address || "")].join(""));
                    return '<a class="icon-yahoo" target="_blank" href="' + l + '">Yahoo! Calendar</a>'
                },
                ics: function(t, n, a) {
                    var s = e(t.start),
                        o = i(t),
                        r = encodeURI("data:text/calendar;charset=utf8," + ["BEGIN:VCALENDAR", "VERSION:2.0", "BEGIN:VEVENT", "URL:" + document.URL, "DTSTART:" + (s || ""), "DTEND:" + (o || ""), "SUMMARY:" + (t.title || ""), "DESCRIPTION:" + (t.description || ""), "LOCATION:" + (t.address || ""), "END:VEVENT", "END:VCALENDAR"].join("\n"));
                    return '<a class="' + n + '" target="_blank" href="' + r + '">' + a + " Calendar</a>"
                },
                ical: function(t) {
                    return this.ics(t, "icon-ical", "iCal")
                },
                outlook: function(t) {
                    return this.ics(t, "icon-outlook", "Outlook")
                }
            };
        $(".icon-calendar").on("click", function(t) {
            t.preventDefault(), $(".icon-calendar-types").toggle()
        });
        var a = {
            title: "",
            description: function(t) {
                return window.location.href
            },
            address: "",
            start: function(t) {
                if (void 0 === t || "" == t) return "";
                var e = t.split(","),
                    i = e[3].split(":"),
                    n = new Date(e[0], e[1], e[2]);
                return n.setHours(i[0]), n.setMinutes(i[1]), n
            },
            end: function(t) {
                if (void 0 === t || "" == t) return "";
                var e = t.split(","),
                    i = e[3].split(":"),
                    n = new Date(e[0], e[1], e[2]);
                return n.setHours(i[0]), n.setMinutes(i[1]), n
            }
        };
        for (var s in a) {
            var o = $(".js-icon-calendar-detail-" + s).html();
            "function" == typeof a[s] && (o = a[s](o)), a[s] = o
        }
        $(".icon-calendar-types").append("<div>" + n.google(a) + "</div>")
    }
}

function newsPages() {
    $(".js-news-list-block").length > 0 && $(".js-button-holder").each(function() {
        var t = $(this),
            e = t.data("loadurl");
        t.find(".js-btn-load-more").on("click", function(i) {
            i.preventDefault();
            var n = "/connect/college-news/page-" + e + ".html";
            $.get(n, function(i) {
                var n = 1 == t.hasClass("js-button-holder-next"),
                    a = "#load-" + (n ? "next" : "previous") + "-url-param";
                n ? $(".list-results").append(i) : $(".list-results").prepend(i), $(".list-results .js-new-item a").each(function() {
                    var t = $(this);
                    t.on("click", function(e) {
                        e.preventDefault();
                        var i = t.closest("li").data("page"),
                            n = t.closest("li").data("pageindex"),
                            a = "?page=" + i;
                        window.history.pushState({}, "", a);
                        var s = t.attr("href");
                        window.location.href = s
                    })
                }), $(".list-results .js-new-item").removeClass("js-new-item"), e = $(a).html(), $("#load-next-url-param").remove(), $("#load-previous-url-param").remove(), "0" == e && t.remove()
            })
        })
    })
}

function newsDetail() {
    $(".js-news-detail-block").length > 0 && $(".breadcrumb").length > 0 && window.history.length > 1 && $(".breadcrumb a").on("click", function(t) {
        t.preventDefault(), window.history.back()
    })
}! function(t) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : t(jQuery)
}(function($) {
    function t(t, i) {
        var n, a, s, o = t.nodeName.toLowerCase();
        return "area" === o ? (n = t.parentNode, a = n.name, t.href && a && "map" === n.nodeName.toLowerCase() ? (s = $("img[usemap='#" + a + "']")[0], !!s && e(s)) : !1) : (/^(input|select|textarea|button|object)$/.test(o) ? !t.disabled : "a" === o ? t.href || i : i) && e(t)
    }

    function e(t) {
        return $.expr.filters.visible(t) && !$(t).parents().addBack().filter(function() {
            return "hidden" === $.css(this, "visibility")
        }).length
    }

    function i(t) {
        for (var e, i; t.length && t[0] !== document;) {
            if (e = t.css("position"), ("absolute" === e || "relative" === e || "fixed" === e) && (i = parseInt(t.css("zIndex"), 10), !isNaN(i) && 0 !== i)) return i;
            t = t.parent()
        }
        return 0
    }

    function n() {
        this._curInst = null, this._keyEvent = !1, this._disabledInputs = [], this._datepickerShowing = !1, this._inDialog = !1, this._mainDivId = "ui-datepicker-div", this._inlineClass = "ui-datepicker-inline", this._appendClass = "ui-datepicker-append", this._triggerClass = "ui-datepicker-trigger", this._dialogClass = "ui-datepicker-dialog", this._disableClass = "ui-datepicker-disabled", this._unselectableClass = "ui-datepicker-unselectable", this._currentClass = "ui-datepicker-current-day", this._dayOverClass = "ui-datepicker-days-cell-over", this.regional = [], this.regional[""] = {
            closeText: "Done",
            prevText: "Prev",
            nextText: "Next",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            weekHeader: "Wk",
            dateFormat: "mm/dd/yy",
            firstDay: 0,
            isRTL: !1,
            showMonthAfterYear: !1,
            yearSuffix: ""
        }, this._defaults = {
            showOn: "focus",
            showAnim: "fadeIn",
            showOptions: {},
            defaultDate: null,
            appendText: "",
            buttonText: "...",
            buttonImage: "",
            buttonImageOnly: !1,
            hideIfNoPrevNext: !1,
            navigationAsDateFormat: !1,
            gotoCurrent: !1,
            changeMonth: !1,
            changeYear: !1,
            yearRange: "c-10:c+10",
            showOtherMonths: !1,
            selectOtherMonths: !1,
            showWeek: !1,
            calculateWeek: this.iso8601Week,
            shortYearCutoff: "+10",
            minDate: null,
            maxDate: null,
            duration: "fast",
            beforeShowDay: null,
            beforeShow: null,
            onSelect: null,
            onChangeMonthYear: null,
            onClose: null,
            numberOfMonths: 1,
            showCurrentAtPos: 0,
            stepMonths: 1,
            stepBigMonths: 12,
            altField: "",
            altFormat: "",
            constrainInput: !0,
            showButtonPanel: !1,
            autoSize: !1,
            disabled: !1
        }, $.extend(this._defaults, this.regional[""]), this.regional.en = $.extend(!0, {}, this.regional[""]), this.regional["en-US"] = $.extend(!0, {}, this.regional.en), this.dpDiv = a($("<div id='" + this._mainDivId + "' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))
    }

    function a(t) {
        var e = "button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";
        return t.delegate(e, "mouseout", function() {
            $(this).removeClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && $(this).removeClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && $(this).removeClass("ui-datepicker-next-hover")
        }).delegate(e, "mouseover", s)
    }

    function s() {
        $.datepicker._isDisabledDatepicker(r.inline ? r.dpDiv.parent()[0] : r.input[0]) || ($(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"), $(this).addClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && $(this).addClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && $(this).addClass("ui-datepicker-next-hover"))
    }

    function o(t, e) {
        $.extend(t, e);
        for (var i in e) null == e[i] && (t[i] = e[i]);
        return t
    }
    $.ui = $.ui || {}, $.extend($.ui, {
        version: "1.11.4",
        keyCode: {
            BACKSPACE: 8,
            COMMA: 188,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            LEFT: 37,
            PAGE_DOWN: 34,
            PAGE_UP: 33,
            PERIOD: 190,
            RIGHT: 39,
            SPACE: 32,
            TAB: 9,
            UP: 38
        }
    }), $.fn.extend({
        scrollParent: function(t) {
            var e = this.css("position"),
                i = "absolute" === e,
                n = t ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
                a = this.parents().filter(function() {
                    var t = $(this);
                    return i && "static" === t.css("position") ? !1 : n.test(t.css("overflow") + t.css("overflow-y") + t.css("overflow-x"))
                }).eq(0);
            return "fixed" !== e && a.length ? a : $(this[0].ownerDocument || document)
        },
        uniqueId: function() {
            var t = 0;
            return function() {
                return this.each(function() {
                    this.id || (this.id = "ui-id-" + ++t)
                })
            }
        }(),
        removeUniqueId: function() {
            return this.each(function() {
                /^ui-id-\d+$/.test(this.id) && $(this).removeAttr("id")
            })
        }
    }), $.extend($.expr[":"], {
        data: $.expr.createPseudo ? $.expr.createPseudo(function(t) {
            return function(e) {
                return !!$.data(e, t)
            }
        }) : function(t, e, i) {
            return !!$.data(t, i[3])
        },
        focusable: function(e) {
            return t(e, !isNaN($.attr(e, "tabindex")))
        },
        tabbable: function(e) {
            var i = $.attr(e, "tabindex"),
                n = isNaN(i);
            return (n || i >= 0) && t(e, !n)
        }
    }), $("<a>").outerWidth(1).jquery || $.each(["Width", "Height"], function(t, e) {
        function i(t, e, i, a) {
            return $.each(n, function() {
                e -= parseFloat($.css(t, "padding" + this)) || 0, i && (e -= parseFloat($.css(t, "border" + this + "Width")) || 0), a && (e -= parseFloat($.css(t, "margin" + this)) || 0)
            }), e
        }
        var n = "Width" === e ? ["Left", "Right"] : ["Top", "Bottom"],
            a = e.toLowerCase(),
            s = {
                innerWidth: $.fn.innerWidth,
                innerHeight: $.fn.innerHeight,
                outerWidth: $.fn.outerWidth,
                outerHeight: $.fn.outerHeight
            };
        $.fn["inner" + e] = function(t) {
            return void 0 === t ? s["inner" + e].call(this) : this.each(function() {
                $(this).css(a, i(this, t) + "px")
            })
        }, $.fn["outer" + e] = function(t, n) {
            return "number" != typeof t ? s["outer" + e].call(this, t) : this.each(function() {
                $(this).css(a, i(this, t, !0, n) + "px")
            })
        }
    }), $.fn.addBack || ($.fn.addBack = function(t) {
        return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
    }), $("<a>").data("a-b", "a").removeData("a-b").data("a-b") && ($.fn.removeData = function(t) {
        return function(e) {
            return arguments.length ? t.call(this, $.camelCase(e)) : t.call(this)
        }
    }($.fn.removeData)), $.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), $.fn.extend({
        focus: function(t) {
            return function(e, i) {
                return "number" == typeof e ? this.each(function() {
                    var t = this;
                    setTimeout(function() {
                        $(t).focus(), i && i.call(t)
                    }, e)
                }) : t.apply(this, arguments)
            }
        }($.fn.focus),
        disableSelection: function() {
            var t = "onselectstart" in document.createElement("div") ? "selectstart" : "mousedown";
            return function() {
                return this.bind(t + ".ui-disableSelection", function(t) {
                    t.preventDefault()
                })
            }
        }(),
        enableSelection: function() {
            return this.unbind(".ui-disableSelection")
        },
        zIndex: function(t) {
            if (void 0 !== t) return this.css("zIndex", t);
            if (this.length)
                for (var e = $(this[0]), i, n; e.length && e[0] !== document;) {
                    if (i = e.css("position"), ("absolute" === i || "relative" === i || "fixed" === i) && (n = parseInt(e.css("zIndex"), 10), !isNaN(n) && 0 !== n)) return n;
                    e = e.parent()
                }
            return 0
        }
    }), $.ui.plugin = {
        add: function(t, e, i) {
            var n, a = $.ui[t].prototype;
            for (n in i) a.plugins[n] = a.plugins[n] || [], a.plugins[n].push([e, i[n]])
        },
        call: function(t, e, i, n) {
            var a, s = t.plugins[e];
            if (s && (n || t.element[0].parentNode && 11 !== t.element[0].parentNode.nodeType))
                for (a = 0; a < s.length; a++) t.options[s[a][0]] && s[a][1].apply(t.element, i)
        }
    }, $.extend($.ui, {
        datepicker: {
            version: "1.11.4"
        }
    });
    var r;
    $.extend(n.prototype, {
        markerClassName: "hasDatepicker",
        maxRows: 4,
        _widgetDatepicker: function() {
            return this.dpDiv
        },
        setDefaults: function(t) {
            return o(this._defaults, t || {}), this
        },
        _attachDatepicker: function(t, e) {
            var i, n, a;
            i = t.nodeName.toLowerCase(), n = "div" === i || "span" === i, t.id || (this.uuid += 1, t.id = "dp" + this.uuid), a = this._newInst($(t), n), a.settings = $.extend({}, e || {}), "input" === i ? this._connectDatepicker(t, a) : n && this._inlineDatepicker(t, a)
        },
        _newInst: function(t, e) {
            var i = t[0].id.replace(/([^A-Za-z0-9_\-])/g, "\\\\$1");
            return {
                id: i,
                input: t,
                selectedDay: 0,
                selectedMonth: 0,
                selectedYear: 0,
                drawMonth: 0,
                drawYear: 0,
                inline: e,
                dpDiv: e ? a($("<div class='" + this._inlineClass + " ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")) : this.dpDiv
            }
        },
        _connectDatepicker: function(t, e) {
            var i = $(t);
            e.append = $([]), e.trigger = $([]), i.hasClass(this.markerClassName) || (this._attachments(i, e), i.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp), this._autoSize(e), $.data(t, "datepicker", e), e.settings.disabled && this._disableDatepicker(t))
        },
        _attachments: function(t, e) {
            var i, n, a, s = this._get(e, "appendText"),
                o = this._get(e, "isRTL");
            e.append && e.append.remove(), s && (e.append = $("<span class='" + this._appendClass + "'>" + s + "</span>"), t[o ? "before" : "after"](e.append)), t.unbind("focus", this._showDatepicker), e.trigger && e.trigger.remove(), i = this._get(e, "showOn"), ("focus" === i || "both" === i) && t.focus(this._showDatepicker), ("button" === i || "both" === i) && (n = this._get(e, "buttonText"), a = this._get(e, "buttonImage"), e.trigger = $(this._get(e, "buttonImageOnly") ? $("<img/>").addClass(this._triggerClass).attr({
                src: a,
                alt: n,
                title: n
            }) : $("<button type='button'></button>").addClass(this._triggerClass).html(a ? $("<img/>").attr({
                src: a,
                alt: n,
                title: n
            }) : n)), t[o ? "before" : "after"](e.trigger), e.trigger.click(function() {
                return $.datepicker._datepickerShowing && $.datepicker._lastInput === t[0] ? $.datepicker._hideDatepicker() : $.datepicker._datepickerShowing && $.datepicker._lastInput !== t[0] ? ($.datepicker._hideDatepicker(), $.datepicker._showDatepicker(t[0])) : $.datepicker._showDatepicker(t[0]), !1
            }))
        },
        _autoSize: function(t) {
            if (this._get(t, "autoSize") && !t.inline) {
                var e, i, n, a, s = new Date(2009, 11, 20),
                    o = this._get(t, "dateFormat");
                o.match(/[DM]/) && (e = function(t) {
                    for (i = 0, n = 0, a = 0; a < t.length; a++) t[a].length > i && (i = t[a].length, n = a);
                    return n
                }, s.setMonth(e(this._get(t, o.match(/MM/) ? "monthNames" : "monthNamesShort"))), s.setDate(e(this._get(t, o.match(/DD/) ? "dayNames" : "dayNamesShort")) + 20 - s.getDay())), t.input.attr("size", this._formatDate(t, s).length)
            }
        },
        _inlineDatepicker: function(t, e) {
            var i = $(t);
            i.hasClass(this.markerClassName) || (i.addClass(this.markerClassName).append(e.dpDiv), $.data(t, "datepicker", e), this._setDate(e, this._getDefaultDate(e), !0), this._updateDatepicker(e), this._updateAlternate(e), e.settings.disabled && this._disableDatepicker(t), e.dpDiv.css("display", "block"))
        },
        _dialogDatepicker: function(t, e, i, n, a) {
            var s, r, l, c, u, d = this._dialogInst;
            return d || (this.uuid += 1, s = "dp" + this.uuid, this._dialogInput = $("<input type='text' id='" + s + "' style='position: absolute; top: -100px; width: 0px;'/>"), this._dialogInput.keydown(this._doKeyDown), $("body").append(this._dialogInput), d = this._dialogInst = this._newInst(this._dialogInput, !1), d.settings = {}, $.data(this._dialogInput[0], "datepicker", d)), o(d.settings, n || {}), e = e && e.constructor === Date ? this._formatDate(d, e) : e, this._dialogInput.val(e), this._pos = a ? a.length ? a : [a.pageX, a.pageY] : null, this._pos || (r = document.documentElement.clientWidth, l = document.documentElement.clientHeight, c = document.documentElement.scrollLeft || document.body.scrollLeft, u = document.documentElement.scrollTop || document.body.scrollTop, this._pos = [r / 2 - 100 + c, l / 2 - 150 + u]), this._dialogInput.css("left", this._pos[0] + 20 + "px").css("top", this._pos[1] + "px"), d.settings.onSelect = i, this._inDialog = !0, this.dpDiv.addClass(this._dialogClass), this._showDatepicker(this._dialogInput[0]), $.blockUI && $.blockUI(this.dpDiv), $.data(this._dialogInput[0], "datepicker", d), this
        },
        _destroyDatepicker: function(t) {
            var e, i = $(t),
                n = $.data(t, "datepicker");
            i.hasClass(this.markerClassName) && (e = t.nodeName.toLowerCase(), $.removeData(t, "datepicker"), "input" === e ? (n.append.remove(), n.trigger.remove(), i.removeClass(this.markerClassName).unbind("focus", this._showDatepicker).unbind("keydown", this._doKeyDown).unbind("keypress", this._doKeyPress).unbind("keyup", this._doKeyUp)) : ("div" === e || "span" === e) && i.removeClass(this.markerClassName).empty(), r === n && (r = null))
        },
        _enableDatepicker: function(t) {
            var e, i, n = $(t),
                a = $.data(t, "datepicker");
            n.hasClass(this.markerClassName) && (e = t.nodeName.toLowerCase(), "input" === e ? (t.disabled = !1, a.trigger.filter("button").each(function() {
                this.disabled = !1
            }).end().filter("img").css({
                opacity: "1.0",
                cursor: ""
            })) : ("div" === e || "span" === e) && (i = n.children("." + this._inlineClass), i.children().removeClass("ui-state-disabled"), i.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !1)), this._disabledInputs = $.map(this._disabledInputs, function(e) {
                return e === t ? null : e
            }))
        },
        _disableDatepicker: function(t) {
            var e, i, n = $(t),
                a = $.data(t, "datepicker");
            n.hasClass(this.markerClassName) && (e = t.nodeName.toLowerCase(), "input" === e ? (t.disabled = !0, a.trigger.filter("button").each(function() {
                this.disabled = !0
            }).end().filter("img").css({
                opacity: "0.5",
                cursor: "default"
            })) : ("div" === e || "span" === e) && (i = n.children("." + this._inlineClass), i.children().addClass("ui-state-disabled"), i.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !0)), this._disabledInputs = $.map(this._disabledInputs, function(e) {
                return e === t ? null : e
            }), this._disabledInputs[this._disabledInputs.length] = t)
        },
        _isDisabledDatepicker: function(t) {
            if (!t) return !1;
            for (var e = 0; e < this._disabledInputs.length; e++)
                if (this._disabledInputs[e] === t) return !0;
            return !1
        },
        _getInst: function(t) {
            try {
                return $.data(t, "datepicker")
            } catch (e) {
                throw "Missing instance data for this datepicker"
            }
        },
        _optionDatepicker: function(t, e, i) {
            var n, a, s, r, l = this._getInst(t);
            return 2 === arguments.length && "string" == typeof e ? "defaults" === e ? $.extend({}, $.datepicker._defaults) : l ? "all" === e ? $.extend({}, l.settings) : this._get(l, e) : null : (n = e || {}, "string" == typeof e && (n = {}, n[e] = i), void(l && (this._curInst === l && this._hideDatepicker(), a = this._getDateDatepicker(t, !0), s = this._getMinMaxDate(l, "min"), r = this._getMinMaxDate(l, "max"), o(l.settings, n), null !== s && void 0 !== n.dateFormat && void 0 === n.minDate && (l.settings.minDate = this._formatDate(l, s)), null !== r && void 0 !== n.dateFormat && void 0 === n.maxDate && (l.settings.maxDate = this._formatDate(l, r)), "disabled" in n && (n.disabled ? this._disableDatepicker(t) : this._enableDatepicker(t)), this._attachments($(t), l), this._autoSize(l), this._setDate(l, a), this._updateAlternate(l), this._updateDatepicker(l))))
        },
        _changeDatepicker: function(t, e, i) {


            this._optionDatepicker(t, e, i)
        },
        _refreshDatepicker: function(t) {
            var e = this._getInst(t);
            e && this._updateDatepicker(e)
        },
        _setDateDatepicker: function(t, e) {
            var i = this._getInst(t);
            i && (this._setDate(i, e), this._updateDatepicker(i), this._updateAlternate(i))
        },
        _getDateDatepicker: function(t, e) {
            var i = this._getInst(t);
            return i && !i.inline && this._setDateFromField(i, e), i ? this._getDate(i) : null
        },
        _doKeyDown: function(t) {
            var e, i, n, a = $.datepicker._getInst(t.target),
                s = !0,
                o = a.dpDiv.is(".ui-datepicker-rtl");
            if (a._keyEvent = !0, $.datepicker._datepickerShowing) switch (t.keyCode) {
                case 9:
                    $.datepicker._hideDatepicker(), s = !1;
                    break;
                case 13:
                    return n = $("td." + $.datepicker._dayOverClass + ":not(." + $.datepicker._currentClass + ")", a.dpDiv), n[0] && $.datepicker._selectDay(t.target, a.selectedMonth, a.selectedYear, n[0]), e = $.datepicker._get(a, "onSelect"), e ? (i = $.datepicker._formatDate(a), e.apply(a.input ? a.input[0] : null, [i, a])) : $.datepicker._hideDatepicker(), !1;
                case 27:
                    $.datepicker._hideDatepicker();
                    break;
                case 33:
                    $.datepicker._adjustDate(t.target, t.ctrlKey ? -$.datepicker._get(a, "stepBigMonths") : -$.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 34:
                    $.datepicker._adjustDate(t.target, t.ctrlKey ? +$.datepicker._get(a, "stepBigMonths") : +$.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 35:
                    (t.ctrlKey || t.metaKey) && $.datepicker._clearDate(t.target), s = t.ctrlKey || t.metaKey;
                    break;
                case 36:
                    (t.ctrlKey || t.metaKey) && $.datepicker._gotoToday(t.target), s = t.ctrlKey || t.metaKey;
                    break;
                case 37:
                    (t.ctrlKey || t.metaKey) && $.datepicker._adjustDate(t.target, o ? 1 : -1, "D"), s = t.ctrlKey || t.metaKey, t.originalEvent.altKey && $.datepicker._adjustDate(t.target, t.ctrlKey ? -$.datepicker._get(a, "stepBigMonths") : -$.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 38:
                    (t.ctrlKey || t.metaKey) && $.datepicker._adjustDate(t.target, -7, "D"), s = t.ctrlKey || t.metaKey;
                    break;
                case 39:
                    (t.ctrlKey || t.metaKey) && $.datepicker._adjustDate(t.target, o ? -1 : 1, "D"), s = t.ctrlKey || t.metaKey, t.originalEvent.altKey && $.datepicker._adjustDate(t.target, t.ctrlKey ? +$.datepicker._get(a, "stepBigMonths") : +$.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 40:
                    (t.ctrlKey || t.metaKey) && $.datepicker._adjustDate(t.target, 7, "D"), s = t.ctrlKey || t.metaKey;
                    break;
                default:
                    s = !1
            } else 36 === t.keyCode && t.ctrlKey ? $.datepicker._showDatepicker(this) : s = !1;
            s && (t.preventDefault(), t.stopPropagation())
        },
        _doKeyPress: function(t) {
            var e, i, n = $.datepicker._getInst(t.target);
            return $.datepicker._get(n, "constrainInput") ? (e = $.datepicker._possibleChars($.datepicker._get(n, "dateFormat")), i = String.fromCharCode(null == t.charCode ? t.keyCode : t.charCode), t.ctrlKey || t.metaKey || " " > i || !e || e.indexOf(i) > -1) : void 0
        },
        _doKeyUp: function(t) {
            var e, i = $.datepicker._getInst(t.target);
            if (i.input.val() !== i.lastVal) try {
                e = $.datepicker.parseDate($.datepicker._get(i, "dateFormat"), i.input ? i.input.val() : null, $.datepicker._getFormatConfig(i)), e && ($.datepicker._setDateFromField(i), $.datepicker._updateAlternate(i), $.datepicker._updateDatepicker(i))
            } catch (n) {}
            return !0
        },
        _showDatepicker: function(t) {
            if (t = t.target || t, "input" !== t.nodeName.toLowerCase() && (t = $("input", t.parentNode)[0]), !$.datepicker._isDisabledDatepicker(t) && $.datepicker._lastInput !== t) {
                var e, n, a, s, r, l, c;
                e = $.datepicker._getInst(t), $.datepicker._curInst && $.datepicker._curInst !== e && ($.datepicker._curInst.dpDiv.stop(!0, !0), e && $.datepicker._datepickerShowing && $.datepicker._hideDatepicker($.datepicker._curInst.input[0])), n = $.datepicker._get(e, "beforeShow"), a = n ? n.apply(t, [t, e]) : {}, a !== !1 && (o(e.settings, a), e.lastVal = null, $.datepicker._lastInput = t, $.datepicker._setDateFromField(e), $.datepicker._inDialog && (t.value = ""), $.datepicker._pos || ($.datepicker._pos = $.datepicker._findPos(t), $.datepicker._pos[1] += t.offsetHeight), s = !1, $(t).parents().each(function() {
                    return s |= "fixed" === $(this).css("position"), !s
                }), r = {
                    left: $.datepicker._pos[0],
                    top: $.datepicker._pos[1]
                }, $.datepicker._pos = null, e.dpDiv.empty(), e.dpDiv.css({
                    position: "absolute",
                    display: "block",
                    top: "-1000px"
                }), $.datepicker._updateDatepicker(e), r = $.datepicker._checkOffset(e, r, s), e.dpDiv.css({
                    position: $.datepicker._inDialog && $.blockUI ? "static" : s ? "fixed" : "absolute",
                    display: "none",
                    left: r.left + "px",
                    top: r.top + "px"
                }), e.inline || (l = $.datepicker._get(e, "showAnim"), c = $.datepicker._get(e, "duration"), e.dpDiv.css("z-index", i($(t)) + 1), $.datepicker._datepickerShowing = !0, $.effects && $.effects.effect[l] ? e.dpDiv.show(l, $.datepicker._get(e, "showOptions"), c) : e.dpDiv[l || "show"](l ? c : null), $.datepicker._shouldFocusInput(e) && e.input.focus(), $.datepicker._curInst = e))
            }
        },
        _updateDatepicker: function(t) {
            this.maxRows = 4, r = t, t.dpDiv.empty().append(this._generateHTML(t)), this._attachHandlers(t);
            var e, i = this._getNumberOfMonths(t),
                n = i[1],
                a = 17,
                o = t.dpDiv.find("." + this._dayOverClass + " a");
            o.length > 0 && s.apply(o.get(0)), t.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""), n > 1 && t.dpDiv.addClass("ui-datepicker-multi-" + n).css("width", a * n + "em"), t.dpDiv[(1 !== i[0] || 1 !== i[1] ? "add" : "remove") + "Class"]("ui-datepicker-multi"), t.dpDiv[(this._get(t, "isRTL") ? "add" : "remove") + "Class"]("ui-datepicker-rtl"), t === $.datepicker._curInst && $.datepicker._datepickerShowing && $.datepicker._shouldFocusInput(t) && t.input.focus(), t.yearshtml && (e = t.yearshtml, setTimeout(function() {
                e === t.yearshtml && t.yearshtml && t.dpDiv.find("select.ui-datepicker-year:first").replaceWith(t.yearshtml), e = t.yearshtml = null
            }, 0))
        },
        _shouldFocusInput: function(t) {
            return t.input && t.input.is(":visible") && !t.input.is(":disabled") && !t.input.is(":focus")
        },
        _checkOffset: function(t, e, i) {
            var n = t.dpDiv.outerWidth(),
                a = t.dpDiv.outerHeight(),
                s = t.input ? t.input.outerWidth() : 0,
                o = t.input ? t.input.outerHeight() : 0,
                r = document.documentElement.clientWidth + (i ? 0 : $(document).scrollLeft()),
                l = document.documentElement.clientHeight + (i ? 0 : $(document).scrollTop());
            return e.left -= this._get(t, "isRTL") ? n - s : 0, e.left -= i && e.left === t.input.offset().left ? $(document).scrollLeft() : 0, e.top -= i && e.top === t.input.offset().top + o ? $(document).scrollTop() : 0, e.left -= Math.min(e.left, e.left + n > r && r > n ? Math.abs(e.left + n - r) : 0), e.top -= Math.min(e.top, e.top + a > l && l > a ? Math.abs(a + o) : 0), e
        },
        _findPos: function(t) {
            for (var e, i = this._getInst(t), n = this._get(i, "isRTL"); t && ("hidden" === t.type || 1 !== t.nodeType || $.expr.filters.hidden(t));) t = t[n ? "previousSibling" : "nextSibling"];
            return e = $(t).offset(), [e.left, e.top]
        },
        _hideDatepicker: function(t) {
            var e, i, n, a, s = this._curInst;
            !s || t && s !== $.data(t, "datepicker") || this._datepickerShowing && (e = this._get(s, "showAnim"), i = this._get(s, "duration"), n = function() {
                $.datepicker._tidyDialog(s)
            }, $.effects && ($.effects.effect[e] || $.effects[e]) ? s.dpDiv.hide(e, $.datepicker._get(s, "showOptions"), i, n) : s.dpDiv["slideDown" === e ? "slideUp" : "fadeIn" === e ? "fadeOut" : "hide"](e ? i : null, n), e || n(), this._datepickerShowing = !1, a = this._get(s, "onClose"), a && a.apply(s.input ? s.input[0] : null, [s.input ? s.input.val() : "", s]), this._lastInput = null, this._inDialog && (this._dialogInput.css({
                position: "absolute",
                left: "0",
                top: "-100px"
            }), $.blockUI && ($.unblockUI(), $("body").append(this.dpDiv))), this._inDialog = !1)
        },
        _tidyDialog: function(t) {
            t.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")
        },
        _checkExternalClick: function(t) {
            if ($.datepicker._curInst) {
                var e = $(t.target),
                    i = $.datepicker._getInst(e[0]);
                (e[0].id !== $.datepicker._mainDivId && 0 === e.parents("#" + $.datepicker._mainDivId).length && !e.hasClass($.datepicker.markerClassName) && !e.closest("." + $.datepicker._triggerClass).length && $.datepicker._datepickerShowing && (!$.datepicker._inDialog || !$.blockUI) || e.hasClass($.datepicker.markerClassName) && $.datepicker._curInst !== i) && $.datepicker._hideDatepicker()
            }
        },
        _adjustDate: function(t, e, i) {
            var n = $(t),
                a = this._getInst(n[0]);
            this._isDisabledDatepicker(n[0]) || (this._adjustInstDate(a, e + ("M" === i ? this._get(a, "showCurrentAtPos") : 0), i), this._updateDatepicker(a))
        },
        _gotoToday: function(t) {
            var e, i = $(t),
                n = this._getInst(i[0]);
            this._get(n, "gotoCurrent") && n.currentDay ? (n.selectedDay = n.currentDay, n.drawMonth = n.selectedMonth = n.currentMonth, n.drawYear = n.selectedYear = n.currentYear) : (e = new Date, n.selectedDay = e.getDate(), n.drawMonth = n.selectedMonth = e.getMonth(), n.drawYear = n.selectedYear = e.getFullYear()), this._notifyChange(n), this._adjustDate(i)
        },
        _selectMonthYear: function(t, e, i) {
            var n = $(t),
                a = this._getInst(n[0]);
            a["selected" + ("M" === i ? "Month" : "Year")] = a["draw" + ("M" === i ? "Month" : "Year")] = parseInt(e.options[e.selectedIndex].value, 10), this._notifyChange(a), this._adjustDate(n)
        },
        _selectDay: function(t, e, i, n) {
            var a, s = $(t);
            $(n).hasClass(this._unselectableClass) || this._isDisabledDatepicker(s[0]) || (a = this._getInst(s[0]), a.selectedDay = a.currentDay = $("a", n).html(), a.selectedMonth = a.currentMonth = e, a.selectedYear = a.currentYear = i, this._selectDate(t, this._formatDate(a, a.currentDay, a.currentMonth, a.currentYear)))
        },
        _clearDate: function(t) {
            var e = $(t);
            this._selectDate(e, "")
        },
        _selectDate: function(t, e) {
            var i, n = $(t),
                a = this._getInst(n[0]);
            e = null != e ? e : this._formatDate(a), a.input && a.input.val(e), this._updateAlternate(a), i = this._get(a, "onSelect"), i ? i.apply(a.input ? a.input[0] : null, [e, a]) : a.input && a.input.trigger("change"), a.inline ? this._updateDatepicker(a) : (this._hideDatepicker(), this._lastInput = a.input[0], "object" != typeof a.input[0] && a.input.focus(), this._lastInput = null)
        },
        _updateAlternate: function(t) {
            var e, i, n, a = this._get(t, "altField");
            a && (e = this._get(t, "altFormat") || this._get(t, "dateFormat"), i = this._getDate(t), n = this.formatDate(e, i, this._getFormatConfig(t)), $(a).each(function() {
                $(this).val(n)
            }))
        },
        noWeekends: function(t) {
            var e = t.getDay();
            return [e > 0 && 6 > e, ""]
        },
        iso8601Week: function(t) {
            var e, i = new Date(t.getTime());
            return i.setDate(i.getDate() + 4 - (i.getDay() || 7)), e = i.getTime(), i.setMonth(0), i.setDate(1), Math.floor(Math.round((e - i) / 864e5) / 7) + 1
        },
        parseDate: function(t, e, i) {
            if (null == t || null == e) throw "Invalid arguments";
            if (e = "object" == typeof e ? e.toString() : e + "", "" === e) return null;
            var n, a, s, o = 0,
                r = (i ? i.shortYearCutoff : null) || this._defaults.shortYearCutoff,
                l = "string" != typeof r ? r : (new Date).getFullYear() % 100 + parseInt(r, 10),
                c = (i ? i.dayNamesShort : null) || this._defaults.dayNamesShort,
                u = (i ? i.dayNames : null) || this._defaults.dayNames,
                d = (i ? i.monthNamesShort : null) || this._defaults.monthNamesShort,
                h = (i ? i.monthNames : null) || this._defaults.monthNames,
                p = -1,
                g = -1,
                f = -1,
                m = -1,
                v = !1,
                k, y = function(e) {
                    var i = n + 1 < t.length && t.charAt(n + 1) === e;
                    return i && n++, i
                },
                _ = function(t) {
                    var i = y(t),
                        n = "@" === t ? 14 : "!" === t ? 20 : "y" === t && i ? 4 : "o" === t ? 3 : 2,
                        a = "y" === t ? n : 1,
                        s = new RegExp("^\\d{" + a + "," + n + "}"),
                        r = e.substring(o).match(s);
                    if (!r) throw "Missing number at position " + o;
                    return o += r[0].length, parseInt(r[0], 10)
                },
                w = function(t, i, n) {
                    var a = -1,
                        s = $.map(y(t) ? n : i, function(t, e) {
                            return [
                                [e, t]
                            ]
                        }).sort(function(t, e) {
                            return -(t[1].length - e[1].length)
                        });
                    if ($.each(s, function(t, i) {
                            var n = i[1];
                            return e.substr(o, n.length).toLowerCase() === n.toLowerCase() ? (a = i[0], o += n.length, !1) : void 0
                        }), -1 !== a) return a + 1;
                    throw "Unknown name at position " + o
                },
                b = function() {
                    if (e.charAt(o) !== t.charAt(n)) throw "Unexpected literal at position " + o;
                    o++
                };
            for (n = 0; n < t.length; n++)
                if (v) "'" !== t.charAt(n) || y("'") ? b() : v = !1;
                else switch (t.charAt(n)) {
                    case "d":
                        f = _("d");
                        break;
                    case "D":
                        w("D", c, u);
                        break;
                    case "o":
                        m = _("o");
                        break;
                    case "m":
                        g = _("m");
                        break;
                    case "M":
                        g = w("M", d, h);
                        break;

                    case "y":
                        p = _("y");
                        break;
                    case "@":
                        k = new Date(_("@")), p = k.getFullYear(), g = k.getMonth() + 1, f = k.getDate();
                        break;
                    case "!":
                        k = new Date((_("!") - this._ticksTo1970) / 1e4), p = k.getFullYear(), g = k.getMonth() + 1, f = k.getDate();
                        break;
                    case "'":
                        y("'") ? b() : v = !0;
                        break;
                    default:
                        b()
                }
                if (o < e.length && (s = e.substr(o), !/^\s+/.test(s))) throw "Extra/unparsed characters found in date: " + s;
            if (-1 === p ? p = (new Date).getFullYear() : 100 > p && (p += (new Date).getFullYear() - (new Date).getFullYear() % 100 + (l >= p ? 0 : -100)), m > -1)
                for (g = 1, f = m;;) {
                    if (a = this._getDaysInMonth(p, g - 1), a >= f) break;
                    g++, f -= a
                }
            if (k = this._daylightSavingAdjust(new Date(p, g - 1, f)), k.getFullYear() !== p || k.getMonth() + 1 !== g || k.getDate() !== f) throw "Invalid date";
            return k
        },
        ATOM: "yy-mm-dd",
        COOKIE: "D, dd M yy",
        ISO_8601: "yy-mm-dd",
        RFC_822: "D, d M y",
        RFC_850: "DD, dd-M-y",
        RFC_1036: "D, d M y",
        RFC_1123: "D, d M yy",
        RFC_2822: "D, d M yy",
        RSS: "D, d M y",
        TICKS: "!",
        TIMESTAMP: "@",
        W3C: "yy-mm-dd",
        _ticksTo1970: 24 * (718685 + Math.floor(492.5) - Math.floor(19.7) + Math.floor(4.925)) * 60 * 60 * 1e7,
        formatDate: function(t, e, i) {
            if (!e) return "";
            var n, a = (i ? i.dayNamesShort : null) || this._defaults.dayNamesShort,
                s = (i ? i.dayNames : null) || this._defaults.dayNames,
                o = (i ? i.monthNamesShort : null) || this._defaults.monthNamesShort,
                r = (i ? i.monthNames : null) || this._defaults.monthNames,
                l = function(e) {
                    var i = n + 1 < t.length && t.charAt(n + 1) === e;
                    return i && n++, i
                },
                c = function(t, e, i) {
                    var n = "" + e;
                    if (l(t))
                        for (; n.length < i;) n = "0" + n;
                    return n
                },
                u = function(t, e, i, n) {
                    return l(t) ? n[e] : i[e]
                },
                d = "",
                h = !1;
            if (e)
                for (n = 0; n < t.length; n++)
                    if (h) "'" !== t.charAt(n) || l("'") ? d += t.charAt(n) : h = !1;
                    else switch (t.charAt(n)) {
                        case "d":
                            d += c("d", e.getDate(), 2);
                            break;
                        case "D":
                            d += u("D", e.getDay(), a, s);
                            break;
                        case "o":
                            d += c("o", Math.round((new Date(e.getFullYear(), e.getMonth(), e.getDate()).getTime() - new Date(e.getFullYear(), 0, 0).getTime()) / 864e5), 3);
                            break;
                        case "m":
                            d += c("m", e.getMonth() + 1, 2);
                            break;
                        case "M":
                            d += u("M", e.getMonth(), o, r);
                            break;
                        case "y":
                            d += l("y") ? e.getFullYear() : (e.getYear() % 100 < 10 ? "0" : "") + e.getYear() % 100;
                            break;
                        case "@":
                            d += e.getTime();
                            break;
                        case "!":
                            d += 1e4 * e.getTime() + this._ticksTo1970;
                            break;
                        case "'":
                            l("'") ? d += "'" : h = !0;
                            break;
                        default:
                            d += t.charAt(n)
                    }
                    return d
        },
        _possibleChars: function(t) {
            var e, i = "",
                n = !1,
                a = function(i) {
                    var n = e + 1 < t.length && t.charAt(e + 1) === i;
                    return n && e++, n
                };
            for (e = 0; e < t.length; e++)
                if (n) "'" !== t.charAt(e) || a("'") ? i += t.charAt(e) : n = !1;
                else switch (t.charAt(e)) {
                    case "d":
                    case "m":
                    case "y":
                    case "@":
                        i += "0123456789";
                        break;
                    case "D":
                    case "M":
                        return null;
                    case "'":
                        a("'") ? i += "'" : n = !0;
                        break;
                    default:
                        i += t.charAt(e)
                }
                return i
        },
        _get: function(t, e) {
            return void 0 !== t.settings[e] ? t.settings[e] : this._defaults[e]
        },
        _setDateFromField: function(t, e) {
            if (t.input.val() !== t.lastVal) {
                var i = this._get(t, "dateFormat"),
                    n = t.lastVal = t.input ? t.input.val() : null,
                    a = this._getDefaultDate(t),
                    s = a,
                    o = this._getFormatConfig(t);
                try {
                    s = this.parseDate(i, n, o) || a
                } catch (r) {
                    n = e ? "" : n
                }
                t.selectedDay = s.getDate(), t.drawMonth = t.selectedMonth = s.getMonth(), t.drawYear = t.selectedYear = s.getFullYear(), t.currentDay = n ? s.getDate() : 0, t.currentMonth = n ? s.getMonth() : 0, t.currentYear = n ? s.getFullYear() : 0, this._adjustInstDate(t)
            }
        },
        _getDefaultDate: function(t) {
            return this._restrictMinMax(t, this._determineDate(t, this._get(t, "defaultDate"), new Date))
        },
        _determineDate: function(t, e, i) {
            var n = function(t) {
                    var e = new Date;
                    return e.setDate(e.getDate() + t), e
                },
                a = function(e) {
                    try {
                        return $.datepicker.parseDate($.datepicker._get(t, "dateFormat"), e, $.datepicker._getFormatConfig(t))
                    } catch (i) {}
                    for (var n = (e.toLowerCase().match(/^c/) ? $.datepicker._getDate(t) : null) || new Date, a = n.getFullYear(), s = n.getMonth(), o = n.getDate(), r = /([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g, l = r.exec(e); l;) {
                        switch (l[2] || "d") {
                            case "d":
                            case "D":
                                o += parseInt(l[1], 10);
                                break;
                            case "w":
                            case "W":
                                o += 7 * parseInt(l[1], 10);
                                break;
                            case "m":
                            case "M":
                                s += parseInt(l[1], 10), o = Math.min(o, $.datepicker._getDaysInMonth(a, s));
                                break;
                            case "y":
                            case "Y":
                                a += parseInt(l[1], 10), o = Math.min(o, $.datepicker._getDaysInMonth(a, s))
                        }
                        l = r.exec(e)
                    }
                    return new Date(a, s, o)
                },
                s = null == e || "" === e ? i : "string" == typeof e ? a(e) : "number" == typeof e ? isNaN(e) ? i : n(e) : new Date(e.getTime());
            return s = s && "Invalid Date" === s.toString() ? i : s, s && (s.setHours(0), s.setMinutes(0), s.setSeconds(0), s.setMilliseconds(0)), this._daylightSavingAdjust(s)
        },
        _daylightSavingAdjust: function(t) {
            return t ? (t.setHours(t.getHours() > 12 ? t.getHours() + 2 : 0), t) : null
        },
        _setDate: function(t, e, i) {
            var n = !e,
                a = t.selectedMonth,
                s = t.selectedYear,
                o = this._restrictMinMax(t, this._determineDate(t, e, new Date));
            t.selectedDay = t.currentDay = o.getDate(), t.drawMonth = t.selectedMonth = t.currentMonth = o.getMonth(), t.drawYear = t.selectedYear = t.currentYear = o.getFullYear(), a === t.selectedMonth && s === t.selectedYear || i || this._notifyChange(t), this._adjustInstDate(t), t.input && t.input.val(n ? "" : this._formatDate(t))
        },
        _getDate: function(t) {
            var e = !t.currentYear || t.input && "" === t.input.val() ? null : this._daylightSavingAdjust(new Date(t.currentYear, t.currentMonth, t.currentDay));
            return e
        },
        _attachHandlers: function(t) {
            var e = this._get(t, "stepMonths"),
                i = "#" + t.id.replace(/\\\\/g, "\\");
            t.dpDiv.find("[data-handler]").map(function() {
                var t = {
                    prev: function() {
                        $.datepicker._adjustDate(i, -e, "M")
                    },
                    next: function() {
                        $.datepicker._adjustDate(i, +e, "M")
                    },
                    hide: function() {
                        $.datepicker._hideDatepicker()
                    },
                    today: function() {
                        $.datepicker._gotoToday(i)
                    },
                    selectDay: function() {
                        return $.datepicker._selectDay(i, +this.getAttribute("data-month"), +this.getAttribute("data-year"), this), !1
                    },
                    selectMonth: function() {
                        return $.datepicker._selectMonthYear(i, this, "M"), !1
                    },
                    selectYear: function() {
                        return $.datepicker._selectMonthYear(i, this, "Y"), !1
                    }
                };
                $(this).bind(this.getAttribute("data-event"), t[this.getAttribute("data-handler")])
            })
        },
        _generateHTML: function(t) {
            var e, i, n, a, s, o, r, l, c, u, d, h, p, g, f, m, v, k, y, _, w, b, D, C, x, M, I, S, T, j, N, A, F, R, E, Y, O, H, P, K = new Date,
                q = this._daylightSavingAdjust(new Date(K.getFullYear(), K.getMonth(), K.getDate())),
                L = this._get(t, "isRTL"),
                z = this._get(t, "showButtonPanel"),
                W = this._get(t, "hideIfNoPrevNext"),
                B = this._get(t, "navigationAsDateFormat"),
                U = this._getNumberOfMonths(t),
                V = this._get(t, "showCurrentAtPos"),
                Q = this._get(t, "stepMonths"),
                G = 1 !== U[0] || 1 !== U[1],
                J = this._daylightSavingAdjust(t.currentDay ? new Date(t.currentYear, t.currentMonth, t.currentDay) : new Date(9999, 9, 9)),
                X = this._getMinMaxDate(t, "min"),
                Z = this._getMinMaxDate(t, "max"),
                tt = t.drawMonth - V,
                et = t.drawYear;
            if (0 > tt && (tt += 12, et--), Z)
                for (e = this._daylightSavingAdjust(new Date(Z.getFullYear(), Z.getMonth() - U[0] * U[1] + 1, Z.getDate())), e = X && X > e ? X : e; this._daylightSavingAdjust(new Date(et, tt, 1)) > e;) tt--, 0 > tt && (tt = 11, et--);
            for (t.drawMonth = tt, t.drawYear = et, i = this._get(t, "prevText"), i = B ? this.formatDate(i, this._daylightSavingAdjust(new Date(et, tt - Q, 1)), this._getFormatConfig(t)) : i, n = this._canAdjustMonth(t, -1, et, tt) ? "<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (L ? "e" : "w") + "'>" + i + "</span></a>" : W ? "" : "<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (L ? "e" : "w") + "'>" + i + "</span></a>", a = this._get(t, "nextText"), a = B ? this.formatDate(a, this._daylightSavingAdjust(new Date(et, tt + Q, 1)), this._getFormatConfig(t)) : a, s = this._canAdjustMonth(t, 1, et, tt) ? "<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='" + a + "'><span class='ui-icon ui-icon-circle-triangle-" + (L ? "w" : "e") + "'>" + a + "</span></a>" : W ? "" : "<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='" + a + "'><span class='ui-icon ui-icon-circle-triangle-" + (L ? "w" : "e") + "'>" + a + "</span></a>", o = this._get(t, "currentText"), r = this._get(t, "gotoCurrent") && t.currentDay ? J : q, o = B ? this.formatDate(o, r, this._getFormatConfig(t)) : o, l = t.inline ? "" : "<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>" + this._get(t, "closeText") + "</button>", c = z ? "<div class='ui-datepicker-buttonpane ui-widget-content'>" + (L ? l : "") + (this._isInRange(t, r) ? "<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>" + o + "</button>" : "") + (L ? "" : l) + "</div>" : "", u = parseInt(this._get(t, "firstDay"), 10), u = isNaN(u) ? 0 : u, d = this._get(t, "showWeek"), h = this._get(t, "dayNames"), p = this._get(t, "dayNamesMin"), g = this._get(t, "monthNames"), f = this._get(t, "monthNamesShort"), m = this._get(t, "beforeShowDay"), v = this._get(t, "showOtherMonths"), k = this._get(t, "selectOtherMonths"), y = this._getDefaultDate(t), _ = "", b = 0; b < U[0]; b++) {
                for (D = "", this.maxRows = 4, C = 0; C < U[1]; C++) {
                    if (x = this._daylightSavingAdjust(new Date(et, tt, t.selectedDay)), M = " ui-corner-all", I = "", G) {
                        if (I += "<div class='ui-datepicker-group", U[1] > 1) switch (C) {
                            case 0:
                                I += " ui-datepicker-group-first", M = " ui-corner-" + (L ? "right" : "left");
                                break;
                            case U[1] - 1:
                                I += " ui-datepicker-group-last", M = " ui-corner-" + (L ? "left" : "right");
                                break;
                            default:
                                I += " ui-datepicker-group-middle", M = ""
                        }
                        I += "'>"
                    }
                    for (I += "<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix" + M + "'>" + (/all|left/.test(M) && 0 === b ? L ? s : n : "") + (/all|right/.test(M) && 0 === b ? L ? n : s : "") + this._generateMonthYearHeader(t, tt, et, X, Z, b > 0 || C > 0, g, f) + "</div><table class='ui-datepicker-calendar'><thead><tr>", S = d ? "<th class='ui-datepicker-week-col'>" + this._get(t, "weekHeader") + "</th>" : "", w = 0; 7 > w; w++) T = (w + u) % 7, S += "<th scope='col'" + ((w + u + 6) % 7 >= 5 ? " class='ui-datepicker-week-end'" : "") + "><span title='" + h[T] + "'>" + p[T] + "</span></th>";
                    for (I += S + "</tr></thead><tbody>", j = this._getDaysInMonth(et, tt), et === t.selectedYear && tt === t.selectedMonth && (t.selectedDay = Math.min(t.selectedDay, j)), N = (this._getFirstDayOfMonth(et, tt) - u + 7) % 7, A = Math.ceil((N + j) / 7), F = G && this.maxRows > A ? this.maxRows : A, this.maxRows = F, R = this._daylightSavingAdjust(new Date(et, tt, 1 - N)), E = 0; F > E; E++) {
                        for (I += "<tr>", Y = d ? "<td class='ui-datepicker-week-col'>" + this._get(t, "calculateWeek")(R) + "</td>" : "", w = 0; 7 > w; w++) O = m ? m.apply(t.input ? t.input[0] : null, [R]) : [!0, ""], H = R.getMonth() !== tt, P = H && !k || !O[0] || X && X > R || Z && R > Z, Y += "<td class='" + ((w + u + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + (H ? " ui-datepicker-other-month" : "") + (R.getTime() === x.getTime() && tt === t.selectedMonth && t._keyEvent || y.getTime() === R.getTime() && y.getTime() === x.getTime() ? " " + this._dayOverClass : "") + (P ? " " + this._unselectableClass + " ui-state-disabled" : "") + (H && !v ? "" : " " + O[1] + (R.getTime() === J.getTime() ? " " + this._currentClass : "") + (R.getTime() === q.getTime() ? " ui-datepicker-today" : "")) + "'" + (H && !v || !O[2] ? "" : " title='" + O[2].replace(/'/g, "&#39;") + "'") + (P ? "" : " data-handler='selectDay' data-event='click' data-month='" + R.getMonth() + "' data-year='" + R.getFullYear() + "'") + ">" + (H && !v ? "&#xa0;" : P ? "<span class='ui-state-default'>" + R.getDate() + "</span>" : "<a class='ui-state-default" + (R.getTime() === q.getTime() ? " ui-state-highlight" : "") + (R.getTime() === J.getTime() ? " ui-state-active" : "") + (H ? " ui-priority-secondary" : "") + "' href='#'>" + R.getDate() + "</a>") + "</td>", R.setDate(R.getDate() + 1), R = this._daylightSavingAdjust(R);
                        I += Y + "</tr>"
                    }
                    tt++, tt > 11 && (tt = 0, et++), I += "</tbody></table>" + (G ? "</div>" + (U[0] > 0 && C === U[1] - 1 ? "<div class='ui-datepicker-row-break'></div>" : "") : ""), D += I
                }
                _ += D
            }
            return _ += c, t._keyEvent = !1, _
        },
        _generateMonthYearHeader: function(t, e, i, n, a, s, o, r) {
            var l, c, u, d, h, p, g, f, m = this._get(t, "changeMonth"),
                v = this._get(t, "changeYear"),
                k = this._get(t, "showMonthAfterYear"),
                y = "<div class='ui-datepicker-title'>",
                _ = "";
            if (s || !m) _ += "<span class='ui-datepicker-month'>" + o[e] + "</span>";
            else {
                for (l = n && n.getFullYear() === i, c = a && a.getFullYear() === i, _ += "<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>", u = 0; 12 > u; u++)(!l || u >= n.getMonth()) && (!c || u <= a.getMonth()) && (_ += "<option value='" + u + "'" + (u === e ? " selected='selected'" : "") + ">" + r[u] + "</option>");
                _ += "</select>"
            }
            if (k || (y += _ + (!s && m && v ? "" : "&#xa0;")), !t.yearshtml)
                if (t.yearshtml = "", s || !v) y += "<span class='ui-datepicker-year'>" + i + "</span>";
                else {
                    for (d = this._get(t, "yearRange").split(":"), h = (new Date).getFullYear(), p = function(t) {
                            var e = t.match(/c[+\-].*/) ? i + parseInt(t.substring(1), 10) : t.match(/[+\-].*/) ? h + parseInt(t, 10) : parseInt(t, 10);
                            return isNaN(e) ? h : e
                        }, g = p(d[0]), f = Math.max(g, p(d[1] || "")), g = n ? Math.max(g, n.getFullYear()) : g, f = a ? Math.min(f, a.getFullYear()) : f, t.yearshtml += "<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>"; f >= g; g++) t.yearshtml += "<option value='" + g + "'" + (g === i ? " selected='selected'" : "") + ">" + g + "</option>";
                    t.yearshtml += "</select>", y += t.yearshtml, t.yearshtml = null
                }
            return y += this._get(t, "yearSuffix"), k && (y += (!s && m && v ? "" : "&#xa0;") + _), y += "</div>"
        },
        _adjustInstDate: function(t, e, i) {
            var n = t.drawYear + ("Y" === i ? e : 0),
                a = t.drawMonth + ("M" === i ? e : 0),
                s = Math.min(t.selectedDay, this._getDaysInMonth(n, a)) + ("D" === i ? e : 0),
                o = this._restrictMinMax(t, this._daylightSavingAdjust(new Date(n, a, s)));
            t.selectedDay = o.getDate(), t.drawMonth = t.selectedMonth = o.getMonth(), t.drawYear = t.selectedYear = o.getFullYear(), ("M" === i || "Y" === i) && this._notifyChange(t)
        },
        _restrictMinMax: function(t, e) {
            var i = this._getMinMaxDate(t, "min"),
                n = this._getMinMaxDate(t, "max"),
                a = i && i > e ? i : e;
            return n && a > n ? n : a
        },
        _notifyChange: function(t) {
            var e = this._get(t, "onChangeMonthYear");
            e && e.apply(t.input ? t.input[0] : null, [t.selectedYear, t.selectedMonth + 1, t])
        },
        _getNumberOfMonths: function(t) {
            var e = this._get(t, "numberOfMonths");
            return null == e ? [1, 1] : "number" == typeof e ? [1, e] : e
        },
        _getMinMaxDate: function(t, e) {
            return this._determineDate(t, this._get(t, e + "Date"), null)
        },
        _getDaysInMonth: function(t, e) {
            return 32 - this._daylightSavingAdjust(new Date(t, e, 32)).getDate()
        },
        _getFirstDayOfMonth: function(t, e) {
            return new Date(t, e, 1).getDay()
        },
        _canAdjustMonth: function(t, e, i, n) {
            var a = this._getNumberOfMonths(t),
                s = this._daylightSavingAdjust(new Date(i, n + (0 > e ? e : a[0] * a[1]), 1));
            return 0 > e && s.setDate(this._getDaysInMonth(s.getFullYear(), s.getMonth())), this._isInRange(t, s)
        },
        _isInRange: function(t, e) {
            var i, n, a = this._getMinMaxDate(t, "min"),
                s = this._getMinMaxDate(t, "max"),
                o = null,
                r = null,
                l = this._get(t, "yearRange");
            return l && (i = l.split(":"), n = (new Date).getFullYear(), o = parseInt(i[0], 10), r = parseInt(i[1], 10), i[0].match(/[+\-].*/) && (o += n), i[1].match(/[+\-].*/) && (r += n)), (!a || e.getTime() >= a.getTime()) && (!s || e.getTime() <= s.getTime()) && (!o || e.getFullYear() >= o) && (!r || e.getFullYear() <= r)
        },
        _getFormatConfig: function(t) {
            var e = this._get(t, "shortYearCutoff");
            return e = "string" != typeof e ? e : (new Date).getFullYear() % 100 + parseInt(e, 10), {
                shortYearCutoff: e,
                dayNamesShort: this._get(t, "dayNamesShort"),
                dayNames: this._get(t, "dayNames"),
                monthNamesShort: this._get(t, "monthNamesShort"),
                monthNames: this._get(t, "monthNames")
            }
        },
        _formatDate: function(t, e, i, n) {
            e || (t.currentDay = t.selectedDay, t.currentMonth = t.selectedMonth, t.currentYear = t.selectedYear);
            var a = e ? "object" == typeof e ? e : this._daylightSavingAdjust(new Date(n, i, e)) : this._daylightSavingAdjust(new Date(t.currentYear, t.currentMonth, t.currentDay));
            return this.formatDate(this._get(t, "dateFormat"), a, this._getFormatConfig(t))
        }
    }), $.fn.datepicker = function(t) {
        if (!this.length) return this;
        $.datepicker.initialized || ($(document).mousedown($.datepicker._checkExternalClick), $.datepicker.initialized = !0), 0 === $("#" + $.datepicker._mainDivId).length && $("body").append($.datepicker.dpDiv);
        var e = Array.prototype.slice.call(arguments, 1);
        return "string" != typeof t || "isDisabled" !== t && "getDate" !== t && "widget" !== t ? "option" === t && 2 === arguments.length && "string" == typeof arguments[1] ? $.datepicker["_" + t + "Datepicker"].apply($.datepicker, [this[0]].concat(e)) : this.each(function() {
            "string" == typeof t ? $.datepicker["_" + t + "Datepicker"].apply($.datepicker, [this].concat(e)) : $.datepicker._attachDatepicker(this, t)
        }) : $.datepicker["_" + t + "Datepicker"].apply($.datepicker, [this[0]].concat(e))
    }, $.datepicker = new n, $.datepicker.initialized = !1, $.datepicker.uuid = (new Date).getTime(), $.datepicker.version = "1.11.4";
    var l = $.datepicker
}),
function($) {
    var t = $.event,
        e, i;
    e = t.special.debouncedresize = {
        setup: function() {
            $(this).on("resize", e.handler)
        },
        teardown: function() {
            $(this).off("resize", e.handler)
        },
        handler: function(n, a) {
            var s = this,
                o = arguments,
                r = function() {
                    n.type = "debouncedresize", t.dispatch.apply(s, o)
                };
            i && clearTimeout(i), a ? r() : i = setTimeout(r, e.threshold)
        },
        threshold: 150
    }
}(jQuery),
function($, t, e, i) {
    var n = function(t, e) {
            function i() {}
            var n;
            return i.prototype.make = function(e) {
                return n = "undefined" != typeof e ? parseInt(e) : 0, this[t.options.type](), this
            }, i.prototype.after = function(e) {
                return setTimeout(function() {
                    e()
                }, t.options.animationDuration + 20)
            }, i.prototype.slider = function() {
                var i = t.width * (t.current - 1),
                    a = e.Clones.shift - t.paddings;
                e.Run.isStart() ? (a = t.options.centered ? Math.abs(a) : 0, e.Arrows.disable("prev")) : e.Run.isEnd() ? (a = t.options.centered ? Math.abs(a) : Math.abs(2 * a), e.Arrows.disable("next")) : (a = Math.abs(a), e.Arrows.enable()), t.track.css({
                    transition: e.Transition.get("all"),
                    transform: e.Translate.set("x", i - a - n)
                })
            }, i.prototype.carousel = function() {
                var i = t.width * t.current,
                    a;
                a = t.options.centered ? e.Clones.shift - t.paddings : e.Clones.shift, e.Run.isOffset("<") && (i = 0, e.Run.flag = !1, this.after(function() {
                    t.track.css({
                        transition: e.Transition.clear("all"),
                        transform: e.Translate.set("x", t.width * t.length + a)
                    })
                })), e.Run.isOffset(">") && (i = t.width * t.length + t.width, e.Run.flag = !1, this.after(function() {
                    t.track.css({
                        transition: e.Transition.clear("all"),
                        transform: e.Translate.set("x", t.width + a)
                    })
                })), t.track.css({
                    transition: e.Transition.get("all"),
                    transform: e.Translate.set("x", i + a - n)
                })
            }, i.prototype.slideshow = function() {
                t.slides.css("transition", e.Transition.get("opacity")).eq(t.current - 1).css("opacity", 1).siblings().css("opacity", 0)
            }, new i
        },
        a = function(t, e) {
            function i() {}
            return i.prototype.instance = function() {
                return {
                    current: function() {
                        return t.current
                    },
                    go: function(t, i) {
                        return e.Run.make(t, i)
                    },
                    jump: function(t, i) {
                        return e.Transition.jumping = !0, e.Animation.after(function() {
                            e.Transition.jumping = !1
                        }), e.Run.make(t, i)
                    },
                    start: function(i) {
                        return e.Run.running = !0, t.options.autoplay = parseInt(i), e.Run.play()
                    },
                    play: function() {
                        return e.Run.play()
                    },
                    pause: function() {
                        return e.Run.pause()
                    },
                    destroy: function() {
                        e.Run.pause(), e.Clones.remove(), e.Helper.removeStyles([t.track, t.slides]), e.Bullets.remove(), t.slider.removeData("glide_api"), e.Events.unbind(), e.Touch.unbind(), e.Arrows.unbind(), e.Bullets.unbind(), delete t.slider, delete t.track, delete t.slides, delete t.width, delete t.length
                    },

                    refresh: function() {
                        e.Run.pause(), t.collect(), t.setup(), e.Clones.remove().init(), e.Bullets.remove().init(), e.Build.init()
                    }
                }
            }, new i
        },
        s = function(t, e) {
            function i() {
                this.build(), this.bind()
            }
            return i.prototype.build = function() {
                this.wrapper = t.slider.find("." + t.options.classes.arrows), this.items = this.wrapper.children()
            }, i.prototype.disable = function(i) {
                return this.items.filter("." + t.options.classes["arrow" + e.Helper.capitalise(i)]).unbind("click.glide touchstart.glide").addClass(t.options.classes.disabled).siblings().removeClass(t.options.classes.disabled).end()
            }, i.prototype.enable = function() {
                return this.bind(), this.items.removeClass(t.options.classes.disabled)
            }, i.prototype.bind = function() {
                return this.items.on("click.glide touchstart.glide", function(t) {
                    t.preventDefault(), e.Events.disabled || (e.Run.pause(), e.Run.make($(this).data("glide-dir")), e.Animation.after(function() {
                        e.Run.play()
                    }))
                })
            }, i.prototype.unbind = function() {
                return this.items.off("click.glide touchstart.glide")
            }, new i
        },
        o = function(t, e) {
            function i() {
                this.init()
            }
            return i.prototype.init = function() {
                this[t.options.type](), this.active(), e.Height.set()
            }, i.prototype.isType = function(e) {
                return t.options.type === e
            }, i.prototype.slider = function() {
                e.Transition.jumping = !0, t.slides.width(t.width), t.track.css("width", t.width * t.length), e.Animation.make(), e.Transition.jumping = !1
            }, i.prototype.carousel = function() {
                e.Transition.jumping = !0, e.Clones.shift = t.width * e.Clones.items.length / 2 - t.width, t.slides.width(t.width), e.Clones.update(), t.track.css("width", t.width * t.length + e.Clones.growth), e.Animation.make(), e.Clones.append(), e.Transition.jumping = !1
            }, i.prototype.slideshow = function() {
                e.Transition.jumping = !0, e.Animation.make(), e.Transition.jumping = !1
            }, i.prototype.active = function() {
                t.slides.eq(t.current - 1).addClass(t.options.classes.active).siblings().removeClass(t.options.classes.active)
            }, new i
        },
        r = function(t, e) {
            function i() {
                this.init(), this.bind()
            }
            return i.prototype.init = function() {
                return this.build(), this.active(), this
            }, i.prototype.build = function() {
                this.wrapper = t.slider.children("." + t.options.classes.bullets);
                for (var e = 1; e <= t.length; e++) $("<li>", {
                    "class": t.options.classes.bullet,
                    "data-glide-dir": "=" + e
                }).appendTo(this.wrapper);
                this.items = this.wrapper.children()
            }, i.prototype.active = function() {
                return this.items.eq(t.current - 1).addClass("active").siblings().removeClass("active")
            }, i.prototype.remove = function() {
                return this.items.remove(), this
            }, i.prototype.bind = function() {
                this.wrapper.on("click.glide touchstart.glide", "li", function(t) {
                    t.preventDefault(), e.Events.disabled || (e.Run.pause(), e.Run.make($(this).data("glide-dir")), e.Animation.after(function() {
                        e.Run.play()
                    }))
                })
            }, i.prototype.unbind = function() {
                return this.wrapper.on("click.glide touchstart.glide", "li")
            }, new i
        },
        l = function(t, e) {
            function i() {
                this.init()
            }
            var n = [0, 1],
                a;
            return i.prototype.init = function() {
                return this.items = [], this.map(), this.collect(), this.shift = 0, this.growth = t.width * this.items.length, this
            }, i.prototype.update = function() {
                return this.growth = t.width * this.items.length, this
            }, i.prototype.map = function() {
                a = [];
                for (var t in n) a.push(-1 - t, t)
            }, i.prototype.collect = function() {
                var e;
                for (var i in a) e = t.slides.eq(a[i]).clone().addClass(t.options.classes.clone), this.items.push(e)
            }, i.prototype.append = function() {
                var e;
                for (var i in this.items) e = this.items[i].width(t.width), a[i] >= 0 ? e.appendTo(t.track) : e.prependTo(t.track)
            }, i.prototype.remove = function() {
                for (var t in this.items) this.items[t].remove();
                return this
            }, new i
        },
        c = function(t, e) {
            function i() {
                for (var i in e) this[i] = new e[i](t, this)
            }
            return new i
        },
        u = function(e, i) {
            function n() {
                this.disabled = !1, this.keyboard(), this.hoverpause(), this.resize(), this.triggers()
            }
            var a = $("[data-glide-trigger]");
            return n.prototype.keyboard = function() {
                e.options.keyboard && $(t).on("keyup.glide", function(t) {
                    39 === t.keyCode && i.Run.make(">"), 37 === t.keyCode && i.Run.make("<")
                })
            }, n.prototype.hoverpause = function() {
                e.options.hoverpause && e.track.on("mouseover.glide", function() {
                    i.Run.pause()
                }).on("mouseout.glide", function() {
                    i.Run.play()
                })
            }, n.prototype.resize = function() {
                $(t).on("resize.glide", this.throttle(function() {
                    i.Transition.jumping = !0, i.Run.pause(), e.setup(), i.Build.init(), i.Run.make("=" + e.current, !1), i.Run.play(), i.Transition.jumping = !1
                }, e.options.throttle))
            }, n.prototype.triggers = function() {
                a.length && a.off("click.glide touchstart.glide").on("click.glide touchstart.glide", function(t) {
                    t.preventDefault();
                    var e = $(this).data("glide-trigger").split(" ");
                    if (!i.Events.disabled)
                        for (var n in e) {
                            var a = $(e[n]).data("glide_api");
                            a.pause(), a.go($(this).data("glide-dir")), a.play()
                        }
                })
            }, n.prototype.disable = function() {
                return this.disabled = !0, this
            }, n.prototype.enable = function() {
                return this.disabled = !1, this
            }, n.prototype.detachClicks = function() {
                return e.track.off("click", "a"), this
            }, n.prototype.preventClicks = function(t) {
                return e.track.one("click", "a", function(t) {
                    t.preventDefault()
                }), this
            }, n.prototype.call = function(t) {
                return "undefined" !== t && "function" == typeof t && t(e.current, e.slides.eq(e.current - 1)), this
            }, n.prototype.unbind = function() {
                e.track.off("keyup.glide").off("mouseover.glide").off("mouseout.glide"), a.off("click.glide touchstart.glide"), $(t).off("keyup.glide").off("resize.glide")
            }, n.prototype.throttle = function(t, e, n) {
                var a = this,
                    s, o, r, l = null,
                    c = 0;
                n || (n = {});
                var u = function() {
                    c = n.leading === !1 ? 0 : i.Helper.now(), l = null, r = t.apply(s, o), l || (s = o = null)
                };
                return function() {
                    var a = i.Helper.now();
                    c || n.leading !== !1 || (c = a);
                    var d = e - (a - c);
                    return s = this, o = arguments, 0 >= d || d > e ? (l && (clearTimeout(l), l = null), c = a, r = t.apply(s, o), l || (s = o = null)) : l || n.trailing === !1 || (l = setTimeout(u, d)), r
                }
            }, new n
        },
        d = function(t, e) {
            function i() {
                t.options.autoheight && t.wrapper.css({
                    transition: e.Transition.get("height")
                })
            }
            return i.prototype.get = function() {
                return t.slides.eq(t.current - 1).height()
            }, i.prototype.set = function(e) {
                return t.options.autoheight || e ? t.wrapper.height(this.get()) : !1
            }, new i
        },
        h = function(t, e) {
            function i() {}
            return i.prototype.capitalise = function(t) {
                return t.charAt(0).toUpperCase() + t.slice(1)
            }, i.prototype.now = Date.now || function() {
                return (new Date).getTime()
            }, i.prototype.removeStyles = function(t) {
                for (var e in t) t[e].removeAttr("style")
            }, new i
        },
        p = function(t, e) {
            function i() {
                this.running = !1, this.flag = !1, this.play()
            }
            return i.prototype.play = function() {
                var e = this;
                return (t.options.autoplay || this.running) && "undefined" == typeof this.interval && (this.interval = setInterval(function() {
                    e.make(">")
                }, t.options.autoplay)), this.interval
            }, i.prototype.pause = function() {
                return (t.options.autoplay || this.running) && this.interval >= 0 && (this.interval = clearInterval(this.interval)), this.interval
            }, i.prototype.isStart = function() {
                return 1 === t.current
            }, i.prototype.isEnd = function() {
                return t.current === t.length
            }, i.prototype.isOffset = function(t) {
                return this.flag && this.direction === t
            }, i.prototype.make = function(i, n) {
                var a = this;
                switch (this.direction = i.substr(0, 1), this.steps = i.substr(1) ? i.substr(1) : 0, t.options.hoverpause || this.pause(), n !== !1 && e.Events.disable().call(t.options.beforeTransition), this.direction) {
                    case ">":
                        this.isEnd() ? (t.current = 1, this.flag = !0) : ">" === this.steps ? t.current = t.length : t.current = t.current + 1;
                        break;
                    case "<":
                        this.isStart() ? (t.current = t.length, this.flag = !0) : "<" === this.steps ? t.current = 1 : t.current = t.current - 1;
                        break;
                    case "=":
                        t.current = parseInt(this.steps)
                }
                e.Height.set(), e.Bullets.active(), e.Animation.make().after(function() {
                    e.Build.active(), n !== !1 && e.Events.enable().call(n).call(t.options.afterTransition), t.options.hoverpause || a.play()
                })
            }, new i
        },
        g = function(t, e) {
            function i() {
                this.dragging = !1, t.options.touchDistance && t.track.on({
                    "touchstart.glide": $.proxy(this.start, this)
                }), t.options.dragDistance && t.track.on({
                    "mousedown.glide": $.proxy(this.start, this)
                })
            }
            var n;
            return i.prototype.unbind = function() {
                t.track.off("touchstart.glide mousedown.glide").off("touchmove.glide mousemove.glide").off("touchend.glide touchcancel.glide mouseup.glide mouseleave.glide")
            }, i.prototype.start = function(i) {
                e.Events.disabled || this.dragging || (n = "mousedown" === i.type ? i.originalEvent : i.originalEvent.touches[0] || i.originalEvent.changedTouches[0], e.Transition.jumping = !0, this.touchStartX = parseInt(n.pageX), this.touchStartY = parseInt(n.pageY), this.touchSin = null, this.dragging = !0, t.track.on({
                    "touchmove.glide mousemove.glide": e.Events.throttle($.proxy(this.move, this), t.options.throttle),
                    "touchend.glide touchcancel.glide mouseup.glide mouseleave.glide": $.proxy(this.end, this)
                }), e.Events.detachClicks().call(t.options.swipeStart), e.Run.pause())
            }, i.prototype.move = function(i) {
                if (!e.Events.disabled && this.dragging) {
                    n = "mousemove" === i.type ? i.originalEvent : i.originalEvent.touches[0] || i.originalEvent.changedTouches[0];
                    var a = parseInt(n.pageX) - this.touchStartX,
                        s = parseInt(n.pageY) - this.touchStartY,
                        o = Math.abs(a << 2),
                        r = Math.abs(s << 2),
                        l = Math.sqrt(o + r),
                        c = Math.sqrt(r);
                    if (this.touchSin = Math.asin(c / l), !(180 * this.touchSin / Math.PI < 45)) return;
                    i.stopPropagation(), i.preventDefault(), t.track.addClass(t.options.classes.dragging), e.Animation.make(a), e.Events.preventClicks()
                }
            }, i.prototype.end = function(i) {
                if (!e.Events.disabled && this.dragging) {
                    n = "mouseup" === i.type || "mouseleave" === i.type ? i.originalEvent : i.originalEvent.touches[0] || i.originalEvent.changedTouches[0];
                    var a = n.pageX - this.touchStartX,
                        s = 180 * this.touchSin / Math.PI;
                    e.Transition.jumping = !1, e.Build.isType("slider") && (e.Run.isStart() && a > 0 && (a = 0), e.Run.isEnd() && 0 > a && (a = 0)), a > t.options.touchDistance && 45 > s ? e.Run.make("<") : a < -t.options.touchDistance && 45 > s ? e.Run.make(">") : e.Animation.make(), e.Animation.after(function() {
                        e.Events.enable(), e.Run.play()
                    }), this.dragging = !1, e.Events.disable().call(t.options.swipeEnd), t.track.removeClass(t.options.classes.dragging).off("touchmove.glide mousemove.glide").off("touchend.glide touchcancel.glide mouseup.glide mouseleave.glide")
                }
            }, new i
        },
        f = function(t, e) {
            function i() {
                this.jumping = !1
            }
            return i.prototype.get = function(e) {
                return this.jumping ? this.clear("all") : e + " " + t.options.animationDuration + "ms " + t.options.animationTimingFunc
            }, i.prototype.clear = function(e) {
                return e + " 0ms " + t.options.animationTimingFunc
            }, new i
        },
        m = function(t, e) {
            function i() {}
            var n = {
                x: 0,
                y: 0,
                z: 0
            };
            return i.prototype.get = function() {
                var e = t.track[0].styles.transform.replace(/[^0-9\-.,]/g, "").split(",");
                return parseInt(e[12] || e[4])
            }, i.prototype.set = function(t, e) {
                return n[t] = parseInt(e), "translate3d(" + -1 * n.x + "px, " + n.y + "px, " + n.z + "px)"
            }, new i
        },
        v = function(t, e) {
            var i = {
                autoplay: 2000,
                type: "carousel",
                startAt: 1,
                hoverpause: !0,
                keyboard: !0,
                touchDistance: 80,
                dragDistance: 120,
                animationDuration: 400,
                animationTimingFunc: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
                throttle: 16,
                autoheight: !1,
                paddings: 0,
                centered: !0,
                classes: {
                    base: "glide",
                    wrapper: "glide__wrapper",
                    track: "glide__track",
                    slide: "glide__slide",
                    arrows: "glide__arrows",
                    arrow: "glide__arrow",
                    arrowNext: "next",
                    arrowPrev: "prev",
                    bullets: "glide__bullets",
                    bullet: "glide__bullet",
                    clone: "clone",
                    active: "active",
                    dragging: "dragging",
                    disabled: "disabled"
                },
                beforeInit: function(t) {},
                afterInit: function(t, e) {},
                beforeTransition: function(t, e) {},
                afterTransition: function(t, e) {},
                swipeStart: function(t, e) {},
                swipeEnd: function(t, e) {}
            };
            this.options = $.extend({}, i, e), this.current = parseInt(this.options.startAt), this.element = t, this.collect(), this.setup(), this.options.beforeInit(this.slider);
            var v = new c(this, {
                Helper: h,
                Translate: m,
                Transition: f,
                Run: p,
                Animation: n,
                Clones: l,
                Arrows: s,
                Bullets: r,
                Height: d,
                Build: o,
                Events: u,
                Touch: g,
                Api: a
            });
            return this.options.afterInit(this.current, this.slides.eq(this.current - 1)), v.Api.instance()
        };
    v.prototype.collect = function() {
        this.slider = this.element.addClass(this.options.classes.base + "--" + this.options.type), this.track = this.slider.find("." + this.options.classes.track), this.wrapper = this.slider.find("." + this.options.classes.wrapper), this.slides = this.track.find("." + this.options.classes.slide).not("." + this.options.classes.clone)
    }, v.prototype.setup = function() {
        this.paddings = this.getPaddings(), this.width = this.getWidth(), this.length = this.slides.length
    }, v.prototype.getPaddings = function() {
        var t = this.options.paddings;
        if ("string" == typeof t) {
            var e = parseInt(t, 10),
                i = t.indexOf("%") >= 0;
            return i ? parseInt(this.slider.width() * (e / 100)) : e
        }
        return t
    }, v.prototype.getWidth = function() {
        return this.slider.width() - 2 * this.paddings
    }, $.fn.glide = function(t) {
        return this.each(function() {
            $.data(this, "glide_api") || $.data(this, "glide_api", new v($(this), t))
        })
    }
}(jQuery, window, document), jQuery.easing.jswing = jQuery.easing.swing, jQuery.extend(jQuery.easing, {
        def: "easeOutExpo",
        swing: function(t, e, i, n, a) {
            return jQuery.easing[jQuery.easing.def](t, e, i, n, a)
        },
        easeOutExpo: function(t, e, i, n, a) {
            return e == a ? i + n : n * (-Math.pow(2, -10 * e / a) + 1) + i
        }
    }),
    function(t) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], t) : t("object" == typeof exports && "function" == typeof require ? require("jquery") : jQuery)
    }(function($) {
        "use strict";

        function t(e, i) {
            var n = function() {},
                a = this,
                s = {
                    ajaxSettings: {},
                    autoSelectFirst: !1,
                    appendTo: document.body,
                    serviceUrl: null,
                    lookup: null,
                    onSelect: null,
                    width: "auto",
                    minChars: 1,
                    maxHeight: 300,
                    deferRequestBy: 0,
                    params: {},
                    formatResult: t.formatResult,
                    delimiter: null,
                    zIndex: 9999,
                    type: "GET",
                    noCache: !1,
                    onSearchStart: n,
                    onSearchComplete: n,
                    onSearchError: n,
                    containerClass: "autocomplete-suggestions",
                    tabDisabled: !1,
                    dataType: "text",
                    currentRequest: null,
                    triggerSelectOnValidInput: !0,
                    preventBadQueries: !0,
                    lookupFilter: function(t, e, i) {
                        return -1 !== t.value.toLowerCase().indexOf(i)
                    },
                    paramName: "query",
                    transformResult: function(t) {
                        return "string" == typeof t ? $.parseJSON(t) : t
                    },
                    showNoSuggestionNotice: !1,
                    noSuggestionNotice: "No results",
                    orientation: "bottom",
                    forceFixPosition: !1
                };
            a.element = e, a.el = $(e), a.suggestions = [], a.badQueries = [], a.selectedIndex = -1, a.currentValue = a.element.value, a.intervalId = 0, a.cachedResponse = {}, a.onChangeInterval = null, a.onChange = null, a.isLocal = !1, a.suggestionsContainer = null, a.noSuggestionsContainer = null, a.options = $.extend({}, s, i), a.classes = {
                selected: "autocomplete-selected",
                suggestion: "autocomplete-suggestion"
            }, a.hint = null, a.hintValue = "", a.selection = null, a.initialize(), a.setOptions(i)
        }
        var e = function() {
                return {
                    escapeRegExChars: function(t) {
                        return t.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
                    },
                    createNode: function(t) {
                        var e = document.createElement("div");
                        return e.className = t, e.style.position = "absolute", e.style.display = "none", e
                    }
                }
            }(),
            i = {
                ESC: 27,
                TAB: 9,
                RETURN: 13,
                LEFT: 37,
                UP: 38,
                RIGHT: 39,
                DOWN: 40
            };
        t.utils = e, $.Autocomplete = t, t.formatResult = function(t, i) {
            var n = "(" + e.escapeRegExChars(i) + ")";
            return t.value.replace(new RegExp(n, "gi"), "<strong>$1</strong>")
        }, t.prototype = {
            killerFn: null,
            initialize: function() {
                var e = this,
                    i = "." + e.classes.suggestion,
                    n = e.classes.selected,
                    a = e.options,
                    s;
                e.element.setAttribute("autocomplete", "off"), e.killerFn = function(t) {
                    0 === $(t.target).closest("." + e.options.containerClass).length && (e.killSuggestions(), e.disableKillerFn())
                }, e.noSuggestionsContainer = $('<div class="autocomplete-no-suggestion"></div>').html(this.options.noSuggestionNotice).get(0), e.suggestionsContainer = t.utils.createNode(a.containerClass), s = $(e.suggestionsContainer), s.appendTo(a.appendTo), "auto" !== a.width && s.width(a.width), s.on("mouseover.autocomplete", i, function() {
                    e.activate($(this).data("index"))
                }), s.on("mouseout.autocomplete", function() {
                    e.selectedIndex = -1, s.children("." + n).removeClass(n)
                }), s.on("click.autocomplete", i, function() {
                    e.select($(this).data("index"))
                }), e.fixPositionCapture = function() {
                    e.visible && e.fixPosition()
                }, $(window).on("resize.autocomplete", e.fixPositionCapture), e.el.on("keydown.autocomplete", function(t) {
                    e.onKeyPress(t)
                }), e.el.on("keyup.autocomplete", function(t) {
                    e.onKeyUp(t)
                }), e.el.on("blur.autocomplete", function() {
                    e.onBlur()
                }), e.el.on("focus.autocomplete", function() {
                    e.onFocus()
                }), e.el.on("change.autocomplete", function(t) {
                    e.onKeyUp(t)
                })
            },
            onFocus: function() {
                var t = this;
                t.fixPosition(), t.options.minChars <= t.el.val().length && t.onValueChange()
            },
            onBlur: function() {
                this.enableKillerFn()
            },
            setOptions: function(t) {
                var e = this,
                    i = e.options;
                $.extend(i, t), e.isLocal = $.isArray(i.lookup), e.isLocal && (i.lookup = e.verifySuggestionsFormat(i.lookup)), i.orientation = e.validateOrientation(i.orientation, "bottom"), $(e.suggestionsContainer).css({
                    "max-height": i.maxHeight + "px",
                    width: i.width + "px",
                    "z-index": i.zIndex
                })
            },
            clearCache: function() {
                this.cachedResponse = {}, this.badQueries = []
            },
            clear: function() {
                this.clearCache(), this.currentValue = "", this.suggestions = []
            },
            disable: function() {
                var t = this;
                t.disabled = !0, clearInterval(t.onChangeInterval), t.currentRequest && t.currentRequest.abort()
            },
            enable: function() {
                this.disabled = !1
            },
            fixPosition: function() {
                var t = this,
                    e = $(t.suggestionsContainer),
                    i = e.parent().get(0);
                if (i === document.body || t.options.forceFixPosition) {
                    var n = t.options.orientation,
                        a = e.outerHeight(),
                        s = t.el.outerHeight(),
                        o = t.el.offset(),
                        r = {
                            top: o.top,
                            left: o.left
                        };
                    if ("auto" === n) {
                        var l = $(window).height(),
                            c = $(window).scrollTop(),
                            u = -c + o.top - a,
                            d = c + l - (o.top + s + a);
                        n = Math.max(u, d) === u ? "top" : "bottom"
                    }
                    if ("top" === n ? r.top += -a : r.top += s, i !== document.body) {
                        var h = e.css("opacity"),
                            p;
                        t.visible || e.css("opacity", 0).show(), p = e.offsetParent().offset(), r.top -= p.top, r.left -= p.left, t.visible || e.css("opacity", h).hide()
                    }
                    "auto" === t.options.width && (r.width = t.el.outerWidth() - 2 + "px"), e.css(r)
                }
            },
            enableKillerFn: function() {
                var t = this;
                $(document).on("click.autocomplete", t.killerFn)
            },
            disableKillerFn: function() {
                var t = this;
                $(document).off("click.autocomplete", t.killerFn)
            },
            killSuggestions: function() {
                var t = this;
                t.stopKillSuggestions(), t.intervalId = window.setInterval(function() {
                    t.hide(), t.stopKillSuggestions()
                }, 50)
            },
            stopKillSuggestions: function() {
                window.clearInterval(this.intervalId)
            },
            isCursorAtEnd: function() {
                var t = this,
                    e = t.el.val().length,
                    i = t.element.selectionStart,
                    n;
                return "number" == typeof i ? i === e : document.selection ? (n = document.selection.createRange(), n.moveStart("character", -e), e === n.text.length) : !0
            },
            onKeyPress: function(t) {
                var e = this;
                if (!e.disabled && !e.visible && t.which === i.DOWN && e.currentValue) return void e.suggest();
                if (!e.disabled && e.visible) {
                    switch (t.which) {
                        case i.ESC:
                            e.el.val(e.currentValue), e.hide();
                            break;
                        case i.RIGHT:
                            if (e.hint && e.options.onHint && e.isCursorAtEnd()) {
                                e.selectHint();
                                break
                            }
                            return;
                        case i.TAB:
                            if (e.hint && e.options.onHint) return void e.selectHint();
                            if (-1 === e.selectedIndex) return void e.hide();
                            if (e.select(e.selectedIndex), e.options.tabDisabled === !1) return;
                            break;
                        case i.RETURN:
                            if (-1 === e.selectedIndex) return void e.hide();
                            e.select(e.selectedIndex);
                            break;
                        case i.UP:
                            e.moveUp();
                            break;
                        case i.DOWN:
                            e.moveDown();
                            break;
                        default:
                            return
                    }
                    t.stopImmediatePropagation(), t.preventDefault()
                }
            },
            onKeyUp: function(t) {
                var e = this;
                if (!e.disabled) {
                    switch (t.which) {
                        case i.UP:
                        case i.DOWN:
                        case i.RETURN:
                            return
                    }
                    clearInterval(e.onChangeInterval), e.currentValue !== e.el.val() && (e.findBestHint(), e.options.deferRequestBy > 0 ? e.onChangeInterval = setInterval(function() {
                        e.onValueChange()
                    }, e.options.deferRequestBy) : e.onValueChange())
                }
            },
            onValueChange: function() {
                var t = this,
                    e = t.options,
                    i = t.el.val(),
                    n = t.getQuery(i),
                    a;
                return t.selection && t.currentValue !== n && (t.selection = null, (e.onInvalidateSelection || $.noop).call(t.element)), clearInterval(t.onChangeInterval), t.currentValue = i, t.selectedIndex = -1, e.triggerSelectOnValidInput && (a = t.findSuggestionIndex(n), -1 !== a) ? void t.select(a) : void(n.length < e.minChars ? t.hide() : t.getSuggestions(n))
            },
            findSuggestionIndex: function(t) {
                var e = this,
                    i = -1,
                    n = t.toLowerCase();
                return $.each(e.suggestions, function(t, e) {
                    return e.value.toLowerCase() === n ? (i = t, !1) : void 0
                }), i
            },
            getQuery: function(t) {
                var e = this.options.delimiter,
                    i;
                return e ? (i = t.split(e), $.trim(i[i.length - 1])) : t
            },
            getSuggestionsLocal: function(t) {
                var e = this,
                    i = e.options,
                    n = t.toLowerCase(),
                    a = i.lookupFilter,
                    s = parseInt(i.lookupLimit, 10),
                    o;
                return o = {
                    suggestions: $.grep(i.lookup, function(e) {
                        return a(e, t, n)
                    })
                }, s && o.suggestions.length > s && (o.suggestions = o.suggestions.slice(0, s)), o
            },
            getSuggestions: function(t) {
                var e, i = this,
                    n = i.options,
                    a = n.serviceUrl,
                    s, o, r;
                if (n.params[n.paramName] = t, s = n.ignoreParams ? null : n.params, n.onSearchStart.call(i.element, n.params) !== !1) {
                    if ($.isFunction(n.lookup)) return void n.lookup(t, function(e) {
                        i.suggestions = e.suggestions, i.suggest(), n.onSearchComplete.call(i.element, t, e.suggestions)
                    });
                    i.isLocal ? e = i.getSuggestionsLocal(t) : ($.isFunction(a) && (a = a.call(i.element, t)), o = a + "?" + $.param(s || {}), e = i.cachedResponse[o]), e && $.isArray(e.suggestions) ? (i.suggestions = e.suggestions, i.suggest(), n.onSearchComplete.call(i.element, t, e.suggestions)) : i.isBadQuery(t) ? n.onSearchComplete.call(i.element, t, []) : (i.currentRequest && i.currentRequest.abort(), r = {
                        url: a,
                        data: s,
                        type: n.type,
                        dataType: n.dataType
                    }, $.extend(r, n.ajaxSettings), i.currentRequest = $.ajax(r).done(function(e) {
                        var a;
                        i.currentRequest = null, a = n.transformResult(e), i.processResponse(a, t, o), n.onSearchComplete.call(i.element, t, a.suggestions)
                    }).fail(function(e, a, s) {
                        n.onSearchError.call(i.element, t, e, a, s)
                    }))
                }
            },
            isBadQuery: function(t) {
                if (!this.options.preventBadQueries) return !1;
                for (var e = this.badQueries, i = e.length; i--;)
                    if (0 === t.indexOf(e[i])) return !0;
                return !1
            },
            hide: function() {
                var t = this;
                t.visible = !1, t.selectedIndex = -1, clearInterval(t.onChangeInterval), $(t.suggestionsContainer).hide(), t.signalHint(null)
            },
            suggest: function() {
                if (0 === this.suggestions.length) return void(this.options.showNoSuggestionNotice ? this.noSuggestions() : this.hide());
                var t = this,
                    e = t.options,
                    i = e.groupBy,
                    n = e.formatResult,
                    a = t.getQuery(t.currentValue),
                    s = t.classes.suggestion,
                    o = t.classes.selected,
                    r = $(t.suggestionsContainer),
                    l = $(t.noSuggestionsContainer),
                    c = e.beforeRender,
                    u = "",
                    d, h = function(t, e) {
                        var n = t.data[i];
                        return d === n ? "" : (d = n, '<div class="autocomplete-group"><strong>' + d + "</strong></div>")
                    },
                    p;
                return e.triggerSelectOnValidInput && (p = t.findSuggestionIndex(a), -1 !== p) ? void t.select(p) : ($.each(t.suggestions, function(t, e) {
                    i && (u += h(e, a, t)), u += '<div class="' + s + '" data-index="' + t + '">' + n(e, a) + "</div>"
                }), this.adjustContainerWidth(), l.detach(), r.html(u), $.isFunction(c) && c.call(t.element, r), t.fixPosition(), r.show(), e.autoSelectFirst && (t.selectedIndex = 0, r.scrollTop(0), r.children().first().addClass(o)), t.visible = !0, void t.findBestHint())
            },
            noSuggestions: function() {
                var t = this,
                    e = $(t.suggestionsContainer),
                    i = $(t.noSuggestionsContainer);
                this.adjustContainerWidth(), i.detach(), e.empty(), e.append(i), t.fixPosition(), e.show(), t.visible = !0
            },
            adjustContainerWidth: function() {
                var t = this,
                    e = t.options,
                    i, n = $(t.suggestionsContainer);
                "auto" === e.width && (i = t.el.outerWidth() - 2, n.width(i > 0 ? i : 300))
            },
            findBestHint: function() {
                var t = this,
                    e = t.el.val().toLowerCase(),
                    i = null;
                e && ($.each(t.suggestions, function(t, n) {
                    var a = 0 === n.value.toLowerCase().indexOf(e);
                    return a && (i = n), !a
                }), t.signalHint(i))
            },
            signalHint: function(t) {
                var e = "",
                    i = this;
                t && (e = i.currentValue + t.value.substr(i.currentValue.length)), i.hintValue !== e && (i.hintValue = e, i.hint = t, (this.options.onHint || $.noop)(e))
            },
            verifySuggestionsFormat: function(t) {
                return t.length && "string" == typeof t[0] ? $.map(t, function(t) {
                    return {
                        value: t,
                        data: null
                    }
                }) : t
            },
            validateOrientation: function(t, e) {
                return t = $.trim(t || "").toLowerCase(), -1 === $.inArray(t, ["auto", "bottom", "top"]) && (t = e), t
            },
            processResponse: function(t, e, i) {
                var n = this,
                    a = n.options;
                t.suggestions = n.verifySuggestionsFormat(t.suggestions), a.noCache || (n.cachedResponse[i] = t, a.preventBadQueries && 0 === t.suggestions.length && n.badQueries.push(e)), e === n.getQuery(n.currentValue) && (n.suggestions = t.suggestions, n.suggest())
            },
            activate: function(t) {
                var e = this,
                    i, n = e.classes.selected,
                    a = $(e.suggestionsContainer),
                    s = a.find("." + e.classes.suggestion);
                return a.find("." + n).removeClass(n), e.selectedIndex = t, -1 !== e.selectedIndex && s.length > e.selectedIndex ? (i = s.get(e.selectedIndex), $(i).addClass(n), i) : null
            },
            selectHint: function() {
                var t = this,
                    e = $.inArray(t.hint, t.suggestions);
                t.select(e)
            },
            select: function(t) {
                var e = this;
                e.hide(), e.onSelect(t)
            },
            moveUp: function() {
                var t = this;
                if (-1 !== t.selectedIndex) return 0 === t.selectedIndex ? ($(t.suggestionsContainer).children().first().removeClass(t.classes.selected), t.selectedIndex = -1, t.el.val(t.currentValue), void t.findBestHint()) : void t.adjustScroll(t.selectedIndex - 1)
            },
            moveDown: function() {
                var t = this;
                t.selectedIndex !== t.suggestions.length - 1 && t.adjustScroll(t.selectedIndex + 1)
            },
            adjustScroll: function(t) {
                var e = this,
                    i = e.activate(t);
                if (i) {
                    var n, a, s, o = $(i).outerHeight();
                    n = i.offsetTop, a = $(e.suggestionsContainer).scrollTop(), s = a + e.options.maxHeight - o, a > n ? $(e.suggestionsContainer).scrollTop(n) : n > s && $(e.suggestionsContainer).scrollTop(n - e.options.maxHeight + o), e.signalHint(null)
                }
            },
            onSelect: function(t) {
                var e = this,
                    i = e.options.onSelect,
                    n = e.suggestions[t];
                e.currentValue = e.getValue(n.value), e.signalHint(null), e.suggestions = [], e.selection = n, $.isFunction(i) && i.call(e.element, n)
            },
            getValue: function(t) {
                var e = this,
                    i = e.options.delimiter,
                    n, a;
                return i ? (n = e.currentValue, a = n.split(i), 1 === a.length ? t : n.substr(0, n.length - a[a.length - 1].length) + t) : t
            },
            dispose: function() {
                var t = this;
                t.el.off(".autocomplete").removeData("autocomplete"), t.disableKillerFn(), $(window).off("resize.autocomplete", t.fixPositionCapture), $(t.suggestionsContainer).remove()
            }
        }, $.fn.autocomplete = $.fn.devbridgeAutocomplete = function(e, i) {
            var n = "autocomplete";
            return 0 === arguments.length ? this.first().data(n) : this.each(function() {
                var a = $(this),
                    s = a.data(n);
                "string" == typeof e ? s && "function" == typeof s[e] && s[e](i) : (s && s.dispose && s.dispose(), s = new t(this, e), a.data(n, s))
            })
        }
    });
try {
    console.log("manageWindowSize declaration")
} catch (e) {}
$.fn.manageWindowSize = function() {
    "use strict";
    var t = $(window),
        e = $("body"),
        i;
    i = window.matchMedia("(max-width: 319px)").matches ? "window-width-small" : window.matchMedia("(min-width: 320px)").matches && window.matchMedia("(max-width: 1099px)").matches ? "window-width-medium" : "window-width-large", e.hasClass(i) || (localStorage.setItem("ac-window-size", i), e.removeClass("window-width-small window-width-medium window-width-large").addClass(i), $(".js-img-swap").imageSwap(), $.ajax({
        url: "/recordwindowsize",
        type: "POST",
        data: {
            windowsize: i.replace(/window-width-/, "")
        },
        success: function(t) {
            console.log("Size " + i + " passed to server")
        }
    }))
}, $.fn.imageSwap = function() {
    "use strict";
    var t = function() {
        try {
            console.log.apply(console, arguments)
        } catch (t) {}
    };
    return this.each(function() {
        var e = $("body"),
            i = $(this),
            n = i.attr("src");
        n.match(/(small|medium|large)$/) || (n += "/small");
        var a = n.substring(0, n.lastIndexOf("/") + 1);
        e.hasClass("window-width-small") && (i.attr("src", a + "small"), t("small")), e.hasClass("window-width-medium") && (i.attr("src", a + "medium"), t("medium")), e.hasClass("window-width-large") && (i.attr("src", a + "large"), t("large"))
    })
}, $.fn.headerControl = function() {
    "use strict";
    var t = $(window),
        e = t.width(),
        i = $("html"),
        n = $("body"),
        a = $(".page"),
        s = $(this),
        o = s.outerHeight(),
        r = s.find("nav"),
        l = s.find(".nav-link-level-1"),
        c = s.find(".nav-link-level-2"),
        u = r.outerHeight(),
        d = s.find(".js-global-icon-menu"),
        h = s.find(".js-global-nav-control"),
        p = s.find(".global-header_search"),
        g = s.find(".global-header_search-input");
    i.hasClass("no-touch") && (h.on("mouseenter", function() {
        t.width() > 1024 && a.removeClass("js-remove-shade").addClass("js-show-shade")
    }), h.on("mouseleave", function() {
        t.width() > 1024 && a.removeClass("js-show-shade").addClass("js-remove-shade")
    })), d.on("click", function() {
        return n.toggleClass("js-stop-scroll"), s.toggleClass("js-open-nav"), d.toggleClass("js-icon-menu-active"), !1
    }), $(".nav-link-level-1, .nav-link-level-2").on("click", function() {
        return t.width() < 1024 || !i.hasClass("no-touch") ? $(this).is(".type-overview, .type-solo") ? !0 : ($(this).toggleClass("js-open-section"), !1) : void 0
    }), $(".js-global-search").on("click", function() {
        p.addClass("js-open-search"), g.focus(), i.hasClass("no-touch") || ($("body").animate({
            scrollTop: 0
        }, 500, "easeOutExpo"), s.addClass("ios-fix"))
    }), $(".js-close-search").on("click", function() {
        p.removeClass("js-open-search"), i.hasClass("no-touch") || s.removeClass("ios-fix")
    }), t.on("debouncedresize", function() {
        var e = t.width();
        t.width() >= 1024 && i.hasClass("no-touch") && ($(l, c).removeClass("js-open-section"), n.removeClass("js-stop-scroll"), s.removeClass("js-open-nav"), d.removeClass("js-icon-menu-active")), t.width() < 1024 && i.hasClass("no-touch") && a.removeClass("js-show-shade")
    }), $(".theme-transparent").length && s.addClass("js-original-theme-transparent"), t.on("scroll", function() {
        var t = $(this).scrollTop()
    })
}, $.fn.animateBlocks = function() {
    "use strict";
    return this.each(function() {
        var t = $(window),
            e = $(this).find("> div"),
            i = t.scrollTop(),
            n = t.height(),
            a = 25;
        e.each(function() {
            var t = $(this);
            t.find(".cta-block, .feature-block, .image-block, > .quote-block").css("transition-delay", a + "ms");
            var e = parseInt(t.offset().top, 10);
            i + n >= e + 50 && t.find(".cta-block, .feature-block, .image-block, > .quote-block").addClass("animate-block"), a += 25
        })
    })
}, $.fn.videoClipControl = function() {
    "use strict";
    return this.each(function() {
        var t = $(this),
            e = t.find("source");
        if ($.fn.toggleFunctionality = function() {
                window.matchMedia("(min-width: 1100px)").matches ? t.is(".js-feature-video-clip") ? t.addClass("add-hover") : i.play() : t.is(".js-feature-video-clip") ? t.removeClass("add-hover") : i.pause()
            }, $("html").hasClass("no-touch"))
            if (e.each(function() {
                    $(this).attr("src", $(this).data("src")).removeAttr("data-src"), t.find("video").load()
                }), $(window).on("debouncedresize", function() {
                    $.fn.toggleFunctionality()
                }), t.is(".js-feature-video-clip")) $.fn.toggleFunctionality(), t.on("mouseenter mouseleave", function(e) {
                e.stopImmediatePropagation();
                var i = t.find("video")[0];
                "mouseenter" === e.type ? i.play() : i.pause()
            });
            else {
                t.addClass("js-hero-video-clip--active");
                var i = t.find("video")[0]
            }
    })
}, $.fn.customSelect = function() {
    "use strict";

    function t(t, e) {
        t.html(e)
    }

    function e() {
        $(".custom-select .dropdown").each(function() {
            $(this).removeClass("open"), $(this).closest(".cta-block").removeClass("cta-block--focus"), $(this).closest(".content-block").removeClass("content-block--focus")
        })
    }

    function i(t) {
        $("body").on("click", function() {
            e()
        }), n(t)
    }

    function n(i) {
        i.each(function(i) {
            var n = $(this),
                s = $(n.data("content")),
                o = n.find(".custom-select"),
                r = n.data("source");
            o.each(function() {
                var i = $(this),
                    n = i.find(".current"),
                    s = i.find(".dropdown"),
                    o = i.find("select");
                i.data("init") || (i.data("init", "1"), "date" == i.data("type") ? (n.on("click", function(t) {
                    t.stopPropagation(), e(), s.addClass("open"), $(this).closest(".cta-block").addClass("cta-block--focus"), $(this).closest(".content-block").addClass("content-block--focus")
                }), i.find(".datepicker").each(function() {
                    var t = $(this);
                    t.datepicker({
                        dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                        dateFormat: "mm-dd-yy",
                        defaultDate: i.data("selected-date"),
                        minDate: i.data("min-date"),
                        maxDate: i.data("max-date"),
                        onSelect: function(t, e) {
                            s.hide(), window.location.href = i.data("url").replace("[DATE]", t)
                        }
                    }).on("click", function(t) {
                        t.stopPropagation()
                    });
                    var e = n.clone().addClass("current--datepicker").on("click", function() {
                        s.removeClass("open")
                    });
                    t.prepend(e)
                })) : a ? (o.hide(), n.on("click", function(t) {
                    t.stopPropagation(), e(), s.addClass("open"), $(this).closest(".cta-block").addClass("cta-block--focus"), $(this).closest(".content-block").addClass("content-block--focus")
                }), s.find("li a").each(function() {
                    var e = $(this).attr("href");
                    $(this).on("click", function(i) {
                        var a = $($(this).data("secondary"));
                        return a.length > 0 ? (i.preventDefault(), t(n, $(this).html()), void a.fadeOut(0).fadeIn(500).css("display", "inline-block").siblings(".custom-select--secondary").hide()) : "" == e || "#" == e ? void i.preventDefault() : void 0
                    })
                })) : (s.hide(), o.show(), o.on("change", function(e) {
                    var i = $(this).find("option:selected"),
                        a = i.val(),
                        s = $(i.data("secondary"));
                    return s.length > 0 ? (t(n, i.text()), s.fadeOut(0).fadeIn(500).css("display", "inline-block").siblings(".custom-select--secondary").hide(), !1) : void("" != a && "#" != a && (window.location.href = a))
                })))
            })
        })
    }
    var a = !1;
    $("html").hasClass("no-touch") && (a = !0), i($(this))
}, $.fn.slideshow = function() {
    "use strict";

    function t(t, e) {
        var i = e.current(),
            n = t.find('li:not(".clone")').get(i - 1);
        return $(n).find("a")
    }
    return this.each(function() {
        var e = $(this),
            i = e.glide({
                type: "carousel",
                autoplay:2000,
                startAt: 1
            }).data("glide_api");
        e.next(".feature-block_content").css("cursor", "pointer").on("mouseenter", function() {
            t(e, i).addClass("hover")
        }).on("mouseleave", function() {
            t(e, i).removeClass("hover")
        }).on("click", function(n) {
            var a = t(e, i).attr("href");
            void 0 != a && (window.location.href = a)
        })
    })
}, $.fn.inpageNavControl = function(t) {
    "use strict";
    var e = $(window),
        i = $(this),
        n = i.outerHeight(),
        a = t,
        s = $(a).filter(":first");
    i.on("click", "a", function(t) {
        var i = $(this),
            n = i.attr("href"),
            t = e.scrollTop(),
            a = 60,
            s = parseInt($(n).offset().top) - a;
        return $("html, body").animate({
            scrollTop: s
        }, 500, "easeOutExpo"), !1
    })
}, $.fn.forms = function() {
    "use strict";
    return this.each(function() {
        var t = $(this);
        t.find(".form-button").each(function() {
            $(this).on("click", function(e) {
                e.preventDefault(), t.submit()
            })
        })
    })
}, $.fn.carousel = function() {
    "use strict";

    function t(t, e, i) {
        var n = i.parent().children().not(".clone").length;
        t.find(".glide__count").html(e + " of " + n)
    }

    function e(t, e) {
        var i = t.caption;
        i.fadeOut(0).find("p").html(e.data("caption")), i.fadeIn(500)
    }
    return this.each(function() {
        var i = $(this),
            n = i.next(".carousel-caption");
        if (n.length > 0 && (i.caption = n), !i.closest("code").length) {
            var a = i.glide({
                type: "carousel",
                autoplay: 2000,
                startAt: 1,
                afterInit: function(n, a) {
                    t(i, n, a), i.caption && e(i, a)
                },
                afterTransition: function(n, a) {
                    t(i, n, a), i.caption && e(i, a)
                }
            }).data("glide_api");
            i.find(".glide__slide").show()
        }
    })
}, $.fn.showHideControl = function() {
    "use strict";
    return this.each(function() {
        var t = $(this),
            e = t.data("text-default"),
            i = t.data("text-active"),
            n = t.prev(".show-hide-control");
        t.on("click", function() {
            return t.toggleClass("icon-angle-down").toggleClass("icon-angle-up").text(t.text() == e ? i : e), n.toggleClass("show-hide-control--opened"), !1
        })
    })
}, $.fn.modalControl = function() {
    "use strict";
    var t = $(this);
    t.on("click", function(t) {
        t.preventDefault();
        var e = $("body"),
            i = $(this).attr("href");
        if (e.addClass("modal-is-open"), $(".js-hero-video-clip").length) {
            var n = $(".hero-block_video")[0];
            n.pause()
        }
        $.ajax({
            url: i,
            success: function(t) {
                $(".page").append(t), $(".js-close-modal").on("click", function() {
                    $(".modal-control").remove(), e.removeClass("modal-is-open"), window.matchMedia("(min-width: 1100px)").matches && $(".js-hero-video-clip").length && n.play()
                })
            },
            error: function() {}
        })
    }), $(document).on("keyup", function(t) {
        27 === t.keyCode && $(".js-close-modal").click()
    })
}, $.fn.faq = function() {
    "use strict";
    $(this).each(function() {
        var t = $(this),
            e = t.find("form"),
            i = t.find(".faq-search_field"),
            n = t.find(".faq-search_clear"),
            a = t.find(".faq-search_loader"),
            s = function(t) {
                var e = $(this).attr("href").split("?").join("");
                e += "?question=" + encodeURIComponent(i.val()), $(this).attr("href", e)
            };
        i.closest(".cta-block").addClass("cta-block--faq-search"), i.on("focus", function() {
            $(this).closest(".cta-block").addClass("cta-block--focus")
        }).on("blur", function() {
            $(this).closest(".cta-block").removeClass("cta-block--focus")
        }), i.autocomplete({
            serviceUrl: i.data("autosuggest-url"),
            maxHeight: "auto",
            appendTo: t,
            zIndex: 99,
            formatResult: function(t) {
                return t.value
            },
            beforeRender: function(t) {
                t.find(".autocomplete-suggestion").first().addClass("count"), t.append('<div class="submit-question"><a class="button" href="' + i.data("submit-link") + '">Submit Question</a></div>'), $(".submit-question-button").unbind("click", s).click(s)
            },
            onSelect: function(t) {
                void 0 != t.data && "" != t.data ? window.location.href = t.data : e.trigger("submit")
            },
            onSearchStart: function() {
                i.autocomplete("hide"), a.width(i.outerWidth() - 2).show(), n.show()
            },
            onSearchComplete: function(t, e) {
                a.hide(), n.show()
            }
        }), n.on("click", function(t) {
            t.preventDefault(), i.autocomplete("hide"), i.val(""), $(this).hide()
        }), $("#formQuestionSubmit .button").on("click", function(t) {
            t.preventDefault(), $("#formQuestionSubmit").submit()
        })
    })
}, $.fn.galleryControls = function() {
    "use strict";
    return this.each(function() {
        var t = $(this),
            e = t.find(".js-gallery-next"),
            i = t.find(".js-gallery-prev"),
            n = t.find(".js-gallery-close");
        $(document).on("keyup", function(t) {
            switch (t.which) {
                case 27:
                    n[0].click();
                    break;
                case 37:
                    i[0].click();
                    break;
                case 39:
                    e[0].click();
                    break;
                default:
                    return
            }
        })
    })
}, $.fn.shareContainerControl = function(t) {
    "use strict";
    var e = $(this);
    e.on("click", ".button", function() {
        $(this).closest(e).addClass("share-container--active")
    })
}, $(function() {
    $.fn.manageWindowSize(), $(".custom-select-container").customSelect(), $(".feature-block_slideshow").slideshow(), $(".inpage-nav-block").inpageNavControl(".scrollto-block"), $("form").forms(), $(".carousel-block").each(function() {
        $(this).find(".glide__slide").length <= 1 ? $(this).addClass("inactive") : $(this).carousel()
    }), $(".faq-search").faq(), eventPages(), eventDetail(), newsPages(), newsDetail(), faqList(), faqDetail(), faqSubmitQuestion(), $(".js-remove-div").remove(), $(".global-header").hasClass("theme-gallery") || $(".global-header").headerControl(), $("html").hasClass("no-touch") && ($(".grid-control:not(.global-footer)").addClass(""), $(window).on("load scroll resize", function() {
        $("").animateBlocks()
    })), $(window).on("load", function() {
        $(".js-feature-video-clip, .js-hero-video-clip").videoClipControl()
    }).on("debouncedresize", function() {
        $.fn.manageWindowSize()
    }), $(".share-container").shareContainerControl(), $(".js-show-hide").showHideControl(), $(".js-open-modal").modalControl(), $(".js-gallery-controls").galleryControls(), $("code").text($("code").html()).html(function() {
        return this.innerHTML.substring(1).replace(/\t/g, "    ")
    })
});