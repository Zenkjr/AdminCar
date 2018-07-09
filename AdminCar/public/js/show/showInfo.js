!function (h, i, m, g, e, k, f) {
    new (function () {
    });
    var c = {
        T: m.PI,
        v: m.max,
        p: m.min,
        eb: m.ceil,
        kb: m.floor,
        Cb: m.abs,
        Eb: m.sin,
        Ec: m.cos,
        Sd: m.tan,
        Nf: m.atan,
        Cc: m.sqrt,
        D: m.pow,
        Qd: m.random,
        F: m.round
    }, d = {
        Pf: function (a) {
            return -c.Ec(a * c.T) / 2 + .5
        }, l: function (a) {
            return a
        }, Qf: function (a) {
            return a * a
        }, Ed: function (a) {
            return -a * (a - 2)
        }, Rf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
        }, n: function (a) {
            return a * a * a
        }, hd: function (a) {
            return (a -= 1) * a * a + 1
        }, Sf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
        }, Tf: function (a) {
            return a * a * a * a
        }, Uf: function (a) {
            return -((a -= 1) * a * a * a - 1)
        }, Vf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
        }, Wf: function (a) {
            return a * a * a * a * a
        }, Xf: function (a) {
            return (a -= 1) * a * a * a * a + 1
        }, Yf: function (a) {
            return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
        }, Zf: function (a) {
            return 1 - c.Ec(c.T / 2 * a)
        }, ag: function (a) {
            return c.Eb(c.T / 2 * a)
        }, bg: function (a) {
            return -1 / 2 * (c.Ec(c.T * a) - 1)
        }, cg: function (a) {
            return a == 0 ? 0 : c.D(2, 10 * (a - 1))
        }, Ff: function (a) {
            return a == 1 ? 1 : -c.D(2, -10 * a) + 1
        }, dg: function (a) {
            return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.D(2, 10 * (a - 1)) : 1 / 2 * (-c.D(2, -10 * --a) + 2)
        }, Ef: function (a) {
            return -(c.Cc(1 - a * a) - 1)
        }, Cf: function (a) {
            return c.Cc(1 - (a -= 1) * a)
        }, ef: function (a) {
            return (a *= 2) < 1 ? -1 / 2 * (c.Cc(1 - a * a) - 1) : 1 / 2 * (c.Cc(1 - (a -= 2) * a) + 1)
        }, ff: function (a) {
            if (!a || a == 1) return a;
            var b = .3, d = .075;
            return -(c.D(2, 10 * (a -= 1)) * c.Eb((a - d) * 2 * c.T / b))
        }, gf: function (a) {
            if (!a || a == 1) return a;
            var b = .3, d = .075;
            return c.D(2, -10 * a) * c.Eb((a - d) * 2 * c.T / b) + 1
        }, hf: function (a) {
            if (!a || a == 1) return a;
            var b = .45, d = .1125;
            return (a *= 2) < 1 ? -.5 * c.D(2, 10 * (a -= 1)) * c.Eb((a - d) * 2 * c.T / b) : c.D(2, -10 * (a -= 1)) * c.Eb((a - d) * 2 * c.T / b) * .5 + 1
        }, jf: function (a) {
            var b = 1.70158;
            return a * a * ((b + 1) * a - b)
        }, kf: function (a) {
            var b = 1.70158;
            return (a -= 1) * a * ((b + 1) * a + b) + 1
        }, lf: function (a) {
            var b = 1.70158;
            return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
        }, le: function (a) {
            return 1 - d.Lc(1 - a)
        }, Lc: function (a) {
            return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
        }, mf: function (a) {
            return a < 1 / 2 ? d.le(a * 2) * .5 : d.Lc(a * 2 - 1) * .5 + .5
        }, pf: c.eb, qf: c.kb
    };
    var b = new function () {
        var j = this, vb = /\S+/g, F = 1, pb = 2, sb = 3, rb = 4, Z = 5, G, r = 0, n = 0, A = 0, H = navigator,
            fb = H.appName, p = H.userAgent, q = parseFloat;

        function Eb() {
            if (!G) {
                G = {yd: "ontouchstart" in h || "createTouch" in i};
                var a;
                if (H.pointerEnabled || (a = H.msPointerEnabled)) G.Yd = a ? "msTouchAction" : "touchAction"
            }
            return G
        }

        function u(g) {
            if (!r) {
                r = -1;
                if (fb == "Microsoft Internet Explorer" && !!h.attachEvent && !!h.ActiveXObject) {
                    var e = p.indexOf("MSIE");
                    r = F;
                    n = q(p.substring(e + 5, p.indexOf(";", e)));
                    /*@cc_on@*/
                } else if (fb == "Netscape" && !!h.addEventListener) {
                    var d = p.indexOf("Firefox"), b = p.indexOf("Safari"), f = p.indexOf("Chrome"),
                        c = p.indexOf("AppleWebKit");
                    if (d >= 0) {
                        r = pb;
                        n = q(p.substring(d + 8))
                    } else if (b >= 0) {
                        var i = p.substring(0, b).lastIndexOf("/");
                        r = f >= 0 ? rb : sb;
                        n = q(p.substring(i + 1, b))
                    } else {
                        var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(p);
                        if (a) {
                            r = F;
                            n = q(a[1])
                        }
                    }
                    if (c >= 0) A = q(p.substring(c + 12))
                } else {
                    var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(p);
                    if (a) {
                        r = Z;
                        n = q(a[2])
                    }
                }
            }
            return g == r
        }

        function v() {
            return u(F)
        }

        function xb() {
            return u(pb)
        }

        function qb() {
            return u(sb)
        }

        function ub() {
            return u(Z)
        }

        function mb() {
            return qb() && A > 534 && A < 535
        }

        function I() {
            u();
            return A > 537 || n > 42 || r == F && n >= 11
        }

        function nb(a) {
            var b, c;
            return function (g) {
                if (!b) {
                    b = e;
                    var d = a.substr(0, 1).toUpperCase() + a.substr(1);
                    l([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function (h, e) {
                        var b = a;
                        if (e) b = h + d;
                        if (g.style[b] != f) return c = b
                    })
                }
                return c
            }
        }

        function lb(b) {
            var a;
            return function (c) {
                a = a || nb(b)(c) || b;
                return a
            }
        }

        var L = lb("transform");

        function eb(a) {
            return {}.toString.call(a)
        }

        var bb = {};
        l(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function (a) {
            bb["[object " + a + "]"] = a.toLowerCase()
        });

        function l(b, d) {
            var a, c;
            if (eb(b) == "[object Array]") {
                for (a = 0; a < b.length; a++) if (c = d(b[a], a, b)) return c
            } else for (a in b) if (c = d(b[a], a, b)) return c
        }

        function E(a) {
            return a == g ? String(a) : bb[eb(a)] || "object"
        }

        function cb(a) {
            for (var b in a) return e
        }

        function B(a) {
            try {
                return E(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
            } catch (b) {
            }
        }

        function jb(b, a) {
            setTimeout(b, a || 0)
        }

        function ab(b, d, c) {
            var a = !b || b == "inherit" ? "" : b;
            l(d, function (c) {
                var b = c.exec(a);
                if (b) {
                    var d = a.substr(0, b.index), e = a.substr(b.index + b[0].length + 1, a.length - 1);
                    a = d + e
                }
            });
            a && (c += (!a.indexOf(" ") ? "" : " ") + a);
            return c
        }

        function gb(a, b) {
            if (a === f) a = b;
            return a
        }

        j.td = Eb;
        j.Ud = v;
        j.Ng = xb;
        j.Og = qb;
        j.Rg = I;
        nb("transform");
        j.rd = function () {
            return n
        };
        j.Tg = function () {
            u();
            return A
        };
        j.V = jb;
        j.W = gb;
        j.jb = function (a, b) {
            b.call(a);
            return z({}, a)
        };

        function U(a) {
            a.constructor === U.caller && a.C && a.C.apply(a, U.caller.arguments)
        }

        j.C = U;
        j.jc = function (a) {
            if (j.Ug(a)) a = i.getElementById(a);
            return a
        };

        function t(a) {
            return a || h.event
        }

        j.Vg = t;
        j.Mb = function (b) {
            b = t(b);
            var a = b.target || b.srcElement || i;
            if (a.nodeType == 3) a = j.md(a);
            return a
        };
        j.Bd = function (a) {
            a = t(a);
            return a.relatedTarget || a.toElement
        };
        j.de = function (a) {
            a = t(a);
            return a.which || ([0, 1, 3, 0, 2])[a.button] || a.charCode || a.keyCode
        };
        j.ud = function (a) {
            a = t(a);
            return {x: a.clientX || 0, y: a.clientY || 0}
        };
        j.Wg = function (b, a) {
            return b.x >= a.x && b.x <= a.x + a.w && b.y >= a.y && b.y <= a.y + a.h
        };
        j.ze = function (c, e) {
            var a = b.Xg(e), d = b.ud(c);
            return j.Wg(d, a)
        };

        function w(c, d, a) {
            if (a !== f) c.style[d] = a == f ? "" : a; else {
                var b = c.currentStyle || c.style;
                a = b[d];
                if (a == "" && h.getComputedStyle) {
                    b = c.ownerDocument.defaultView.getComputedStyle(c, g);
                    b && (a = b.getPropertyValue(d) || b[d])
                }
                return a
            }
        }

        function X(b, c, a, d) {
            if (a === f) {
                a = q(w(b, c));
                isNaN(a) && (a = g);
                return a
            }
            if (a == g) a = ""; else d && (a += "px");
            w(b, c, a)
        }

        function m(c, a) {
            var d = a ? X : w, b;
            if (a & 4) b = lb(c);
            return function (e, f) {
                return d(e, b ? b(e) : c, f, a & 2)
            }
        }

        function zb(a) {
            return q(a.style.opacity || "1")
        }

        function Bb(b, a) {
            b.style.opacity = a == 1 ? "" : c.F(a * 100) / 100
        }

        var N = {Y: ["rotate"], rb: ["rotateX"], Ab: ["rotateY"], qc: ["skewX"], rc: ["skewY"]};
        if (!I()) N = z(N, {hb: ["scaleX", 2], fb: ["scaleY", 2], Bb: ["translateZ", 1]});

        function M(c, a) {
            var b = "";
            if (a) {
                if (v() && n && n < 10) {
                    delete a.rb;
                    delete a.Ab;
                    delete a.Bb
                }
                l(a, function (d, c) {
                    var a = N[c];
                    if (a) {
                        var e = a[1] || 0;
                        if (O[c] != d) b += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
                    }
                });
                if (I()) {
                    if (a.Jb || a.Lb || a.Bb != f) b += " translate3d(" + (a.Jb || 0) + "px," + (a.Lb || 0) + "px," + (a.Bb || 0) + "px)";
                    if (a.hb == f) a.hb = 1;
                    if (a.fb == f) a.fb = 1;
                    if (a.hb != 1 || a.fb != 1) b += " scale3d(" + a.hb + ", " + a.fb + ", 1)"
                }
            }
            c.style[L(c)] = b
        }

        j.ah = m("transformOrigin", 4);
        j.bh = m("backfaceVisibility", 4);
        m("transformStyle", 4);
        j.Fg = m("perspective", 6);
        j.dh = m("perspectiveOrigin", 4);
        j.Eg = function (b, a) {
            if (v() && n < 9) b.style.zoom = a == 1 ? "" : a; else {
                var c = L(b), f = a == 1 ? "" : "scale(" + a + ")", e = b.style[c],
                    g = new RegExp(/[\s]*scale\(.*?\)/g), d = ab(e, [g], f);
                b.style[c] = d
            }
        };
        j.yb = function (a, d, b, c) {
            a = j.jc(a);
            if (a.addEventListener) {
                d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                a.addEventListener(d, b, c)
            } else if (a.attachEvent) {
                a.attachEvent("on" + d, b);
                c && a.setCapture && a.setCapture()
            }
        };
        j.Rb = function (a, c, d, b) {
            a = j.jc(a);
            if (a.removeEventListener) {
                c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b)
            } else if (a.detachEvent) {
                a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture()
            }
        };
        j.kc = function (a) {
            a = t(a);
            a.preventDefault && a.preventDefault();
            a.cancel = e;
            a.returnValue = k
        };
        j.hg = function (a) {
            a = t(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = e
        };
        j.ob = function (d, c) {
            var a = [].slice.call(arguments, 2), b = function () {
                var b = a.concat([].slice.call(arguments, 0));
                return c.apply(d, b)
            };
            return b
        };
        j.Xg = function (b) {
            var a = b.getBoundingClientRect();
            return {x: a.left, y: a.top, w: a.right - a.left, h: a.bottom - a.top}
        };
        j.Hb = function (d, c) {
            for (var b = [], a = d.firstChild; a; a = a.nextSibling) (c || a.nodeType == 1) && b.push(a);
            return b
        };

        function db(a, c, e, b) {
            b = b || "u";
            for (a = a ? a.firstChild : g; a; a = a.nextSibling) if (a.nodeType == 1) {
                if (C(a, b) == c) return a;
                if (!e) {
                    var d = db(a, c, e, b);
                    if (d) return d
                }
            }
        }

        j.tc = db;

        function S(a, d, f, b) {
            b = b || "u";
            var c = [];
            for (a = a ? a.firstChild : g; a; a = a.nextSibling) if (a.nodeType == 1) {
                C(a, b) == d && c.push(a);
                if (!f) {
                    var e = S(a, d, f, b);
                    if (e.length) c = c.concat(e)
                }
            }
            return c
        }

        j.mg = function (b, a) {
            return b.getElementsByTagName(a)
        };
        j.sb = function (a, f, d, g) {
            d = d || "u";
            var e;
            do {
                if (a.nodeType == 1) {
                    var c;
                    d && (c = C(a, d));
                    if (c && c == gb(f, c) || g == a.tagName) {
                        e = a;
                        break
                    }
                }
                a = b.md(a)
            } while (a && a != i.body);
            return e
        };
        j.ng = function (a) {
            return W(["INPUT", "TEXTAREA", "SELECT"])[a.tagName]
        };

        function z() {
            var e = arguments, d, c, b, a, h = 1 & e[0], g = 1 + h;
            d = e[g - 1] || {};
            for (; g < e.length; g++) if (c = e[g]) for (b in c) {
                a = c[b];
                if (a !== f) {
                    a = c[b];
                    var i = d[b];
                    d[b] = h && (B(i) || B(a)) ? z(h, {}, i, a) : a
                }
            }
            return d
        }

        j.Q = z;

        function V(f, g) {
            var d = {}, c, a, b;
            for (c in f) {
                a = f[c];
                b = g[c];
                if (a !== b) {
                    var e;
                    if (B(a) && B(b)) {
                        a = V(a, b);
                        e = !cb(a)
                    }
                    !e && (d[c] = a)
                }
            }
            return d
        }

        j.he = function (a) {
            return E(a) == "function"
        };
        j.og = function (a) {
            return E(a) == "array"
        };
        j.Ug = function (a) {
            return E(a) == "string"
        };
        j.sc = function (a) {
            return !isNaN(q(a)) && isFinite(a)
        };
        j.j = l;
        j.ae = B;

        function Q(a) {
            return i.createElement(a)
        }

        j.Vb = function () {
            return Q("DIV")
        };
        j.sg = function () {
        };

        function D(b, c, a) {
            if (a == f) return b.getAttribute(c);
            b.setAttribute(c, a)
        }

        function C(a, b) {
            return D(a, b) || D(a, "data-" + b)
        }

        j.u = D;
        j.db = C;
        j.z = function (d, b, c) {
            var a = j.tg(C(d, b));
            if (isNaN(a)) a = c;
            return a
        };

        function x(b, a) {
            return D(b, "class", a) || ""
        }

        function W(b) {
            var a = {};
            l(b, function (b) {
                if (b != f) a[b] = b
            });
            return a
        }

        function kb(b, a) {
            return b.match(a || vb)
        }

        function P(b, a) {
            return W(kb(b || "", a))
        }

        j.te = W;
        j.eh = kb;
        j.ug = function (a) {
            a && (a = a.toLowerCase());
            return a
        };

        function Y(b, c) {
            var a = "";
            l(c, function (c) {
                a && (a += b);
                a += c
            });
            return a
        }

        function J(a, c, b) {
            x(a, Y(" ", z(V(P(x(a)), P(c)), P(b))))
        }

        j.md = function (a) {
            return a.parentNode
        };
        j.Kb = function (a) {
            j.Db(a, "none")
        };
        j.qb = function (a, b) {
            j.Db(a, b ? "none" : "")
        };
        j.wg = function (b, a) {
            b.removeAttribute(a)
        };
        j.xg = function (d, a) {
            if (a) d.style.clip = "rect(" + c.F(a.f || a.R || 0) + "px " + c.F(a.B) + "px " + c.F(a.A) + "px " + c.F(a.c || a.P || 0) + "px)"; else if (a !== f) {
                var h = d.style.cssText,
                    g = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                    e = ab(h, g, "");
                b.Hd(d, e)
            }
        };
        j.yg = function (b, a) {
            if (a) b.style.backgroundColor = "rgba(" + c.F(a.Jd) + "," + c.F(a.Kd) + "," + c.F(a.Dd) + "," + a.a + ")"
        };
        j.Pb = function () {
            return +new Date
        };
        j.lb = function (b, a) {
            b.appendChild(a)
        };
        j.zg = function (b, a) {
            l(a, function (a) {
                j.lb(b, a)
            })
        };
        j.Yb = function (b, a, c) {
            (c || a.parentNode).insertBefore(b, a)
        };
        j.Nb = function (b, a) {
            a = a || b.parentNode;
            a && a.removeChild(b)
        };
        j.Ag = function (a, b) {
            l(a, function (a) {
                j.Nb(a, b)
            })
        };
        j.Pc = function (a) {
            j.Ag(j.Hb(a, e), a)
        };

        function hb() {
            l([].slice.call(arguments, 0), function (a) {
                if (j.og(a)) hb.apply(g, a); else a && a.s()
            })
        }

        j.s = hb;
        j.cd = function (a, b) {
            var c = j.md(a);
            if (b & 1) {
                j.bb(a, (j.I(c) - j.I(a)) / 2);
                j.Wd(a, g)
            }
            if (b & 2) {
                j.gb(a, (j.N(c) - j.N(a)) / 2);
                j.Zd(a, g)
            }
        };
        var R = {f: g, B: g, A: g, c: g, L: g, J: g};
        j.Bg = function (a) {
            var b = j.Vb();
            s(b, {Xd: "block", Ub: j.Gb(a), f: 0, c: 0, L: 0, J: 0});
            var d = j.Id(a, R);
            j.Yb(b, a);
            j.lb(b, a);
            var e = j.Id(a, R), c = {};
            l(d, function (b, a) {
                if (b == e[a]) c[a] = b
            });
            s(b, R);
            s(b, c);
            s(a, {f: 0, c: 0});
            return c
        };
        j.tg = q;
        j.we = function (b, a) {
            var c = i.body;
            while (a && b !== a && c !== a) a = a.parentNode;
            return b === a
        };

        function T(d, c, b) {
            var a = d.cloneNode(!c);
            !b && j.wg(a, "id");
            return a
        }

        j.ib = T;
        j.Ob = function (d, f) {
            var a = new Image;

            function b(e, d) {
                j.Rb(a, "load", b);
                j.Rb(a, "abort", c);
                j.Rb(a, "error", c);
                f && f(a, d)
            }

            function c(a) {
                b(a, e)
            }

            if (ub() && n < 11.6 || !d) b(!d); else {
                j.yb(a, "load", b);
                j.yb(a, "abort", c);
                j.yb(a, "error", c);
                a.src = d
            }
        };
        j.df = function (e, a, d) {
            var b = 1;

            function c(c) {
                b--;
                if (a && c && c.src == a.src) a = c;
                !b && d && d(a)
            }

            l(e, function (a) {
                if (a.src) {
                    b++;
                    j.Ob(a.src, c)
                }
            });
            c()
        };
        j.eg = function (a, g, i, h) {
            if (h) a = T(a);
            var c = S(a, g);
            if (!c.length) c = b.mg(a, g);
            for (var f = c.length - 1; f > -1; f--) {
                var d = c[f], e = T(i);
                x(e, x(d));
                b.Hd(e, d.style.cssText);
                b.Yb(e, d);
                b.Nb(d)
            }
            return a
        };

        function Cb() {
            var a = this;
            b.jb(a, o);
            var d, q = "", s = ["av", "pv", "ds", "dn"], e = [], r, n = 0, k = 0, g = 0;

            function m() {
                J(d, r, (e[g || k & 2 || k] || "") + " " + (e[n] || ""));
                j.Bc(d, g ? "none" : "")
            }

            function c() {
                n = 0;
                a.X(h, "mouseup", c);
                a.X(i, "mouseup", c);
                a.X(i, "touchend", c);
                a.X(i, "touchcancel", c);
                a.X(h, "blur", c);
                m()
            }

            function p(b) {
                if (g) j.kc(b); else {
                    n = 4;
                    m();
                    a.i(h, "mouseup", c);
                    a.i(i, "mouseup", c);
                    a.i(i, "touchend", c);
                    a.i(i, "touchcancel", c);
                    a.i(h, "blur", c)
                }
            }

            a.He = function (a) {
                if (a === f) return k;
                k = a & 2 || a & 1;
                m()
            };
            a.Oc = function (a) {
                if (a === f) return !g;
                g = a ? 0 : 3;
                m()
            };
            a.C = function (f) {
                a.cb = d = j.jc(f);
                D(d, "data-jssor-button", "1");
                var c = b.eh(x(d));
                if (c) q = c.shift();
                l(s, function (a) {
                    e.push(q + a)
                });
                r = Y(" ", e);
                e.unshift("");
                a.i(d, "mousedown", p);
                a.i(d, "touchstart", p)
            };
            b.C(a)
        }

        j.ed = function (a) {
            return new Cb(a)
        };
        j.ac = w;
        j.Zb = m("overflow");
        j.Bc = m("pointerEvents");
        j.gb = m("top", 2);
        j.Wd = m("right", 2);
        j.Zd = m("bottom", 2);
        j.bb = m("left", 2);
        j.I = m("width", 2);
        j.N = m("height", 2);
        m("marginLeft", 2);
        m("marginTop", 2);
        j.Gb = m("position");
        j.Db = m("display");
        j.Z = m("zIndex", 1);
        j.Se = function (b, a, c) {
            if (a != f) Bb(b, a, c); else return zb(b)
        };
        j.Hd = function (a, b) {
            if (b != f) a.style.cssText = b; else return a.style.cssText
        };
        j.Ue = function (b, a) {
            if (a === f) {
                a = w(b, "backgroundImage") || "";
                var c = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a) || [];
                return c[1]
            }
            w(b, "backgroundImage", a ? "url('" + a + "')" : "")
        };
        var K;
        j.Ve = K = {a: j.Se, f: j.gb, B: j.Wd, A: j.Zd, c: j.bb, L: j.I, J: j.N, Ub: j.Gb, Xd: j.Db, pb: j.Z};
        j.Id = function (c, b) {
            var a = {};
            l(b, function (d, b) {
                if (K[b]) a[b] = K[b](c)
            });
            return a
        };

        function s(b, h) {
            var a = I(), d = mb(), e = L(b);

            function c(l, a) {
                a = a || {};
                var h = a.Bb || 0, i = (a.rb || 0) % 360, j = (a.Ab || 0) % 360, k = (a.Y || 0) % 360, c = a.hb,
                    d = a.fb, g = a.mh;
                if (c == f) c = 1;
                if (d == f) d = 1;
                if (g == f) g = 1;
                var b = new yb(a.Jb, a.Lb, h);
                b.Hc(c, d, g);
                b.Ze(a.qc, a.rc);
                b.rb(i);
                b.Ab(j);
                b.af(k);
                b.Wb(a.P, a.R);
                l.style[e] = b.Ce()
            }

            s = function (e, b) {
                b = b || {};
                var i = b.P, k = b.R, h;
                l(K, function (a, c) {
                    h = b[c];
                    h !== f && a(e, h)
                });
                j.xg(e, b.g);
                j.yg(e, b.Ib);
                if (!a) {
                    i != f && j.bb(e, (b.ue || 0) + i);
                    k != f && j.gb(e, (b.Rd || 0) + k)
                }
                if (b.De) if (d) jb(j.ob(g, M, e, b)); else if (a) c(e, b); else M(e, b)
            };
            j.ab = s;
            s(b, h)
        }

        j.Fe = M;
        j.ab = s;

        function yb(j, k, n) {
            var d = this, b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, j || 0, k || 0, n || 0, 1], i = c.Eb, h = c.Ec,
                l = c.Sd;

            function f(a) {
                return a * c.T / 180
            }

            function m(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) {
                return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j]
            }

            function e(c, a) {
                return m.apply(g, (a || b).concat(c))
            }

            d.Hc = function (a, c, d) {
                if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
            };
            d.Wb = function (a, c, d) {
                b[12] += a || 0;
                b[13] += c || 0;
                b[14] += d || 0
            };
            d.rb = function (c) {
                if (c) {
                    a = f(c);
                    var d = h(a), g = i(a);
                    b = e([1, 0, 0, 0, 0, d, g, 0, 0, -g, d, 0, 0, 0, 0, 1])
                }
            };
            d.Ab = function (c) {
                if (c) {
                    a = f(c);
                    var d = h(a), g = i(a);
                    b = e([d, 0, -g, 0, 0, 1, 0, 0, g, 0, d, 0, 0, 0, 0, 1])
                }
            };
            d.af = function (c) {
                if (c) {
                    a = f(c);
                    var d = h(a), g = i(a);
                    b = e([d, g, 0, 0, -g, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.Ze = function (a, c) {
                if (a || c) {
                    j = f(a);
                    k = f(c);
                    b = e([1, l(k), 0, 0, l(j), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.Ce = function () {
                return "matrix3d(" + b.join(",") + ")"
            }
        }

        var O = {ue: 0, Rd: 0, P: 0, R: 0, mb: 1, hb: 1, fb: 1, Y: 0, rb: 0, Ab: 0, Jb: 0, Lb: 0, Bb: 0, qc: 0, rc: 0};
        j.od = function (c, d) {
            var a = c || {};
            if (c) if (b.he(c)) a = {W: a}; else if (b.he(c.g)) a.g = {W: c.g};
            a.W = a.W || d;
            if (a.g) a.g.W = a.g.W || d;
            if (a.Ib) a.Ib.W = a.Ib.W || d;
            return a
        };

        function ib(c, a) {
            var b = {};
            l(c, function (c, d) {
                var e = c;
                if (a[d] != f) if (j.sc(c)) e = c + a[d]; else e = ib(c, a[d]);
                b[d] = e
            });
            return b
        }

        j.Qe = ib;
        j.se = function (o, j, s, t, E, F, p) {
            var a = j;
            if (o) {
                a = {};
                for (var i in j) {
                    var G = F[i] || 1, B = E[i] || [0, 1], h = (s - B[0]) / B[1];
                    h = c.p(c.v(h, 0), 1);
                    h = h * G;
                    var y = c.kb(h);
                    if (h != y) h -= y;
                    var k = t.W || d.l, m, C = o[i], r = j[i];
                    if (b.sc(r)) {
                        k = t[i] || k;
                        var D = k(h);
                        m = C + r * D
                    } else {
                        m = z({xc: {}}, o[i]);
                        var A = t[i] || {};
                        l(r.xc || r, function (d, a) {
                            k = A[a] || A.W || k;
                            var c = k(h), b = d * c;
                            m.xc[a] = b;
                            m[a] += b
                        })
                    }
                    a[i] = m
                }
                var x = l(j, function (b, a) {
                    return O[a] != f
                });
                x && l(O, function (c, b) {
                    if (a[b] == f && o[b] !== f) a[b] = o[b]
                });
                if (x) {
                    if (a.mb) a.hb = a.fb = a.mb;
                    a.bc = p.bc;
                    a.Sb = p.Sb;
                    if (v() && n >= 11 && (j.P || j.R) && s != 0 && s != 1) a.Y = a.Y || 1e-8;
                    a.De = e
                }
            }
            if (j.g && p.Wb) {
                var q = a.g.xc, w = (q.f || 0) + (q.A || 0), u = (q.c || 0) + (q.B || 0);
                a.c = (a.c || 0) + u;
                a.f = (a.f || 0) + w;
                a.g.c -= u;
                a.g.B -= u;
                a.g.f -= w;
                a.g.A -= w
            }
            if (a.g && !a.g.f && !a.g.c && !a.g.R && !a.g.P && a.g.B == p.bc && a.g.A == p.Sb) a.g = g;
            return a
        }
    };

    function o() {
        var a = this, f, d = [], c = [];

        function k(a, b) {
            d.push({Tb: a, Xb: b})
        }

        function j(a, c) {
            b.j(d, function (b, e) {
                b.Tb == a && b.Xb === c && d.splice(e, 1)
            })
        }

        function i() {
            d = []
        }

        function g() {
            b.j(c, function (a) {
                b.Rb(a.ce, a.Tb, a.Xb, a.Td)
            });
            c = []
        }

        a.sd = function () {
            return f
        };
        a.i = function (e, a, d, f) {
            b.yb(e, a, d, f);
            c.push({ce: e, Tb: a, Xb: d, Td: f})
        };
        a.X = function (e, a, d, f) {
            b.j(c, function (g, h) {
                if (g.ce === e && g.Tb == a && g.Xb === d && g.Td == f) {
                    b.Rb(e, a, d, f);
                    c.splice(h, 1)
                }
            })
        };
        a.Ke = g;
        a.vd = a.addEventListener = k;
        a.removeEventListener = j;
        a.o = function (a) {
            var c = [].slice.call(arguments, 1);
            b.j(d, function (b) {
                b.Tb == a && b.Xb.apply(h, c)
            })
        };
        a.s = function () {
            if (!f) {
                f = e;
                g();
                i()
            }
        }
    }

    var l = function (C, D, i, m, R, Q) {
        C = C || 0;
        var a = this, p, n, o, s, F = 0, O = 1, L, M, K, G, B = 0, j = 0, r = 0, A, l, d, g, q, z, u = [], y, I = k, J,
            H = k;

        function T(a) {
            d += a;
            g += a;
            l += a;
            j += a;
            r += a;
            B += a
        }

        function x(C) {
            var k = C;
            if (q) if (!z && (k >= g || k < d) || z && k >= d) k = ((k - d) % q + q) % q + d;
            if (!A || s || j != k) {
                var h = c.p(k, g);
                h = c.v(h, d);
                if (i.zc) h = g - h + d;
                if (!A || s || h != r) {
                    if (Q) {
                        var x = (h - l) / (D || 1), o = b.se(R, Q, x, L, K, M, i);
                        if (y) b.j(o, function (b, a) {
                            y[a] && y[a](m, b)
                        }); else b.ab(m, o);
                        var n;
                        if (J) {
                            var p = h > d && h < g;
                            if (p != H) n = H = p
                        }
                        if (!n && o.a != f) {
                            var t = o.a < .001;
                            if (t != I) n = I = t
                        }
                        if (n != f) {
                            n && b.Bc(m, "none");
                            !n && b.Bc(m, b.u(m, "data-events"))
                        }
                    }
                    var w = r, v = r = h;
                    b.j(u, function (b, c) {
                        var a = !A && z || k <= j ? u[u.length - c - 1] : b;
                        a.S(h - B)
                    });
                    j = k;
                    A = e;
                    a.jd(w - l, v - l);
                    a.dc(w, v)
                }
            }
        }

        function E(a, b, e) {
            b && a.gc(g);
            if (!e) {
                d = c.p(d, a.Dc() + B);
                g = c.v(g, a.tb() + B)
            }
            u.push(a)
        }

        var v = h.requestAnimationFrame || h.webkitRequestAnimationFrame || h.mozRequestAnimationFrame || h.msRequestAnimationFrame;
        if (b.Og() && b.rd() < 7 || !v) v = function (a) {
            b.V(a, i.vb)
        };

        function N() {
            if (p) {
                var d = b.Pb(), e = c.p(d - F, i.Cd), a = j + e * o * O;
                F = d;
                if (a * o >= n * o) a = n;
                x(a);
                if (!s && a * o >= n * o) P(G); else v(N)
            }
        }

        function w(f, h, i) {
            if (!p) {
                p = e;
                s = i;
                G = h;
                f = c.v(f, d);
                f = c.p(f, g);
                n = f;
                o = n < j ? -1 : 1;
                a.pd();
                F = b.Pb();
                v(N)
            }
        }

        function P(b) {
            if (p) {
                s = p = G = k;
                a.nd();
                b && b()
            }
        }

        a.Ld = function (a, b, c) {
            w(a ? j + a : g, b, c)
        };
        a.ic = w;
        a.Re = function (a, b) {
            w(g, a, b)
        };
        a.O = P;
        a.ie = function () {
            return j
        };
        a.fe = function () {
            return n
        };
        a.q = function () {
            return r
        };
        a.S = x;
        a.bf = function () {
            x(g, e)
        };
        a.Rc = function () {
            return p
        };
        a.pe = function (a) {
            O = a
        };
        a.gc = T;
        a.U = function (a, b) {
            E(a, 0, b)
        };
        a.kd = function (a) {
            E(a, 1)
        };
        a.Jc = function (a) {
            g += a
        };
        a.Dc = function () {
            return d
        };
        a.tb = function () {
            return g
        };
        a.dc = a.pd = a.nd = a.jd = b.sg;
        a.Tc = b.Pb();
        i = b.Q({vb: 16, Cd: 50}, i);
        m && (J = b.u(m, "data-inactive"));
        q = i.nc;
        z = i.Me;
        y = i.Ye;
        d = l = C;
        g = C + D;
        M = i.F || {};
        K = i.K || {};
        L = b.od(i.k)
    };
    var n = {Pe: "data-scale", cc: "data-autocenter", Sc: "data-nofreeze", Nd: "data-nodrag"}, q = new function () {
        var a = this;
        a.gd = function (c, a, e, d) {
            (d || !b.u(c, a)) && b.u(c, a, e)
        };
        a.fd = function (a) {
            var c = b.z(a, n.cc);
            b.cd(a, c)
        }
    }, s = new function () {
        var h = this;

        function g(b, a, c) {
            c.push(a);
            b[a] = b[a] || [];
            b[a].push(c)
        }

        h.Oe = function (d) {
            for (var e = [], a, b = 0; b < d.H; b++) for (a = 0; a < d.G; a++) g(e, c.eb(1e5 * c.Qd()) % 13, [b, a]);
            return e
        }
    }, u = function (m, r, p, u, z, A) {
        var a = this, v, h, f, y = 0, x = u.cf, q, i = 8;

        function t(a) {
            if (a.f) a.R = a.f;
            if (a.c) a.P = a.c;
            b.j(a, function (a) {
                b.ae(a) && t(a)
            })
        }

        function j(h, f, g) {
            var a = {
                vb: f,
                m: 1,
                V: 0,
                G: 1,
                H: 1,
                a: 0,
                mb: 0,
                g: 0,
                Wb: k,
                E: k,
                zc: k,
                kg: s.Oe,
                M: {ub: 0, wb: 0},
                k: d.l,
                F: {},
                lc: [],
                K: {}
            };
            b.Q(a, h);
            if (a.H == 0) a.H = c.F(a.G * g);
            t(a);
            a.k = b.od(a.k, d.l);
            a.uf = c.eb(a.m / a.vb);
            a.tf = function (c, b) {
                c /= a.G;
                b /= a.H;
                var f = c + "x" + b;
                if (!a.lc[f]) {
                    a.lc[f] = {L: c, J: b};
                    for (var d = 0; d < a.G; d++) for (var e = 0; e < a.H; e++) a.lc[f][e + "," + d] = {
                        f: e * b,
                        B: d * c + c,
                        A: e * b + b,
                        c: d * c
                    }
                }
                return a.lc[f]
            };
            if (a.qd) {
                a.qd = j(a.qd, f, g);
                a.E = e
            }
            return a
        }

        function n(z, i, a, v, n, l) {
            var y = this, t, u = {}, h = {}, m = [], f, d, r, p = a.M.ub || 0, q = a.M.wb || 0, g = a.tf(n, l),
                o = B(a), C = o.length - 1, s = a.m + a.V * C, w = v + s, j = a.E, x;
            w += 50;

            function B(a) {
                var b = a.kg(a);
                return a.zc ? b.reverse() : b
            }

            y.qe = w;
            y.oc = function (d) {
                d -= v;
                var e = d < s;
                if (e || x) {
                    x = e;
                    if (!j) d = s - d;
                    var f = c.eb(d / a.vb);
                    b.j(h, function (a, e) {
                        var d = c.v(f, a.p);
                        d = c.p(d, a.length - 1);
                        if (a.je != d) {
                            if (!a.je && !j) b.qb(m[e]); else d == a.v && j && b.Kb(m[e]);
                            a.je = d;
                            b.ab(m[e], a[d])
                        }
                    })
                }
            };
            i = b.ib(i);
            A(i, 0, 0);
            b.j(o, function (i, m) {
                b.j(i, function (G) {
                    var I = G[0], H = G[1], v = I + "," + H, o = k, s = k, x = k;
                    if (p && H % 2) {
                        if (p & 3) o = !o;
                        if (p & 12) s = !s;
                        if (p & 16) x = !x
                    }
                    if (q && I % 2) {
                        if (q & 3) o = !o;
                        if (q & 12) s = !s;
                        if (q & 16) x = !x
                    }
                    a.f = a.f || a.g & 4;
                    a.A = a.A || a.g & 8;
                    a.c = a.c || a.g & 1;
                    a.B = a.B || a.g & 2;
                    var E = s ? a.A : a.f, B = s ? a.f : a.A, D = o ? a.B : a.c, C = o ? a.c : a.B;
                    a.g = E || B || D || C;
                    r = {};
                    d = {R: 0, P: 0, a: 1, L: n, J: l};
                    f = b.Q({}, d);
                    t = b.Q({}, g[v]);
                    if (a.a) d.a = 2 - a.a;
                    if (a.pb) {
                        d.pb = a.pb;
                        f.pb = 0
                    }
                    var K = a.G * a.H > 1 || a.g;
                    if (a.mb || a.Y) {
                        var J = e;
                        if (J) {
                            d.mb = a.mb ? a.mb - 1 : 1;
                            f.mb = 1;
                            var N = a.Y || 0;
                            d.Y = N * 360 * (x ? -1 : 1);
                            f.Y = 0
                        }
                    }
                    if (K) {
                        var i = t.xc = {};
                        if (a.g) {
                            var w = a.nh || 1;
                            if (E && B) {
                                i.f = g.J / 2 * w;
                                i.A = -i.f
                            } else if (E) i.A = -g.J * w; else if (B) i.f = g.J * w;
                            if (D && C) {
                                i.c = g.L / 2 * w;
                                i.B = -i.c
                            } else if (D) i.B = -g.L * w; else if (C) i.c = g.L * w
                        }
                        r.g = t;
                        f.g = g[v]
                    }
                    var L = o ? 1 : -1, M = s ? 1 : -1;
                    if (a.x) d.P += n * a.x * L;
                    if (a.y) d.R += l * a.y * M;
                    b.j(d, function (a, c) {
                        if (b.sc(a)) if (a != f[c]) r[c] = a - f[c]
                    });
                    u[v] = j ? f : d;
                    var F = a.uf, A = c.F(m * a.V / a.vb);
                    h[v] = new Array(A);
                    h[v].p = A;
                    h[v].v = A + F - 1;
                    for (var z = 0; z <= F; z++) {
                        var y = b.se(f, r, z / F, a.k, a.K, a.F, {Wb: a.Wb, bc: n, Sb: l});
                        y.pb = y.pb || 1;
                        h[v].push(y)
                    }
                })
            });
            o.reverse();
            b.j(o, function (a) {
                b.j(a, function (c) {
                    var f = c[0], e = c[1], d = f + "," + e, a = i;
                    if (e || f) a = b.ib(i);
                    b.ab(a, u[d]);
                    b.Zb(a, "hidden");
                    b.Gb(a, "absolute");
                    z.rf(a);
                    m[d] = a;
                    b.qb(a, !j)
                })
            })
        }

        function w() {
            var a = this, b = 0;
            l.call(a, 0, v);
            a.dc = function (c, a) {
                if (a - b > i) {
                    b = a;
                    f && f.oc(a);
                    h && h.oc(a)
                }
            };
            a.wd = q
        }

        a.of = function () {
            var a = 0, b = u.yc, d = b.length;
            if (x) a = y++ % d; else a = c.kb(c.Qd() * d);
            b[a] && (b[a].ec = a);
            return b[a]
        };
        a.Mf = function (x, y, k, l, b, t) {
            a.Fb();
            q = b;
            b = j(b, i, t);
            var g = l.Vd, e = k.Vd;
            g["no-image"] = !l.id;
            e["no-image"] = !k.id;
            var o = g, s = e, w = b, d = b.qd || j({}, i, t);
            if (!b.E) {
                o = e;
                s = g
            }
            var u = d.gc || 0;
            h = new n(m, s, d, c.v(u - d.vb, 0), r, p);
            f = new n(m, o, w, c.v(d.vb - u, 0), r, p);
            h.oc(0);
            f.oc(0);
            v = c.v(h.qe, f.qe);
            a.ec = x
        };
        a.Fb = function () {
            m.Fb();
            h = g;
            f = g
        };
        a.Hf = function () {
            var a = g;
            if (f) a = new w;
            return a
        };
        if (z && b.Tg() < 537) i = 16;
        o.call(a);
        l.call(a, -1e7, 1e7)
    }, r = {Yc: 1};
    var v = function () {
        var a = this, v = b.jb(a, o), d, c, f, l, s, k, h, m, j, i;

        function p(b) {
            a.o(r.Yc, b, e)
        }

        function u(a) {
            b.qb(d, a);
            b.qb(c, a)
        }

        function t() {
            j.Oc((f.hc || !l.Je(h)) && k > 1);
            i.Oc((f.hc || !l.Te(h)) && k > 1)
        }

        a.Xc = function (c, a, b) {
            h = a;
            !b && t()
        };
        a.ad = u;
        a.Nc = function (f) {
            k = f;
            h = 0;
            if (!s) {
                a.i(d, "click", b.ob(g, p, -m));
                a.i(c, "click", b.ob(g, p, m));
                j = b.ed(d);
                i = b.ed(c);
                b.u(d, n.Sc, 1);
                b.u(c, n.Sc, 1);
                s = e
            }
        };
        a.C = function (g, e, h, i) {
            a.Ic = f = b.Q({Ie: 1}, h);
            d = g;
            c = e;
            if (f.wc) {
                d = e;
                c = g
            }
            m = f.Ie;
            l = i;
            if (f.xb) {
                q.gd(d, n.cc, f.xb);
                q.gd(c, n.cc, f.xb)
            }
            q.fd(d);
            q.fd(c)
        };
        a.s = function () {
            b.s(j, i, v)
        };
        b.C(a)
    }, t = function () {
        var i = this, E = b.jb(i, o), h, B, a, y, C, m, l = [], A, z, d, p, s, w, v, x, t, u;

        function D() {
            var c = this;
            b.jb(c, o);
            var h, f, n, l;

            function p() {
                n.He(m == h)
            }

            function j(f) {
                if (f || !t.We()) {
                    var c = d - h % d, a = t.ge((h + c) / d - 1), b = a * d + d - c;
                    if (a < 0) b += y % d;
                    if (a >= C) b -= y % d;
                    i.o(r.Yc, b, k, e)
                }
            }

            c.ee = p;
            c.C = function (d, i) {
                c.ec = h = i;
                l = d.Ge || d.id || b.Vb();
                c.Qc = f = b.eg(u, "thumbnailtemplate", l, e);
                n = b.ed(f);
                a.ld & 1 && c.i(f, "click", b.ob(g, j, 0));
                a.ld & 2 && c.i(f, "mouseenter", b.ob(g, j, 1))
            };
            b.C(c)
        }

        i.Xc = function (a, f, e) {
            if (a != m) {
                var b = m;
                m = a;
                b != -1 && l[b].ee();
                l[a] && l[a].ee()
            }
            !e && t.Ae(t.ge(c.kb(a / d)))
        };
        i.ad = function (a) {
            b.qb(h, a)
        };
        i.Nc = function (G, H) {
            b.s(t, l);
            m = f;
            l = [];
            var I = b.ib(B);
            b.Pc(h);
            a.wc && b.u(h, "dir", "rtl");
            b.zg(h, b.Hb(I));
            var i = b.tc(h, "slides", e);
            y = G;
            C = c.eb(y / d);
            m = -1;
            var g = a.Fc & 1, r = w + (w + p) * (d - 1) * (1 - g), o = v + (v + s) * (d - 1) * g,
                E = (g ? c.v : c.p)(A, r), u = (g ? c.p : c.v)(z, o);
            x = c.eb((A - p) / (w + p) * g + (z - s) / (v + s) * (1 - g));
            var K = r + (r + p) * (x - 1) * g, J = o + (o + s) * (x - 1) * (1 - g);
            E = c.p(E, K);
            u = c.p(u, J);
            b.I(i, E);
            b.N(i, u);
            b.cd(i, 3);
            var n = [];
            b.j(H, function (k, f) {
                var h = new D(k, f), e = h.Qc, a = c.kb(f / d), j = f % d;
                b.bb(e, (w + p) * j * (1 - g));
                b.gb(e, (v + s) * j * g);
                if (!n[a]) {
                    n[a] = b.Vb();
                    b.lb(i, n[a])
                }
                b.lb(n[a], e);
                l.push(h)
            });
            var F = b.Q({
                fc: 0,
                Ad: k,
                Ee: r,
                Be: o,
                me: p * g + s * (1 - g),
                oe: 12,
                ke: 200,
                xe: 1,
                G: x,
                ve: a.Fc,
                Vc: a.Xe || a.lh ? 0 : a.Fc
            }, a);
            t = new j(h, F);
            q.fd(h)
        };
        i.C = function (j, g, f) {
            h = j;
            i.Ic = a = b.Q({Kc: 0, Gc: 0, Fc: 1, ld: 1}, g);
            A = b.I(h);
            z = b.N(h);
            var c = b.tc(h, "slides", e);
            u = b.tc(c, "prototype");
            f = b.ib(f);
            b.Yb(f, c);
            w = b.I(u);
            v = b.N(u);
            b.Nb(u, c);
            b.Gb(c, "absolute");
            b.Zb(c, "hidden");
            d = a.H || 1;
            p = a.Kc;
            s = a.Gc;
            a.xb &= a.Fc;
            a.xb && q.gd(h, n.cc, a.xb);
            B = b.ib(h)
        };
        i.s = function () {
            b.s(t, l, E)
        };
        b.C(i)
    };

    function p(e, d, c) {
        var a = this;
        b.jb(a, o);
        l.call(a, 0, c.Qb);
        a.pc = 0;
        a.dd = c.Qb
    }

    p.bd = 21;
    p.mc = 24;
    var w = function () {
        var a = this, hb = b.jb(a, o);
        l.call(a, 0, 0);
        var f, s,
            gb = [d.l, d.Pf, d.Qf, d.Ed, d.Rf, d.n, d.hd, d.Sf, d.Tf, d.Uf, d.Vf, d.Wf, d.Xf, d.Yf, d.Zf, d.ag, d.bg, d.cg, d.Ff, d.dg, d.Ef, d.Cf, d.ef, d.ff, d.gf, d.hf, d.jf, d.kf, d.lf, d.le, d.Lc, d.mf, d.pf, d.qf],
            P = {}, S, C, t = new l(0, 0), T = [], x = [], E, q = 0;

        function G(d, c) {
            var a = {};
            b.j(d, function (d, f) {
                var e = P[f];
                if (e) {
                    if (b.ae(d)) d = G(d, c || f == "e"); else if (c) if (b.sc(d)) d = gb[d];
                    a[e] = d
                }
            });
            return a
        }

        function I(c, f) {
            var e = [], d = b.z(c, "play");
            if (f && d) {
                var g = new w(c, s, {vg: d});
                N.push(g);
                a.i(g, p.bd, Z);
                a.i(g, p.mc, U)
            } else b.j(b.Hb(c), function (a) {
                e = e.concat(I(a, f + 1))
            });
            if (!f && (!j || j & 16) || f && (!d || !(d & 16))) {
                var h = S[b.z(c, "t")];
                h && e.push({cb: c, wd: h})
            }
            return e
        }

        function O(c, e) {
            var a = T[c];
            if (a == g) {
                a = T[c] = {zb: c, Wc: [], ne: []};
                var d = 0;
                !b.j(x, function (a, b) {
                    d = b;
                    return a.zb > c
                }) && d++;
                x.splice(d, 0, a)
            }
            return a
        }

        function db(o, p, f) {
            var a, d;
            if (C) {
                var k = C[b.z(o, "c")];
                if (k) {
                    a = O(k.r, 0);
                    a.rg = k.e || 0
                }
            }
            b.j(p, function (h) {
                var g = b.Q(e, {}, G(h)), i = b.od(g.k);
                delete g.k;
                if (g.c) {
                    g.P = g.c;
                    i.P = i.c;
                    delete g.c
                }
                if (g.f) {
                    g.R = g.f;
                    i.R = i.f;
                    delete g.f
                }
                var m = {k: i, bc: f.L, Sb: f.J}, j = new l(h.b, h.d, m, o, f, g);
                q = c.v(q, h.b + h.d);
                if (a) {
                    if (!d) d = new l(h.b, 0);
                    d.U(j)
                } else {
                    var k = O(h.b, h.b + h.d);
                    k.Wc.push(j)
                }
                if (g.Ib) f.Ib = {Jd: 0, Kd: 0, Dd: 0, a: 0};
                f = b.Qe(f, g)
            });
            if (a && d) {
                d.bf();
                var h = d, i, j = d.Dc(), m = d.tb(), n = c.v(m, a.rg);
                if (a.zb < m) {
                    if (a.zb > j) {
                        h = new l(j, a.zb - j);
                        h.U(d, e)
                    } else h = g;
                    i = new l(a.zb, n - j, {nc: n - a.zb, Me: e});
                    i.U(d, e)
                }
                h && a.Wc.push(h);
                i && a.ne.push(i)
            }
            return f
        }

        function cb(a) {
            b.j(a, function (d) {
                var a = d.cb, f = b.I(a), e = b.N(a), c = {
                    c: b.bb(a),
                    f: b.gb(a),
                    P: 0,
                    R: 0,
                    a: 1,
                    pb: b.Z(a) || 0,
                    Y: 0,
                    rb: 0,
                    Ab: 0,
                    hb: 1,
                    fb: 1,
                    Jb: 0,
                    Lb: 0,
                    Bb: 0,
                    qc: 0,
                    rc: 0,
                    L: f,
                    J: e,
                    g: {f: 0, B: f, A: e, c: 0}
                };
                c.ue = c.c;
                c.Rd = c.f;
                db(a, d.wd, c)
            })
        }

        function fb(f, d, g) {
            var c = f.b - d;
            if (c) {
                var b = new l(d, c);
                b.U(t, e);
                b.gc(g);
                a.U(b)
            }
            a.Jc(f.d);
            return c
        }

        function eb(e) {
            var c = t.Dc(), d = 0;
            b.j(e, function (e, f) {
                e = b.Q({d: 3e3}, e);
                fb(e, c, d);
                c = e.b;
                d += e.d;
                if (!f || e.t == 2) {
                    a.pc = c;
                    a.dd = c + e.d
                }
            })
        }

        function B(g, e, d) {
            var f = e.length;
            if (f > 4) for (var j = c.eb(f / 4), a = 0; a < j; a++) {
                var h = e.slice(a * 4, c.p(a * 4 + 4, f)), i = new l(h[0].zb, 0);
                B(i, h, d);
                g.U(i)
            } else b.j(e, function (a) {
                b.j(d ? a.ne : a.Wc, function (a) {
                    d && a.Jc(q - a.tb());
                    g.U(a)
                })
            })
        }

        var j, F, u = 0, h, z, K, J, A, N = [], H = [], r, D, m;

        function y(a) {
            return a & 2 || a & 4 && b.td().yd
        }

        function ab() {
            if (!A) {
                h & 8 && a.i(i, "keydown", Q);
                if (h & 32) {
                    a.i(i, "mousedown", v);
                    a.i(i, "touchstart", v)
                }
                A = e
            }
        }

        function Y() {
            a.X(i, "keydown", Q);
            a.X(i, "mousedown", v);
            a.X(i, "touchstart", v);
            A = k
        }

        function L(b) {
            if (!r || b) {
                r = e;
                a.O();
                b && u && a.S(0);
                a.pe(1);
                a.Re();
                ab();
                a.o(p.bd, a)
            }
        }

        function n() {
            if (!D && (r || a.q())) {
                D = e;
                a.O();
                a.ie() > a.pc && a.S(a.pc);
                a.pe(K || 1);
                a.ic(0)
            }
        }

        function V() {
            !m && n()
        }

        function M(c) {
            var b = c;
            if (c < 0 && a.q()) b = 1;
            if (b != u) {
                u = b;
                F && a.o(p.mc, a, u)
            }
        }

        function Q(a) {
            h & 8 && b.de(a) == 27 && n()
        }

        function X(a) {
            if (m && b.Bd(a) !== g) {
                m = k;
                h & 16 && b.V(V, 160)
            }
        }

        function v(a) {
            h & 32 && !b.we(f, b.Mb(a)) && n()
        }

        function W(a) {
            if (!m) {
                m = e;
                if (j & 1) b.ze(a, f) && L()
            }
        }

        function bb(i) {
            var d = b.Mb(i), a = b.sb(d, g, g, "A"), c = a && (b.ng(a) || a === f || b.we(f, a));
            if (r && y(h)) !c && n(); else if (y(j)) !c && L(e)
        }

        function Z(b) {
            var c = b.qg(), a = H[c];
            a !== b && a && a.pg();
            H[c] = b
        }

        function U(b, c) {
            a.o(p.mc, b, c)
        }

        a.qg = function () {
            return J || ""
        };
        a.pg = n;
        a.pd = function () {
            M(1)
        };
        a.nd = function () {
            r = k;
            D = k;
            M(-1);
            !a.q() && Y()
        };
        a.dc = function () {
            !m && z && a.ie() > a.dd && n()
        };
        a.C = function (m, i, d) {
            f = m;
            s = i;
            j = d.vg;
            E = d.lg;
            S = s.yc;
            C = s.kh;
            var l = {
                f: "y",
                c: "x",
                A: "m",
                B: "t",
                Y: "r",
                rb: "rX",
                Ab: "rY",
                hb: "sX",
                fb: "sY",
                Jb: "tX",
                Lb: "tY",
                Bb: "tZ",
                qc: "kX",
                rc: "kY",
                a: "o",
                k: "e",
                pb: "i",
                g: "c",
                Ib: "bc",
                Jd: "re",
                Kd: "gr",
                Dd: "bl"
            };
            b.j(l, function (b, a) {
                P[b] = a
            });
            cb(I(f, 0));
            B(t, x);
            if (j) {
                a.U(t);
                E = e;
                z = b.z(f, "idle");
                h = b.z(f, "rollback");
                K = b.z(f, "speed", 1);
                J = b.db(f, "group");
                (y(j) || y(h)) && a.i(f, "click", bb);
                if ((j & 1 || z) && !b.td().yd) {
                    a.i(f, "mouseenter", W);
                    a.i(f, "mouseleave", X)
                }
                F = b.z(f, "pause")
            }
            var k = s.jh || [], c = k[b.z(f, "b")] || [], g = {b: q, d: c.length ? 0 : d.Qb || z || 0};
            c = c.concat([g]);
            eb(c);
            a.tb();
            E && a.Jc(1e8);
            q = a.tb();
            B(a, x, e);
            a.S(-1);
            a.S(b.z(f, "initial") || 0)
        };
        a.s = function () {
            b.s(hb, N);
            a.O();
            a.S(-1)
        };
        b.C(a)
    }, j = (h.module || {}).exports = function () {
        var a = this, vc = b.jb(a, o), Kb = "data-jssor-slider", Ac = "data-jssor-thumb", t, m, R, Hb, cb, sb, Z, M, K,
            P, Sb, xc = 1, oc = 1, Ec = 1, dc = 1, Gc = {}, x, U, Ub, Yb, Xb, Ib, Gb, Fb, gb, C = [], fc, u = -1, gc, q,
            I, H, L, kb, lb, F, J, hb, S, A, W, jb, Y = [], jc, lc, Hc, s, rb, Cb, nb, eb, X, ec, Bb, Mb, hc, G, Zb = 0,
            bb = 0, Q = Number.MAX_VALUE, N = Number.MIN_VALUE, D, ib, db, T = 1, Rb = 0, mb, B, zb, yb, O, wb, xb, z,
            V, ob, y, Jb, Vb = b.td(), Ab = Vb.yd, w = [], E, tb, ab, ac, yc, Fc, ub;

        function Eb() {
            return !T && X & 12
        }

        function zc() {
            return Rb || !T && X & 3
        }

        function Db() {
            return !B && !Eb() && !y.Rc()
        }

        function Pc() {
            return !zc() && Db()
        }

        function Cc() {
            return A || R
        }

        function Ic() {
            return Cc() & 2 ? lb : kb
        }

        function Nb(a, c, d) {
            b.bb(a, c);
            b.gb(a, d)
        }

        function tc(c, b) {
            var a = Cc(), d = (kb * b + Zb) * (a & 1), e = (lb * b + Zb) * (a & 2) / 2;
            Nb(c, d, e)
        }

        function qc(b, f) {
            if (B && !(D & 1)) {
                var e = b, d;
                if (b < N) {
                    e = N;
                    d = -1
                }
                if (b > Q) {
                    e = Q;
                    d = 1
                }
                if (d) {
                    var a = b - e;
                    if (f) {
                        a = c.Nf(a) * 2 / c.T;
                        a = c.D(a * d, 1.6)
                    } else {
                        a = c.D(a * d, .625);
                        a = c.Sd(a * c.T / 2)
                    }
                    b = e + a * d
                }
            }
            return b
        }

        function Kc(a) {
            return qc(a, e)
        }

        function cd(a) {
            return qc(a)
        }

        function vb(a, b) {
            if (!(D & 1)) {
                var c = a - Q + (b || 0), d = N - a + (b || 0);
                if (c > 0 && c > d) a = Q; else if (d > 0) a = N
            }
            return a
        }

        function mc(a) {
            return !(D & 1) && a - N < .0001
        }

        function kc(a) {
            return !(D & 1) && Q - a < .0001
        }

        function pb(a) {
            return !(D & 1) && (a - N < .0001 || Q - a < .0001)
        }

        function Ob(c, a, d) {
            !ub && b.j(Y, function (b) {
                b.Xc(c, a, d)
            })
        }

        function sc(b) {
            var a = b, d = pb(b);
            if (d) a = vb(a); else {
                b = v(b);
                a = b
            }
            a = c.kb(a);
            a = c.v(a, 0);
            return a
        }

        function Zc(a) {
            w[u];
            fc = u;
            u = a;
            gc = w[u]
        }

        function Nc() {
            A = 0;
            var b = z.q(), d = sc(b);
            Ob(d, b);
            if (pb(b) || b == c.kb(b)) {
                if (s & 2 && (eb > 0 && d == q - 1 || eb < 0 && !d)) s = 0;
                Zc(d);
                a.o(j.jg, u, fc)
            }
        }

        function bc(a, b) {
            if (q && (!b || !y.Rc())) {
                y.O();
                y.Mc(a, a)
            }
        }

        function qb(a) {
            if (q) {
                a = v(a);
                a = vb(a);
                bc(a)
            } else Ob(0, 0)
        }

        function Sc() {
            var b = j.ye || 0, a = ib;
            j.ye |= a;
            return W = a & ~b
        }

        function Oc() {
            if (W) {
                j.ye &= ~ib;
                W = 0
            }
        }

        function Tc() {
            var a = b.Vb();
            b.ab(a, gb);
            return a
        }

        function v(b, a) {
            a = a || q || 1;
            return (b % a + a) % a
        }

        function uc(c, a, b) {
            s & 8 && (s = 0);
            Wb(c, Bb, a, b)
        }

        function Pb() {
            b.j(Y, function (a) {
                a.ad(a.Ic.ih <= T)
            })
        }

        function bd(c) {
            if (!T && (b.Bd(c) || !b.ze(c, t))) {
                T = 1;
                Pb();
                if (!B) {
                    X & 12 && Bc();
                    w[u] && w[u].uc()
                }
                a.o(j.ig)
            }
        }

        function ad() {
            if (T) {
                T = 0;
                Pb();
                B || !(X & 12) || Dc()
            }
            a.o(j.Cg)
        }

        function ed() {
            b.j(C, function (a) {
                b.ab(a, gb);
                b.Zb(a, "hidden");
                b.Kb(a)
            });
            b.ab(U, gb)
        }

        function Qb(b, a) {
            Wb(b, a, e)
        }

        function Wb(g, h, l, p) {
            if (q && (!B || m.Ad) && !Eb()) {
                var d = z.q(), a = g;
                if (l) {
                    a = d + g;
                    if (D & 2) {
                        if (mc(d) && g < 0) a = Q;
                        if (kc(d) && g > 0) a = N
                    }
                }
                if (!(D & 1)) if (p) a = v(a); else a = vb(a, .5);
                if (l && !pb(a)) a = c.F(a);
                var j = (a - d) % q;
                a = d + j;
                if (h == f) h = Bb;
                var b = c.Cb(j), i = 0;
                if (b) {
                    if (b < 1) b = c.D(b, .5);
                    if (b > 1) {
                        var o = Ic(), n = (R & 1 ? Gb : Fb) / o;
                        b = c.p(b, n * 1.5)
                    }
                    i = h * b
                }
                ub = e;
                y.O();
                ub = k;
                y.Mc(d, a, i)
            }
        }

        function Lc(d, h, o) {
            var l = this, i = {f: 2, B: 1, A: 2, c: 1}, m = {f: "top", B: "right", A: "bottom", c: "left"}, g, a, f, j,
                k = {};
            l.cb = d;
            l.vc = function (q, l, u) {
                var p, s = q, r = l;
                if (!f) {
                    f = b.Bg(d);
                    g = d.parentNode;
                    j = {Hc: b.z(d, n.Pe, 1), xb: b.z(d, n.cc)};
                    b.j(m, function (c, a) {
                        k[a] = b.z(d, "data-scale-" + c, 1)
                    });
                    a = d;
                    if (h) {
                        a = b.ib(g, e);
                        b.ab(a, {f: 0, c: 0});
                        b.lb(a, d);
                        b.lb(g, a)
                    }
                }
                if (o) {
                    p = c.v(q, l);
                    if (h) if (u >= 0 && u < 1) {
                        var w = c.p(q, l);
                        p = c.p(p / w, 1 / (1 - u)) * w
                    }
                } else s = r = p = c.D(K < P ? l : q, j.Hc);
                var x = h ? 1.001 : 1, t = p * x;
                h && (dc = t);
                b.Eg(a, t);
                b.I(g, f.L * s);
                b.N(g, f.J * r);
                var v = b.Ud() && b.rd() < 9 ? t : 1, y = (s - v) * f.L / 2, z = (r - v) * f.J / 2;
                b.bb(a, y);
                b.gb(a, z);
                b.j(f, function (d, a) {
                    if (i[a] && d) {
                        var e = (i[a] & 1) * c.D(q, k[a]) * d + (i[a] & 2) * c.D(l, k[a]) * d / 2;
                        b.Ve[a](g, e)
                    }
                });
                b.cd(g, j.xb)
            }
        }

        function Xc() {
            var a = this;
            l.call(a, 0, 0, {nc: q});
            b.j(w, function (b) {
                a.kd(b);
                b.gc(G / F)
            })
        }

        function Wc() {
            var a = this, b = Jb.cb;
            l.call(a, -1, 2, {k: d.l, Ye: {Ub: tc}, nc: q, zc: Cb}, b, {Ub: 1}, {Ub: -2});
            a.Qc = b
        }

        function Yc() {
            var b = this;
            l.call(b, -1e8, 2e8);
            b.dc = function (d, b) {
                if (c.Cb(b - d) > 1e-5) {
                    var g = b, f = b;
                    if (c.kb(b) != b && b > d && (D & 1 || b > bb)) f++;
                    var h = sc(f);
                    Ob(h, g, e);
                    a.o(j.ch, v(g), v(d), b, d)
                }
            }
        }

        function Mc(o, n) {
            var b = this, f, i, d, c, h;
            l.call(b, -1e8, 2e8, {Cd: 100});
            b.pd = function () {
                mb = e;
                a.o(j.Zg, v(z.q()), V.q())
            };
            b.nd = function () {
                mb = k;
                c = k;
                a.o(j.Yg, v(z.q()), V.q());
                !B && Nc()
            };
            b.dc = function (g, b) {
                var a = b;
                if (c) a = h; else if (d) {
                    var e = b / d;
                    a = m.be(e) * (i - f) + f
                }
                a = Kc(a);
                V.S(a)
            };
            b.Mc = function (a, c, h, g) {
                B = k;
                d = h || 1;
                f = a;
                i = c;
                ub = e;
                V.S(a);
                ub = k;
                b.S(0);
                b.ic(d, g)
            };
            b.Sg = function () {
                c = e;
                c && b.Ld(g, g, e)
            };
            b.Qg = function (a) {
                h = a
            };
            V = new Yc;
            V.U(o);
            V.U(n)
        }

        function Jc() {
            var c = this, a = Tc();
            b.Z(a, 0);
            c.cb = a;
            c.rf = function (c) {
                b.lb(a, c);
                b.qb(a)
            };
            c.Fb = function () {
                b.Kb(a);
                b.Pc(a)
            }
        }

        function Vc(n, h) {
            var d = this, hb = b.jb(d, o), x, C = 0, T, ib = n, B = b.z(ib, "data-fillmode", m.Pg), F, r, A = [], S, L,
                P, O, i, t, y, Q;
            l.call(d, -J, J + 1, {nc: D & 1 ? q : f, zc: Cb});

            function G(a) {
                x && x.s();
                Rb -= C;
                C = 0;
                R(n, a, 0);
                O = e;
                x = new cb.nb(n, cb, {Qb: b.z(n, "idle", ec), lg: !s});
                x.vd(p.mc, X)
            }

            function Y() {
                x.Tc < cb.Tc && G()
            }

            function X(b, a) {
                C += a;
                Rb += a;
                if (h == u) !C && d.uc()
            }

            function N(n, p, m) {
                if (!L) {
                    L = e;
                    if (r && m) {
                        var f = m.width, c = m.height, l = f, i = c;
                        if (f && c && B) {
                            if (B & 3 && (!(B & 4) || f > I || c > H)) {
                                var g = k, o = I / H * c / f;
                                if (B & 1) g = o > 1; else if (B & 2) g = o < 1;
                                l = g ? f * H / c : I;
                                i = g ? H : c * I / f
                            }
                            b.I(r, l);
                            b.N(r, i);
                            b.gb(r, (H - i) / 2);
                            b.bb(r, (I - l) / 2)
                        }
                        b.Gb(r, "absolute")
                    }
                    a.o(j.Mg, h)
                }
                p.Fd(k);
                n && n(d)
            }

            function W(g, b, c, f) {
                if (f == y && u == h && s && Db() && !d.sd()) {
                    var a = v(g);
                    E.Mf(a, h, b, d, c, H / I);
                    b.Lg();
                    ob.gc(a - ob.Dc() - 1);
                    ob.S(a);
                    bc(a, e)
                }
            }

            function ab(b) {
                if (b == y && u == h && Db() && !d.sd()) {
                    if (!i) {
                        var a = g;
                        if (E) if (E.ec == h) a = E.Hf(); else E.Fb();
                        Y();
                        i = new Uc(n, h, a, x);
                        i.Kg(t)
                    }
                    !i.Rc() && i.xd()
                }
            }

            function K(a, e, k) {
                if (a == h) {
                    if (a != e) w[e] && w[e].zd(); else !k && i && i.Jg();
                    t && t.Oc();
                    y = b.Pb();
                    d.Ob(b.ob(g, ab, y))
                } else {
                    var j = c.p(h, a), f = c.v(h, a), n = c.p(f - j, j + q - f), l = J + m.Ig - 1;
                    (!P || n <= l) && d.Ob()
                }
            }

            function bb() {
                if (u == h && i) {
                    i.O();
                    t && t.Hg();
                    t && t.Gg();
                    i.re()
                }
            }

            function fb() {
                u == h && i && i.O()
            }

            function Z(b) {
                !db && a.o(j.gg, h, b)
            }

            d.Fd = function (a) {
                if (Q != a) {
                    Q = a;
                    a && b.lb(n, F);
                    !a && b.Nb(F)
                }
            };
            d.Ob = function (f, c) {
                c = c || d;
                if (A.length && !L) {
                    c.Fd(e);
                    if (!S) {
                        S = e;
                        a.o(j.Dg, h);
                        b.j(A, function (a) {
                            if (!b.u(a, "src")) {
                                var c = b.db(a, "src") || b.db(a, "src2") || "";
                                if (c) {
                                    a.src = c;
                                    b.Db(a, b.u(a, "data-display"))
                                }
                            }
                        })
                    }
                    b.df(A, r, b.ob(g, N, f, c))
                } else N(f, c)
            };
            d.fg = function () {
                if (Pc()) if (q == 1) {
                    d.zd();
                    K(h, h)
                } else {
                    var a;
                    if (E) a = E.of(q);
                    if (a) {
                        y = b.Pb();
                        var c = h + eb, e = w[v(c)];
                        return e.Ob(b.ob(g, W, c, e, a, y), d)
                    } else (D || !pb(z.q()) || !pb(z.q() + eb)) && Qb(eb)
                }
            };
            d.uc = function () {
                K(h, h, e)
            };
            d.zd = function () {
                t && t.Hg();
                t && t.Gg();
                d.Pd();
                i && i.Df();
                i = g;
                G()
            };
            d.Lg = function () {
                b.Kb(n)
            };
            d.Pd = function () {
                b.qb(n)
            };

            function R(a, h, c) {
                if (b.u(a, Kb)) return;
                if (!O) {
                    b.u(a, "data-events", b.Bc(a));
                    b.u(a, "data-display", b.Db(a));
                    b.ah(a, b.db(a, "data-to"));
                    b.bh(a, b.db(a, "data-bf"));
                    b.Fg(a, b.z(a, "data-p"));
                    b.dh(a, b.db(a, "po"));
                    if (a.tagName == "IMG") {
                        A.push(a);
                        if (!b.u(a, "src")) {
                            P = e;
                            b.Kb(a)
                        }
                    }
                    var d = b.Ue(a);
                    if (d) {
                        var f = new Image;
                        b.u(f, "src", d);
                        A.push(f)
                    }
                    c && b.Z(a, (b.Z(a) || 0) + 1)
                }
                var g = b.Hb(a);
                b.j(g, function (d) {
                    if (c < 2 && !r) if (b.db(d, "u") == "image") {
                        r = d;
                        r.border = 0;
                        b.ab(r, gb);
                        b.ab(a, gb)
                    }
                    R(d, h, c + 1)
                })
            }

            d.jd = function (c, b) {
                var a = J - b;
                tc(T, a)
            };
            d.ec = h;
            var M = b.tc(n, "thumb", e);
            if (M) {
                d.Ge = b.ib(M);
                b.Kb(M)
            }
            b.qb(n);
            F = b.ib(U);
            b.Z(F, 1e3);
            d.i(n, "click", Z);
            G(e);
            d.id = r;
            d.Vd = n;
            d.Qc = T = n;
            d.i(a, 203, K);
            d.i(a, 28, fb);
            d.i(a, 24, bb);
            d.s = function () {
                b.s(hb, x, i)
            }
        }

        function Uc(F, h, q, r) {
            var c = this, D = b.jb(c, o), i = 0, t = 0, g, m, f, d, n, x, v, y = w[h];
            l.call(c, 0, 0);

            function A() {
                c.xd()
            }

            function C(a) {
                v = a;
                c.O();
                c.xd()
            }

            function z() {
            }

            c.xd = function () {
                if (!B && !mb && !v && u == h && !c.sd()) {
                    var k = c.q();
                    if (!k) if (g && !n) {
                        n = e;
                        c.re(e);
                        a.o(j.Bf, h, t, i, t, g, d)
                    }
                    a.o(j.Od, h, k, i, m, f, d);
                    if (!Eb()) {
                        var l;
                        if (k == d) s && b.V(y.fg, 20); else {
                            if (k == f) l = d; else if (!k) l = f; else l = c.fe();
                            (k != f || !zc()) && c.ic(l, A)
                        }
                    }
                }
            };
            c.Jg = function () {
                f == d && f == c.q() && c.S(m)
            };
            c.Df = function () {
                E && E.ec == h && E.Fb();
                var b = c.q();
                b < d && a.o(j.Od, h, -b - 1, i, m, f, d)
            };
            c.re = function (a) {
                q && b.Zb(S, a && q.wd.hh ? "" : "hidden")
            };
            c.jd = function (c, b) {
                if (n && b >= g) {
                    n = k;
                    y.Pd();
                    E.Fb();
                    a.o(j.Af, h, g, i, t, g, d)
                }
                a.o(j.zf, h, b, i, m, f, d)
            };
            c.Kg = function (a) {
                if (a && !x) {
                    x = a;
                    a.vd($JssorPlayer$.Ne, C)
                }
            };
            c.i(r, p.bd, z);
            q && c.kd(q);
            g = c.tb();
            c.kd(r);
            m = g + r.pc;
            d = c.tb();
            f = s ? g + r.dd : d;
            c.s = function () {
                D.s();
                c.O()
            }
        }

        function cc() {
            ac = mb;
            yc = y.fe();
            ab = z.q();
            tb = cd(ab)
        }

        function Dc() {
            cc();
            if (B || Eb()) {
                y.O();
                a.o(j.yf)
            }
        }

        function Bc(g) {
            if (Db()) {
                var b = z.q(), a = tb, f = 0;
                if (g && c.Cb(O) >= m.oe) {
                    a = b;
                    f = xb
                }
                a = c.eb(a);
                a = vb(a + f, .5);
                var e = c.Cb(a - b);
                if (e < 1 && m.be != d.l) e = c.D(e, .5);
                if ((!db || !g) && ac) y.ic(yc); else if (b == a) gc.uc(); else y.Mc(b, a, e * Bb)
            }
        }

        function wc(a) {
            !b.sb(b.Mb(a), f, n.Nd) && b.kc(a)
        }

        function nc(b) {
            zb = k;
            B = e;
            Dc();
            if (!ac) A = 0;
            a.o(j.xf, v(ab), ab, b)
        }

        function Rc(a) {
            rc(a, 1)
        }

        function rc(c, d) {
            O = 0;
            wb = 0;
            xb = 0;
            Ec = dc;
            if (d) {
                var h = c.touches[0];
                yb = {x: h.clientX, y: h.clientY}
            } else yb = b.ud(c);
            var e = b.Mb(c), g = b.sb(e, "1", Ac);
            if ((!g || g === t) && !W && (!d || c.touches.length == 1)) {
                jb = b.sb(e, f, n.Nd) || !ib || !Sc();
                a.i(i, d ? "touchmove" : "mousemove", Tb);
                zb = !jb && b.sb(e, f, n.Sc);
                !zb && !jb && nc(c, d)
            }
        }

        function Tb(a) {
            var d, f;
            a = b.Vg(a);
            if (a.type != "mousemove") if (a.touches.length == 1) {
                f = a.touches[0];
                d = {x: f.clientX, y: f.clientY}
            } else fb(); else d = b.ud(a);
            if (d) {
                var i = d.x - yb.x, j = d.y - yb.y, g = c.Cb(i), h = c.Cb(j);
                if (A || g > 1.5 || h > 1.5) if (zb) nc(a, f); else {
                    if (c.kb(tb) != tb) A = A || R & W;
                    if ((i || j) && !A) {
                        if (W == 3) if (h > g) A = 2; else A = 1; else A = W;
                        if (Ab && A == 1 && h > g * 2.4) jb = e
                    }
                    var l = i, k = kb;
                    if (A == 2) {
                        l = j;
                        k = lb
                    }
                    (O - wb) * nb < -1.5 && (xb = 0);
                    (O - wb) * nb > 1.5 && (xb = -1);
                    wb = O;
                    O = l;
                    Fc = tb - O * nb / k / Ec * m.wf;
                    if (O && A && !jb) {
                        b.kc(a);
                        y.Sg(e);
                        y.Qg(Fc)
                    }
                }
            }
        }

        function fb() {
            Oc();
            a.X(i, "mousemove", Tb);
            a.X(i, "touchmove", Tb);
            db = O;
            if (B) {
                db && s & 8 && (s = 0);
                y.O();
                B = k;
                var b = z.q();
                a.o(j.vf, v(b), b, v(ab), ab);
                X & 12 && cc();
                Bc(e)
            }
        }

        function dd(a) {
            var c = b.Mb(a), e = b.sb(c, "1", Kb);
            if (t === e) if (db) {
                b.hg(a);
                var d = b.sb(c, f, "data-jssor-button", "A");
                d && b.kc(a)
            } else s & 4 && (s = 0)
        }

        a.fc = function (a) {
            if (a == f) return s;
            if (a != s) {
                s = a;
                s && w[u] && w[u].uc()
            }
        };
        a.We = function () {
            return db
        };
        a.bc = function () {
            return K
        };
        a.Sb = function () {
            return P
        };
        a.sf = function (b) {
            if (b == f) return Sb || K;
            a.vc(b, b / K * P)
        };
        a.vc = function (c, a, d) {
            b.I(t, c);
            b.N(t, a);
            xc = c / K;
            oc = a / P;
            b.j(Gc, function (a) {
                a.vc(xc, oc, d)
            });
            if (!Sb) {
                b.Yb(S, x);
                b.gb(S, 0);
                b.bb(S, 0)
            }
            Sb = c
        };
        a.Je = mc;
        a.Te = kc;
        a.Ae = Wb;
        a.Ld = function () {
            a.fc(s || 1)
        };
        a.ge = function (a) {
            a = v(a);
            if (D & 1) {
                var e = G / F, b = v(z.q()), d = v(a - b + e), f = v(c.Cb(a - b));
                if (d >= J) {
                    if (f > q / 2) if (a > b) a -= q; else a += q
                } else if (a > b && d < e) a -= q; else if (a < b && d > e) a += q
            }
            return a
        };

        function Qc() {
            Vb.Yd && b.ac(x, Vb.Yd, ([g, "pan-y", "pan-x", "auto"])[ib] || "");
            a.i(t, "click", dd, e);
            a.i(t, "mouseleave", bd);
            a.i(t, "mouseenter", ad);
            a.i(t, "mousedown", rc);
            a.i(t, "touchstart", Rc);
            a.i(t, "dragstart", wc);
            a.i(t, "selectstart", wc);
            a.i(h, "mouseup", fb);
            a.i(i, "mouseup", fb);
            a.i(i, "touchend", fb);
            a.i(i, "touchcancel", fb);
            a.i(h, "blur", fb);
            m.Ac && a.i(i, "keydown", function (c) {
                var a = b.de(c);
                if (a == 37 || a == 39) {
                    s & 8 && (s = 0);
                    uc(m.Ac * (a - 38) * nb, e)
                }
            })
        }

        function ic(e) {
            vc.Ke();
            C = [];
            w = [];
            var g = b.Hb(x), j = b.te(["DIV", "A", "LI"]);
            b.j(g, function (a) {
                j[a.tagName.toUpperCase()] && !b.db(a, "u") && b.Db(a) != "none" && C.push(a);
                b.Z(a, (b.Z(a) || 0) + 1)
            });
            q = C.length;
            if (q) {
                var a = R & 1 ? Gb : Fb;
                ed();
                G = m.Of;
                if (G == f) G = (a - F + L) / 2;
                hb = a / F;
                J = c.p(q, m.G || q, c.eb(hb));
                D = J < q ? m.hc : 0;
                if (q * F - L <= a) {
                    hb = q - L / F;
                    G = (a - F + L) / 2;
                    Zb = (a - F * q + L) / 2
                }
                if (Hb) {
                    Mb = Hb.nb;
                    hc = !G && J == 1 && q > 1 && Mb && (!b.Ud() || b.rd() >= 9)
                }
                if (!(D & 1)) {
                    bb = G / F;
                    if (bb > q - 1) {
                        bb = q - 1;
                        G = bb * F
                    }
                    N = bb;
                    Q = N + q - hb - L / F
                }
                ib = (J > 1 || G ? R : -1) & m.Vc;
                if (hc) E = new Mb(Jb, I, H, Hb, Ab, Nb);
                for (var d = 0; d < C.length; d++) {
                    var h = C[d], i = new Vc(h, d);
                    w.push(i)
                }
                ob = new Wc;
                z = new Xc;
                y = new Mc(z, ob);
                Qc()
            }
            b.j(Y, function (a) {
                a.Nc(q, w);
                e && a.vd(r.Yc, uc)
            })
        }

        a.C = function (c, h) {
            a.cb = t = b.jc(c);
            K = b.I(t);
            P = b.N(t);
            m = b.Q({
                Pg: 0,
                Ig: 1,
                Ac: 1,
                Zc: 0,
                fc: 0,
                hc: 1,
                Uc: e,
                Ad: e,
                Lf: 1,
                Md: 3e3,
                xe: 1,
                ke: 500,
                be: d.Ed,
                oe: 20,
                wf: 1,
                me: 0,
                Kf: 1,
                ve: 1,
                Vc: 1
            }, h);
            m.Uc = m.Uc && b.Rg();
            if (m.Qb != f) m.Md = m.Qb;
            if (m.Jf != f) m.G = m.Jf;
            if (m.If != f) m.Of = m.If;
            s = m.fc & 63;
            !m.Kf;
            eb = m.Lf;
            X = m.xe;
            X &= Ab ? 10 : 5;
            ec = m.Md;
            Bb = m.ke;
            R = m.ve & 3;
            rb = b.ug(b.u(t, "dir")) == "rtl";
            Cb = rb && (R == 1 || m.Vc & 1);
            nb = Cb ? -1 : 1;
            Hb = m.nf;
            cb = b.Q({nb: p}, m.gh);
            sb = m.fh;
            Z = m.Gf;
            M = m.Le;
            var g = b.Hb(t);
            b.j(g, function (a, d) {
                var c = b.db(a, "u");
                if (c == "loading") U = a; else {
                    if (c == "slides") {
                        x = a;
                        b.ac(x, "margin", 0);
                        b.ac(x, "padding", 0)
                    }
                    if (c == "navigator") Ub = a;
                    if (c == "arrowleft") Yb = a;
                    if (c == "arrowright") Xb = a;
                    if (c == "thumbnavigator") Ib = a;
                    if (a.tagName != "STYLE" && a.tagName != "SCRIPT") Gc[c || d] = new Lc(a, c == "slides", b.te(["slides", "thumbnavigator"])[c])
                }
            });
            U && b.Nb(U);
            U = U || b.Vb(i);
            Gb = b.I(x);
            Fb = b.N(x);
            I = m.Ee || Gb;
            H = m.Be || Fb;
            gb = {L: I, J: H, f: 0, c: 0, Xd: "block", Ub: "absolute"};
            L = m.me;
            kb = I + L;
            lb = H + L;
            F = R & 1 ? kb : lb;
            Jb = new Jc;
            if (m.Uc && (!b.Ng() || Ab)) Nb = function (a, c, d) {
                b.Fe(a, {Jb: c, Lb: d})
            };
            b.u(t, Kb, "1");
            b.Z(x, b.Z(x) || 0);
            b.Gb(x, "absolute");
            S = b.ib(x, e);
            b.ac(S, "pointerEvents", "none");
            b.Yb(S, x);
            b.lb(S, Jb.cb);
            b.Zb(x, "hidden");
            if (Ub && sb) {
                sb.wc = rb;
                jc = new sb.nb(Ub, sb, K, P);
                Y.push(jc)
            }
            if (Z && Yb && Xb) {
                Z.wc = rb;
                Z.hc = m.hc;
                lc = new Z.nb(Yb, Xb, Z, a);
                Y.push(lc)
            }
            if (Ib && M) {
                M.Zc = m.Zc;
                M.Ac = M.Ac || 0;
                M.wc = rb;
                Hc = new M.nb(Ib, M, U);
                !M.Xe && b.u(Ib, Ac, "1");
                Y.push(Hc)
            }
            ic(e);
            a.vc(K, P);
            Pb();
            qb(v(m.Zc));
            b.ac(t, "visibility", "visible")
        };
        a.s = function () {
            s = 0;
            b.s(w, Y, vc);
            b.Pc(t)
        };
        b.C(a)
    };
    j.gg = 21;
    j.xf = 22;
    j.vf = 23;
    j.Zg = 24;
    j.Yg = 25;
    j.Dg = 26;
    j.Mg = 27;
    j.yf = 28;
    j.Cg = 31;
    j.ig = 32;
    j.ch = 202;
    j.jg = 203;
    j.Bf = 206;
    j.Af = 207;
    j.zf = 208;
    j.Od = 209;
    jssor_1_slider_init = function () {
        var f = [{m: 800, x: .3, K: {c: [.3, .7]}, k: {c: d.n, a: d.l}, a: 2}, {
                m: 800,
                x: -.3,
                E: e,
                k: {c: d.n, a: d.l},
                a: 2
            }, {m: 800, x: -.3, K: {c: [.3, .7]}, k: {c: d.n, a: d.l}, a: 2}, {
                m: 800,
                x: .3,
                E: e,
                k: {c: d.n, a: d.l},
                a: 2
            }, {m: 800, y: .3, K: {f: [.3, .7]}, k: {f: d.n, a: d.l}, a: 2}, {
                m: 800,
                y: -.3,
                E: e,
                k: {f: d.n, a: d.l},
                a: 2
            }, {m: 800, y: -.3, K: {f: [.3, .7]}, k: {f: d.n, a: d.l}, a: 2}, {
                m: 800,
                y: .3,
                E: e,
                k: {f: d.n, a: d.l},
                a: 2
            }, {m: 800, x: .3, G: 2, K: {c: [.3, .7]}, M: {ub: 3}, k: {c: d.n, a: d.l}, a: 2}, {
                m: 800,
                x: .3,
                G: 2,
                E: e,
                M: {ub: 3},
                k: {c: d.n, a: d.l},
                a: 2
            }, {m: 800, y: .3, H: 2, K: {f: [.3, .7]}, M: {wb: 12}, k: {f: d.n, a: d.l}, a: 2}, {
                m: 800,
                y: .3,
                H: 2,
                E: e,
                M: {wb: 12},
                k: {f: d.n, a: d.l},
                a: 2
            }, {m: 800, y: .3, G: 2, K: {f: [.3, .7]}, M: {ub: 12}, k: {f: d.n, a: d.l}, a: 2}, {
                m: 800,
                y: -.3,
                G: 2,
                E: e,
                M: {ub: 12},
                k: {f: d.n, a: d.l},
                a: 2
            }, {m: 800, x: .3, H: 2, K: {c: [.3, .7]}, M: {wb: 3}, k: {c: d.n, a: d.l}, a: 2}, {
                m: 800,
                x: -.3,
                H: 2,
                E: e,
                M: {wb: 3},
                k: {c: d.n, a: d.l},
                a: 2
            }, {
                m: 800,
                x: .3,
                y: .3,
                G: 2,
                H: 2,
                K: {c: [.3, .7], f: [.3, .7]},
                M: {ub: 3, wb: 12},
                k: {c: d.n, f: d.n, a: d.l},
                a: 2
            }, {
                m: 800,
                x: .3,
                y: .3,
                G: 2,
                H: 2,
                K: {c: [.3, .7], f: [.3, .7]},
                E: e,
                M: {ub: 3, wb: 12},
                k: {c: d.n, f: d.n, a: d.l},
                a: 2
            }, {m: 800, V: 20, g: 3, k: {g: d.n, a: d.l}, a: 2}, {
                m: 800,
                V: 20,
                g: 3,
                E: e,
                k: {g: d.hd, a: d.l},
                a: 2
            }, {m: 800, V: 20, g: 12, k: {g: d.n, a: d.l}, a: 2}, {m: 800, V: 20, g: 12, E: e, k: {g: d.hd, a: d.l}, a: 2}],
            g = {fc: 1, nf: {nb: u, yc: f, cf: 1}, Gf: {nb: v}, Le: {nb: t, Kc: 5, Gc: 5}}, c = new j("jssor_1", g),
            i = 980;

        function a() {
            var d = c.cb.parentNode, b = d.clientWidth;
            if (b) {
                var e = m.min(i || b, b);
                c.sf(e)
            } else h.setTimeout(a, 30)
        }

        a();
        b.yb(h, "load", a);
        b.yb(h, "resize", a);
        b.yb(h, "orientationchange", a)
    }
}(window, document, Math, null, true, false)