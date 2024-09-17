<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="it" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--<base href="https://gds.google.com/">-->
    <base href=".">
    <link rel="preconnect" href="https://www.gstatic.com/">
    <meta name="referrer" content="origin">
    <script nonce="">window['ppConfig'] = { productName: 'GrowthOnboardUi', deleteIsEnforced: true, sealIsEnforced: true, heartbeatRate: 0.5, periodicReportingRateMillis: 60000.0, disableAllReporting: false }; (function () {
            'use strict'; function k(a) { var b = 0; return function () { return b < a.length ? { done: !1, value: a[b++] } : { done: !0 } } } var l = typeof Object.defineProperties == "function" ? Object.defineProperty : function (a, b, c) { if (a == Array.prototype || a == Object.prototype) return a; a[b] = c.value; return a };
            function m(a) { a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global]; for (var b = 0; b < a.length; ++b) { var c = a[b]; if (c && c.Math == Math) return c } throw Error("Cannot find global object"); } var n = m(this); function p(a, b) { if (b) a: { var c = n; a = a.split("."); for (var d = 0; d < a.length - 1; d++) { var e = a[d]; if (!(e in c)) break a; c = c[e] } a = a[a.length - 1]; d = c[a]; b = b(d); b != d && b != null && l(c, a, { configurable: !0, writable: !0, value: b }) } }
            function q(a) { var b = typeof Symbol != "undefined" && Symbol.iterator && a[Symbol.iterator]; if (b) return b.call(a); if (typeof a.length == "number") return { next: k(a) }; throw Error(String(a) + " is not an iterable or ArrayLike"); } p("Object.is", function (a) { return a ? a : function (b, c) { return b === c ? b !== 0 || 1 / b === 1 / c : b !== b && c !== c } });
            p("Array.prototype.includes", function (a) { return a ? a : function (b, c) { var d = this; d instanceof String && (d = String(d)); var e = d.length; c = c || 0; for (c < 0 && (c = Math.max(c + e, 0)); c < e; c++) { var f = d[c]; if (f === b || Object.is(f, b)) return !0 } return !1 } });
            p("String.prototype.includes", function (a) { return a ? a : function (b, c) { if (this == null) throw new TypeError("The 'this' value for String.prototype.includes must not be null or undefined"); if (b instanceof RegExp) throw new TypeError("First argument to String.prototype.includes must not be a regular expression"); return this.indexOf(b, c || 0) !== -1 } }); function r(a, b, c) { a("https://csp.withgoogle.com/csp/proto/" + encodeURIComponent(b), JSON.stringify(c)) } function t() { var a; if ((a = window.ppConfig) == null ? 0 : a.disableAllReporting) return function () { }; var b, c, d, e; return (e = (b = window) == null ? void 0 : (c = b.navigator) == null ? void 0 : (d = c.sendBeacon) == null ? void 0 : d.bind(navigator)) != null ? e : u } function u(a, b) { var c = new XMLHttpRequest; c.open("POST", a); c.send(b) }
            function v() { var a = (w = Object.prototype) == null ? void 0 : w.__lookupGetter__("__proto__"), b = x, c = y; return function () { var d = a.call(this), e, f, g, h; r(c, b, { type: "ACCESS_GET", origin: (f = window.location.origin) != null ? f : "unknown", report: { className: (g = d == null ? void 0 : (e = d.constructor) == null ? void 0 : e.name) != null ? g : "unknown", stackTrace: (h = Error().stack) != null ? h : "unknown" } }); return d } }
            function z() { var a = (A = Object.prototype) == null ? void 0 : A.__lookupSetter__("__proto__"), b = x, c = y; return function (d) { d = a.call(this, d); var e, f, g, h; r(c, b, { type: "ACCESS_SET", origin: (f = window.location.origin) != null ? f : "unknown", report: { className: (g = d == null ? void 0 : (e = d.constructor) == null ? void 0 : e.name) != null ? g : "unknown", stackTrace: (h = Error().stack) != null ? h : "unknown" } }); return d } } function B(a, b) { C(a.productName, b); setInterval(function () { C(a.productName, b) }, a.periodicReportingRateMillis) }
            var D = "constructor __defineGetter__ __defineSetter__ hasOwnProperty __lookupGetter__ __lookupSetter__ isPrototypeOf propertyIsEnumerable toString valueOf __proto__ toLocaleString x_ngfn_x".split(" "), E = D.concat, F = navigator.userAgent.match(/Firefox\/([0-9]+)\./), G = (!F || F.length < 2 ? 0 : Number(F[1]) < 75) ? ["toSource"] : [], H; if (G instanceof Array) H = G; else { for (var I = q(G), J, K = []; !(J = I.next()).done;)K.push(J.value); H = K } var L = E.call(D, H), M = [];
            function C(a, b) { for (var c = [], d = q(Object.getOwnPropertyNames(Object.prototype)), e = d.next(); !e.done; e = d.next())e = e.value, L.includes(e) || M.includes(e) || c.push(e); e = Object.prototype; d = []; for (var f = 0; f < c.length; f++) { var g = c[f]; d[f] = { name: g, descriptor: Object.getOwnPropertyDescriptor(Object.prototype, g), type: typeof e[g] } } if (d.length !== 0) { c = q(d); for (e = c.next(); !e.done; e = c.next())M.push(e.value.name); var h; r(b, a, { type: "SEAL", origin: (h = window.location.origin) != null ? h : "unknown", report: { blockers: d } }) } }; var N = Math.random(), O = t(), P = window.ppConfig; P && (P.disableAllReporting || P.deleteIsEnforced && P.sealIsEnforced || N < P.heartbeatRate && r(O, P.productName, { origin: window.location.origin, type: "HEARTBEAT" })); var y = t(), Q = window.ppConfig; if (Q) if (Q.deleteIsEnforced) delete Object.prototype.__proto__; else if (!Q.disableAllReporting) { var x = Q.productName; try { var w, A; Object.defineProperty(Object.prototype, "__proto__", { enumerable: !1, get: v(), set: z() }) } catch (a) { } }
            (function () { var a = t(), b = window.ppConfig; b && (b.sealIsEnforced ? Object.seal(Object.prototype) : b.disableAllReporting || (document.readyState !== "loading" ? B(b, a) : document.addEventListener("DOMContentLoaded", function () { B(b, a) }))) })();
        }).call(this);
    </script>
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width, shrink-to-fit=no">
    <link rel="icon" href="https://www.google.com/favicon.ico">
    <link rel="stylesheet" href="./access_files/css2">
    <script data-id="_gd"
        nonce="">window.WIZ_global_data = { "Agu2f": "https://accounts.google.com/ServiceLogin?continue\u003dhttps%3A%2F%2Faccounts.google.com%2F\u0026hl\u003dit\u0026authuser\u003d0\u0026passive\u003dtrue\u0026sarp\u003d1\u0026aodrpl\u003d1\u0026checkedDomains\u003dyoutube\u0026checkConnection\u003dyoutube%3A303\u0026pstMsg\u003d1", "Dbw5Ud": "AEjHL4N-bmMcBI8DxfngnJRKfNTswFvw6OqUrycRJ7yVOo5jZVlL2Uy_CplpID4BE7Fsa0JAoADPmCKElbemsQrYsWgg7nHAfQ", "DpimGf": false, "EP1ykd": ["/_/*"], "FdrFJe": "-6590180093881609916", "FoW6je": false, "GMEZLd": false, "ITxkGb": false, "Im6cmf": "/_/GrowthOnboardUi", "LVIXXb": 1, "LoQv7e": false, "MT7f9b": [], "MUE6Ne": "GrowthOnboardUi", "MuJWjd": false, "Nu68bd": "https://myaccount.google.com/signinoptions/recovery-options-collection", "OHvLlc": false, "Q15GGc": 4, "QGn6Nc": [], "QrtxK": "0", "S06Grb": "103723893590392824913", "S6lZl": 123689017, "S8adqc": false, "SNlM0e": "AH-TDWItaCbzyCcIY0K0inSPQoW-:1726500282923", "TSDtV": "%.@.[[null,[[45451899,null,false,null,null,null,\"fBopob\"],[45450723,null,false,null,null,null,\"XQkE7e\"],[45451905,null,false,null,null,null,\"pq7h0c\"],[45451422,null,true,null,null,null,\"qqZHVc\"],[45451886,null,true,null,null,null,\"TUPaAd\"],[45451891,null,true,null,null,null,\"Yjuvmb\"],[45451880,null,false,null,null,null,\"r3aGYe\"],[45451430,null,true,null,null,null,\"uCHqHb\"],[45451911,null,true,null,null,null,\"nYfOrd\"],[45451895,null,true,null,null,null,\"N2mNvf\"],[45451901,null,null,null,\"sandbox\",null,\"Hr7bGe\"],[45451904,null,null,null,\"prod\",null,\"wMEk2c\"],[45451424,null,null,null,\"\",null,\"Yn5skd\"],[45532343,null,false,null,null,null,\"lnPTU\"],[45451888,null,null,null,\"tqUgcT44J0tARmDaWcP0WgWgBTYx\",null,\"Z0aBre\"],[45462253,null,true,null,null,null,\"Ef0Hvd\"],[45451894,null,false,null,null,null,\"cs7iTe\"],[45451900,null,true,null,null,null,\"BsCOAd\"],[45450722,null,true,null,null,null,\"b1Rcdc\"],[45451427,null,true,null,null,null,\"ioEVrd\"],[45451889,null,null,null,\"4bdMYzv850tARmDaWcP0XGxn4GU3\",null,\"Hrm0c\"],[45451914,null,true,null,null,null,\"ylPZpf\"],[45451916,null,false,null,null,null,\"QlB7Lb\"],[45451921,null,true,null,null,null,\"H65Pq\"],[45478477,null,false,null,null,null,\"zWLcHc\"],[45451903,null,null,null,\"https://accounts.google.com/AccountChooser\",null,\"i1l5Md\"],[45451898,null,true,null,null,null,\"ehFA9\"],[45451909,null,false,null,null,null,\"Wf7Bq\"],[45451915,null,true,null,null,null,\"WhdnBb\"],[45451908,24,null,null,null,null,\"m1zBbf\"],[45451989,100,null,null,null,null,\"pmL3bc\"],[45451892,2,null,null,null,null,\"xzezEc\"],[45451881,null,false,null,null,null,\"zarWvf\"],[45451882,null,false,null,null,null,\"HRnFAe\"],[45451887,null,null,null,\"XTqKFZf5J0tARmDaWcP0UxtB5Xrg\",null,\"VDDAif\"],[45451428,null,true,null,null,null,\"Szjwif\"],[45451918,null,null,null,\"https://android.com/updates\",null,\"jBK5fc\"],[45451896,null,true,null,null,null,\"eE0Uzc\"],[45451912,null,false,null,null,null,\"Akhqlf\"],[45451897,null,true,null,null,null,\"UNEy5c\"],[45451902,null,false,null,null,null,\"Xptfkc\"],[45648089,null,true,null,null,null,\"rJrA0d\"],[45459555,null,false,null,null,null,\"Imeoqb\"],[45451825,null,false,null,null,null,\"GTQlKd\"],[45451913,null,true,null,null,null,\"dEcY1\"],[45451890,null,false,null,null,null,\"NNQnBf\"],[45451423,null,false,null,null,null,\"X4InSe\"],[45451893,450,null,null,null,null,\"bFba2b\"],[45451906,null,false,null,null,null,\"UoNx2e\"],[45652068,null,false,null,null,null,\"dValzd\"],[45451879,null,true,null,null,null,\"QjAk9c\"],[45451429,17,null,null,null,null,\"ckfXqf\"],[45451425,null,null,null,\"\",null,\"V4h4Nc\"],[45451910,null,true,null,null,null,\"E00sfe\"],[45451885,null,true,null,null,null,\"vrFRnd\"],[45451907,null,true,null,null,null,\"WuU0h\"],[45451883,null,true,null,null,null,\"TbCeMd\"]],\"CAMSDh0L5fu4KQqznA0K6fME\"]]]", "Vvafkd": false, "W3Yyqf": "103723893590392824913", "WZsZ1e": "OJobQry67WLjEBGv/AIItAd7Bm7TtbmjG0", "WezG6e": false, "XLeM3e": "https://myaccount.google.com/security/signinoptions/recovery-options-collection?utm_source\u003dWeb\u0026utm_medium\u003dWeb\u0026utm_campaign\u003dinterstitial\u0026oev\u003dlytf%3D7%26wvtx%3D2%26trs%3Dli%26stel%3D1", "YDQe6": "myaccount.google.com", "Yllh3e": "%.@.1726500282909865,150356719,1461941682]", "YwpFzf": -1757386101, "bzWlFf": "web", "cfb2h": "boq_growth-flexagon_20240915.05_p0", "eJMysd": 1, "eptZe": "/_/GrowthOnboardUi/", "fPDxwd": [97517168, 97684531], "gAtJdc": false, "gGcLoe": true, "hMdqof": "shaka-player.compiled.js", "iCzhFc": false, "klNp3d": "", "mJR7jf": false, "mXaIFf": true, "nQyAE": { "qqZHVc": "true", "zWLcHc": "false", "uCHqHb": "true", "ioEVrd": "true", "lnPTU": "false", "Ef0Hvd": "true", "Szjwif": "true", "X4InSe": "false", "ckfXqf": "17", "Yn5skd": "", "V4h4Nc": "", "fBopob": "false", "Yjuvmb": "true", "nYfOrd": "true", "Hr7bGe": "sandbox", "wMEk2c": "prod", "QlB7Lb": "false", "ehFA9": "true", "WhdnBb": "true", "xzezEc": "2", "VDDAif": "XTqKFZf5J0tARmDaWcP0UxtB5Xrg", "pq7h0c": "false", "TUPaAd": "true", "N2mNvf": "true", "Z0aBre": "tqUgcT44J0tARmDaWcP0WgWgBTYx", "Wf7Bq": "false", "jBK5fc": "https://android.com/updates", "Akhqlf": "false", "UNEy5c": "true", "NNQnBf": "false", "bFba2b": "450", "UoNx2e": "false", "E00sfe": "true", "vrFRnd": "true", "WuU0h": "true", "r3aGYe": "false", "Hrm0c": "4bdMYzv850tARmDaWcP0XGxn4GU3", "ylPZpf": "true", "i1l5Md": "https://accounts.google.com/AccountChooser", "zarWvf": "false", "HRnFAe": "false", "Xptfkc": "false", "TbCeMd": "true", "cs7iTe": "false", "BsCOAd": "true", "m1zBbf": "24", "eE0Uzc": "true", "rJrA0d": "true", "dEcY1": "true", "dValzd": "false", "QjAk9c": "true", "b1Rcdc": "true", "XQkE7e": "false", "GTQlKd": "false", "pmL3bc": "100" }, "o6E2Be": "%.@.null,null,null,null,null,[true,false,false],[true]]", "oPEP7c": "", "oTBqmd": 0, "p9hQne": "https://www.gstatic.com/_/boq-googlegrowth/_/r/", "qDCSke": "103723893590392824913", "qwAQke": "GrowthOnboardUi", "rtQCxc": -120, "sDtUYb": 1378259142, "t7gaKc": false, "thykhd": "AFWLbD3N8CfAsfNEL-ZoaR4LvVH8l4FSvBG4fR7ar2lYZaayabA7gK50A2nC5nV2mNyPy-k_56yz4Jq3-iW7gAKYIcvyM4OCE6xFgY-nbhTTl5g\u003d", "tjvGuf": false, "trz3z": 1378259142, "uoqGRe": "YQI9j", "vXmutd": "%.@.\"IT\",\"ZZ\",\"gHT3Og\\u003d\\u003d\"]", "w2btAe": "%.@.\"103723893590392824913\",\"103723893590392824913\",\"0\",false,null,null,true,false]", "xn5OId": false, "y2FhP": "prod", "yFnxrf": 1884, "yV5KKc": [], "zChJod": "%.@.]", "zmtzg": [] };</script>
    <script nonce="">(function () {
            'use strict'; var a = window, d = a.performance, l = k(); a.cc_latency_start_time = d && d.now ? 0 : d && d.timing && d.timing.navigationStart ? d.timing.navigationStart : l; function k() { return d && d.now ? d.now() : (new Date).getTime() } function n(e) { if (d && d.now && d.mark) { var g = d.mark(e); if (g) return g.startTime; if (d.getEntriesByName && (e = d.getEntriesByName(e).pop())) return e.startTime } return k() } a.onaft = function () { n("aft") }; a._isLazyImage = function (e) { return e.hasAttribute("data-src") || e.hasAttribute("data-ils") || e.getAttribute("loading") === "lazy" };
            a.l = function (e) {
                function g(b) { var c = {}; c[b] = k(); a.cc_latency.push(c) } function m(b) { var c = n("iml"); b.setAttribute("data-iml", c); return c } a.cc_aid = e; a.iml_start = a.cc_latency_start_time; a.css_size = 0; a.cc_latency = []; a.ccTick = g; a.onJsLoad = function () { g("jsl") }; a.onCssLoad = function () { g("cssl") }; a._isVisible = function (b, c) {
                    if (!c || c.style.display == "none") return !1; var f = b.defaultView; if (f && f.getComputedStyle && (f = f.getComputedStyle(c), f.height == "0px" || f.width == "0px" || f.visibility == "hidden")) return !1; if (!c.getBoundingClientRect) return !0;
                    var h = c.getBoundingClientRect(); c = h.left + a.pageXOffset; f = h.top + a.pageYOffset; if (f + h.height < 0 || c + h.width < 0 || h.height <= 0 || h.width <= 0) return !1; b = b.documentElement; return f <= (a.innerHeight || b.clientHeight) && c <= (a.innerWidth || b.clientWidth)
                }; a._recordImlEl = m; document.documentElement.addEventListener("load", function (b) {
                    b = b.target; var c; b.tagName != "IMG" || b.hasAttribute("data-iid") || a._isLazyImage(b) || b.hasAttribute("data-noaft") || (c = m(b)); if (a.aft_counter && (b = a.aft_counter.indexOf(b), b !== -1 && (b = a.aft_counter.splice(b,
                        1).length === 1, a.aft_counter.length === 0 && b && c))) a.onaft(c)
                }, !0); a.prt = -1; a.wiz_tick = function () { var b = n("prt"); a.prt = b }
            };
        }).call(this);
        l('jcMhLc')</script>
    <script
        nonce="">var _F_cssRowKey = 'boq-googlegrowth.GrowthOnboardUi.3l4uKVmryWM.L.B1.O'; var _F_combinedSignature = 'AF-uQDmq3n_IkJvCl51cbOUywJJo8jMQsQ'; function _DumpException(e) { throw e; }</script>
    <style
        data-href="https://www.gstatic.com/_/mss/boq-googlegrowth/_/ss/k=boq-googlegrowth.GrowthOnboardUi.3l4uKVmryWM.L.B1.O/am=oGCCzADCAAAg/d=1/ed=1/rs=AF-uQDnOejsIJxOh58vgtjGifaA52klXXg/m=landingview,_b,_tp"
        nonce="">
        /*# sourceMappingURL=chrome.css.map */
        .kFwPee {
            height: 100%
        }

        .ydMMEb {
            width: 100%
        }

        .SSPGKf {
            display: block;
            overflow-y: hidden;
            z-index: 1
        }

        .eejsDc {
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        html,
        body {
            height: 100%;
            overflow: hidden
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: rgba(0, 0, 0, .87);
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            margin: 0;
            text-size-adjust: 100%
        }

        textarea {
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        a {
            text-decoration: none;
            color: #2962ff
        }

        img {
            border: none
        }

        * {
            -webkit-tap-highlight-color: transparent
        }

        #apps-debug-tracers {
            display: none
        }

        .MCcOAc {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            overflow: hidden;
            z-index: 1
        }

        .MCcOAc>.pGxpHc {
            flex-shrink: 0;
            flex-grow: 0
        }

        .IqBfM>.HLlAHb {
            align-items: center;
            display: flex;
            height: 60px;
            position: absolute;
            right: 16px;
            top: 0;
            z-index: 9999
        }

        .VUoKZ {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            z-index: 1001
        }

        .TRHLAc {
            position: absolute;
            top: 0;
            left: 0;
            width: 25%;
            height: 100%;
            background: #68e;
            transform: scaleX(0)
        }

        .TRHLAc {
            transform-origin: 0 0
        }

        .mIM26c .VUoKZ {
            display: block
        }

        .mIM26c .TRHLAc {
            animation: boqChromeapiPageProgressAnimation 1s infinite;
            animation-timing-function: cubic-bezier(.4, 0, 1, 1);
            animation-delay: .1s
        }

        .ghyPEc .VUoKZ {
            position: fixed
        }

        @keyframes boqChromeapiPageProgressAnimation {
            0% {
                transform: scaleX(0)
            }

            50% {
                transform: scaleX(5)
            }

            100% {
                transform: scaleX(5) translateX(100%)
            }
        }

        .IqBfM {
            bottom: auto;
            height: 100%;
            right: auto;
            width: auto
        }

        .snByac {
            text-transform: none
        }

        .f622df,
        .f622df.VfPpkd-Ng57nc {
            border-radius: 4px;
            margin: 16px 16px 80px 16px
        }

        body {
            background-color: #fff;
            overscroll-behavior-x: none
        }

        @media (max-width:600px) {
            .Bokche {
                padding-top: 24px
            }
        }

        @media (min-width:601px) {
            .NJ5Hjb {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                position: relative
            }

            .NJ5Hjb::before,
            .NJ5Hjb::after {
                min-height: 30px;
                flex-grow: 1;
                content: "";
                display: block;
                height: 24px
            }

            .NJ5Hjb .Bokche {
                flex-shrink: 0;
                border: 1.5px solid rgb(218, 220, 224);
                border-radius: 16px;
                display: block;
                margin: 0 auto;
                padding: 24px 48px 36px 48px;
                max-width: 354px;
                min-width: min-content
            }
        }

        @media (min-height:600px) and (orientation:landscape),
        (min-width:600px) and (orientation:portrait) {
            .aJ7CA.TUpp0 .zIX0Ee {
                border: 1px solid rgb(218, 220, 224);
                border-radius: 8px;
                box-sizing: border-box;
                position: absolute;
                margin-left: calc(50% - 252px);
                margin-right: calc(50% - 252px);
                width: 504px;
                padding-left: 32px;
                padding-right: 32px
            }
        }

        @media (orientation:portrait) and (min-width:600px) and (max-width:727px) {
            .aJ7CA.TUpp0 .zIX0Ee {
                height: calc(100% - 192px)
            }

            .aJ7CA.TUpp0 .zIX0Ee.G7MbXc {
                margin-top: 96px;
                padding-top: 58px
            }
        }

        @media (orientation:portrait) and (min-width:728px) {
            .aJ7CA.TUpp0 .zIX0Ee {
                height: calc(100% - 192px)
            }

            .aJ7CA.TUpp0 .zIX0Ee.G7MbXc {
                margin-top: 96px;
                padding-top: 58px
            }
        }

        @media (orientation:landscape) and (min-height:600px) and (max-height:727px) {
            .aJ7CA.TUpp0 .zIX0Ee {
                height: calc(100% - 48px)
            }

            .aJ7CA.TUpp0 .zIX0Ee.G7MbXc {
                margin-top: 24px;
                padding-top: 24px
            }
        }

        @media (orientation:landscape) and (min-height:728px) {
            .aJ7CA.TUpp0 .zIX0Ee {
                height: calc(100% - 144px)
            }

            .aJ7CA.TUpp0 .zIX0Ee.G7MbXc {
                margin-top: 72px;
                padding-top: 32px
            }
        }

        @media (min-device-width:768px) and (min-device-height:500px) and (orientation:portrait) {
            .aJ7CA.do7Gwb .zIX0Ee {
                height: calc(100% - 224px);
                width: calc(100% - 240px);
                padding-left: 32px;
                padding-right: 32px
            }

            .aJ7CA.do7Gwb .zIX0Ee.G7MbXc {
                margin: 96px 120px 128px;
                padding-top: 58px
            }
        }

        @media (min-device-width:768px) and (min-device-height:500px) and (orientation:landscape) {
            .aJ7CA.do7Gwb .zIX0Ee {
                height: calc(100% - 144px);
                max-width: 528px;
                padding-left: 32px;
                padding-right: 32px
            }

            .aJ7CA.do7Gwb .zIX0Ee.G7MbXc {
                margin: 72px calc(50vw - 264px);
                padding-top: 32px
            }
        }

        @media (min-device-width:768px) and (min-device-height:500px) {
            html {
                height: 100vh;
                width: 100vw;
                overscroll-behavior-x: none
            }

            .aJ7CA.do7Gwb .zIX0Ee {
                border: 1px solid rgb(218, 220, 224);
                border-radius: 8px;
                box-sizing: border-box;
                position: absolute
            }
        }

        .T4LgNb {
            bottom: 0;
            left: 0;
            top: 0;
            right: 0;
            position: absolute;
            z-index: 1
        }

        .QMEh5b {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 3
        }

        .AOq4tb {
            height: 56px
        }

        .kFwPee {
            position: relative;
            z-index: 1;
            height: 100%
        }

        .ydMMEb {
            height: 56px;
            width: 100%
        }

        .SSPGKf {
            overflow-y: hidden;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0
        }

        .ecJEib .AOq4tb,
        .ecJEib .ydMMEb {
            height: 64px
        }

        .e2G3Fb.EWZcud .AOq4tb,
        .e2G3Fb.EWZcud .ydMMEb {
            height: 48px
        }

        .e2G3Fb.b30Rkd .AOq4tb,
        .e2G3Fb.b30Rkd .ydMMEb {
            height: 56px
        }

        c-wiz {
            contain: style
        }

        c-wiz>c-data {
            display: none
        }

        c-wiz.rETSD {
            contain: none
        }

        c-wiz.Ubi8Z {
            contain: layout style
        }

        sentinel {}
    </style>
    <script nonce="">onCssLoad();</script>
    <style nonce="">
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKOzY.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7mxKOzY.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4WxKOzY.woff2)format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7WxKOzY.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2)format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Material Icons Extended';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/materialiconsextended/v151/kJEjBvgX7BgnkSrUwT8UnLVc38YydejYY-oE_LvJ.woff2)format('woff2');
        }

        .material-icons-extended {
            font-family: 'Material Icons Extended';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        @font-face {
            font-family: 'Google Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlematerialicons/v141/Gw6kwdfw6UnXLJCcmafZyFRXb3BL9rvi0QZG3Q.woff2)format('woff2');
        }

        .google-material-icons {
            font-family: 'Google Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        @font-face {
            font-family: 'Google Material Icons Filled';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlematerialiconsfilled/v116/WWXFlimHYg6HKI3TavMkbKdhBmDvgach8TVpeGsuueSZJH0.woff2)format('woff2');
        }

        .google-material-icons-filled {
            font-family: 'Google Material Icons Filled';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        @font-face {
            font-family: 'Product Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/productsans/v9/pxiDypQkot1TnFhsFMOfGShVGdeOcEg.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Product Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/productsans/v9/pxiDypQkot1TnFhsFMOfGShVF9eO.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rgCIlsw.woff2)format('woff2');
            unicode-range: U+0308, U+0530-058F, U+2010, U+2024, U+25CC, U+FB13-FB17;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rACIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0980-09FE, U+1CD0, U+1CD2, U+1CD5-1CD6, U+1CD8, U+1CE1, U+1CEA, U+1CED, U+1CF2, U+1CF5-1CF7, U+200C-200D, U+20B9, U+25CC, U+A8F1;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2swCIlsw.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2ugCIlsw.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vwCIlsw.woff2)format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rwCIlsw.woff2)format('woff2');
            unicode-range: U+1200-1399, U+2D80-2DDE, U+AB01-AB2E, U+1E7E0-1E7E6, U+1E7E8-1E7EB, U+1E7ED-1E7EE, U+1E7F0-1E7FE;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2oQCIlsw.woff2)format('woff2');
            unicode-range: U+0589, U+10A0-10FF, U+1C90-1CBA, U+1CBD-1CBF, U+2D00-2D2F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vQCIlsw.woff2)format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2pQCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0A80-0AFF, U+200C-200D, U+20B9, U+25CC, U+A830-A839;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2nQCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0A01-0A76, U+200C-200D, U+20B9, U+25CC, U+262C, U+A830-A839;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vACIlsw.woff2)format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2tQCIlsw.woff2)format('woff2');
            unicode-range: U+1780-17FF, U+19E0-19FF, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2twCIlsw.woff2)format('woff2');
            unicode-range: U+0E81-0EDF, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2pwCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0B01-0B77, U+1CDA, U+1CF2, U+200C-200D, U+20B9, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2owCIlsw.woff2)format('woff2');
            unicode-range: U+0964-0965, U+0D81-0DF4, U+1CF2, U+200C-200D, U+25CC, U+111E1-111F4;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2qACIlsw.woff2)format('woff2');
            unicode-range: U+0964-0965, U+0B82-0BFA, U+200C-200D, U+20B9, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2ogCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0C00-0C7F, U+1CDA, U+1CF2, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2qgCIlsw.woff2)format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2sQCIlsw.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2sACIlsw.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vgCI.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rgCIlsw.woff2)format('woff2');
            unicode-range: U+0308, U+0530-058F, U+2010, U+2024, U+25CC, U+FB13-FB17;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rACIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0980-09FE, U+1CD0, U+1CD2, U+1CD5-1CD6, U+1CD8, U+1CE1, U+1CEA, U+1CED, U+1CF2, U+1CF5-1CF7, U+200C-200D, U+20B9, U+25CC, U+A8F1;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2swCIlsw.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2ugCIlsw.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vwCIlsw.woff2)format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rwCIlsw.woff2)format('woff2');
            unicode-range: U+1200-1399, U+2D80-2DDE, U+AB01-AB2E, U+1E7E0-1E7E6, U+1E7E8-1E7EB, U+1E7ED-1E7EE, U+1E7F0-1E7FE;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2oQCIlsw.woff2)format('woff2');
            unicode-range: U+0589, U+10A0-10FF, U+1C90-1CBA, U+1CBD-1CBF, U+2D00-2D2F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vQCIlsw.woff2)format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2pQCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0A80-0AFF, U+200C-200D, U+20B9, U+25CC, U+A830-A839;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2nQCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0A01-0A76, U+200C-200D, U+20B9, U+25CC, U+262C, U+A830-A839;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vACIlsw.woff2)format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2tQCIlsw.woff2)format('woff2');
            unicode-range: U+1780-17FF, U+19E0-19FF, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2twCIlsw.woff2)format('woff2');
            unicode-range: U+0E81-0EDF, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2pwCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0B01-0B77, U+1CDA, U+1CF2, U+200C-200D, U+20B9, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2owCIlsw.woff2)format('woff2');
            unicode-range: U+0964-0965, U+0D81-0DF4, U+1CF2, U+200C-200D, U+25CC, U+111E1-111F4;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2qACIlsw.woff2)format('woff2');
            unicode-range: U+0964-0965, U+0B82-0BFA, U+200C-200D, U+20B9, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2ogCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0C00-0C7F, U+1CDA, U+1CF2, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2qgCIlsw.woff2)format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2sQCIlsw.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2sACIlsw.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vgCI.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rgCIlsw.woff2)format('woff2');
            unicode-range: U+0308, U+0530-058F, U+2010, U+2024, U+25CC, U+FB13-FB17;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rACIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0980-09FE, U+1CD0, U+1CD2, U+1CD5-1CD6, U+1CD8, U+1CE1, U+1CEA, U+1CED, U+1CF2, U+1CF5-1CF7, U+200C-200D, U+20B9, U+25CC, U+A8F1;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2swCIlsw.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2ugCIlsw.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vwCIlsw.woff2)format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2rwCIlsw.woff2)format('woff2');
            unicode-range: U+1200-1399, U+2D80-2DDE, U+AB01-AB2E, U+1E7E0-1E7E6, U+1E7E8-1E7EB, U+1E7ED-1E7EE, U+1E7F0-1E7FE;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2oQCIlsw.woff2)format('woff2');
            unicode-range: U+0589, U+10A0-10FF, U+1C90-1CBA, U+1CBD-1CBF, U+2D00-2D2F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vQCIlsw.woff2)format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2pQCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0A80-0AFF, U+200C-200D, U+20B9, U+25CC, U+A830-A839;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2nQCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0A01-0A76, U+200C-200D, U+20B9, U+25CC, U+262C, U+A830-A839;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vACIlsw.woff2)format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2tQCIlsw.woff2)format('woff2');
            unicode-range: U+1780-17FF, U+19E0-19FF, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2twCIlsw.woff2)format('woff2');
            unicode-range: U+0E81-0EDF, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2pwCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0B01-0B77, U+1CDA, U+1CF2, U+200C-200D, U+20B9, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2owCIlsw.woff2)format('woff2');
            unicode-range: U+0964-0965, U+0D81-0DF4, U+1CF2, U+200C-200D, U+25CC, U+111E1-111F4;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2qACIlsw.woff2)format('woff2');
            unicode-range: U+0964-0965, U+0B82-0BFA, U+200C-200D, U+20B9, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2ogCIlsw.woff2)format('woff2');
            unicode-range: U+0951-0952, U+0964-0965, U+0C00-0C7F, U+1CDA, U+1CF2, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2qgCIlsw.woff2)format('woff2');
            unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2sQCIlsw.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2sACIlsw.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/googlesans/v58/4UaRrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iq2vgCI.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Google Sans Display';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesansdisplay/v13/ea8FacM9Wef3EJPWRrHjgE4B6CnlZxHVDvr9oS_a.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Google Sans Display';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesansdisplay/v13/ea8FacM9Wef3EJPWRrHjgE4B6CnlZxHVDv39oS_a.woff2)format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        @font-face {
            font-family: 'Google Sans Display';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesansdisplay/v13/ea8FacM9Wef3EJPWRrHjgE4B6CnlZxHVDvH9oS_a.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Google Sans Display';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesansdisplay/v13/ea8FacM9Wef3EJPWRrHjgE4B6CnlZxHVDvD9oS_a.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Google Sans Display';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesansdisplay/v13/ea8FacM9Wef3EJPWRrHjgE4B6CnlZxHVDv79oQ.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <script nonce="">(function () {
            'use strict'; function d() { var a = g, b = 0; return function () { return b < a.length ? { done: !1, value: a[b++] } : { done: !0 } } };/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
            var k = this || self;/*

 Copyright 2024 Google, Inc
 SPDX-License-Identifier: MIT
*/
            var l = ["focus", "blur", "error", "load", "toggle"]; function m(a) { return a === "mouseenter" ? "mouseover" : a === "mouseleave" ? "mouseout" : a === "pointerenter" ? "pointerover" : a === "pointerleave" ? "pointerout" : a }; function n(a) { this.l = {}; this.m = {}; this.i = null; this.g = []; this.o = a } n.prototype.handleEvent = function (a, b, c) { q(this, { eventType: a, event: b, targetElement: b.target, eic: c, timeStamp: Date.now(), eia: void 0, eirp: void 0, eiack: void 0 }) }; function q(a, b) { if (a.i) a.i(b); else { b.eirp = !0; var c; (c = a.g) == null || c.push(b) } }
            function r(a, b, c) { if (!(b in a.l) && a.o) { var f = function (e, p, B) { a.handleEvent(e, p, B) }; a.l[b] = f; c = m(c || b); if (c !== b) { var h = a.m[c] || []; h.push(b); a.m[c] = h } a.o.addEventListener(c, function (e) { return function (p) { f(b, p, e) } }) } } n.prototype.j = function (a) { return this.l[a] }; n.prototype.ecrd = function (a) { this.i = a; var b; if ((b = this.g) == null ? 0 : b.length) { for (a = 0; a < this.g.length; a++)q(this, this.g[a]); this.g = null } }; var t = typeof navigator !== "undefined" && /iPhone|iPad|iPod/.test(navigator.userAgent); function u(a) { this.g = a; this.i = [] } u.prototype.addEventListener = function (a, b) { t && (this.g.style.cursor = "pointer"); var c = this.i, f = c.push, h = this.g; b = b(this.g); var e = !1; l.indexOf(a) >= 0 && (e = !0); h.addEventListener(a, b, e); f.call(c, { eventType: a, j: b, capture: e }) }; var g = "click dblclick focus focusin blur error focusout keydown keyup keypress load mouseover mouseout mouseenter mouseleave submit toggle touchstart touchend touchmove touchcancel auxclick change compositionstart compositionupdate compositionend beforeinput input select textinput copy cut paste mousedown mouseup wheel contextmenu dragover dragenter dragleave drop dragstart dragend pointerdown pointermove pointerup pointercancel pointerenter pointerleave pointerover pointerout gotpointercapture lostpointercapture ended loadedmetadata pagehide pageshow visibilitychange beforematch".split(" ");
            if (!(g instanceof Array)) { var v; var w = typeof Symbol != "undefined" && Symbol.iterator && g[Symbol.iterator]; if (w) v = w.call(g); else if (typeof g.length == "number") v = { next: d() }; else throw Error(String(g) + " is not an iterable or ArrayLike"); for (var x, y = []; !(x = v.next()).done;)y.push(x.value) }; var z = function (a) { return { trigger: function (b) { var c = a.j(b.type); c || (r(a, b.type), c = a.j(b.type)); var f = b.target || b.srcElement; c && c(b.type, b, f.ownerDocument.documentElement) }, configure: function (b) { b(a) } } }(function () { var a = window, b = new u(a.document.documentElement), c = new n(b); g.forEach(function (e) { return r(c, e) }); var f, h; "onwebkitanimationend" in a && (f = "webkitAnimationEnd"); r(c, "animationend", f); "onwebkittransitionend" in a && (h = "webkitTransitionEnd"); r(c, "transitionend", h); return { s: c, u: b } }().s), A = ["BOQ_wizbind"],
                C = window || k; A[0] in C || typeof C.execScript == "undefined" || C.execScript("var " + A[0]); for (var D; A.length && (D = A.shift());)A.length || z === void 0 ? C[D] && C[D] !== Object.prototype[D] ? C = C[D] : C = C[D] = {} : C[D] = z;
        }).call(this);
    </script>
    <script nocollect="" src="./access_files/m=_b,_tp" defer="" id="base-js" fetchpriority="high" nonce=""></script>
    <script
        nonce="">if (window.BOQ_loadedInitialJS) { onJsLoad(); } else { document.getElementById('base-js').addEventListener('load', onJsLoad, false); }</script>
    <script nonce="">
        window['_wjdc'] = function (d) { window['_wjdd'] = d };
    </script>
    <title>Account Google</title>
    <script
        nonce="">var AF_initDataKeys = ["ds:0"]; var AF_dataServiceRequests = { 'ds:0': { id: 'Apk87', request: [1378259142, [], null, null, null, 1, null, 0, null, 4] } }; var AF_initDataChunkQueue = []; var AF_initDataCallback; var AF_initDataInitializeCallback; if (AF_initDataInitializeCallback) { AF_initDataInitializeCallback(AF_initDataKeys, AF_initDataChunkQueue, AF_dataServiceRequests); } if (!AF_initDataCallback) { AF_initDataCallback = function (chunk) { AF_initDataChunkQueue.push(chunk); }; }</script>
    <style nonce="" type="text/css" data-late-css="">
        .KL4X6e {
            background: #eee;
            bottom: 0;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .TuA45b {
            opacity: .8
        }

        .VfPpkd-dgl2Hf-ppHlrf-sM5MNb {
            display: inline
        }

        html[dir=rtl] .giSqbe {
            transform: scaleX(-1)
        }

        @keyframes mdc-ripple-fg-radius-in {
            0% {
                animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
            }

            to {
                transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
            }
        }

        @keyframes mdc-ripple-fg-opacity-in {
            0% {
                animation-timing-function: linear;
                opacity: 0
            }

            to {
                opacity: var(--mdc-ripple-fg-opacity, 0)
            }
        }

        @keyframes mdc-ripple-fg-opacity-out {
            0% {
                animation-timing-function: linear;
                opacity: var(--mdc-ripple-fg-opacity, 0)
            }

            to {
                opacity: 0
            }
        }

        .VfPpkd-ksKsZd-XxIAqe {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity;
            position: relative;
            outline: none;
            overflow: hidden
        }

        .VfPpkd-ksKsZd-XxIAqe::before,
        .VfPpkd-ksKsZd-XxIAqe::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-ksKsZd-XxIAqe::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-ksKsZd-XxIAqe::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf::after {
            animation: mdc-ripple-fg-opacity-out 150ms;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-ksKsZd-XxIAqe::before,
        .VfPpkd-ksKsZd-XxIAqe::after {
            top: calc(50% - 100%);
            left: calc(50% - 100%);
            width: 200%;
            height: 200%
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded],
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd {
            overflow: visible
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded]::before,
        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded]::after,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd::before,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd::after {
            top: calc(50% - 50%);
            left: calc(50% - 50%);
            width: 100%;
            height: 100%
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded].VfPpkd-ksKsZd-mWPk3d::before,
        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded].VfPpkd-ksKsZd-mWPk3d::after,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd.VfPpkd-ksKsZd-mWPk3d::before,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd.VfPpkd-ksKsZd-mWPk3d::after {
            top: var(--mdc-ripple-top, calc(50% - 50%));
            left: var(--mdc-ripple-left, calc(50% - 50%));
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded].VfPpkd-ksKsZd-mWPk3d::after,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd.VfPpkd-ksKsZd-mWPk3d::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-ksKsZd-XxIAqe::before,
        .VfPpkd-ksKsZd-XxIAqe::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-ksKsZd-XxIAqe:hover::before,
        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, 0.04)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before,
        .VfPpkd-ksKsZd-XxIAqe:not(.VfPpkd-ksKsZd-mWPk3d):focus::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, 0.12)
        }

        .VfPpkd-ksKsZd-XxIAqe:not(.VfPpkd-ksKsZd-mWPk3d)::after {
            transition: opacity 150ms linear
        }

        .VfPpkd-ksKsZd-XxIAqe:not(.VfPpkd-ksKsZd-mWPk3d):active::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-Bz112c-LgbsSe {
            font-size: 24px;
            width: 48px;
            height: 48px;
            padding: 12px
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-Jh9lGc {
            width: 40px;
            height: 40px;
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 4px;
            margin-left: 4px
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            max-height: 40px;
            max-width: 40px
        }

        .VfPpkd-Bz112c-LgbsSe:disabled {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-disabled-on-light, rgba(0, 0, 0, .38))
        }

        .VfPpkd-Bz112c-LgbsSe svg,
        .VfPpkd-Bz112c-LgbsSe img {
            width: 24px;
            height: 24px
        }

        .VfPpkd-Bz112c-LgbsSe {
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            border: none;
            outline: none;
            background-color: transparent;
            fill: currentColor;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
            user-select: none;
            z-index: 0;
            overflow: visible
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-RLmnJb {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 50%;
            width: 48px;
            transform: translate(-50%, -50%)
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-J1Ukfc-LhBDec,
            .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                display: block
            }
        }

        .VfPpkd-Bz112c-LgbsSe:disabled {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-Bz112c-LgbsSe[hidden] {
            display: none
        }

        .VfPpkd-Bz112c-LgbsSe-OWXEXe-KVuj8d-Q3DXx {
            align-items: center;
            display: inline-flex;
            justify-content: center
        }

        .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%;
            display: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-Bz112c-kBDsod {
            display: inline-block
        }

        .VfPpkd-Bz112c-kBDsod.VfPpkd-Bz112c-kBDsod-OWXEXe-IT5dJd,
        .VfPpkd-Bz112c-LgbsSe-OWXEXe-IT5dJd .VfPpkd-Bz112c-kBDsod {
            display: none
        }

        .VfPpkd-Bz112c-LgbsSe-OWXEXe-IT5dJd .VfPpkd-Bz112c-kBDsod.VfPpkd-Bz112c-kBDsod-OWXEXe-IT5dJd {
            display: inline-block
        }

        .VfPpkd-Bz112c-mRLv6 {
            height: 100%;
            left: 0;
            outline: none;
            position: absolute;
            top: 0;
            width: 100%
        }

        .VfPpkd-Bz112c-LgbsSe {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-Bz112c-Jh9lGc::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-Bz112c-Jh9lGc::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-Bz112c-Jh9lGc::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0);
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-Bz112c-LgbsSe:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-Bz112c-LgbsSe:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc {
            height: 100%;
            left: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1
        }

        .VfPpkd-LgbsSe {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            min-width: 64px;
            border: none;
            outline: none;
            line-height: inherit;
            user-select: none;
            -webkit-appearance: none;
            overflow: visible;
            vertical-align: middle;
            background: transparent
        }

        .VfPpkd-LgbsSe .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-LgbsSe::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        .VfPpkd-LgbsSe:active {
            outline: none
        }

        .VfPpkd-LgbsSe:hover {
            cursor: pointer
        }

        .VfPpkd-LgbsSe:disabled {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-LgbsSe[hidden] {
            display: none
        }

        .VfPpkd-LgbsSe .VfPpkd-kBDsod {
            margin-left: 0;
            margin-right: 8px;
            display: inline-block;
            position: relative;
            vertical-align: top
        }

        [dir=rtl] .VfPpkd-LgbsSe .VfPpkd-kBDsod,
        .VfPpkd-LgbsSe .VfPpkd-kBDsod[dir=rtl] {
            margin-left: 8px;
            margin-right: 0
        }

        .VfPpkd-LgbsSe .VfPpkd-UdE5de-uDEFge {
            font-size: 0;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            line-height: normal
        }

        .VfPpkd-LgbsSe .VfPpkd-vQzf8d {
            position: relative
        }

        .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px);
            display: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-J1Ukfc-LhBDec,
            .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-J1Ukfc-LhBDec {
                display: block
            }
        }

        .VfPpkd-LgbsSe .VfPpkd-RLmnJb {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .VfPpkd-vQzf8d+.VfPpkd-kBDsod {
            margin-left: 8px;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-vQzf8d+.VfPpkd-kBDsod,
        .VfPpkd-vQzf8d+.VfPpkd-kBDsod[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        svg.VfPpkd-kBDsod {
            fill: currentColor
        }

        .VfPpkd-LgbsSe-OWXEXe-dgl2Hf {
            margin-top: 6px;
            margin-bottom: 6px
        }

        .VfPpkd-LgbsSe {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            text-decoration: none
        }

        .VfPpkd-LgbsSe {
            padding: 0 8px 0 8px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ {
            transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            padding: 0 16px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 12px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 16px 0 12px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb {
            transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            padding: 0 16px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 12px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 16px 0 12px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc {
            border-style: solid;
            transition: border .28s cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc {
            border-style: solid;
            border-color: transparent
        }

        .VfPpkd-LgbsSe {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            z-index: 0
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Jh9lGc::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Jh9lGc::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-Jh9lGc::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-Jh9lGc::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-Jh9lGc::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Jh9lGc::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-Jh9lGc {
            position: absolute;
            box-sizing: content-box;
            overflow: hidden;
            z-index: 0;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .VfPpkd-LgbsSe {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px
        }

        .VfPpkd-LgbsSe:not(:disabled) {
            color: #6200ee
        }

        .VfPpkd-LgbsSe:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-text-button-pressed-state-layer-opacity, 0.12)
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec {
            border-radius: 2px
        }

        .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec::after {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(:disabled) {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:disabled {
            background-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(:disabled) {
            color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc::before {
            background-color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc::after {
            background-color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .08
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-filled-button-pressed-state-layer-opacity, 0.24)
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-J1Ukfc-LhBDec {
            border-radius: 2px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-J1Ukfc-LhBDec::after {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px;
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(:disabled) {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:disabled {
            background-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(:disabled) {
            color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-Jh9lGc::before {
            background-color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-Jh9lGc::after {
            background-color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .08
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-protected-button-pressed-state-layer-opacity, 0.24)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-J1Ukfc-LhBDec {
            border-radius: 2px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-J1Ukfc-LhBDec::after {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d):focus {
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:hover {
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(:disabled):active {
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:disabled {
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px;
            padding: 0 15px 0 15px;
            border-width: 1px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(:disabled) {
            color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc::before {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc::after {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-outlined-button-pressed-state-layer-opacity, 0.12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-J1Ukfc-LhBDec {
            border-radius: 2px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-J1Ukfc-LhBDec::after {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(:disabled) {
            border-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:disabled {
            border-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 11px 0 15px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 15px 0 11px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc {
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            border-width: 1px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-RLmnJb {
            left: -1px;
            width: calc(100% + 2px)
        }

        .nCP5yc {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            box-shadow: none
        }

        .nCP5yc .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .nCP5yc:not(:disabled) {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-fillbutton-container-color, rgb(26, 115, 232))
        }

        .nCP5yc:not(:disabled) {
            color: #fff;
            color: var(--gm-fillbutton-ink-color, #fff)
        }

        .nCP5yc:disabled {
            background-color: rgba(60, 64, 67, .12);
            background-color: var(--gm-fillbutton-disabled-container-color, rgba(60, 64, 67, .12))
        }

        .nCP5yc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-fillbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .nCP5yc .VfPpkd-Jh9lGc::before,
        .nCP5yc .VfPpkd-Jh9lGc::after {
            background-color: rgb(32, 33, 36);
            background-color: var(--gm-fillbutton-state-color, rgb(32, 33, 36))
        }

        .nCP5yc:hover .VfPpkd-Jh9lGc::before,
        .nCP5yc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .16;
            opacity: var(--mdc-ripple-hover-opacity, .16)
        }

        .nCP5yc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-press-opacity, .2)
        }

        .nCP5yc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.2)
        }

        .nCP5yc .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #fff
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .nCP5yc:hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .nCP5yc:hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .nCP5yc:active {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 2px 6px 2px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .nCP5yc:active .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .nCP5yc:disabled {
            box-shadow: none
        }

        .nCP5yc:disabled:hover .VfPpkd-Jh9lGc::before,
        .nCP5yc:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .nCP5yc:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .nCP5yc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .nCP5yc:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .nCP5yc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .nCP5yc:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .nCP5yc:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Rj2Mlf {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            box-shadow: none
        }

        .Rj2Mlf .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .Rj2Mlf:not(:disabled) {
            color: rgb(26, 115, 232);
            color: var(--gm-hairlinebutton-ink-color, rgb(26, 115, 232))
        }

        .Rj2Mlf:not(:disabled) {
            border-color: rgb(218, 220, 224);
            border-color: var(--gm-hairlinebutton-outline-color, rgb(218, 220, 224))
        }

        .Rj2Mlf:not(:disabled):hover {
            border-color: rgb(218, 220, 224);
            border-color: var(--gm-hairlinebutton-outline-color, rgb(218, 220, 224))
        }

        .Rj2Mlf:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .Rj2Mlf:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: rgb(23, 78, 166);
            border-color: var(--gm-hairlinebutton-outline-color--stateful, rgb(23, 78, 166))
        }

        .Rj2Mlf:not(:disabled):active,
        .Rj2Mlf:not(:disabled):focus:active {
            border-color: rgb(218, 220, 224);
            border-color: var(--gm-hairlinebutton-outline-color, rgb(218, 220, 224))
        }

        .Rj2Mlf:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-hairlinebutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .Rj2Mlf:disabled {
            border-color: rgba(60, 64, 67, .12);
            border-color: var(--gm-hairlinebutton-disabled-outline-color, rgba(60, 64, 67, .12))
        }

        .Rj2Mlf:hover:not(:disabled),
        .Rj2Mlf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .Rj2Mlf:active:not(:disabled) {
            color: rgb(23, 78, 166);
            color: var(--gm-hairlinebutton-ink-color--stateful, rgb(23, 78, 166))
        }

        .Rj2Mlf .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(26, 115, 232)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .Rj2Mlf .VfPpkd-Jh9lGc::before,
        .Rj2Mlf .VfPpkd-Jh9lGc::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-hairlinebutton-state-color, rgb(26, 115, 232))
        }

        .Rj2Mlf:hover .VfPpkd-Jh9lGc::before,
        .Rj2Mlf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .Rj2Mlf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .Rj2Mlf.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .Rj2Mlf:disabled:hover .VfPpkd-Jh9lGc::before,
        .Rj2Mlf:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .Rj2Mlf:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Rj2Mlf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .Rj2Mlf:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Rj2Mlf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .Rj2Mlf:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .b9hyVd {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .b9hyVd:not(:disabled) {
            background-color: #fff;
            background-color: var(--gm-protectedbutton-container-color, #fff)
        }

        .b9hyVd:not(:disabled) {
            color: rgb(26, 115, 232);
            color: var(--gm-protectedbutton-ink-color, rgb(26, 115, 232))
        }

        .b9hyVd:disabled {
            background-color: rgba(60, 64, 67, .12);
            background-color: var(--gm-protectedbutton-disabled-container-color, rgba(60, 64, 67, .12))
        }

        .b9hyVd:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-protectedbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .b9hyVd:hover:not(:disabled),
        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .b9hyVd:active:not(:disabled) {
            color: rgb(23, 78, 166);
            color: var(--gm-protectedbutton-ink-color--stateful, rgb(23, 78, 166))
        }

        .b9hyVd .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(26, 115, 232)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-BFbNVe-bF1uUb,
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd:hover {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 2px 6px 2px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd:hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd:not(:disabled):active {
            border-width: 0;
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 3px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 4px 8px 3px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd .VfPpkd-Jh9lGc::before,
        .b9hyVd .VfPpkd-Jh9lGc::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-protectedbutton-state-color, rgb(26, 115, 232))
        }

        .b9hyVd:hover .VfPpkd-Jh9lGc::before,
        .b9hyVd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .b9hyVd:disabled {
            box-shadow: none
        }

        .b9hyVd:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd:disabled:hover .VfPpkd-Jh9lGc::before,
        .b9hyVd:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .b9hyVd:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .b9hyVd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .b9hyVd:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .b9hyVd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .b9hyVd:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .Kjnxrf {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            box-shadow: none
        }

        .Kjnxrf .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .Kjnxrf:not(:disabled) {
            background-color: rgb(232, 240, 254)
        }

        .Kjnxrf:not(:disabled) {
            color: rgb(25, 103, 210)
        }

        .Kjnxrf:disabled {
            background-color: rgba(60, 64, 67, .12)
        }

        .Kjnxrf:disabled {
            color: rgba(60, 64, 67, .38)
        }

        .Kjnxrf:hover:not(:disabled),
        .Kjnxrf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .Kjnxrf:active:not(:disabled) {
            color: rgb(23, 78, 166)
        }

        .Kjnxrf .VfPpkd-Jh9lGc::before,
        .Kjnxrf .VfPpkd-Jh9lGc::after {
            background-color: rgb(25, 103, 210);
            background-color: var(--mdc-ripple-color, rgb(25, 103, 210))
        }

        .Kjnxrf:hover .VfPpkd-Jh9lGc::before,
        .Kjnxrf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .Kjnxrf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .Kjnxrf.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .Kjnxrf .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(25, 103, 210)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .Kjnxrf:hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .Kjnxrf:hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf:not(:disabled):active {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .Kjnxrf:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf:disabled {
            box-shadow: none
        }

        .Kjnxrf:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf:disabled:hover .VfPpkd-Jh9lGc::before,
        .Kjnxrf:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .Kjnxrf:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Kjnxrf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .Kjnxrf:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Kjnxrf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .Kjnxrf:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .ksBjEc {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none
        }

        .ksBjEc .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .ksBjEc:not(:disabled) {
            background-color: transparent
        }

        .ksBjEc:not(:disabled) {
            color: rgb(26, 115, 232);
            color: var(--gm-colortextbutton-ink-color, rgb(26, 115, 232))
        }

        .ksBjEc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-colortextbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(26, 115, 232)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .ksBjEc:hover:not(:disabled),
        .ksBjEc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .ksBjEc:active:not(:disabled) {
            color: rgb(23, 78, 166);
            color: var(--gm-colortextbutton-ink-color--stateful, rgb(23, 78, 166))
        }

        .ksBjEc .VfPpkd-Jh9lGc::before,
        .ksBjEc .VfPpkd-Jh9lGc::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-colortextbutton-state-color, rgb(26, 115, 232))
        }

        .ksBjEc:hover .VfPpkd-Jh9lGc::before,
        .ksBjEc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .ksBjEc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .ksBjEc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .ksBjEc:disabled:hover .VfPpkd-Jh9lGc::before,
        .ksBjEc:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .ksBjEc:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .ksBjEc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .ksBjEc:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .ksBjEc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .ksBjEc:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .LjDxcd {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none
        }

        .LjDxcd .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .LjDxcd:not(:disabled) {
            color: rgb(95, 99, 104);
            color: var(--gm-neutraltextbutton-ink-color, rgb(95, 99, 104))
        }

        .LjDxcd:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-neutraltextbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .LjDxcd:hover:not(:disabled),
        .LjDxcd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .LjDxcd:active:not(:disabled) {
            color: rgb(32, 33, 36);
            color: var(--gm-neutraltextbutton-ink-color--stateful, rgb(32, 33, 36))
        }

        .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(95, 99, 104)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .LjDxcd .VfPpkd-Jh9lGc::before,
        .LjDxcd .VfPpkd-Jh9lGc::after {
            background-color: rgb(95, 99, 104);
            background-color: var(--gm-neutraltextbutton-state-color, rgb(95, 99, 104))
        }

        .LjDxcd:hover .VfPpkd-Jh9lGc::before,
        .LjDxcd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .LjDxcd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .LjDxcd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .LjDxcd:disabled:hover .VfPpkd-Jh9lGc::before,
        .LjDxcd:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .LjDxcd:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .LjDxcd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .LjDxcd:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .LjDxcd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .LjDxcd:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .DuMIQc {
            padding: 0 24px 0 24px
        }

        .P62QJc {
            padding: 0 23px 0 23px;
            border-width: 1px
        }

        .P62QJc.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 11px 0 23px
        }

        .P62QJc.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 23px 0 11px
        }

        .P62QJc .VfPpkd-Jh9lGc {
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            border-width: 1px
        }

        .P62QJc .VfPpkd-RLmnJb {
            left: -1px;
            width: calc(100% + 2px)
        }

        .yHy1rc {
            z-index: 0
        }

        .yHy1rc .VfPpkd-Bz112c-Jh9lGc::before,
        .yHy1rc .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: -1
        }

        .yHy1rc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-iconbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .fzRBVc {
            z-index: 0
        }

        .fzRBVc .VfPpkd-Bz112c-Jh9lGc::before,
        .fzRBVc .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: -1
        }

        .fzRBVc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-iconbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .WpHeLc {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            outline: none
        }

        [dir=rtl] .HDnnrf .VfPpkd-kBDsod,
        .HDnnrf .VfPpkd-kBDsod[dir=rtl] {
            transform: scaleX(-1)
        }

        [dir=rtl] .QDwDD,
        .QDwDD[dir=rtl] {
            transform: scaleX(-1)
        }

        .PDpWxe {
            will-change: unset
        }

        .LQeN7 .VfPpkd-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid rgb(24, 90, 188);
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .LQeN7 .VfPpkd-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .LQeN7 .VfPpkd-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid rgb(232, 240, 254);
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .LQeN7 .VfPpkd-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        .LQeN7.gmghec .VfPpkd-J1Ukfc-LhBDec {
            display: inline-block
        }

        @media (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .LQeN7.gmghec .VfPpkd-J1Ukfc-LhBDec {
                display: none
            }
        }

        .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid rgb(24, 90, 188);
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%
        }

        @media screen and (forced-colors:active) {
            .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid rgb(232, 240, 254);
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        .mN1ivc.gmghec .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            display: inline-block
        }

        @media (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .mN1ivc.gmghec .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                display: none
            }
        }

        .MyRpB .VfPpkd-kBDsod,
        .MyRpB .VfPpkd-vQzf8d {
            opacity: 0
        }

        [data-tooltip-enabled=true]:disabled,
        .VfPpkd-Bz112c-LgbsSe[data-tooltip-enabled=true]:disabled .VfPpkd-Bz112c-Jh9lGc {
            pointer-events: auto
        }

        .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #6200ee;
            stroke: var(--mdc-theme-primary, #6200ee)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .VfPpkd-JGcpL-uI4vCe-u014N {
            stroke: transparent
        }

        @keyframes mdc-circular-progress-container-rotate {
            to {
                transform: rotate(1turn)
            }
        }

        @keyframes mdc-circular-progress-spinner-layer-rotate {
            12.5% {
                transform: rotate(135deg)
            }

            25% {
                transform: rotate(270deg)
            }

            37.5% {
                transform: rotate(405deg)
            }

            50% {
                transform: rotate(540deg)
            }

            62.5% {
                transform: rotate(675deg)
            }

            75% {
                transform: rotate(810deg)
            }

            87.5% {
                transform: rotate(945deg)
            }

            100% {
                transform: rotate(3turn)
            }
        }

        @keyframes mdc-circular-progress-color-1-fade-in-out {
            from {
                opacity: .99
            }

            25% {
                opacity: .99
            }

            26% {
                opacity: 0
            }

            89% {
                opacity: 0
            }

            90% {
                opacity: .99
            }

            to {
                opacity: .99
            }
        }

        @keyframes mdc-circular-progress-color-2-fade-in-out {
            from {
                opacity: 0
            }

            15% {
                opacity: 0
            }

            25% {
                opacity: .99
            }

            50% {
                opacity: .99
            }

            51% {
                opacity: 0
            }

            to {
                opacity: 0
            }
        }

        @keyframes mdc-circular-progress-color-3-fade-in-out {
            from {
                opacity: 0
            }

            40% {
                opacity: 0
            }

            50% {
                opacity: .99
            }

            75% {
                opacity: .99
            }

            76% {
                opacity: 0
            }

            to {
                opacity: 0
            }
        }

        @keyframes mdc-circular-progress-color-4-fade-in-out {
            from {
                opacity: 0
            }

            65% {
                opacity: 0
            }

            75% {
                opacity: .99
            }

            90% {
                opacity: .99
            }

            to {
                opacity: 0
            }
        }

        @keyframes mdc-circular-progress-left-spin {
            from {
                transform: rotate(265deg)
            }

            50% {
                transform: rotate(130deg)
            }

            to {
                transform: rotate(265deg)
            }
        }

        @keyframes mdc-circular-progress-right-spin {
            from {
                transform: rotate(-265deg)
            }

            50% {
                transform: rotate(-130deg)
            }

            to {
                transform: rotate(-265deg)
            }
        }

        .VfPpkd-JGcpL-P1ekSe {
            display: inline-flex;
            position: relative;
            direction: ltr;
            line-height: 0;
            overflow: hidden;
            transition: opacity .25s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-JGcpL-uI4vCe-haAclf,
        .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G,
        .VfPpkd-JGcpL-IdXvz-haAclf,
        .VfPpkd-JGcpL-QYI5B-pbTTYe {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .VfPpkd-JGcpL-uI4vCe-haAclf {
            transform: rotate(-90deg)
        }

        .VfPpkd-JGcpL-IdXvz-haAclf {
            font-size: 0;
            letter-spacing: 0;
            white-space: nowrap;
            opacity: 0
        }

        .VfPpkd-JGcpL-uI4vCe-LkdAo-Bd00G,
        .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            fill: transparent
        }

        .VfPpkd-JGcpL-uI4vCe-LkdAo {
            transition: stroke-dashoffset .5s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-JGcpL-OcUoKf-TpMipd {
            position: absolute;
            top: 0;
            left: 47.5%;
            box-sizing: border-box;
            width: 5%;
            height: 100%;
            overflow: hidden
        }

        .VfPpkd-JGcpL-OcUoKf-TpMipd .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            left: -900%;
            width: 2000%;
            transform: rotate(180deg)
        }

        .VfPpkd-JGcpL-lLvYUc-e9ayKc {
            display: inline-flex;
            position: relative;
            width: 50%;
            height: 100%;
            overflow: hidden
        }

        .VfPpkd-JGcpL-lLvYUc-e9ayKc .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            width: 200%
        }

        .VfPpkd-JGcpL-lLvYUc-qwU8Me .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            left: -100%
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-uI4vCe-haAclf {
            opacity: 0
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-IdXvz-haAclf {
            opacity: 1
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-IdXvz-haAclf {
            animation: mdc-circular-progress-container-rotate 1.5682352941176s linear infinite
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-QYI5B-pbTTYe {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-R6PoUb {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-1-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-ibL1re {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-2-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-c5RTEf {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-3-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-II5mzb {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-4-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-lLvYUc-LK5yu .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            animation: mdc-circular-progress-left-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-lLvYUc-qwU8Me .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            animation: mdc-circular-progress-right-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-xTMeO {
            opacity: 0
        }

        .DU29of {
            position: relative
        }

        .DU29of .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .DU29of .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #4285f4
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {

            .DU29of .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .DU29of .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-R6PoUb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #4285f4
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-R6PoUb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-ibL1re .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #ea4335
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-ibL1re .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-c5RTEf .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #fbbc04
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-c5RTEf .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-II5mzb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #34a853
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-II5mzb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Mr8B3-V67aGc {
            height: 100%;
            width: 100%;
            position: absolute;
            opacity: 0;
            overflow: hidden;
            z-index: -1
        }

        .VfPpkd-z59Tgd {
            border-radius: 4px;
            border-radius: var(--mdc-shape-small, 4px)
        }

        .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            border-radius: 4px;
            border-radius: var(--mdc-shape-small, 4px)
        }

        .VfPpkd-z59Tgd {
            color: white;
            color: var(--mdc-theme-text-primary-on-dark, white)
        }

        .VfPpkd-z59Tgd {
            background-color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-MlC99b {
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-light, rgba(0, 0, 0, .87))
        }

        .VfPpkd-IqDDtd {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-IqDDtd-hSRGPd {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-a1tyJ-bN97Pc {
            overflow-x: unset;
            overflow-y: auto
        }

        .VfPpkd-suEOdc.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd,
        .VfPpkd-suEOdc.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .VfPpkd-suEOdc.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            background-color: #fff
        }

        .VfPpkd-z59Tgd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit)
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
            border-radius: 4px;
            line-height: 20px
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-z59Tgd .VfPpkd-MlC99b {
            display: block;
            margin-top: 0;
            line-height: 20px;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-subtitle2-font-size, .875rem);
            line-height: 1.375rem;
            line-height: var(--mdc-typography-subtitle2-line-height, 1.375rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-subtitle2-font-weight, 500);
            letter-spacing: .0071428571em;
            letter-spacing: var(--mdc-typography-subtitle2-letter-spacing, .0071428571em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle2-text-transform, inherit)
        }

        .VfPpkd-z59Tgd .VfPpkd-MlC99b::before {
            display: inline-block;
            width: 0;
            height: 24px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-z59Tgd .VfPpkd-IqDDtd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit)
        }

        .VfPpkd-z59Tgd {
            word-break: break-all;
            word-break: var(--mdc-tooltip-word-break, normal);
            overflow-wrap: anywhere
        }

        .VfPpkd-suEOdc-OWXEXe-eo9XGd-RCfa3e .VfPpkd-z59Tgd-OiiCO {
            transition: opacity .15s 0ms cubic-bezier(0, 0, .2, 1), transform .15s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-suEOdc-OWXEXe-ZYIfFd-RCfa3e .VfPpkd-z59Tgd-OiiCO {
            transition: opacity 75ms 0ms cubic-bezier(.4, 0, 1, 1)
        }

        .VfPpkd-suEOdc {
            position: fixed;
            display: none;
            z-index: 9
        }

        .VfPpkd-suEOdc-sM5MNb-OWXEXe-nzrxxc {
            position: relative
        }

        .VfPpkd-suEOdc-OWXEXe-TSZdd,
        .VfPpkd-suEOdc-OWXEXe-eo9XGd,
        .VfPpkd-suEOdc-OWXEXe-ZYIfFd {
            display: inline-flex
        }

        .VfPpkd-suEOdc-OWXEXe-TSZdd.VfPpkd-suEOdc-OWXEXe-nzrxxc,
        .VfPpkd-suEOdc-OWXEXe-eo9XGd.VfPpkd-suEOdc-OWXEXe-nzrxxc,
        .VfPpkd-suEOdc-OWXEXe-ZYIfFd.VfPpkd-suEOdc-OWXEXe-nzrxxc {
            display: inline-block;
            left: -320px;
            position: absolute
        }

        .VfPpkd-z59Tgd {
            line-height: 16px;
            padding: 4px 8px;
            min-width: 40px;
            max-width: 200px;
            min-height: 24px;
            max-height: 40vh;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center
        }

        .VfPpkd-z59Tgd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-z59Tgd::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            min-height: 24px;
            min-width: 40px;
            max-width: 320px;
            position: relative
        }

        .VfPpkd-suEOdc-OWXEXe-LlMNQd .VfPpkd-z59Tgd {
            text-align: left
        }

        [dir=rtl] .VfPpkd-suEOdc-OWXEXe-LlMNQd .VfPpkd-z59Tgd,
        .VfPpkd-suEOdc-OWXEXe-LlMNQd .VfPpkd-z59Tgd[dir=rtl] {
            text-align: right
        }

        .VfPpkd-z59Tgd .VfPpkd-MlC99b {
            margin: 0 8px
        }

        .VfPpkd-z59Tgd .VfPpkd-IqDDtd {
            max-width: 184px;
            margin: 8px;
            text-align: left
        }

        [dir=rtl] .VfPpkd-z59Tgd .VfPpkd-IqDDtd,
        .VfPpkd-z59Tgd .VfPpkd-IqDDtd[dir=rtl] {
            text-align: right
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd .VfPpkd-IqDDtd {
            max-width: 304px;
            align-self: stretch
        }

        .VfPpkd-z59Tgd .VfPpkd-IqDDtd-hSRGPd {
            text-decoration: none
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc-LQLjdd,
        .VfPpkd-IqDDtd,
        .VfPpkd-MlC99b {
            z-index: 1
        }

        .VfPpkd-z59Tgd-OiiCO {
            opacity: 0;
            transform: scale(.8);
            will-change: transform, opacity
        }

        .VfPpkd-suEOdc-OWXEXe-TSZdd .VfPpkd-z59Tgd-OiiCO {
            transform: scale(1);
            opacity: 1
        }

        .VfPpkd-suEOdc-OWXEXe-ZYIfFd .VfPpkd-z59Tgd-OiiCO {
            transform: scale(1)
        }

        .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            position: absolute;
            height: 24px;
            width: 24px;
            transform: rotate(35deg) skewY(20deg) scaleX(.9396926208)
        }

        .VfPpkd-Djsh7e-XxIAqe-ma6Yeb .VfPpkd-BFbNVe-bF1uUb,
        .VfPpkd-Djsh7e-XxIAqe-cGMI2b .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
            outline: 1px solid transparent;
            z-index: -1
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
                outline-color: CanvasText
            }
        }

        .VfPpkd-BFbNVe-bF1uUb {
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
            opacity: 0;
            opacity: var(--mdc-elevation-overlay-opacity, 0);
            transition: opacity .28s cubic-bezier(.4, 0, .2, 1);
            background-color: #fff;
            background-color: var(--mdc-elevation-overlay-color, #fff)
        }

        .NZp2ef {
            background-color: #e8eaed
        }

        .EY8ABd {
            z-index: 2101
        }

        .EY8ABd .VfPpkd-z59Tgd {
            background-color: #3c4043;
            color: #e8eaed
        }

        .EY8ABd .VfPpkd-MlC99b,
        .EY8ABd .VfPpkd-IqDDtd {
            color: #3c4043
        }

        .EY8ABd .VfPpkd-IqDDtd-hSRGPd {
            color: #1a73e8
        }

        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd,
        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            background-color: #fff
        }

        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-MlC99b {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            border-radius: 8px
        }

        .ziykHb {
            z-index: 2101
        }

        .ziykHb .VfPpkd-z59Tgd {
            background-color: #3c4043;
            color: #e8eaed
        }

        .ziykHb .VfPpkd-MlC99b,
        .ziykHb .VfPpkd-IqDDtd {
            color: #3c4043
        }

        .ziykHb .VfPpkd-IqDDtd-hSRGPd {
            color: #1a73e8
        }

        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd,
        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            background-color: #fff
        }

        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-MlC99b {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            border-radius: 8px
        }

        .EY8ABd-OWXEXe-TAWMXe {
            position: absolute;
            left: -10000px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
            -webkit-user-select: none;
            -webkit-user-select: none
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            background-color: #fff;
            background-color: var(--mdc-theme-surface, #fff)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-IE5DDf,
        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc-GGAcbc {
            background-color: rgba(0, 0, 0, .32)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-k2Wrsb {
            color: rgba(0, 0, 0, .87)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-cnG4Wd {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-on-surface, #000))
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb,
        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-T0kwCb,
        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd.VfPpkd-Sx9Kwc-XuHpsb-clz4Ic-yePe5c .VfPpkd-T0kwCb {
            border-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb {
            border-bottom: 1px solid rgba(0, 0, 0, .12);
            margin-bottom: 0
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-XuHpsb-clz4Ic-tJHJj.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            border-radius: 4px;
            border-radius: var(--mdc-shape-medium, 4px)
        }

        .VfPpkd-P5QLlc {
            box-shadow: 0 11px 15px -7px rgba(0, 0, 0, .2), 0 24px 38px 3px rgba(0, 0, 0, .14), 0 9px 46px 8px rgba(0, 0, 0, .12)
        }

        .VfPpkd-k2Wrsb {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-headline6-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1.25rem;
            font-size: var(--mdc-typography-headline6-font-size, 1.25rem);
            line-height: 2rem;
            line-height: var(--mdc-typography-headline6-line-height, 2rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-headline6-font-weight, 500);
            letter-spacing: .0125em;
            letter-spacing: var(--mdc-typography-headline6-letter-spacing, .0125em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-headline6-text-decoration, inherit);
            text-decoration: var(--mdc-typography-headline6-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-headline6-text-transform, inherit)
        }

        .VfPpkd-cnG4Wd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-body1-font-size, 1rem);
            line-height: 1.5rem;
            line-height: var(--mdc-typography-body1-line-height, 1.5rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body1-font-weight, 400);
            letter-spacing: .03125em;
            letter-spacing: var(--mdc-typography-body1-letter-spacing, .03125em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body1-text-transform, inherit)
        }

        .VfPpkd-Sx9Kwc,
        .VfPpkd-IE5DDf {
            position: fixed;
            top: 0;
            left: 0;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 100%;
            height: 100%
        }

        .VfPpkd-Sx9Kwc {
            display: none;
            z-index: 7;
            z-index: var(--mdc-dialog-z-index, 7)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-cnG4Wd {
            padding: 20px 24px 20px 24px
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            min-width: 280px
        }

        @media (max-width:592px) {
            .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
                max-width: calc(100vw - 32px)
            }
        }

        @media (min-width:592px) {
            .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
                max-width: 560px
            }
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            max-height: calc(100% - 32px)
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
            max-width: none
        }

        @media (max-width:960px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                max-height: 560px;
                width: 560px
            }

            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                right: -12px
            }
        }

        @media (max-width:720px) and (max-width:672px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                width: calc(100vw - 112px)
            }
        }

        @media (max-width:720px) and (min-width:672px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                width: 560px
            }
        }

        @media (max-width:720px) and (max-height:720px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                max-height: calc(100vh - 160px)
            }
        }

        @media (max-width:720px) and (min-height:720px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                max-height: 560px
            }
        }

        @media (max-width:720px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                right: -12px
            }
        }

        @media (max-width:600px),
        (max-width:720px) and (max-height:400px),
        (min-width:720px) and (max-height:400px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                height: 100%;
                max-height: 100vh;
                max-width: 100vw;
                width: 100vw;
                border-radius: 0
            }

            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                order: -1;
                left: -12px
            }

            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-oclYLd {
                padding: 0 16px 9px;
                justify-content: flex-start
            }

            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-k2Wrsb {
                margin-left: -8px
            }
        }

        @media (min-width:960px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                width: calc(100vw - 400px)
            }

            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                right: -12px
            }
        }

        .VfPpkd-Sx9Kwc.VfPpkd-IE5DDf-OWXEXe-L6cTce .VfPpkd-IE5DDf {
            opacity: 0
        }

        .VfPpkd-IE5DDf {
            opacity: 0;
            z-index: -1
        }

        .VfPpkd-wzTsW {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            box-sizing: border-box;
            height: 100%;
            opacity: 0;
            pointer-events: none
        }

        .VfPpkd-P5QLlc {
            position: relative;
            display: flex;
            flex-direction: column;
            flex-grow: 0;
            flex-shrink: 0;
            box-sizing: border-box;
            max-width: 100%;
            max-height: 100%;
            pointer-events: auto;
            overflow-y: auto;
            outline: 0;
            transform: scale(.8)
        }

        .VfPpkd-P5QLlc .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        [dir=rtl] .VfPpkd-P5QLlc,
        .VfPpkd-P5QLlc[dir=rtl] {
            text-align: right
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-P5QLlc {
                outline: 2px solid windowText
            }
        }

        .VfPpkd-P5QLlc::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 2px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-P5QLlc::before {
                border-color: CanvasText
            }
        }

        @media screen and (-ms-high-contrast:active),
        screen and (-ms-high-contrast:none) {
            .VfPpkd-P5QLlc::before {
                content: none
            }
        }

        .VfPpkd-k2Wrsb {
            display: block;
            margin-top: 0;
            position: relative;
            flex-shrink: 0;
            box-sizing: border-box;
            margin: 0 0 1px;
            padding: 0 24px 9px
        }

        .VfPpkd-k2Wrsb::before {
            display: inline-block;
            width: 0;
            height: 40px;
            content: "";
            vertical-align: 0
        }

        [dir=rtl] .VfPpkd-k2Wrsb,
        .VfPpkd-k2Wrsb[dir=rtl] {
            text-align: right
        }

        .VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb {
            margin-bottom: 1px;
            padding-bottom: 15px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd {
            align-items: baseline;
            border-bottom: 1px solid transparent;
            display: inline-flex;
            justify-content: space-between;
            padding: 0 24px 9px;
            z-index: 1
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd {
                border-bottom-color: CanvasText
            }
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd .VfPpkd-zMU9ub {
            right: -12px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-k2Wrsb {
            margin-bottom: 0;
            padding: 0;
            border-bottom: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb {
            border-bottom: 0;
            margin-bottom: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-zMU9ub {
            top: 5px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-T0kwCb {
            border-top: 1px solid transparent
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-T0kwCb {
                border-top-color: CanvasText
            }
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb-OWXEXe-diJVc .VfPpkd-zMU9ub {
            margin-top: 4px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb-OWXEXe-diJVc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-zMU9ub {
            margin-top: 0
        }

        .VfPpkd-cnG4Wd {
            flex-grow: 1;
            box-sizing: border-box;
            margin: 0;
            overflow: auto
        }

        .VfPpkd-cnG4Wd>:first-child {
            margin-top: 0
        }

        .VfPpkd-cnG4Wd>:last-child {
            margin-bottom: 0
        }

        .VfPpkd-k2Wrsb+.VfPpkd-cnG4Wd,
        .VfPpkd-oclYLd+.VfPpkd-cnG4Wd {
            padding-top: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb+.VfPpkd-cnG4Wd {
            padding-top: 8px;
            padding-bottom: 8px
        }

        .VfPpkd-cnG4Wd .VfPpkd-StrnGf-rymPhb:first-child:last-child {
            padding: 6px 0 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-cnG4Wd .VfPpkd-StrnGf-rymPhb:first-child:last-child {
            padding: 0
        }

        .VfPpkd-T0kwCb {
            display: flex;
            position: relative;
            flex-shrink: 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            box-sizing: border-box;
            min-height: 52px;
            margin: 0;
            padding: 8px;
            border-top: 1px solid transparent
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-T0kwCb {
                border-top-color: CanvasText
            }
        }

        .VfPpkd-Sx9Kwc-OWXEXe-eu7FSc .VfPpkd-T0kwCb {
            flex-direction: column;
            align-items: flex-end
        }

        .VfPpkd-M1klYe {
            margin-left: 8px;
            margin-right: 0;
            max-width: 100%;
            text-align: right
        }

        [dir=rtl] .VfPpkd-M1klYe,
        .VfPpkd-M1klYe[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        .VfPpkd-M1klYe:first-child {
            margin-left: 0;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-M1klYe:first-child,
        .VfPpkd-M1klYe:first-child[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-M1klYe,
        .VfPpkd-M1klYe[dir=rtl] {
            text-align: left
        }

        .VfPpkd-Sx9Kwc-OWXEXe-eu7FSc .VfPpkd-M1klYe:not(:first-child) {
            margin-top: 12px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c,
        .VfPpkd-Sx9Kwc-OWXEXe-uGFO6d,
        .VfPpkd-Sx9Kwc-OWXEXe-FnSee {
            display: flex
        }

        .VfPpkd-Sx9Kwc-OWXEXe-uGFO6d .VfPpkd-IE5DDf {
            transition: opacity .15s linear
        }

        .VfPpkd-Sx9Kwc-OWXEXe-uGFO6d .VfPpkd-wzTsW {
            transition: opacity 75ms linear, transform .15s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-IE5DDf,
        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-wzTsW {
            transition: opacity 75ms linear
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-wzTsW,
        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-P5QLlc {
            transform: none
        }

        .VfPpkd-Sx9Kwc-OWXEXe-RTQbk .VfPpkd-IE5DDf {
            transition: none;
            opacity: 1
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c .VfPpkd-IE5DDf,
        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c .VfPpkd-wzTsW {
            opacity: 1
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c .VfPpkd-P5QLlc {
            transform: none
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c.VfPpkd-P5QLlc-GGAcbc-OWXEXe-TSZdd .VfPpkd-P5QLlc-GGAcbc {
            opacity: 1
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c.VfPpkd-P5QLlc-GGAcbc-OWXEXe-wJB69c .VfPpkd-P5QLlc-GGAcbc {
            transition: opacity 75ms linear
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c.VfPpkd-P5QLlc-GGAcbc-OWXEXe-eo9XGd .VfPpkd-P5QLlc-GGAcbc {
            transition: opacity .15s linear
        }

        .VfPpkd-P5QLlc-GGAcbc {
            display: none;
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1
        }

        .VfPpkd-P5QLlc-GGAcbc-OWXEXe-TSZdd .VfPpkd-P5QLlc-GGAcbc,
        .VfPpkd-P5QLlc-GGAcbc-OWXEXe-eo9XGd .VfPpkd-P5QLlc-GGAcbc,
        .VfPpkd-P5QLlc-GGAcbc-OWXEXe-wJB69c .VfPpkd-P5QLlc-GGAcbc {
            display: block
        }

        .VfPpkd-Sx9Kwc-XuHpsb-pGuBYc {
            overflow: hidden
        }

        .VfPpkd-Sx9Kwc-OWXEXe-di8rgd-bN97Pc-QFlW2 .VfPpkd-cnG4Wd {
            padding: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-vOE8Lb .VfPpkd-wzTsW .VfPpkd-zMU9ub {
            right: 12px;
            top: 9px;
            position: absolute;
            z-index: 1
        }

        .VfPpkd-IE5DDf-OWXEXe-uIDLbb {
            pointer-events: none
        }

        .VfPpkd-IE5DDf-OWXEXe-uIDLbb .VfPpkd-IE5DDf,
        .VfPpkd-IE5DDf-OWXEXe-uIDLbb .VfPpkd-P5QLlc-GGAcbc {
            display: none
        }

        .cC1eCc {
            z-index: 2001
        }

        .cC1eCc .VfPpkd-k2Wrsb {
            color: #3c4043
        }

        .cC1eCc .VfPpkd-cnG4Wd {
            color: #5f6368
        }

        .cC1eCc .VfPpkd-zMU9ub {
            color: rgb(95, 99, 104)
        }

        .cC1eCc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::before,
        .cC1eCc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: rgb(95, 99, 104);
            background-color: var(--mdc-ripple-color, rgb(95, 99, 104))
        }

        .cC1eCc .VfPpkd-zMU9ub:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .cC1eCc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .cC1eCc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .cC1eCc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .cC1eCc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .cC1eCc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .cC1eCc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .cC1eCc .VfPpkd-IE5DDf,
        .cC1eCc .VfPpkd-P5QLlc-GGAcbc {
            background-color: rgba(32, 33, 36, .6)
        }

        .cC1eCc .VfPpkd-P5QLlc {
            background-color: #fff
        }

        .cC1eCc .VfPpkd-P5QLlc {
            border-width: 0;
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .cC1eCc .VfPpkd-P5QLlc .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .cC1eCc .VfPpkd-P5QLlc {
            border-radius: 8px
        }

        .cC1eCc .VfPpkd-T0kwCb {
            padding-top: 2px;
            padding-bottom: 2px
        }

        .cC1eCc .VfPpkd-T0kwCb .VfPpkd-RLmnJb {
            top: -6px;
            transform: none
        }

        .cC1eCc .VfPpkd-k2Wrsb {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            padding-bottom: 13px
        }

        .cC1eCc .VfPpkd-cnG4Wd {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0142857143em;
            font-weight: 400
        }

        .cC1eCc .VfPpkd-T0kwCb .VfPpkd-LgbsSe+.VfPpkd-LgbsSe {
            margin-left: 8px
        }

        .cC1eCc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-k2Wrsb {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1.125rem;
            letter-spacing: 0;
            font-weight: 400;
            padding-bottom: 0
        }

        .iGu0Be {
            text-align: center
        }

        [dir=rtl] .iGu0Be,
        .iGu0Be[dir=rtl] {
            text-align: center
        }

        .nE3Lu {
            color: rgb(26, 115, 232);
            height: 24px;
            width: 24px
        }

        .nE3Lu::after {
            content: "";
            display: block
        }

        .NMm5M {
            fill: currentColor;
            flex-shrink: 0
        }

        html[dir=rtl] .hhikbc {
            transform: scaleX(-1)
        }

        sentinel {}
    </style>
    <script async="" src="./access_files/lazy.min.js" nonce=""></script>
    <style nonce="" type="text/css" data-late-css="">
        .VfPpkd-StrnGf-rymPhb {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            line-height: 1.5rem;
            margin: 0;
            padding: 8px 0;
            list-style-type: none;
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87))
        }

        .VfPpkd-StrnGf-rymPhb:focus {
            outline: none
        }

        .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            color: rgba(0, 0, 0, .54);
            color: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, .54))
        }

        .VfPpkd-StrnGf-rymPhb-f7MjDc {
            background-color: transparent
        }

        .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-icon-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-StrnGf-rymPhb-IhFlZd {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-hint-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c {
            opacity: .38
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc {
            padding-top: 4px;
            padding-bottom: 4px;
            font-size: .812rem
        }

        .VfPpkd-StrnGf-rymPhb-Tkg0ld {
            display: block
        }

        .VfPpkd-StrnGf-rymPhb-Zmlebc-LhBDec {
            position: absolute
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            padding: 0;
            padding-left: 16px;
            padding-right: 16px;
            height: 48px
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b:focus {
            outline: none
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
        .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
            .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 3px double transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
                border-color: CanvasText
            }
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 72px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: 16px;
            height: 72px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 20px;
            height: 20px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-f7MjDc {
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            fill: currentColor;
            object-fit: cover;
            margin-left: 0;
            margin-right: 32px;
            width: 24px;
            height: 24px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 32px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 32px;
            width: 24px;
            height: 24px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 32px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 40px;
            height: 40px;
            border-radius: 50%
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 40px;
            height: 40px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 56px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 100px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            display: inline-flex
        }

        .VfPpkd-StrnGf-rymPhb-IhFlZd {
            margin-left: auto;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-IhFlZd:not(.HzV7m-fuEl3d) {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-caption-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit)
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] .VfPpkd-StrnGf-rymPhb-IhFlZd,
        [dir=rtl] .VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-IhFlZd {
            margin-left: 0;
            margin-right: auto
        }

        .VfPpkd-StrnGf-rymPhb-b9t22c {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .VfPpkd-StrnGf-rymPhb-b9t22c[for] {
            pointer-events: none
        }

        .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 24px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit);
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            font-size: inherit
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 40px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc .VfPpkd-StrnGf-rymPhb-b9t22c {
            align-self: flex-start
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 64px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 60px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 36px;
            height: 36px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b {
            cursor: pointer
        }

        a.VfPpkd-StrnGf-rymPhb-ibnC6b {
            color: inherit;
            text-decoration: none
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic {
            height: 0;
            margin: 0;
            border: none;
            border-bottom-width: 1px;
            border-bottom-style: solid
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic {
            border-bottom-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd,
        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe,
        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd,
        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 88px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 88px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 88px;
            margin-right: 0;
            width: calc(100% - 104px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 88px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 116px;
            margin-right: 0;
            width: calc(100% - 116px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 116px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 116px;
            margin-right: 0;
            width: calc(100% - 132px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 116px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 0;
            margin-right: 0;
            width: 100%
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 0;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-JNdkSc .VfPpkd-StrnGf-rymPhb {
            padding: 0
        }

        .VfPpkd-StrnGf-rymPhb-oT7voc {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            margin: .75rem 16px
        }

        .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87))
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS {
            color: rgba(0, 0, 0, .54);
            color: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, .54))
        }

        .VfPpkd-rymPhb-bC5pod-fmcmS {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-hint-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            background-color: transparent
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-icon-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-rymPhb-JMEf7e {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-hint-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-JMEf7e {
            opacity: .38
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-L8ivfd-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-bC5pod-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-StrnGf-rymPhb-oT7voc {
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87))
        }

        .VfPpkd-rymPhb-clz4Ic::after {
            border-bottom-color: white
        }

        .VfPpkd-rymPhb {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            line-height: 1.5rem
        }

        .VfPpkd-rymPhb-fpDzbe-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit)
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit)
        }

        .VfPpkd-rymPhb-bC5pod-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-overline-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-overline-font-size, .75rem);
            line-height: 2rem;
            line-height: var(--mdc-typography-overline-line-height, 2rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-overline-font-weight, 500);
            letter-spacing: .1666666667em;
            letter-spacing: var(--mdc-typography-overline-letter-spacing, .1666666667em);
            text-decoration: none;
            -webkit-text-decoration: var(--mdc-typography-overline-text-decoration, none);
            text-decoration: var(--mdc-typography-overline-text-decoration, none);
            text-transform: uppercase;
            text-transform: var(--mdc-typography-overline-text-transform, uppercase)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            width: 24px;
            height: 24px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb {
            width: 56px;
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb {
            width: 100px;
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc .VfPpkd-rymPhb-KkROqb {
            width: 36px;
            height: 20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            width: 24px;
            height: 24px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b .VfPpkd-rymPhb-JMEf7e {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc .VfPpkd-rymPhb-JMEf7e {
            width: 36px;
            height: 20px
        }

        .VfPpkd-rymPhb-oT7voc {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit)
        }

        .VfPpkd-rymPhb-clz4Ic {
            background-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-rymPhb-clz4Ic {
            height: 1px
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-rymPhb-clz4Ic::after {
                content: "";
                display: block;
                border-bottom-width: 1px;
                border-bottom-style: solid
            }
        }

        .VfPpkd-rymPhb {
            margin: 0;
            padding: 8px 0;
            list-style-type: none
        }

        .VfPpkd-rymPhb:focus {
            outline: none
        }

        .VfPpkd-rymPhb-Tkg0ld {
            display: block
        }

        .VfPpkd-rymPhb-ibnC6b {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            padding: 0;
            align-items: stretch;
            cursor: pointer
        }

        .VfPpkd-rymPhb-ibnC6b:focus {
            outline: none
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 48px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 64px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb {
            height: 88px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc .VfPpkd-rymPhb-KkROqb {
            align-self: center;
            margin-top: 0
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: center;
            margin-top: 0
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-tPcied-hXIJHe {
            cursor: auto
        }

        .VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
            .VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 3px double transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:focus::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 3px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:focus::before {
                border-color: CanvasText
            }
        }

        a.VfPpkd-rymPhb-ibnC6b {
            color: inherit;
            text-decoration: none
        }

        .VfPpkd-rymPhb-KkROqb {
            fill: currentColor;
            flex-shrink: 0;
            pointer-events: none
        }

        .VfPpkd-rymPhb-JMEf7e {
            flex-shrink: 0;
            pointer-events: none
        }

        .VfPpkd-rymPhb-Gtdoyb {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            align-self: center;
            flex: 1;
            pointer-events: none
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-Gtdoyb {
            align-self: stretch
        }

        .VfPpkd-rymPhb-Gtdoyb[for] {
            pointer-events: none
        }

        .VfPpkd-rymPhb-fpDzbe-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-L8ivfd-fmcmS {
            white-space: normal;
            line-height: 20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-BYmFj .VfPpkd-rymPhb-L8ivfd-fmcmS {
            white-space: nowrap;
            line-height: auto
        }

        .VfPpkd-rymPhb-bC5pod-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 24px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb {
            border-radius: 50%
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 32px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 32px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb {
            margin-left: 0;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 24px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 24px;
            margin-right: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 24px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 24px;
            margin-right: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: flex-start;
            margin-top: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            margin-left: 28px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 16px;
            margin-right: 28px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-caption-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c .VfPpkd-rymPhb-JMEf7e {
            margin-left: 24px;
            margin-right: 8px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 8px;
            margin-right: 24px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b .VfPpkd-rymPhb-JMEf7e {
            margin-left: 24px;
            margin-right: 8px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 8px;
            margin-right: 24px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc .VfPpkd-rymPhb-JMEf7e {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-BYmFj.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-BYmFj.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-BYmFj.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-BYmFj.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-rymPhb-JNdkSc .VfPpkd-StrnGf-rymPhb {
            padding: 0
        }

        .VfPpkd-rymPhb-oT7voc {
            margin: .75rem 16px
        }

        .VfPpkd-rymPhb-clz4Ic {
            padding: 0;
            background-clip: content-box
        }

        .VfPpkd-rymPhb-clz4Ic.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-fmcmS.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe {
            padding-left: 16px;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-clz4Ic.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-fmcmS.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-fmcmS.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl] {
            padding-left: auto;
            padding-right: 16px
        }

        .VfPpkd-rymPhb-clz4Ic.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-fmcmS.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe {
            padding-left: auto;
            padding-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-clz4Ic.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-fmcmS.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .VfPpkd-rymPhb-clz4Ic.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-fmcmS.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-scr2fc.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl],
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl] {
            padding-left: 16px;
            padding-right: auto
        }

        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-rymPhb-clz4Ic,
        .VfPpkd-rymPhb-clz4Ic[dir=rtl] {
            padding: 0
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-rymPhb-pZXsl::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-rymPhb-pZXsl::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-rymPhb-pZXsl::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-rymPhb-pZXsl::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-rymPhb-pZXsl::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-rymPhb-pZXsl::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:hover .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .12;
            opacity: var(--mdc-ripple-activated-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .16;
            opacity: var(--mdc-ripple-hover-opacity, .16)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-pZXsl::before {
            opacity: .12;
            opacity: var(--mdc-ripple-activated-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-pZXsl::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:hover .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .16;
            opacity: var(--mdc-ripple-hover-opacity, .16)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .08;
            opacity: var(--mdc-ripple-selected-opacity, .08)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .12;
            opacity: var(--mdc-ripple-hover-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-focus-opacity, .2)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-press-opacity, .2)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::before {
            opacity: .08;
            opacity: var(--mdc-ripple-selected-opacity, .08)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .12;
            opacity: var(--mdc-ripple-hover-opacity, .12)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-focus-opacity, .2)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-press-opacity, .2)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.2)
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-pZXsl,
        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-rymPhb-pZXsl::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-rymPhb-pZXsl::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-rymPhb-pZXsl::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-rymPhb-pZXsl::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-rymPhb-pZXsl::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-rymPhb-pZXsl::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b:hover .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-pZXsl::before {
            opacity: .12;
            opacity: var(--mdc-ripple-activated-opacity, .12)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-pZXsl::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b:hover .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .16;
            opacity: var(--mdc-ripple-hover-opacity, .16)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::before {
            opacity: .08;
            opacity: var(--mdc-ripple-selected-opacity, .08)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .12;
            opacity: var(--mdc-ripple-hover-opacity, .12)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-focus-opacity, .2)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-press-opacity, .2)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.2)
        }

        :not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-rymPhb-ibnC6b .VfPpkd-rymPhb-pZXsl {
            position: relative;
            outline: none;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .VfPpkd-MPu53c {
            padding: 11px;
            padding: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
            margin: 0;
            margin: calc((var(--mdc-checkbox-touch-target-size, 40px) - 40px)/2)
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-MPu53c:hover .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #018786;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-secondary, #018786))
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:hover .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #018786;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-secondary, #018786))
        }

        .VfPpkd-MPu53c .VfPpkd-YQoJzd {
            top: 11px;
            top: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
            left: 11px;
            left: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe {
            top: 0;
            top: calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
            right: 0;
            right: calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
            left: 0;
            left: calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
            width: 40px;
            width: var(--mdc-checkbox-touch-target-size, 40px);
            height: 40px;
            height: var(--mdc-checkbox-touch-target-size, 40px)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: rgba(0, 0, 0, .54);
            border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
            background-color: transparent
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #018786;
            border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
            background-color: #018786;
            background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
        }

        @keyframes mdc-checkbox-fade-in-background-8A000000FF01878600000000FF018786 {
            0% {
                border-color: rgba(0, 0, 0, .54);
                border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
                background-color: transparent
            }

            50% {
                border-color: #018786;
                border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
                background-color: #018786;
                background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
            }
        }

        @keyframes mdc-checkbox-fade-out-background-8A000000FF01878600000000FF018786 {

            0%,
            80% {
                border-color: #018786;
                border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
                background-color: #018786;
                background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
            }

            100% {
                border-color: rgba(0, 0, 0, .54);
                border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
                background-color: transparent
            }
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-8A000000FF01878600000000FF018786
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-8A000000FF01878600000000FF018786
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: rgba(0, 0, 0, .38);
            border-color: var(--mdc-checkbox-disabled-color, rgba(0, 0, 0, .38));
            background-color: transparent
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
            border-color: transparent;
            background-color: rgba(0, 0, 0, .38);
            background-color: var(--mdc-checkbox-disabled-color, rgba(0, 0, 0, .38))
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-ink-color, #fff)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-ink-color, #fff)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-ink-color, #fff)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-ink-color, #fff)
        }

        @keyframes mdc-checkbox-unchecked-checked-checkmark-path {

            0%,
            50% {
                stroke-dashoffset: 29.7833385
            }

            50% {
                animation-timing-function: cubic-bezier(0, 0, .2, 1)
            }

            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes mdc-checkbox-unchecked-indeterminate-mixedmark {

            0%,
            68.2% {
                transform: scaleX(0)
            }

            68.2% {
                animation-timing-function: cubic-bezier(0, 0, 0, 1)
            }

            100% {
                transform: scaleX(1)
            }
        }

        @keyframes mdc-checkbox-checked-unchecked-checkmark-path {
            from {
                animation-timing-function: cubic-bezier(.4, 0, 1, 1);
                opacity: 1;
                stroke-dashoffset: 0
            }

            to {
                opacity: 0;
                stroke-dashoffset: -29.7833385
            }
        }

        @keyframes mdc-checkbox-checked-indeterminate-checkmark {
            from {
                animation-timing-function: cubic-bezier(0, 0, .2, 1);
                transform: rotate(0deg);
                opacity: 1
            }

            to {
                transform: rotate(45deg);
                opacity: 0
            }
        }

        @keyframes mdc-checkbox-indeterminate-checked-checkmark {
            from {
                animation-timing-function: cubic-bezier(.14, 0, 0, 1);
                transform: rotate(45deg);
                opacity: 0
            }

            to {
                transform: rotate(1turn);
                opacity: 1
            }
        }

        @keyframes mdc-checkbox-checked-indeterminate-mixedmark {
            from {
                animation-timing-function: mdc-animation-deceleration-curve-timing-function;
                transform: rotate(-45deg);
                opacity: 0
            }

            to {
                transform: rotate(0deg);
                opacity: 1
            }
        }

        @keyframes mdc-checkbox-indeterminate-checked-mixedmark {
            from {
                animation-timing-function: cubic-bezier(.14, 0, 0, 1);
                transform: rotate(0deg);
                opacity: 1
            }

            to {
                transform: rotate(315deg);
                opacity: 0
            }
        }

        @keyframes mdc-checkbox-indeterminate-unchecked-mixedmark {
            0% {
                animation-timing-function: linear;
                transform: scaleX(1);
                opacity: 1
            }

            32.8%,
            100% {
                transform: scaleX(0);
                opacity: 0
            }
        }

        .VfPpkd-MPu53c {
            display: inline-block;
            position: relative;
            flex: 0 0 18px;
            box-sizing: content-box;
            width: 18px;
            height: 18px;
            line-height: 0;
            white-space: nowrap;
            cursor: pointer;
            vertical-align: bottom
        }

        .VfPpkd-MPu53c[hidden] {
            display: none
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec,
        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec,
            .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec::after,
        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec::after,
            .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec::after {
                border-color: CanvasText
            }
        }

        @media (-ms-high-contrast:none) {
            .VfPpkd-MPu53c .VfPpkd-sMek6-LhBDec {
                display: none
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-SJnn3d {
                margin: 0 1px
            }
        }

        .VfPpkd-MPu53c-OWXEXe-OWB6Me {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-YQoJzd {
            display: inline-flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 18px;
            height: 18px;
            border: 2px solid currentColor;
            border-radius: 2px;
            background-color: transparent;
            pointer-events: none;
            will-change: background-color, border-color;
            transition: background-color 90ms 0ms cubic-bezier(.4, 0, .6, 1), border-color 90ms 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-HUofsb {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            transition: opacity .18s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb {
            opacity: 1
        }

        .VfPpkd-HUofsb-Jt5cK {
            transition: stroke-dashoffset .18s 0ms cubic-bezier(.4, 0, .6, 1);
            stroke: currentColor;
            stroke-width: 3.12px;
            stroke-dashoffset: 29.7833385;
            stroke-dasharray: 29.7833385
        }

        .VfPpkd-SJnn3d {
            width: 100%;
            height: 0;
            transform: scaleX(0) rotate(0deg);
            border-width: 1px;
            border-style: solid;
            opacity: 0;
            transition: opacity 90ms 0ms cubic-bezier(.4, 0, .6, 1), transform 90ms 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-YQoJzd {
            animation-duration: .18s;
            animation-timing-function: linear
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-HUofsb-Jt5cK {
            animation: mdc-checkbox-unchecked-checked-checkmark-path .18s linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-SJnn3d {
            animation: mdc-checkbox-unchecked-indeterminate-mixedmark 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-HUofsb-Jt5cK {
            animation: mdc-checkbox-checked-unchecked-checkmark-path 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-A9y3zc .VfPpkd-HUofsb {
            animation: mdc-checkbox-checked-indeterminate-checkmark 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-A9y3zc .VfPpkd-SJnn3d {
            animation: mdc-checkbox-checked-indeterminate-mixedmark 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-barxie .VfPpkd-HUofsb {
            animation: mdc-checkbox-indeterminate-checked-checkmark .5s linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-barxie .VfPpkd-SJnn3d {
            animation: mdc-checkbox-indeterminate-checked-mixedmark .5s linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-SJnn3d {
            animation: mdc-checkbox-indeterminate-unchecked-mixedmark .3s linear 0s;
            transition: none
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd,
        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd {
            transition: border-color 90ms 0ms cubic-bezier(0, 0, .2, 1), background-color 90ms 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK,
        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK {
            stroke-dashoffset: 0
        }

        .VfPpkd-muHVFf-bMcfAe {
            position: absolute;
            margin: 0;
            padding: 0;
            opacity: 0;
            cursor: inherit
        }

        .VfPpkd-muHVFf-bMcfAe:disabled {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-MPu53c-OWXEXe-dgl2Hf {
            margin: 4px;
            margin: calc((var(--mdc-checkbox-state-layer-size, 48px) - var(--mdc-checkbox-state-layer-size, 40px))/2)
        }

        .VfPpkd-MPu53c-OWXEXe-dgl2Hf .VfPpkd-muHVFf-bMcfAe {
            top: -4px;
            top: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
            right: -4px;
            right: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
            left: -4px;
            left: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
            width: 48px;
            width: var(--mdc-checkbox-state-layer-size, 48px);
            height: 48px;
            height: var(--mdc-checkbox-state-layer-size, 48px)
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            transition: opacity .18s 0ms cubic-bezier(0, 0, .2, 1), transform .18s 0ms cubic-bezier(0, 0, .2, 1);
            opacity: 1
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            transform: scaleX(1) rotate(-45deg)
        }

        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-HUofsb,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            transform: rotate(45deg);
            opacity: 0;
            transition: opacity 90ms 0ms cubic-bezier(.4, 0, .6, 1), transform 90ms 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-SJnn3d,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            transform: scaleX(1) rotate(0deg);
            opacity: 1
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb-Jt5cK,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-SJnn3d {
            transition: none
        }

        .VfPpkd-MPu53c {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-OYHm6b::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-OYHm6b::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-OYHm6b::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0);
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-MPu53c {
            z-index: 0
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            z-index: -1;
            z-index: var(--mdc-ripple-z-index, -1)
        }

        .VfPpkd-OYHm6b {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
                border-color: GrayText;
                border-color: var(--mdc-checkbox-disabled-unselected-icon-color, GrayText);
                background-color: transparent
            }

            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
                border-color: GrayText;
                background-color: GrayText;
                background-color: var(--mdc-checkbox-disabled-selected-icon-color, GrayText)
            }

            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonText;
                color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }

            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonText;
                border-color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }

            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonFace;
                color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }

            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonFace;
                border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--mdc-checkbox-disabled-unselected-icon-color, rgba(60, 64, 67, .38));
            background-color: transparent
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
            border-color: transparent;
            background-color: rgba(60, 64, 67, .38);
            background-color: var(--mdc-checkbox-disabled-selected-icon-color, rgba(60, 64, 67, .38))
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-disabled-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #5f6368;
            border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
            background-color: transparent
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #1a73e8;
            border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
        }

        @keyframes mdc-checkbox-fade-in-background-FF5F6368FF1A73E800000000FF1A73E8 {
            0% {
                border-color: #5f6368;
                border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
                background-color: transparent
            }

            50% {
                border-color: #1a73e8;
                border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
                background-color: #1a73e8;
                background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
            }
        }

        @keyframes mdc-checkbox-fade-out-background-FF5F6368FF1A73E800000000FF1A73E8 {

            0%,
            80% {
                border-color: #1a73e8;
                border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
                background-color: #1a73e8;
                background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
            }

            100% {
                border-color: #5f6368;
                border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
                background-color: transparent
            }
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF5F6368FF1A73E800000000FF1A73E8
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF5F6368FF1A73E800000000FF1A73E8
        }

        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #202124;
            border-color: var(--mdc-checkbox-unselected-hover-icon-color, #202124);
            background-color: transparent
        }

        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #174ea6;
            border-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6);
            background-color: #174ea6;
            background-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6)
        }

        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #202124;
            border-color: var(--mdc-checkbox-unselected-focus-icon-color, #202124);
            background-color: transparent
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #174ea6;
            border-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6);
            background-color: #174ea6;
            background-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #202124;
            border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
            background-color: transparent
        }

        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #174ea6;
            border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
            background-color: #174ea6;
            background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
        }

        @keyframes mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6 {
            0% {
                border-color: #202124;
                border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
                background-color: transparent
            }

            50% {
                border-color: #174ea6;
                border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
                background-color: #174ea6;
                background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
            }
        }

        @keyframes mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6 {

            0%,
            80% {
                border-color: #174ea6;
                border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
                background-color: #174ea6;
                background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
            }

            100% {
                border-color: #202124;
                border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
                background-color: transparent
            }
        }

        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe .VfPpkd-OYHm6b::before,
        .Ne8lhe .VfPpkd-OYHm6b::after {
            background-color: #3c4043;
            background-color: var(--mdc-checkbox-unselected-hover-state-layer-color, #3c4043)
        }

        .Ne8lhe:hover .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-checkbox-unselected-hover-state-layer-opacity, .04)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-checkbox-unselected-focus-state-layer-opacity, .12)
        }

        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-checkbox-unselected-pressed-state-layer-opacity, .1)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-checkbox-unselected-pressed-state-layer-opacity, 0.1)
        }

        .Ne8lhe .VfPpkd-OYHm6b::before {
            background-color: #3c4043;
            background-color: var(--mdc-checkbox-unselected-hover-state-layer-color, #3c4043)
        }

        .Ne8lhe .VfPpkd-OYHm6b::after {
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-unselected-pressed-state-layer-color, #1a73e8)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-selected-hover-state-layer-color, #1a73e8)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:hover .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-checkbox-selected-hover-state-layer-opacity, .04)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-checkbox-selected-focus-state-layer-opacity, .12)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-checkbox-selected-pressed-state-layer-opacity, .1)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-checkbox-selected-pressed-state-layer-opacity, 0.1)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-selected-hover-state-layer-color, #1a73e8)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
                border-color: GrayText;
                border-color: var(--mdc-checkbox-disabled-unselected-icon-color, GrayText);
                background-color: transparent
            }

            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
                border-color: GrayText;
                background-color: GrayText;
                background-color: var(--mdc-checkbox-disabled-selected-icon-color, GrayText)
            }

            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonText;
                color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }

            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonText;
                border-color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }

            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonFace;
                color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }

            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonFace;
                border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }
        }

        .az2ine {
            will-change: unset
        }

        .VfPpkd-I9GLp-yrriRe {
            display: inline-flex;
            align-items: center;
            vertical-align: middle
        }

        .VfPpkd-I9GLp-yrriRe[hidden] {
            display: none
        }

        .VfPpkd-I9GLp-yrriRe>label {
            margin-left: 0;
            margin-right: auto;
            padding-left: 4px;
            padding-right: 0;
            order: 0
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe>label,
        .VfPpkd-I9GLp-yrriRe>label[dir=rtl] {
            margin-left: auto;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe>label,
        .VfPpkd-I9GLp-yrriRe>label[dir=rtl] {
            padding-left: 0;
            padding-right: 4px
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-WrakWd>label {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label {
            margin-left: auto;
            margin-right: 0;
            padding-left: 0;
            padding-right: 4px;
            order: -1
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label,
        .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label[dir=rtl] {
            margin-left: 0;
            margin-right: auto
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label,
        .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label[dir=rtl] {
            padding-left: 4px;
            padding-right: 0
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL {
            justify-content: space-between
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL>label {
            margin: 0
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL>label,
        .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL>label[dir=rtl] {
            margin: 0
        }

        .VfPpkd-I9GLp-yrriRe {
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-form-field-label-text-font, Roboto, sans-serif);
            line-height: 1.25rem;
            line-height: var(--mdc-form-field-label-text-line-height, 1.25rem);
            font-size: .875rem;
            font-size: var(--mdc-form-field-label-text-size, .875rem);
            font-weight: 400;
            font-weight: var(--mdc-form-field-label-text-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-form-field-label-text-tracking, .0178571429em);
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-form-field-label-text-color, var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87)))
        }

        .MlG5Jc {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0142857143em;
            font-weight: 400
        }

        .MlG5Jc gm-checkbox[disabled]~.VfPpkd-V67aGc,
        .MlG5Jc gm-radio[disabled]~.VfPpkd-V67aGc,
        .MlG5Jc .VfPpkd-MPu53c-OWXEXe-OWB6Me~.VfPpkd-V67aGc,
        .MlG5Jc .VfPpkd-GCYh9b-OWXEXe-OWB6Me~.VfPpkd-V67aGc {
            color: rgb(95, 99, 104)
        }

        .P2Hi5d,
        .mkMxfe,
        .OBi8lb,
        .P9QRxe,
        .vqjb4e,
        .y8Rdrf,
        .DMZ54e {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 400;
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-IhFlZd {
            color: rgb(95, 99, 104)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            color: rgb(60, 64, 67)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c {
            opacity: .38
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: 0
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd {
            background-color: rgb(232, 240, 254)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--mdc-ripple-color, rgb(26, 115, 232))
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d,
        .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d,
        .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d,
        .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d,
        .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d,
        .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
            .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
            .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
            .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
            .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
            .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS,
            .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
                color: GrayText
            }

            .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .OBi8lb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .P9QRxe .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .vqjb4e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .y8Rdrf .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .DMZ54e .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c {
                opacity: 1
            }
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 24px;
            padding-right: 16px
        }

        [dir=rtl] .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 24px
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 24px;
            margin-right: 0;
            width: calc(100% - 24px)
        }

        [dir=rtl] .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 24px
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 24px;
            margin-right: 0;
            width: calc(100% - 40px)
        }

        [dir=rtl] .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 24px
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 24px;
            margin-right: 0;
            width: calc(100% - 24px)
        }

        [dir=rtl] .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 24px
        }

        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 24px;
            margin-right: 0;
            width: calc(100% - 40px)
        }

        [dir=rtl] .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .P2Hi5d .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 24px
        }

        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px
        }

        [dir=rtl] .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 56px;
            margin-right: 0;
            width: calc(100% - 56px)
        }

        [dir=rtl] .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 56px
        }

        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 56px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 56px
        }

        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .mkMxfe .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .r6B9Fd {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 400
        }

        .r6B9Fd .VfPpkd-rymPhb-Gtdoyb,
        .r6B9Fd .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: rgb(60, 64, 67)
        }

        .r6B9Fd .VfPpkd-rymPhb-L8ivfd-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-bC5pod-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-JMEf7e {
            color: rgb(95, 99, 104)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-L8ivfd-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-bC5pod-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            color: rgb(60, 64, 67)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-KkROqb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-JMEf7e {
            opacity: .38
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-Gtdoyb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-Gtdoyb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            color: rgb(60, 64, 67)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::before {
            opacity: 0
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd {
            background-color: rgb(232, 240, 254)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::before,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-pZXsl::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--mdc-ripple-color, rgb(26, 115, 232))
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-rymPhb-pZXsl::before,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-rymPhb-pZXsl::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-rymPhb-pZXsl::before,
        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .r6B9Fd .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        @media screen and (forced-colors:active) {

            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-fpDzbe-fmcmS,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-L8ivfd-fmcmS,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-bC5pod-fmcmS,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
                color: GrayText
            }

            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-KkROqb,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
            .r6B9Fd .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-JMEf7e {
                opacity: 1
            }
        }

        .uTZ9Lb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb,
        .FvXOfd.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb,
        .QrsYgb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb,
        .gfwIBd.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: center;
            margin-top: 0
        }

        .HiC7Nc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .HiC7Nc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc,
        .HiC7Nc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 72px
        }

        .UbEQCe.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .UbEQCe.VfPpkd-rymPhb-ibnC6b,
        .UbEQCe.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .UbEQCe .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .UbEQCe .VfPpkd-rymPhb-KkROqb,
        .UbEQCe .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .rKASPc.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .rKASPc.VfPpkd-rymPhb-ibnC6b,
        .rKASPc.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .rKASPc .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 8px
        }

        [dir=rtl] .rKASPc .VfPpkd-rymPhb-KkROqb,
        .rKASPc .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 8px;
            margin-right: 8px
        }

        .rKASPc.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .U5k4Fd.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .U5k4Fd.VfPpkd-rymPhb-ibnC6b,
        .U5k4Fd.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .U5k4Fd .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 8px
        }

        [dir=rtl] .U5k4Fd .VfPpkd-rymPhb-KkROqb,
        .U5k4Fd .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 8px;
            margin-right: 8px
        }

        .U5k4Fd.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .ifEyr.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .ifEyr.VfPpkd-rymPhb-ibnC6b,
        .ifEyr.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .ifEyr .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 8px
        }

        [dir=rtl] .ifEyr .VfPpkd-rymPhb-KkROqb,
        .ifEyr .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 8px;
            margin-right: 8px
        }

        .ifEyr.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .SNowt.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .SNowt.VfPpkd-rymPhb-ibnC6b,
        .SNowt.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .SNowt .VfPpkd-rymPhb-JMEf7e {
            margin-left: 8px;
            margin-right: 16px
        }

        [dir=rtl] .SNowt .VfPpkd-rymPhb-JMEf7e,
        .SNowt .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 16px;
            margin-right: 8px
        }

        .tfmWAf.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .tfmWAf.VfPpkd-rymPhb-ibnC6b,
        .tfmWAf.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .tfmWAf .VfPpkd-rymPhb-JMEf7e {
            margin-left: 8px;
            margin-right: 16px
        }

        [dir=rtl] .tfmWAf .VfPpkd-rymPhb-JMEf7e,
        .tfmWAf .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 16px;
            margin-right: 8px
        }

        .axtYbd.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .axtYbd.VfPpkd-rymPhb-ibnC6b,
        .axtYbd.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .axtYbd .VfPpkd-rymPhb-JMEf7e {
            margin-left: 16px;
            margin-right: 24px
        }

        [dir=rtl] .axtYbd .VfPpkd-rymPhb-JMEf7e,
        .axtYbd .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 24px;
            margin-right: 16px
        }

        .aopLEb.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .aopLEb.VfPpkd-rymPhb-ibnC6b,
        .aopLEb.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .aopLEb .VfPpkd-rymPhb-JMEf7e {
            margin-left: 16px;
            margin-right: 24px
        }

        [dir=rtl] .aopLEb .VfPpkd-rymPhb-JMEf7e,
        .aopLEb .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 24px;
            margin-right: 16px
        }

        .zlqiud.VfPpkd-rymPhb-ibnC6b {
            padding-left: auto;
            padding-right: 0
        }

        [dir=rtl] .zlqiud.VfPpkd-rymPhb-ibnC6b,
        .zlqiud.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 0;
            padding-right: auto
        }

        .zlqiud .VfPpkd-rymPhb-JMEf7e {
            margin-left: 16px;
            margin-right: 24px
        }

        [dir=rtl] .zlqiud .VfPpkd-rymPhb-JMEf7e,
        .zlqiud .VfPpkd-rymPhb-JMEf7e[dir=rtl] {
            margin-left: 24px;
            margin-right: 16px
        }

        .isC8Y.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe {
            padding-left: 24px;
            padding-right: auto
        }

        [dir=rtl] .isC8Y.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe,
        .isC8Y.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-M1Soyc-YbohUe[dir=rtl] {
            padding-left: auto;
            padding-right: 24px
        }

        .MCs1Pd {
            padding-left: 24px;
            padding-right: 24px
        }

        [dir=rtl] .MCs1Pd,
        .MCs1Pd[dir=rtl] {
            padding-left: 24px;
            padding-right: 24px
        }

        .e6pQl.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe {
            padding-left: auto;
            padding-right: 24px
        }

        [dir=rtl] .e6pQl.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe,
        .e6pQl.VfPpkd-rymPhb-clz4Ic-OWXEXe-SfQLQb-UbuQg-YbohUe[dir=rtl] {
            padding-left: 24px;
            padding-right: auto
        }

        [dir=rtl] .e6pQl,
        .e6pQl[dir=rtl] {
            padding: 0
        }

        .VfPpkd-GCYh9b {
            padding: 10px
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(0, 0, 0, .54)
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: #018786;
            border-color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: #018786;
            border-color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-GCYh9b [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:disabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-GCYh9b [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:disabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-GCYh9b [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-GCYh9b .VfPpkd-RsCWK::before {
            background-color: #018786;
            background-color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-GCYh9b .VfPpkd-RsCWK::before {
            top: -10px;
            left: -10px;
            width: 40px;
            height: 40px
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe {
            top: 0;
            right: 0;
            left: 0;
            width: 40px;
            height: 40px
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me .VfPpkd-gBXA9-bMcfAe:disabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
                border-color: GrayText
            }

            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me .VfPpkd-gBXA9-bMcfAe:disabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
                border-color: GrayText
            }

            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
                border-color: GrayText
            }
        }

        .VfPpkd-GCYh9b {
            display: inline-block;
            position: relative;
            flex: 0 0 auto;
            box-sizing: content-box;
            width: 20px;
            height: 20px;
            cursor: pointer;
            will-change: opacity, transform, border-color, color
        }

        .VfPpkd-GCYh9b[hidden] {
            display: none
        }

        .VfPpkd-RsCWK {
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            width: 20px;
            height: 20px
        }

        .VfPpkd-RsCWK::before {
            position: absolute;
            transform: scale(0, 0);
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: "";
            transition: opacity .12s 0ms cubic-bezier(.4, 0, .6, 1), transform .12s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-wVo5xe-LkdAo {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            border-width: 2px;
            border-style: solid;
            border-radius: 50%;
            transition: border-color .12s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-Z5TpLc-LkdAo {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            transform: scale(0, 0);
            border-width: 10px;
            border-style: solid;
            border-radius: 50%;
            transition: transform .12s 0ms cubic-bezier(.4, 0, .6, 1), border-color .12s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-gBXA9-bMcfAe {
            position: absolute;
            margin: 0;
            padding: 0;
            opacity: 0;
            cursor: inherit;
            z-index: 1
        }

        .VfPpkd-GCYh9b-OWXEXe-dgl2Hf {
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 4px;
            margin-left: 4px
        }

        .VfPpkd-GCYh9b-OWXEXe-dgl2Hf .VfPpkd-gBXA9-bMcfAe {
            top: -4px;
            right: -4px;
            left: -4px;
            width: 48px;
            height: 48px
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec,
        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec,
            .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec::after,
        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec::after,
            .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK,
        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK {
            transition: opacity .12s 0ms cubic-bezier(0, 0, .2, 1), transform .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            transition: border-color .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            transition: transform .12s 0ms cubic-bezier(0, 0, .2, 1), border-color .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-GCYh9b-OWXEXe-OWB6Me {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            transform: scale(.5);
            transition: transform .12s 0ms cubic-bezier(0, 0, .2, 1), border-color .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK,
        [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK {
            cursor: default
        }

        .VfPpkd-gBXA9-bMcfAe:focus+.VfPpkd-RsCWK::before {
            transform: scale(1);
            opacity: .12;
            transition: opacity .12s 0ms cubic-bezier(0, 0, .2, 1), transform .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-GCYh9b {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-eHTEvd::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-eHTEvd::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-eHTEvd::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0);
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            background-color: #018786;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-secondary, #018786))
        }

        .VfPpkd-GCYh9b:hover .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-eHTEvd::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-eHTEvd::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-eHTEvd::after {
            transition: opacity .15s linear
        }

        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-eHTEvd::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-RsCWK::before,
        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-RsCWK::before {
            content: none
        }

        .VfPpkd-eHTEvd {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .kDzhGf {
            z-index: 0
        }

        .kDzhGf .VfPpkd-eHTEvd::before,
        .kDzhGf .VfPpkd-eHTEvd::after {
            z-index: -1
        }

        .kDzhGf .VfPpkd-eHTEvd::before,
        .kDzhGf .VfPpkd-eHTEvd::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-radio-state-color, rgb(26, 115, 232))
        }

        .kDzhGf:hover .VfPpkd-eHTEvd::before,
        .kDzhGf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-eHTEvd::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-eHTEvd::before,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-eHTEvd::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-eHTEvd::after {
            transition: opacity .15s linear
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-eHTEvd::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::after {
            background-color: rgb(60, 64, 67);
            background-color: var(--gm-radio-state-color, rgb(60, 64, 67))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before,
        .kDzhGf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::after {
            transition: opacity .15s linear
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .kDzhGf.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(95, 99, 104);
            border-color: var(--gm-radio-stroke-color--unchecked, rgb(95, 99, 104))
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(26, 115, 232);
            border-color: var(--gm-radio-stroke-color--checked, rgb(26, 115, 232))
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgb(26, 115, 232);
            border-color: var(--gm-radio-ink-color, rgb(26, 115, 232))
        }

        .kDzhGf [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:disabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--gm-radio-disabled-stroke-color--unchecked, rgba(60, 64, 67, .38))
        }

        .kDzhGf [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:disabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--gm-radio-disabled-stroke-color--checked, rgba(60, 64, 67, .38))
        }

        .kDzhGf [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--gm-radio-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .kDzhGf .VfPpkd-RsCWK::before {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-radio-state-color, rgb(26, 115, 232))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:active .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(32, 33, 36);
            border-color: var(--gm-radio-stroke-color--unchecked-stateful, rgb(32, 33, 36))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:active .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(23, 78, 166);
            border-color: var(--gm-radio-stroke-color--checked-stateful, rgb(23, 78, 166))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf:active .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgb(23, 78, 166);
            border-color: var(--gm-radio-ink-color--stateful, rgb(23, 78, 166))
        }

        .wHsUjf {
            will-change: unset
        }

        .VfPpkd-xl07Ob-XxIAqe {
            display: none;
            position: absolute;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            transform: scale(1);
            transform-origin: top left;
            opacity: 0;
            overflow: auto;
            will-change: transform, opacity;
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12);
            transform-origin-left: top left;
            transform-origin-right: top right
        }

        .VfPpkd-xl07Ob-XxIAqe:focus {
            outline: none
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-oT9UPb-FNFY6c {
            display: inline-block;
            transform: scale(.8);
            opacity: 0
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-FNFY6c {
            display: inline-block;
            transform: scale(1);
            opacity: 1
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-oT9UPb-xTMeO {
            display: inline-block;
            opacity: 0
        }

        [dir=rtl] .VfPpkd-xl07Ob-XxIAqe,
        .VfPpkd-xl07Ob-XxIAqe[dir=rtl] {
            transform-origin-left: top right;
            transform-origin-right: top left
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd {
            position: relative;
            overflow: visible
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-qbOKL {
            position: fixed
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-tsQazb {
            width: 100%
        }

        .VfPpkd-xl07Ob-XxIAqe {
            max-width: calc(100vw - 32px);
            max-width: var(--mdc-menu-max-width, calc(100vw - 32px));
            max-height: calc(100vh - 32px);
            max-height: var(--mdc-menu-max-height, calc(100vh - 32px));
            z-index: 8;
            transition: opacity .03s linear, transform .12s cubic-bezier(0, 0, .2, 1), height .25s cubic-bezier(0, 0, .2, 1);
            background-color: #fff;
            background-color: var(--mdc-theme-surface, #fff);
            color: #000;
            color: var(--mdc-theme-on-surface, #000);
            border-radius: 4px;
            border-radius: var(--mdc-shape-medium, 4px)
        }

        .VfPpkd-xl07Ob-XxIAqe-OWXEXe-oT9UPb-xTMeO {
            transition: opacity 75ms linear
        }

        .UQ5E0 {
            box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-xl07Ob {
            min-width: 112px;
            min-width: var(--mdc-menu-min-width, 112px)
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb-IhFlZd,
        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: rgba(0, 0, 0, .87)
        }

        .VfPpkd-xl07Ob .VfPpkd-xl07Ob-ibnC6b-OWXEXe-eKm5Fc-FNFY6c .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .04
        }

        .VfPpkd-xl07Ob .VfPpkd-xl07Ob-ibnC6b-OWXEXe-eKm5Fc-FNFY6c .VfPpkd-rymPhb-pZXsl::before {
            opacity: .04
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb {
            color: rgba(0, 0, 0, .87)
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb,
        .VfPpkd-xl07Ob .VfPpkd-rymPhb {
            position: relative
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb .VfPpkd-BFbNVe-bF1uUb,
        .VfPpkd-xl07Ob .VfPpkd-rymPhb .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb::before,
        .VfPpkd-xl07Ob .VfPpkd-rymPhb::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {

            .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb::before,
            .VfPpkd-xl07Ob .VfPpkd-rymPhb::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb-clz4Ic {
            margin: 8px 0
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb-ibnC6b {
            user-select: none
        }

        .VfPpkd-xl07Ob .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me {
            cursor: auto
        }

        .VfPpkd-xl07Ob a.VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-b9t22c,
        .VfPpkd-xl07Ob a.VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-f7MjDc {
            pointer-events: none
        }

        .VfPpkd-qPzbhe-JNdkSc {
            padding: 0;
            fill: currentColor
        }

        .VfPpkd-qPzbhe-JNdkSc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 56px;
            padding-right: 16px
        }

        [dir=rtl] .VfPpkd-qPzbhe-JNdkSc .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-qPzbhe-JNdkSc .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 56px
        }

        .VfPpkd-qPzbhe-JNdkSc .VfPpkd-qPzbhe-JNdkSc-Bz112c {
            left: 16px;
            right: auto;
            visibility: hidden;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            transition-property: visibility;
            transition-delay: 75ms
        }

        [dir=rtl] .VfPpkd-qPzbhe-JNdkSc .VfPpkd-qPzbhe-JNdkSc-Bz112c,
        .VfPpkd-qPzbhe-JNdkSc .VfPpkd-qPzbhe-JNdkSc-Bz112c[dir=rtl] {
            left: auto;
            right: 16px
        }

        .VfPpkd-xl07Ob-ibnC6b-OWXEXe-gk6SMd .VfPpkd-qPzbhe-JNdkSc-Bz112c {
            display: inline;
            visibility: visible
        }

        .q6oraf {
            box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 400;
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-IhFlZd {
            color: rgb(95, 99, 104)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            color: rgb(60, 64, 67)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c {
            opacity: .38
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: 0
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd {
            background-color: rgb(232, 240, 254)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--mdc-ripple-color, rgb(26, 115, 232))
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:hover .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-StrnGf-rymPhb-pZXsl::before,
        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-StrnGf-rymPhb-pZXsl::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition: opacity .15s linear
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-StrnGf-rymPhb-pZXsl::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
            .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
            .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
                color: GrayText
            }

            .q6oraf .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c {
                opacity: 1
            }
        }

        .f8esad {
            display: none;
            height: 10px;
            margin-left: -10%;
            margin-top: -10px;
            position: fixed;
            width: 120%;
            z-index: 200
        }

        .L5MEH {
            color: rgb(60, 64, 67);
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 16px;
            padding-bottom: 18px;
            padding-left: 24px;
            padding-right: 24px;
            user-select: none
        }

        .L5MEH .shUNU {
            letter-spacing: .01px
        }

        .MxTdM {
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            user-select: none
        }

        .ZjTiqc {
            align-items: center;
            color: #1f1f1f;
            display: flex;
            font-size: 14px;
            justify-content: center;
            letter-spacing: .25px;
            line-height: 16px;
            padding-bottom: 24px
        }

        .xeNvQc {
            border-radius: 50%;
            height: 20px;
            margin-right: 8px;
            width: 20px
        }

        .fhBcsb {
            text-overflow: ellipsis;
            overflow: hidden;
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-weight: 500
        }

        .mNRN0b {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center
        }

        .WARaV {
            max-width: 600px;
            padding-bottom: 32px;
            width: 100%
        }

        .WARaV.v8jbX {
            max-width: 600px;
            padding-bottom: 0;
            width: 100%
        }

        .MxTdM.k1B5oc .buaEob {
            display: none
        }

        .buaEob,
        .nKvHzf {
            color: #1f1f1f;
            font-size: 14px;
            line-height: 20px
        }

        .nKvHzf {
            color: #444746;
            font-size: 14px;
            line-height: 20px
        }

        .nKvHzf .gM4fbb {
            color: #0b57d0;
            font-weight: 500
        }

        .F9uUab {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 24px;
            margin-top: 10px
        }

        .MxTdM.k1B5oc .F9uUab.v8jbX {
            min-height: 175px;
            padding-bottom: unset
        }

        .F9uUab.mV54Sc,
        .MxTdM.k1B5oc .F9uUab.mV54Sc {
            align-content: space-between;
            min-height: 268px
        }

        @media (min-width:600px) and (orientation:landscape) {
            .MxTdM.k1B5oc .F9uUab.mV54Sc {
                width: 360px
            }
        }

        @media (min-width:960px) and (orientation:landscape) {
            .MxTdM.k1B5oc .F9uUab.mV54Sc {
                width: 418px
            }
        }

        @media (min-width:1600px) and (orientation:landscape) {
            .MxTdM.k1B5oc .F9uUab.mV54Sc {
                width: 486px
            }
        }

        @supports (grid-template-columns:repeat(2, 1fr)) {
            .ypEC4c .F9uUab {
                display: grid;
                gap: 12px;
                grid-auto-rows: 1fr;
                grid-template-columns: repeat(2, 1fr);
                min-height: unset
            }

            .ypEC4c.k1B5oc .v8jbX .F9uUab {
                gap: 16px;
                padding-bottom: 16px;
                min-height: 150px
            }

            @media (orientation:landscape) {
                .ypEC4c.k1B5oc .v8jbX .F9uUab {
                    min-width: 340px
                }
            }
        }

        .lrW98b {
            background-color: none;
            border-radius: 12px;
            box-shadow: 0px 1px 2px 0px rgba(60, 64, 67, 0.3), 0px 1px 3px 1px rgba(60, 64, 67, 0.15);
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            margin: 6px 0
        }

        .MxTdM.k1B5oc .lrW98b {
            background-color: #f0f4f9;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            box-shadow: none
        }

        .ypEC4c .lrW98b {
            max-width: calc(50% - 12px);
            min-height: 116px;
            text-align: center;
            width: calc(50% - 12px)
        }

        @supports (grid-template-columns:repeat(2, 1fr)) {
            .ypEC4c .lrW98b {
                max-width: unset;
                min-height: unset;
                width: unset
            }
        }

        .ypEC4c .lrW98b:nth-child(odd) {
            margin-right: 6px
        }

        .ypEC4c .lrW98b:nth-child(even) {
            margin-left: 6px
        }

        .ypEC4c.k1B5oc .v8jbX .lrW98b {
            margin: 0
        }

        .hgaXke {
            cursor: pointer;
            display: flex;
            flex-flow: column;
            height: 100%;
            overflow-wrap: break-word;
            padding: 18px
        }

        .k1B5oc .hgaXke.v8jbX {
            text-align: start;
            padding: 16px
        }

        @media (max-width:450px) {
            .hgaXke.v8jbX {
                padding: 16px
            }

            .F9uUab.v8jbX {
                margin: 6px 0 12px;
                gap: 4px
            }
        }

        @media (max-width:450px) and (max-height:640px) {
            .hgaXke.v8jbX {
                padding: 12px
            }
        }

        @media (max-height:640px) {
            .F9uUab.v8jbX {
                margin: 6px 0 12px;
                gap: 4px
            }

            .hgaXke.v8jbX {
                padding: 12px
            }

            .nKvHzf.v8jbX {
                margin: 0 0 12px
            }
        }

        .WARaV .lrW98b .hgaXke.VfPpkd-ksKsZd-XxIAqe::before {
            opacity: 0
        }

        .GjMll {
            align-items: center;
            display: flex;
            flex-flow: column;
            width: 100%
        }

        .lBX2Eb {
            color: #1f1f1f;
            display: inline-block;
            flex-grow: 1;
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
            width: 100%
        }

        .ypEC4c .lBX2Eb {
            padding-top: 8px
        }

        .ypEC4c.MxTdM.k1B5oc .lBX2Eb {
            padding-top: 16px
        }

        .ypEC4c.MxTdM {
            flex: 1
        }

        .Q3rcpd {
            color: #444746;
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        .ypEC4c .Q3rcpd {
            display: none
        }

        .t9GbDc {
            background-color: rgb(230, 244, 234)
        }

        .t9GbDc .lBX2Eb {
            color: rgb(30, 142, 62);
            font-size: 16px;
            letter-spacing: .1px;
            line-height: 22px
        }

        .ypEC4c .t9GbDc .lBX2Eb {
            font-size: 14px;
            letter-spacing: .25px;
            line-height: 18px
        }

        .t9GbDc .VbKh5d {
            color: rgb(30, 142, 62)
        }

        .t9GbDc .wkXMm,
        .t9GbDc .Q3rcpd {
            display: none
        }

        .t9GbDc .VbKh5d.fOoTsf {
            display: inline-block
        }

        .t9GbDc .RkbEFe {
            display: none
        }

        .LIwWbc {
            display: none;
            font-weight: 500
        }

        .k1B5oc .v8jbX .LIwWbc {
            font-weight: 400;
            color: #1f1f1f
        }

        .t9GbDc .LIwWbc {
            display: block
        }

        .fOoTsf {
            display: none
        }

        .VbKh5d {
            color: #0b57d0
        }

        .k1B5oc .VbKh5d {
            color: #041e49
        }

        .k1B5oc .hgaXke .VbKh5d.RkbEFe {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            align-items: center;
            display: flex;
            justify-content: center;
            background-color: #c2e7ff
        }

        .k1B5oc .t9GbDc .hgaXke.v8jbX .VbKh5d.fOoTsf {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #146c2e;
            color: #fff
        }

        .k1B5oc .hgaXke.v8jbX .zcRjjb {
            justify-content: center;
            align-items: center;
            display: flex
        }

        .k1B5oc .t9GbDc .hgaXke .VbKh5d.RkbEFe {
            display: none
        }

        .k1B5oc .v8jbX .t9GbDc {
            background-color: #c4eed0
        }

        .MxTdM.k1B5oc .VbKh5d {
            align-self: start
        }

        .MxTdM.k1B5oc .RkbEFe .umPTV {
            font-size: 24px;
            height: 24px
        }

        .RkbEFe .umPTV {
            font-size: 20px;
            height: 20px
        }

        .lq3Znf {
            display: flex
        }

        :not(.k1B5oc) .lq3Znf.qY2ck {
            gap: 0;
            justify-content: normal
        }

        .lq3Znf .xF8ewc {
            display: none
        }

        .tcfen.lq3Znf {
            flex-flow: row-reverse;
            justify-content: normal
        }

        .tcfen .yu6jOd {
            display: none
        }

        .tcfen .xF8ewc {
            display: block
        }

        .BDQaNd {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center;
            order: 2
        }

        .hgaXke .BDQaNd {
            display: none
        }

        .WLdiob .BDQaNd {
            display: flex
        }

        .WLdiob .GjMll {
            display: none
        }

        .b7ra0e {
            pointer-events: none
        }

        .SnOE7c {
            align-content: center;
            align-items: center;
            display: flex;
            flex-direction: row;
            flex-grow: 1;
            justify-content: center
        }

        .SnOE7c.f4gQ0c {
            justify-content: space-between
        }

        .k97fxb.xF8ewc {
            order: 2;
            border-radius: 100px;
            height: min-content;
            min-height: 36px;
            background-color: #0b57d0
        }

        .k97fxb.xF8ewc.WzDyfd {
            height: 56px;
            font-size: 16px
        }

        .k97fxb.xF8ewc.QieAC {
            order: 2;
            border-radius: 100px;
            background-color: #c2e7ff
        }

        .k97fxb.xF8ewc .VfPpkd-Jh9lGc {
            border-radius: 100px
        }

        .k97fxb.yu6jOd {
            margin-left: -8px;
            min-width: auto;
            order: 1;
            color: #0b57d0;
            border-radius: 100px
        }

        .k97fxb.yu6jOd.WzDyfd {
            height: 56px;
            font-size: 16px
        }

        .k97fxb.yu6jOd .VfPpkd-Jh9lGc {
            border-radius: 100px
        }

        .k97fxb.yu6jOd.Jrx9Nd {
            margin-top: -25px
        }

        .k97fxb.yu6jOd.htC3we {
            margin-right: 0;
            margin-left: 0;
            color: #fff
        }

        .k97fxb {
            font-size: 14px;
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        .k97fxb.xF8ewc .snByac {
            color: #fff
        }

        .k97fxb.xF8ewc.QieAC .VfPpkd-vQzf8d {
            color: #001d35
        }

        .TQb0Ce {
            width: 103px
        }

        .KrUHye {
            display: flex;
            flex-direction: column;
            height: 100%
        }

        .PVboYd {
            background-color: #f0f4f9;
            display: flex;
            flex-direction: column;
            height: 100%
        }

        .tPfFib {
            height: 48px;
            width: 48px;
            place-self: flex-start
        }

        .j0obh {
            align-content: center;
            align-items: center;
            color: #444746;
            display: flex;
            flex-direction: column;
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            max-height: calc(100% - 56px);
            min-height: calc(100% - 56px);
            justify-content: space-between;
            justify-items: center;
            padding: 0 24px;
            user-select: none
        }

        .j0obh.eB3Ntf {
            height: 100%;
            max-height: unset;
            min-height: unset
        }

        .KJ0zWc {
            align-self: flex-start;
            margin-bottom: -8px;
            min-height: 56px;
            padding: 8px 0 0 8px
        }

        .KJ0zWc .TpQm9d .Ce1Y1c,
        .KJ0zWc .neBIg {
            color: rgb(95, 99, 104)
        }

        .r3J0se .Dd3VHc {
            background-color: #fff;
            box-shadow: 0px 1px 2px 0px rgba(60, 64, 67, 0.3), 0px 2px 6px 2px rgba(60, 64, 67, 0.15);
            margin-top: -48px
        }

        .r3J0se {
            margin-right: 8px;
            position: absolute;
            right: 0;
            top: 0
        }

        .r3J0se.TH2Dif {
            margin: 8px
        }

        .r3J0se .rx080::before {
            background-color: unset
        }

        .r3J0se .ye1vP {
            color: rgb(60, 64, 67);
            font-size: 16px;
            line-height: 20px;
            width: max-content
        }

        .rx080 {
            color: rgb(95, 99, 104)
        }

        .FWEbge {
            padding-top: 8px;
            position: absolute;
            right: 0;
            top: 0
        }

        .QF8yve {
            align-items: center;
            color: #1f1f1f;
            display: flex;
            font-size: 14px;
            order: 3;
            padding-bottom: 16px;
            padding-top: 8px;
            justify-content: center;
            letter-spacing: .25px;
            line-height: 16px
        }

        .QF8yve .G6uxzf {
            background-size: 28px;
            border-radius: 50%;
            height: 28px;
            margin-right: 8px;
            width: 28px
        }

        .QF8yve .PNltOc {
            text-overflow: ellipsis;
            overflow: hidden;
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-weight: 500
        }

        .IDFoVc {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            min-height: fit-content;
            order: 1;
            padding-bottom: 8px;
            width: 100%
        }

        .ZMMM8b {
            background-image: url(https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg);
            background-repeat: no-repeat;
            background-size: 74px 24px;
            height: 28px;
            vertical-align: middle;
            width: 74px
        }

        .ZwJSbc {
            height: 32px;
            width: 32px
        }

        .QNqWRe {
            padding-top: 56px
        }

        .t72njc {
            display: grid;
            grid-auto-flow: column;
            width: 100%;
            gap: 10px;
            padding-top: 24px;
            padding-bottom: 24px
        }

        .NoPtE {
            background-color: #c2e7ff;
            height: 4px;
            flex: 1;
            border-radius: 4px
        }

        .NoPtE.XK3o9 {
            background-color: #0b57d0
        }

        .NoPtE.o2rGYc {
            background: linear-gradient(to right, #0b57d0 50%, #c2e7ff 0);
            background-size: 200% 100%;
            background-position: right;
            animation: fillStep 1s forwards
        }

        @keyframes fillStep {
            100% {
                background-position: left
            }
        }

        [dir=rtl] .NoPtE.o2rGYc {
            background: linear-gradient(to left, #0b57d0 50%, #c2e7ff 0);
            background-size: 200% 100%;
            background-position: left;
            animation: fillStepRtl 1s forwards
        }

        @keyframes fillStepRtl {
            100% {
                background-position: right
            }
        }

        .pLB7Xe {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            position: relative
        }

        .kkaHEc {
            stroke-dasharray: 163.36281798, 163.36281798;
            stroke: rgb(210, 227, 252);
            transform: rotate(-90deg);
            transform-origin: 50% 50%
        }

        .jleWIc {
            stroke-dasharray: 163.36281798, 163.36281798;
            stroke: rgb(25, 103, 210);
            transition: .35s stroke-dashoffset;
            transform: rotate(-90deg);
            transform-origin: 50% 50%
        }

        .rwVbXc {
            dominant-baseline: middle;
            fill: rgb(26, 115, 232);
            font-size: 22px;
            font-weight: 500;
            text-anchor: middle
        }

        .DRfwgc {
            color: #1f1f1f;
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 24px;
            line-height: 32px;
            order: 2;
            padding-top: 16px;
            text-align: center
        }

        .dbyqwf {
            color: #1f1f1f;
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 32px;
            font-style: normal;
            font-weight: 400;
            line-height: 40px;
            order: 2;
            padding-top: 16px;
            margin-bottom: 16px;
            place-self: flex-start
        }

        .si6YT {
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            order: 4;
            padding-top: 8px;
            place-self: flex-start
        }

        .lwq6lc {
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 24px;
            order: 4;
            padding-top: 8px;
            text-align: center
        }

        .IrZvq .lwq6lc {
            display: none
        }

        .ij8tJc {
            border: rgb(218, 220, 224) solid 1px;
            border-radius: 8px;
            display: none;
            margin-top: 16px;
            order: 4;
            width: 100%
        }

        .hGxvze {
            align-self: flex-start;
            color: rgb(26, 115, 232);
            margin: 14px 12px 0 18px;
            font-size: 20px
        }

        .IhY4yc {
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 24px;
            padding: 12px 12px 12px 0
        }

        .IrZvq .ij8tJc {
            align-items: center;
            display: flex
        }

        .lwq6lc.Mid8W {
            padding: 16px 16px 0
        }

        .oW8sxc {
            align-items: center;
            display: flex;
            flex-direction: column;
            flex-grow: 2;
            height: 100%;
            justify-content: center;
            min-height: 10px;
            order: 4;
            z-index: -2
        }

        .v6Uvt {
            align-items: center;
            display: flex;
            flex-direction: column;
            flex-grow: 2;
            height: 100%;
            justify-content: center;
            min-height: 10px;
            order: 4
        }

        .oW8sxc.EcFuec {
            justify-content: flex-end
        }

        .oW8sxc.PBsAT {
            width: 100vw
        }

        .OI7rEd {
            max-height: 100%;
            max-width: 100vw;
            min-height: 10px;
            object-fit: scale-down
        }

        .dxqOic {
            display: none;
            width: 100vw
        }

        .PBsAT .dxqOic {
            display: block
        }

        .oDHTGf {
            order: 4;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            text-align: center
        }

        .EcFuec .OI7rEd {
            max-width: 100%
        }

        .bqHq9 {
            align-items: center;
            align-self: baseline;
            display: flex;
            margin-top: 8px;
            order: 4;
            padding-bottom: 16px
        }

        .bqHq9.PWQTA {
            align-self: center;
            padding-bottom: 0
        }

        .sPimyb {
            color: #444746;
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
            padding-left: 14px
        }

        .sPimyb.Znrgke {
            letter-spacing: .2px;
            text-align: center;
            padding-left: 0;
            padding-right: 0
        }

        .sPimyb .NfxC9 {
            color: #0b57d0
        }

        .LE2l7e {
            color: #444746;
            height: 24px
        }

        .yvKHxf {
            border-bottom: solid 1px rgb(232, 234, 237);
            order: 5;
            width: 100vw
        }

        .EbcqGe {
            align-items: center;
            display: flex;
            justify-content: stretch;
            padding-top: 12px;
            padding-bottom: 36px;
            order: 4;
            width: 100%
        }

        .vbc3Yd {
            align-items: center;
            display: flex;
            justify-content: stretch;
            min-height: 72px;
            order: 10;
            width: 100%
        }

        .hpgere {
            align-items: center;
            display: flex;
            justify-content: stretch;
            min-height: 88px;
            order: 10;
            width: 100%
        }

        .DiPKR {
            display: flex;
            justify-content: center;
            order: 2
        }

        .SwSZmc {
            visibility: hidden
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(100%)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .UDUn4c {
            animation-name: fadeInUp;
            animation-duration: 1s
        }

        @media (max-height:420px) and (orientation:landscape) {
            .oW8sxc {
                display: none
            }
        }

        @media (min-height:600px) and (orientation:landscape),
        (min-width:600px) and (orientation:portrait) {
            .aJ7CA.TUpp0 .zIX0Ee .yvKHxf {
                width: calc(100% + 64px)
            }

            .aJ7CA.TUpp0 .zIX0Ee .QNqWRe {
                padding-top: 0
            }

            .aJ7CA.TUpp0 .zIX0Ee .KJ0zWc {
                position: fixed;
                top: 0;
                left: 0
            }

            .aJ7CA.TUpp0 .zIX0Ee .r3J0se {
                position: fixed
            }

            .aJ7CA.TUpp0 .zIX0Ee .j0obh {
                max-height: 100%;
                min-height: 100%;
                padding: 0
            }

            .aJ7CA.TUpp0 .zIX0Ee .shUNU {
                padding-top: 48px
            }

            .aJ7CA.TUpp0 .zIX0Ee .OI7rEd,
            .aJ7CA.TUpp0 .zIX0Ee .PBsAT {
                max-width: 360px;
                width: 100%
            }

            .aJ7CA.TUpp0 .zIX0Ee .vbc3Yd {
                padding-bottom: 12px
            }

            .aJ7CA.TUpp0 .zIX0Ee .ij8tJc {
                width: calc(100% - 32px)
            }
        }

        @media (min-height:600px) and (orientation:landscape) and (max-height:727px) and (orientation:landscape),
        (min-width:600px) and (orientation:portrait) and (max-height:727px) and (orientation:landscape) {
            .aJ7CA.TUpp0 .zIX0Ee .shUNU {
                padding-top: 8px
            }
        }

        @media (min-device-width:768px) and (min-device-height:500px) {
            .aJ7CA.do7Gwb .zIX0Ee .yvKHxf {
                width: calc(100% + 64px)
            }

            .aJ7CA.do7Gwb .zIX0Ee .QNqWRe {
                padding-top: 0
            }

            .aJ7CA.do7Gwb .zIX0Ee .OI7rEd,
            .aJ7CA.do7Gwb .zIX0Ee .PBsAT {
                max-width: 100%;
                width: 100%
            }

            .aJ7CA.do7Gwb .zIX0Ee .j0obh {
                max-height: 100%;
                min-height: 100%;
                padding: 0
            }

            .aJ7CA.do7Gwb .zIX0Ee .shUNU {
                padding-top: 48px
            }

            .aJ7CA.do7Gwb .zIX0Ee .vbc3Yd {
                min-height: 84px;
                padding-bottom: 12px
            }

            .aJ7CA.do7Gwb .zIX0Ee .FWEbge {
                position: fixed
            }

            .aJ7CA.do7Gwb .zIX0Ee .KJ0zWc {
                position: fixed;
                top: 0;
                left: 0
            }

            .aJ7CA.do7Gwb .zIX0Ee .ij8tJc {
                width: calc(100% - 32px)
            }
        }

        .Lmq5qf .F4s8Kd {
            background-color: #fff;
            box-shadow: 0px 1px 2px 0px rgba(60, 64, 67, 0.3), 0px 2px 6px 2px rgba(60, 64, 67, 0.15);
            margin-top: -48px;
            transform: translate(-15px, 50px)
        }

        .lYBBCf {
            margin-right: 4px;
            padding: 4px
        }

        .v2sKQe {
            color: rgb(60, 64, 67);
            display: flex;
            flex-direction: column;
            font-size: 16px;
            margin-bottom: 8px;
            margin-top: 8px;
            min-width: 144px;
            padding: 0 16px;
            user-select: none
        }

        .RMjDpc {
            align-items: center;
            color: rgb(60, 64, 67);
            display: flex;
            font-weight: 500;
            line-height: 24px;
            margin-bottom: 0
        }

        .L158Dd {
            align-items: center;
            color: rgb(60, 64, 67);
            display: flex;
            font-size: 12px;
            line-height: 16px
        }

        .Lmq5qf .ZgCTEb {
            color: rgb(60, 64, 67);
            display: flex;
            font-size: 16px;
            line-height: normal;
            margin-bottom: 8px;
            margin-top: 8px
        }

        .ffATb {
            border-bottom: solid 1px rgb(218, 220, 224)
        }

        .ZgCTEb:last-of-type {
            margin-bottom: 0
        }

        .lYBBCf .l7C5Xe {
            border-radius: 50%;
            border: solid 4px #fff;
            height: 32px;
            width: 32px
        }

        .Lmq5qf .lYBBCf.VfPpkd-Bz112c-LgbsSe::before,
        .Lmq5qf .lYBBCf.VfPpkd-Bz112c-LgbsSe::after,
        .Lmq5qf .lYBBCf .VfPpkd-Bz112c-Jh9lGc::before,
        .Lmq5qf .lYBBCf .VfPpkd-Bz112c-Jh9lGc::after {
            opacity: 0
        }

        .lYBBCf.VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: 0
        }

        .L7hpkf {
            color: rgb(194, 100, 1);
            font-size: 12px;
            height: 12px;
            position: fixed;
            text-align: center;
            top: 0;
            width: 100%;
            z-index: 99999
        }

        @media (min-width:600px) and (orientation:landscape) {
            .HWBNTc {
                display: flex
            }
        }

        .SPMXS {
            align-items: center;
            display: flex;
            flex-direction: column;
            min-height: 100%;
            width: 100%;
            background-color: #f0f4f9
        }

        @media (max-width:600px) {
            .SPMXS {
                background-color: #fff
            }
        }

        @media (min-width:600px) and (orientation:landscape) {
            .SPMXS {
                background-color: #fff
            }
        }

        @media (min-width:960px) and (orientation:landscape) {
            .SPMXS {
                background-color: #f0f4f9
            }
        }

        .u8IUd {
            align-items: center;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            user-select: none;
            border-radius: 28px
        }

        @media (min-width:600px) {
            .u8IUd {
                width: 480px;
                min-height: 528px
            }
        }

        @media (orientation:landscape) and (min-width:600px) {
            .u8IUd {
                width: 90%;
                height: 90%;
                justify-content: unset;
                padding-top: 42px
            }
        }

        @media (orientation:landscape) and (min-width:960px) {
            .u8IUd {
                width: 840px;
                min-height: 384px;
                height: unset;
                justify-content: space-between
            }
        }

        @media (orientation:landscape) and (min-width:1240px) {
            .u8IUd {
                width: auto;
                margin: 0 200px;
                justify-content: space-between
            }
        }

        @media (orientation:landscape) and (min-width:1600px) {
            .u8IUd {
                width: 1040px;
                margin: 0 auto;
                justify-content: space-between
            }
        }

        .Hx9Wye {
            display: flex;
            flex-direction: column;
            min-height: fit-content;
            padding-bottom: 8px;
            padding-top: 12px;
            -webkit-padding-end: 24px;
            padding-inline-end: 24px
        }

        .UqnPkb {
            height: 40px;
            width: 40px
        }

        .q8Q0W {
            color: #1f1f1f;
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 36px;
            padding-top: 24px
        }

        @media (max-width:960px) or (orientation:portrait) {
            .q8Q0W {
                font-size: 32px
            }
        }

        .DoWJoc {
            width: 80%;
            color: #1f1f1f;
            padding: 16px 0;
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        @media (max-width:600px) {
            .DoWJoc {
                width: 100%;
                padding: 12px 0
            }
        }

        .vtkMFb {
            align-items: center;
            color: #1f1f1f;
            display: flex;
            font-size: 14px;
            letter-spacing: .25px;
            line-height: 16px;
            margin-bottom: 21px
        }

        .fxrcJf {
            background-size: 28px;
            border-radius: 50%;
            height: 18px;
            -webkit-margin-end: 8px;
            margin-inline-end: 8px;
            width: 18px
        }

        .HGMVab {
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .25px;
            line-height: 20px;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .lSkFK {
            align-items: center;
            display: flex;
            gap: 10px;
            justify-content: space-between;
            justify-self: flex-end;
            padding-top: 6px;
            width: 100%
        }

        @media (min-width:1600px) and (orientation:landscape) {
            .lSkFK {
                -webkit-padding-end: 72px;
                padding-inline-end: 72px
            }
        }

        @media (max-width:450px) {
            .SPMXS {
                align-items: flex-start;
                height: auto;
                justify-content: flex-start;
                padding-top: 24px
            }

            .u8IUd {
                height: calc(100vh - 38px);
                padding: 0 24px 14px
            }

            .q8Q0W {
                padding-top: 16px
            }

            .lSkFK {
                background: #fff;
                padding: 0 24px 4px
            }
        }

        @media (max-width:450px) and (max-height:640px) {
            .SPMXS {
                padding-top: 16px
            }

            .u8IUd {
                height: calc(100vh - 16px);
                padding: 0 16px 0
            }

            .vtkMFb {
                margin-bottom: 8px
            }

            .lSkFK {
                padding: 0 16px 4px
            }
        }

        @media (min-width:450px) and (max-width:600px) {
            .SPMXS {
                align-items: flex-start;
                height: auto;
                justify-content: flex-start;
                padding-top: 48px
            }

            .u8IUd {
                height: calc(100vh - 68px);
                padding: 0 25px 20px
            }

            .q8Q0W {
                padding-top: 16px
            }

            .lSkFK {
                background: #fff;
                padding: 0 25px 4px;
                margin-top: 32px
            }
        }

        @media (min-width:601px) {
            .SPMXS {
                padding-top: 0
            }

            .SPMXS::before,
            .SPMXS::after {
                min-height: 30px;
                flex-grow: 1;
                content: "";
                display: block;
                height: 24px
            }

            .u8IUd {
                padding: 48px 40px 36px
            }

            .lSkFK {
                padding: 42px 0 0
            }
        }

        @media (min-width:601px) and (max-height:788px) {
            .u8IUd {
                padding: 24px 40px 20px
            }

            .q8Q0W {
                padding-top: 16px
            }

            .vtkMFb {
                margin-bottom: 10px
            }

            .lSkFK {
                padding: 16px 0 0
            }
        }

        @media (min-width:601px) and (max-height:788px) and (max-width:960px) {
            .lSkFK {
                padding: 42px 0 0
            }
        }

        sentinel {}
    </style>
    <style nonce="" type="text/css" data-late-css="">
        .VfPpkd-YAxtVc {
            background-color: #333333
        }

        .VfPpkd-gIZMF {
            color: rgba(255, 255, 255, .87)
        }

        .VfPpkd-YAxtVc {
            min-width: 344px
        }

        @media (max-width:344px),
        (max-width:480px) {
            .VfPpkd-YAxtVc {
                min-width: 100%
            }
        }

        .VfPpkd-YAxtVc {
            max-width: 672px
        }

        .VfPpkd-YAxtVc {
            box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-YAxtVc {
            border-radius: 4px;
            border-radius: var(--mdc-shape-small, 4px)
        }

        .VfPpkd-Ng57nc {
            display: none;
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            pointer-events: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .VfPpkd-Ng57nc-OWXEXe-uGFO6d,
        .VfPpkd-Ng57nc-OWXEXe-FNFY6c,
        .VfPpkd-Ng57nc-OWXEXe-FnSee {
            display: flex
        }

        .VfPpkd-Ng57nc-OWXEXe-FNFY6c .VfPpkd-gIZMF,
        .VfPpkd-Ng57nc-OWXEXe-FNFY6c .VfPpkd-M6tBBc {
            visibility: visible
        }

        .VfPpkd-YAxtVc {
            padding-left: 0;
            padding-right: 8px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            box-sizing: border-box;
            transform: scale(.8);
            opacity: 0
        }

        .VfPpkd-YAxtVc::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-YAxtVc::before {
                border-color: CanvasText
            }
        }

        [dir=rtl] .VfPpkd-YAxtVc,
        .VfPpkd-YAxtVc[dir=rtl] {
            padding-left: 8px;
            padding-right: 0
        }

        .VfPpkd-Ng57nc-OWXEXe-FNFY6c .VfPpkd-YAxtVc {
            transform: scale(1);
            opacity: 1;
            pointer-events: auto;
            transition: opacity .15s 0ms cubic-bezier(0, 0, .2, 1), transform .15s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-Ng57nc-OWXEXe-FnSee .VfPpkd-YAxtVc {
            transform: scale(1);
            transition: opacity 75ms 0ms cubic-bezier(.4, 0, 1, 1)
        }

        .VfPpkd-gIZMF {
            padding-left: 16px;
            padding-right: 8px;
            width: 100%;
            flex-grow: 1;
            box-sizing: border-box;
            margin: 0;
            visibility: hidden;
            padding-top: 14px;
            padding-bottom: 14px
        }

        [dir=rtl] .VfPpkd-gIZMF,
        .VfPpkd-gIZMF[dir=rtl] {
            padding-left: 8px;
            padding-right: 16px
        }

        .VfPpkd-gIZMF::before {
            display: inline;
            content: attr(data-mdc-snackbar-label-text)
        }

        .VfPpkd-M6tBBc {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            box-sizing: border-box;
            visibility: hidden
        }

        .VfPpkd-IkaYrd+.VfPpkd-TolmDb {
            margin-left: 8px;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-IkaYrd+.VfPpkd-TolmDb,
        .VfPpkd-IkaYrd+.VfPpkd-TolmDb[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        .VfPpkd-Ng57nc {
            z-index: 8;
            margin: 8px
        }

        .VfPpkd-Ng57nc-OWXEXe-eu7FSc .VfPpkd-gIZMF {
            padding-left: 16px;
            padding-right: 8px;
            padding-bottom: 12px
        }

        [dir=rtl] .VfPpkd-Ng57nc-OWXEXe-eu7FSc .VfPpkd-gIZMF,
        .VfPpkd-Ng57nc-OWXEXe-eu7FSc .VfPpkd-gIZMF[dir=rtl] {
            padding-left: 8px;
            padding-right: 16px
        }

        .VfPpkd-Ng57nc-OWXEXe-eu7FSc .VfPpkd-YAxtVc {
            flex-direction: column;
            align-items: flex-start
        }

        .VfPpkd-Ng57nc-OWXEXe-eu7FSc .VfPpkd-M6tBBc {
            align-self: flex-end;
            margin-bottom: 8px
        }

        .VfPpkd-Ng57nc-OWXEXe-M1Soyc {
            justify-content: flex-start
        }

        .VfPpkd-gIZMF {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit)
        }

        .VfPpkd-IkaYrd:not(:disabled) {
            color: #bb86fc
        }

        .VfPpkd-IkaYrd .VfPpkd-Jh9lGc::before,
        .VfPpkd-IkaYrd .VfPpkd-Jh9lGc::after {
            background-color: #bb86fc;
            background-color: var(--mdc-ripple-color, #bb86fc)
        }

        .VfPpkd-IkaYrd:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-IkaYrd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .08;
            opacity: var(--mdc-ripple-hover-opacity, .08)
        }

        .VfPpkd-IkaYrd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        .VfPpkd-IkaYrd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        .VfPpkd-TolmDb {
            color: rgba(255, 255, 255, .87)
        }

        .VfPpkd-TolmDb .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-TolmDb .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: rgba(255, 255, 255, .87);
            background-color: var(--mdc-ripple-color, rgba(255, 255, 255, .87))
        }

        .VfPpkd-TolmDb:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-TolmDb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .08;
            opacity: var(--mdc-ripple-hover-opacity, .08)
        }

        .VfPpkd-TolmDb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        .VfPpkd-TolmDb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        .VfPpkd-TolmDb.VfPpkd-TolmDb {
            width: 36px;
            height: 36px;
            padding: 6px;
            font-size: 18px
        }

        .VfPpkd-TolmDb.VfPpkd-TolmDb.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-Jh9lGc {
            width: 36px;
            height: 36px;
            margin-top: 0;
            margin-bottom: 0;
            margin-right: 0;
            margin-left: 0
        }

        .VfPpkd-TolmDb.VfPpkd-TolmDb.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            max-height: 36px;
            max-width: 36px
        }

        .VfPpkd-TolmDb.VfPpkd-TolmDb .VfPpkd-Bz112c-RLmnJb {
            position: absolute;
            top: 50%;
            height: 36px;
            left: 50%;
            width: 36px;
            transform: translate(-50%, -50%)
        }

        .VOBzC {
            margin: 24px
        }

        .VOBzC .VfPpkd-YAxtVc {
            background-color: rgb(32, 33, 36)
        }

        .VOBzC .VfPpkd-gIZMF {
            color: rgb(232, 234, 237)
        }

        .VOBzC .VfPpkd-IkaYrd:not(:disabled) {
            background-color: transparent
        }

        .VOBzC .VfPpkd-IkaYrd:not(:disabled) {
            color: rgb(138, 180, 248);
            color: var(--gm-colortextbutton-ink-color, rgb(138, 180, 248))
        }

        .VOBzC .VfPpkd-IkaYrd:disabled {
            color: rgba(232, 234, 237, .38);
            color: var(--gm-colortextbutton-disabled-ink-color, rgba(232, 234, 237, .38))
        }

        .VOBzC .VfPpkd-IkaYrd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .VOBzC .VfPpkd-IkaYrd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(138, 180, 248)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {

            .VOBzC .VfPpkd-IkaYrd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .VOBzC .VfPpkd-IkaYrd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .VOBzC .VfPpkd-IkaYrd:hover:not(:disabled),
        .VOBzC .VfPpkd-IkaYrd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .VOBzC .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .VOBzC .VfPpkd-IkaYrd:active:not(:disabled) {
            color: rgb(174, 203, 250);
            color: var(--gm-colortextbutton-ink-color--stateful, rgb(174, 203, 250))
        }

        .VOBzC .VfPpkd-IkaYrd .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-IkaYrd .VfPpkd-Jh9lGc::after {
            background-color: rgb(174, 203, 250);
            background-color: var(--gm-colortextbutton-state-color, rgb(174, 203, 250))
        }

        .VOBzC .VfPpkd-IkaYrd:hover .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-IkaYrd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VOBzC .VfPpkd-IkaYrd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VOBzC .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VOBzC .VfPpkd-IkaYrd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .VOBzC .VfPpkd-IkaYrd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .VOBzC .VfPpkd-IkaYrd:disabled:hover .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-IkaYrd:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .VOBzC .VfPpkd-IkaYrd:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-IkaYrd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .VOBzC .VfPpkd-IkaYrd:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VOBzC .VfPpkd-IkaYrd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VOBzC .VfPpkd-IkaYrd:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VOBzC .VfPpkd-TolmDb {
            color: rgb(232, 234, 237);
            z-index: 0
        }

        .VOBzC .VfPpkd-TolmDb:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .08;
            opacity: var(--mdc-ripple-hover-opacity, .08)
        }

        .VOBzC .VfPpkd-TolmDb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .VOBzC .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        .VOBzC .VfPpkd-TolmDb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        .VOBzC .VfPpkd-TolmDb .VfPpkd-Bz112c-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: -1
        }

        .VOBzC .VfPpkd-TolmDb:disabled {
            color: rgba(232, 234, 237, .38);
            color: var(--gm-iconbutton-disabled-ink-color, rgba(232, 234, 237, .38))
        }

        .VOBzC .VfPpkd-TolmDb .VfPpkd-Bz112c-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: rgb(232, 234, 237);
            background-color: var(--mdc-ripple-color, rgb(232, 234, 237))
        }

        .VOBzC .VfPpkd-TolmDb:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VOBzC .VfPpkd-TolmDb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VOBzC .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VOBzC .VfPpkd-TolmDb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .VOBzC .VfPpkd-TolmDb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .VOBzC .VfPpkd-TolmDb:disabled:hover .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .VOBzC .VfPpkd-TolmDb:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VOBzC .VfPpkd-TolmDb:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .VOBzC .VfPpkd-TolmDb:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VOBzC .VfPpkd-TolmDb:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VOBzC .VfPpkd-TolmDb:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VOBzC .VfPpkd-TolmDb {
            width: 36px;
            height: 36px;
            padding: 6px
        }

        .VOBzC .VfPpkd-TolmDb.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-Jh9lGc {
            width: 36px;
            height: 36px;
            margin-top: 0;
            margin-bottom: 0;
            margin-right: 0;
            margin-left: 0
        }

        .VOBzC .VfPpkd-TolmDb.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            max-height: 36px;
            max-width: 36px
        }

        .VOBzC .VfPpkd-TolmDb .VfPpkd-Bz112c-RLmnJb {
            position: absolute;
            top: 50%;
            height: 36px;
            left: 50%;
            width: 36px;
            transform: translate(-50%, -50%)
        }

        .LxGnP .VfPpkd-P5QLlc {
            padding: 6px
        }

        .LxGnP .VfPpkd-k2Wrsb {
            text-align: center
        }

        .nVbrSb {
            margin-right: 16px
        }

        .gztLGb {
            color: #0b57d0;
            padding-left: 4px
        }

        .W7ldsf .VfPpkd-cnG4Wd {
            padding: 20px 24px 0 24px
        }

        .W7ldsf.NmLpGb .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Z4p87c {
            color: rgb(95, 99, 104)
        }

        .bnQH1d {
            display: flex;
            height: 52px;
            justify-content: flex-end;
            margin: -20px 0 0 24px;
            width: 100%;
            z-index: 10
        }

        @media (orientation:landscape) {
            .bnQH1d {
                height: 32px
            }
        }

        .ff0Mjf {
            color: #1f1f1f;
            max-width: 354px;
            padding: 0 24px 0 28px;
            text-align: center
        }

        .t4svyc {
            --gm-fillbutton-container-color: #0b57d0;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            padding: 0 24px;
            border-radius: 100px;
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        .RWmy9b {
            display: flex;
            justify-content: center;
            padding: 26px 0 24px 0;
            bottom: 0;
            position: sticky;
            background: #fff
        }

        @media (orientation:landscape) {
            .RWmy9b {
                padding: 18px 0 20px 0
            }
        }

        .E4Nu6e {
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .Jix17c {
            font-family: "Google Sans", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-weight: 400;
            line-height: 32px;
            padding: 0 0 24px 0
        }

        @media (orientation:landscape) {
            .Jix17c {
                padding: 0 0 4px 0;
                font-size: 20px;
                line-height: 24px
            }
        }

        .XyxSrb {
            max-height: 100%;
            max-width: 100%
        }

        @media (orientation:landscape) {
            .XyxSrb {
                max-height: 70%;
                max-width: 70%
            }
        }

        .NEJREc {
            justify-items: center;
            padding: 0 0 24px 0
        }

        @media (orientation:landscape) {
            .NEJREc {
                padding: 0
            }
        }

        .Zghtze {
            font-family: "Google Sans Text", Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: center
        }

        @media (orientation:landscape) {
            .Zghtze {
                font-size: 14px
            }
        }

        .E6ERPe {
            color: #1f1f1f;
            max-width: 354px;
            padding: 0 24px 0 28px;
            text-align: center
        }

        .qnb8j {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 12px 0 24px 0;
            bottom: 0;
            position: sticky;
            background: #fff
        }

        .icB8dc {
            --gm-colortextbutton-ink-color: #0b57d0
        }

        @media (max-width:480px) {

            .ff0Mjf,
            .E6ERPe {
                padding: 0
            }

            .NEJREc {
                padding: 0 0 16px 0
            }

            .Jix17c {
                font-size: 22px;
                line-height: 24px;
                padding: 0 0 16px 0
            }

            .Zghtze {
                font-size: 14px;
                line-height: 20px
            }

            .RWmy9b {
                padding: 18px 0 24px 0
            }

            .qnb8j {
                padding: 4px 0 24px 0
            }
        }

        sentinel {}
    </style>
</head>

<body jscontroller="pjICDe"
    jsaction="rcuQ6b:npT2md; click:FAbpgf; auxclick:FAbpgf;keydown:.CLIENT;keyup:.CLIENT;keypress:.CLIENT;UjQMac:.CLIENT;nHjqDd:.CLIENT;LhiQec:.CLIENT;m2qNHd:.CLIENT;asggkf:.CLIENT;clwp8d:.CLIENT;GvneHb:.CLIENT;qako4e:.CLIENT"
    class="EIlDfe uOat3d">
    <script aria-hidden="true" nonce="">window.wiz_progress && window.wiz_progress();</script>
    <div class="MCcOAc IqBfM ecJEib EWZcud d8Etdd LcUz9d cjGgHb" id="yDmH0d"
        style="bottom: auto; right: auto; width: 1046px; height: 912px;">
        <div class="VUoKZ" aria-hidden="true">
            <div class="TRHLAc"></div>
        </div><c-wiz jsrenderer="BYBlBe" class="SSPGKf oCHqfe JwkDRc" jsdata="deferred-i1"
            data-p="%.@.[-1,[],1378259142,null,null,null,1,0,4]]" jscontroller="cl61md" jsaction="rcuQ6b:WYd"
            data-node-index="0;0" jsmodel="hc6Ubd" view="" c-wiz="" data-ogpc="" aria-busy="true" aria-hidden="true"
            style="display: none; opacity: 0; visibility: hidden;">
            <div class="T4LgNb eejsDc" jsname="a9kxte">
                <div jsname="qJTHM" class="kFwPee"></div>
            </div><c-data id="i1" jsdata=" pLRQKc;_;1 pLRQKc;_;1"></c-data>
        </c-wiz>
        <script aria-hidden="true"
            nonce="">window.wiz_progress && window.wiz_progress(); window.wiz_tick && window.wiz_tick('BYBlBe');</script>
        <script id="_ij"
            nonce="">window.IJ_values = ['https:\/\/gds.google.com', 'landing\x3dtrue\x26ep\x3dp\x26gdsid\x3d1378259142\x26authuser\x3d0\x26hl\x3dit\x26continue\x3dhttps:\/\/accounts.google.com\/ServiceLogin?continue%3Dhttps%253A%252F%252Faccounts.google.com%252F%26hl%3Dit%26authuser%3D0%26passive%3Dtrue%26sarp%3D1%26aodrpl%3D1%26checkedDomains%3Dyoutube%26checkConnection%3Dyoutube%253A303%26pstMsg%3D1\x26rapt\x3dAEjHL4N-bmMcBI8DxfngnJRKfNTswFvw6OqUrycRJ7yVOo5jZVlL2Uy_CplpID4BE7Fsa0JAoADPmCKElbemsQrYsWgg7nHAfQ\x26pli\x3d1', ["103723893590392824913", "103723893590392824913", "0", false, null, null, true, false], '0', 'https:\/\/gds.google.com\/', null, 'boq_growth-flexagon_20240915.05_p0', 'gds.google.com', 0.0, 'https:\/\/accounts.google.com\/ServiceLogin?continue\x3dhttps%3A%2F%2Faccounts.google.com%2F\x26hl\x3dit\x26authuser\x3d0\x26passive\x3dtrue\x26sarp\x3d1\x26aodrpl\x3d1\x26checkedDomains\x3dyoutube\x26checkConnection\x3dyoutube%3A303\x26pstMsg\x3d1', '', 'Gep_Raz5DOnP4X0JabqVFQ', 'nt1agd6KD48se4hqvYO5dg', 'DEFAULT', '', 2024.0, 'https:\/\/gds.google.com\/web\/landing', null, 'ltr', false, 'https:\/\/accounts.google.com\/AccountChooser?continue\x3dhttps:\/\/gds.google.com\/web\/landing?landing%3Dtrue%26ep%3Dp%26gdsid%3D1378259142%26authuser%3D0%26hl%3Dit%26continue%3Dhttps:\/\/accounts.google.com\/ServiceLogin?continue%253Dhttps%25253A%25252F%25252Faccounts.google.com%25252F%2526hl%253Dit%2526authuser%253D0%2526passive%253Dtrue%2526sarp%253D1%2526aodrpl%253D1%2526checkedDomains%253Dyoutube%2526checkConnection%253Dyoutube%25253A303%2526pstMsg%253D1%26rapt%3DAEjHL4N-bmMcBI8DxfngnJRKfNTswFvw6OqUrycRJ7yVOo5jZVlL2Uy_CplpID4BE7Fsa0JAoADPmCKElbemsQrYsWgg7nHAfQ%26pli%3D1\x26hl\x3dit', 'https:\/\/accounts.google.com', 'https:\/\/accounts.google.com\/ServiceLogin?hl\x3dit\x26authuser\x3d0\x26continue\x3dhttps:\/\/gds.google.com\/web\/landing?landing%3Dtrue%26ep%3Dp%26gdsid%3D1378259142%26authuser%3D0%26hl%3Dit%26continue%3Dhttps:\/\/accounts.google.com\/ServiceLogin?continue%253Dhttps%25253A%25252F%25252Faccounts.google.com%25252F%2526hl%253Dit%2526authuser%253D0%2526passive%253Dtrue%2526sarp%253D1%2526aodrpl%253D1%2526checkedDomains%253Dyoutube%2526checkConnection%253Dyoutube%25253A303%2526pstMsg%253D1%26rapt%3DAEjHL4N-bmMcBI8DxfngnJRKfNTswFvw6OqUrycRJ7yVOo5jZVlL2Uy_CplpID4BE7Fsa0JAoADPmCKElbemsQrYsWgg7nHAfQ%26pli%3D1', 'https:\/\/accounts.google.com\/SignOutOptions?continue\x3dhttps:\/\/gds.google.com\/web\/landing?landing%3Dtrue%26ep%3Dp%26gdsid%3D1378259142%26authuser%3D0%26hl%3Dit%26continue%3Dhttps:\/\/accounts.google.com\/ServiceLogin?continue%253Dhttps%25253A%25252F%25252Faccounts.google.com%25252F%2526hl%253Dit%2526authuser%253D0%2526passive%253Dtrue%2526sarp%253D1%2526aodrpl%253D1%2526checkedDomains%253Dyoutube%2526checkConnection%253Dyoutube%25253A303%2526pstMsg%253D1%26rapt%3DAEjHL4N-bmMcBI8DxfngnJRKfNTswFvw6OqUrycRJ7yVOo5jZVlL2Uy_CplpID4BE7Fsa0JAoADPmCKElbemsQrYsWgg7nHAfQ%26pli%3D1', [null, null, null, null, null, [true, false, false], [true]], 'web', 'https:\/\/mail.google.com\/mail\/?ibxr\x3d0#settings\/accounts', 'https:\/\/business.google.com', null, 'https:\/\/plus.google.com', 'it', false, null, null, null, '', false, false, false, 'https:\/\/families.google.com', 'it', 'it', 'it', 'https:\/\/goto2.corp.google.com\/mdtredirect?data_id_filter\x3dgds.google.com\x26system_name\x3dgrowth-flexagon', 'https:\/\/myaccount.google.com\/profile', null, 'https:\/\/myaccount.google.com', 'https:\/\/myaccount.google.com\/', 'https:\/\/drive.google.com\/settings', 'https:\/\/takeout.google.com\/settings', 'https:\/\/www.google.com\/settings', 'AH-TDWItaCbzyCcIY0K0inSPQoW-:1726500282923', 'https:\/\/notifications.google.com\/settings', 'https:\/\/docs.google.com\/picker', 'https:\/\/photos.google.com', 'https:\/\/myaccount.google.com\/privacypolicy?hl\x3dit', 'it', 'it', false, null, false, 'https:\/\/www.gstatic.com\/_\/boq-googlegrowth\/_\/r\/', 'https:\/\/takeout.google.com', 'https:\/\/myaccount.google.com\/termsofservice?hl\x3dit', 1.726500282925E12, 1.7040636E12, 1.7264376E12, 'sebastiano cesca', '', 'unknown', 'sebastiano', true, '103723893590392824913', 2024.0, 'https:\/\/youtube.com',]; window.IJ_valuesCb && window.IJ_valuesCb();</script>
        <script nonce="">(function () {
                'use strict'; var c = window, d = []; c.aft_counter = d; var e = [], f = 0; function _recordIsAboveFold(a) { if (!c._isLazyImage(a) && !a.hasAttribute("data-noaft") && a.src) { var b = (c._isVisible || function () { })(c.document, a); a.setAttribute("data-atf", b); b && (e.indexOf(a) !== -1 || d.indexOf(a) !== -1 || a.complete || d.push(a), a.hasAttribute("data-iml") && (a = Number(a.getAttribute("data-iml")), a > f && (f = a))) } }
                c.initAft = function () { f = 0; e = Array.prototype.slice.call(document.getElementsByTagName("img")).filter(function (a) { return !!a.getAttribute("data-iml") });[].forEach.call(document.getElementsByTagName("img"), function (a) { try { _recordIsAboveFold(a) } catch (b) { throw b.message = a.hasAttribute("data-iid") ? b.message + "\nrecordIsAboveFold error for defer inlined image" : b.message + ("\nrecordIsAboveFold error for img element with <src: " + a.src + ">"), b; } }); if (d.length === 0) c.onaft(f) };
            }).call(this);
            initAft()</script>
        <script class="ds:0"
            nonce="">AF_initDataCallback({ key: 'ds:0', hash: '1', data: [[[null, 20, null, [["https://www.gstatic.com/images/branding/product/2x/googleg_64dp.png"], ["Accesso eseguito"], [[["Segui alcuni suggerimenti per usare al meglio il tuo Account Google"], [[["Aggiungi/conferma email o telefono di recupero"], ["Aiuta Google a contattarti nel caso in cui avessi problemi di accesso"], ["https://www.google.com/images/growth/onboarding/revocery-option@2x.png", null, null, null, null, "lock_outline"], ["Aggiungi informazioni"], 22, null, ["Dati di recupero aggiornati."]], [["Aggiungi l'indirizzo di casa"], ["Velocizza compilazione di moduli, consultazione di indicazioni stradali e altro ancora"], ["https://www.google.com/images/growth/onboarding/data-timeline@2x.png", null, null, null, null, "home"], ["Aggiungi indirizzo"], 2, null, ["Indirizzo di casa aggiornato."]], [["Aggiungi un'immagine del profilo"], ["Consenti alle persone di riconoscerti e sapere se hai eseguito l'accesso al tuo account"], ["https://www.google.com/images/growth/onboarding/profile_picture_illustration_v2.png", null, null, null, null, "account_circle"], ["Aggiungi foto"], 49, "XPAG-GG-PP", ["Immagine del profilo aggiornata."]], [["Ricevi aggiornamenti/suggerimenti utili: iscriviti"], ["Iscriviti per ricevere comunicazioni personalizzate con suggerimenti per usare al meglio le tue app Google"], ["https://www.google.com/images/growth/onboarding/tips_v2.png", null, null, null, null, "tips_and_updates"], ["Registrati"], 43, null, ["Iscrizione per suggerimenti/aggiornam. effettuata"]]]]], 0]]], "https://lh3.googleusercontent.com/a/ACg8ocJGvnlAYmtacVvcp-KGStmsfCPF9F4E8UFZ2HOssPuTx1v6rw\u003dmo"], sideChannel: {} });</script>
        <script id="wiz_jd"
            nonce="">if (window['_wjdc']) { const wjd = {}; window['_wjdc'](wjd); delete window['_wjdc']; }</script>
        <script aria-hidden="true" id="WIZ-footer"
            nonce="">window.wiz_progress && window.wiz_progress(); window.stopScanForCss && window.stopScanForCss(); ccTick('bl');</script>
        <c-wiz jsrenderer="Pu0qCe" class="SSPGKf" jslog="68793; track:impression; index:0" jsdata="deferred-c0"
            data-p="%.@.[0,[],1378259142,null,null,null,1,0,4]]" jscontroller="sns1Bd"
            jsaction="JIbuQc:lEChDf;h5bFAb:fqRtub;IBB03b:rXxpye;rcuQ6b:WYd;" jsname="q7xiWe" data-node-index="0;0"
            jsmodel="hc6Ubd" c-wiz="" data-ogpc="" data-card-index="0"
            style="visibility: visible; transform: translateX(0px); opacity: 1;" aria-busy="false">
            <div class="T4LgNb eejsDc" jsname="a9kxte">
                <div jsname="qJTHM" class="kFwPee">
                    <div class="SPMXS">
                        <div class="u8IUd">
                            <div class="HWBNTc">
                                <div aria-live="polite" jsname="tJHJj" class="Hx9Wye"><img class="UqnPkb"
                                        src="./media/googleg_standard_color_48dp.png" alt="Google G logo"
                                        data-iml="2674">
                                    <div class="q8Q0W">Accesso eseguito</div>
                                    <div class="DoWJoc">Completa alcuni suggerimenti per usare al meglio il tuo Account
                                        Google</div>
                                    <div class="vtkMFb"><img class="fxrcJf" src="./access_files/unnamed.png"
                                            aria-hidden="true" alt="" data-iml="2819"><span
                                            class="HGMVab"></span></div>
                                </div>
                                <div jsname="yCnQv" class="f8esad"> </div>
                                <div class="ypEC4c MxTdM k1B5oc">
                                    <div class="mNRN0b">
                                        <div class="WARaV v8jbX">
                                            <div class="buaEob" role="heading" aria-level="1">Segui alcuni suggerimenti
                                                per usare al meglio il tuo Account Google</div>
                                            <div role="list"
                                                aria-label="Segui alcuni suggerimenti per usare al meglio il tuo Account Google"
                                                class="F9uUab mV54Sc v8jbX">
                                                <div role="listitem" class="lrW98b v8jbX" data-item-type="22"
                                                    data-utm-source="XPAG-GG-UNKNOWN" jsname="Tla3n"
                                                    jslog="57441; 1:22,1; track:impression">
                                                    <div class="hgaXke v8jbX VfPpkd-ksKsZd-XxIAqe" jscontroller="S7TIF"
                                                        jsname="IgSIAf" role="button" tabindex="0" data-card-type="22"
                                                        jsaction="click:cOuCgd(preventDefault=true);SXon7d:gHJI;rcuQ6b:TFp36; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;"
                                                        jslog="57441; 1:22; track:JIbuQc"><span jsname="rZHESd"
                                                            class="GjMll">
                                                            <div class="VbKh5d RkbEFe v8jbX"><i
                                                                    class="google-material-icons-filled umPTV"
                                                                    aria-hidden="true">encrypted</i></div>
                                                            <div class="VbKh5d fOoTsf">
                                                                <div class="zcRjjb"><i
                                                                        class="google-material-icons-filled umPTV"
                                                                        aria-hidden="true">check_circle</i></div>
                                                            </div>
                                                            <div class="lBX2Eb">
                                                                <div class="wkXMm">Aggiungi/conferma email o telefono di
                                                                    recupero</div>
                                                                <div class="Q3rcpd">Aiuta Google a contattarti nel caso
                                                                    in cui avessi problemi di accesso</div>
                                                                <div class="LIwWbc">Dati di recupero aggiornati.</div>
                                                            </div>
                                                        </span>
                                                        <div class="BDQaNd" jsname="SEX99d">
                                                            <div jscontroller="DFTXbf" data-progressvalue="0"
                                                                class="DU29of a9u1Hb" jsname="des24e">
                                                                <div class="VfPpkd-JGcpL-Mr8B3-V67aGc" jsname="a2gnBb">
                                                                    Caricamento</div>
                                                                <div class="VfPpkd-JGcpL-P1ekSe VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc"
                                                                    style="width: 32px; height: 32px;"
                                                                    role="progressbar" aria-label="Caricamento"
                                                                    aria-hidden="true" jsname="LbNpof">
                                                                    <div class="VfPpkd-JGcpL-uI4vCe-haAclf"><svg
                                                                            class="VfPpkd-JGcpL-uI4vCe-LkdAo-Bd00G"
                                                                            viewBox="0 0 32 32"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-u014N"
                                                                                cx="16" cy="16" r="11.25"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-LkdAo"
                                                                                jsname="MU5Wmf" cx="16" cy="16"
                                                                                r="11.25" stroke-dasharray="70.6858335"
                                                                                stroke-dashoffset="70.6858335"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                        </svg></div>
                                                                    <div class="VfPpkd-JGcpL-IdXvz-haAclf">
                                                                        <div class="VfPpkd-JGcpL-QYI5B-pbTTYe">
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-LK5yu">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div class="VfPpkd-JGcpL-OcUoKf-TpMipd"><svg
                                                                                    class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.266666666666667">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-qwU8Me">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="listitem" class="lrW98b v8jbX" data-item-type="2"
                                                    data-utm-source="XPAG-GG-UNKNOWN" jsname="Tla3n"
                                                    jslog="57441; 1:2,1; track:impression">
                                                    <div class="hgaXke v8jbX VfPpkd-ksKsZd-XxIAqe" jscontroller="S7TIF"
                                                        jsname="IgSIAf" role="button" tabindex="0" data-card-type="2"
                                                        jsaction="click:cOuCgd(preventDefault=true);SXon7d:gHJI;rcuQ6b:TFp36; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;"
                                                        jslog="57441; 1:2; track:JIbuQc"><span jsname="rZHESd"
                                                            class="GjMll">
                                                            <div class="VbKh5d RkbEFe v8jbX"><i
                                                                    class="google-material-icons-filled umPTV"
                                                                    aria-hidden="true">home</i></div>
                                                            <div class="VbKh5d fOoTsf">
                                                                <div class="zcRjjb"><i
                                                                        class="google-material-icons-filled umPTV"
                                                                        aria-hidden="true">check_circle</i></div>
                                                            </div>
                                                            <div class="lBX2Eb">
                                                                <div class="wkXMm">Aggiungi l'indirizzo di casa</div>
                                                                <div class="Q3rcpd">Velocizza compilazione di moduli,
                                                                    consultazione di indicazioni stradali e altro ancora
                                                                </div>
                                                                <div class="LIwWbc">Indirizzo di casa aggiornato.</div>
                                                            </div>
                                                        </span>
                                                        <div class="BDQaNd" jsname="SEX99d">
                                                            <div jscontroller="DFTXbf" data-progressvalue="0"
                                                                class="DU29of a9u1Hb" jsname="des24e">
                                                                <div class="VfPpkd-JGcpL-Mr8B3-V67aGc" jsname="a2gnBb">
                                                                    Caricamento</div>
                                                                <div class="VfPpkd-JGcpL-P1ekSe VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc"
                                                                    style="width: 32px; height: 32px;"
                                                                    role="progressbar" aria-label="Caricamento"
                                                                    aria-hidden="true" jsname="LbNpof">
                                                                    <div class="VfPpkd-JGcpL-uI4vCe-haAclf"><svg
                                                                            class="VfPpkd-JGcpL-uI4vCe-LkdAo-Bd00G"
                                                                            viewBox="0 0 32 32"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-u014N"
                                                                                cx="16" cy="16" r="11.25"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-LkdAo"
                                                                                jsname="MU5Wmf" cx="16" cy="16"
                                                                                r="11.25" stroke-dasharray="70.6858335"
                                                                                stroke-dashoffset="70.6858335"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                        </svg></div>
                                                                    <div class="VfPpkd-JGcpL-IdXvz-haAclf">
                                                                        <div class="VfPpkd-JGcpL-QYI5B-pbTTYe">
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-LK5yu">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div class="VfPpkd-JGcpL-OcUoKf-TpMipd"><svg
                                                                                    class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.266666666666667">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-qwU8Me">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="listitem" class="lrW98b v8jbX" data-item-type="49"
                                                    data-utm-source="XPAG-GG-PP" jsname="Tla3n"
                                                    jslog="57441; 1:49,1; track:impression">
                                                    <div class="hgaXke v8jbX VfPpkd-ksKsZd-XxIAqe" jscontroller="S7TIF"
                                                        jsname="IgSIAf" role="button" tabindex="0" data-card-type="49"
                                                        jsaction="click:cOuCgd(preventDefault=true);SXon7d:gHJI;rcuQ6b:TFp36; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;"
                                                        jslog="57441; 1:49; track:JIbuQc"><span jsname="rZHESd"
                                                            class="GjMll">
                                                            <div class="VbKh5d RkbEFe v8jbX"><i
                                                                    class="google-material-icons-filled umPTV"
                                                                    aria-hidden="true">face</i></div>
                                                            <div class="VbKh5d fOoTsf">
                                                                <div class="zcRjjb"><i
                                                                        class="google-material-icons-filled umPTV"
                                                                        aria-hidden="true">check_circle</i></div>
                                                            </div>
                                                            <div class="lBX2Eb">
                                                                <div class="wkXMm">Aggiungi un'immagine del profilo
                                                                </div>
                                                                <div class="Q3rcpd">Consenti alle persone di
                                                                    riconoscerti e sapere se hai eseguito l'accesso al
                                                                    tuo account</div>
                                                                <div class="LIwWbc">Immagine del profilo aggiornata.
                                                                </div>
                                                            </div>
                                                        </span>
                                                        <div class="BDQaNd" jsname="SEX99d">
                                                            <div jscontroller="DFTXbf" data-progressvalue="0"
                                                                class="DU29of a9u1Hb" jsname="des24e">
                                                                <div class="VfPpkd-JGcpL-Mr8B3-V67aGc" jsname="a2gnBb">
                                                                    Caricamento</div>
                                                                <div class="VfPpkd-JGcpL-P1ekSe VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc"
                                                                    style="width: 32px; height: 32px;"
                                                                    role="progressbar" aria-label="Caricamento"
                                                                    aria-hidden="true" jsname="LbNpof">
                                                                    <div class="VfPpkd-JGcpL-uI4vCe-haAclf"><svg
                                                                            class="VfPpkd-JGcpL-uI4vCe-LkdAo-Bd00G"
                                                                            viewBox="0 0 32 32"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-u014N"
                                                                                cx="16" cy="16" r="11.25"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-LkdAo"
                                                                                jsname="MU5Wmf" cx="16" cy="16"
                                                                                r="11.25" stroke-dasharray="70.6858335"
                                                                                stroke-dashoffset="70.6858335"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                        </svg></div>
                                                                    <div class="VfPpkd-JGcpL-IdXvz-haAclf">
                                                                        <div class="VfPpkd-JGcpL-QYI5B-pbTTYe">
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-LK5yu">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div class="VfPpkd-JGcpL-OcUoKf-TpMipd"><svg
                                                                                    class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.266666666666667">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-qwU8Me">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="listitem" class="lrW98b v8jbX" data-item-type="43"
                                                    data-utm-source="XPAG-GG-UNKNOWN" jsname="Tla3n"
                                                    jslog="57441; 1:43,1; track:impression">
                                                    <div class="hgaXke v8jbX VfPpkd-ksKsZd-XxIAqe" jscontroller="S7TIF"
                                                        jsname="IgSIAf" role="button" tabindex="0" data-card-type="43"
                                                        jsaction="click:cOuCgd(preventDefault=true);SXon7d:gHJI;rcuQ6b:TFp36; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;"
                                                        jslog="57441; 1:43; track:JIbuQc"><span jsname="rZHESd"
                                                            class="GjMll">
                                                            <div class="VbKh5d RkbEFe v8jbX"><i
                                                                    class="google-material-icons-filled umPTV"
                                                                    aria-hidden="true">spark</i></div>
                                                            <div class="VbKh5d fOoTsf">
                                                                <div class="zcRjjb"><i
                                                                        class="google-material-icons-filled umPTV"
                                                                        aria-hidden="true">check_circle</i></div>
                                                            </div>
                                                            <div class="lBX2Eb">
                                                                <div class="wkXMm">Ricevi aggiornamenti/suggerimenti
                                                                    utili: iscriviti</div>
                                                                <div class="Q3rcpd">Iscriviti per ricevere comunicazioni
                                                                    personalizzate con suggerimenti per usare al meglio
                                                                    le tue app Google</div>
                                                                <div class="LIwWbc">Iscrizione per
                                                                    suggerimenti/aggiornam. effettuata</div>
                                                            </div>
                                                        </span>
                                                        <div class="BDQaNd" jsname="SEX99d">
                                                            <div jscontroller="DFTXbf" data-progressvalue="0"
                                                                class="DU29of a9u1Hb" jsname="des24e">
                                                                <div class="VfPpkd-JGcpL-Mr8B3-V67aGc" jsname="a2gnBb">
                                                                    Caricamento</div>
                                                                <div class="VfPpkd-JGcpL-P1ekSe VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc"
                                                                    style="width: 32px; height: 32px;"
                                                                    role="progressbar" aria-label="Caricamento"
                                                                    aria-hidden="true" jsname="LbNpof">
                                                                    <div class="VfPpkd-JGcpL-uI4vCe-haAclf"><svg
                                                                            class="VfPpkd-JGcpL-uI4vCe-LkdAo-Bd00G"
                                                                            viewBox="0 0 32 32"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-u014N"
                                                                                cx="16" cy="16" r="11.25"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                            <circle class="VfPpkd-JGcpL-uI4vCe-LkdAo"
                                                                                jsname="MU5Wmf" cx="16" cy="16"
                                                                                r="11.25" stroke-dasharray="70.6858335"
                                                                                stroke-dashoffset="70.6858335"
                                                                                stroke-width="2.8333333333333335">
                                                                            </circle>
                                                                        </svg></div>
                                                                    <div class="VfPpkd-JGcpL-IdXvz-haAclf">
                                                                        <div class="VfPpkd-JGcpL-QYI5B-pbTTYe">
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-LK5yu">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div class="VfPpkd-JGcpL-OcUoKf-TpMipd"><svg
                                                                                    class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.266666666666667">
                                                                                    </circle>
                                                                                </svg></div>
                                                                            <div
                                                                                class="VfPpkd-JGcpL-lLvYUc-e9ayKc VfPpkd-JGcpL-lLvYUc-qwU8Me">
                                                                                <svg class="VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G"
                                                                                    viewBox="0 0 32 32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <circle cx="16" cy="16" r="11.25"
                                                                                        stroke-dasharray="70.6858335"
                                                                                        stroke-dashoffset="35.34291675"
                                                                                        stroke-width="2.8333333333333335">
                                                                                    </circle>
                                                                                </svg></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nKvHzf v8jbX" role="heading" aria-level="1">Puoi gestire queste
                                                informazioni in qualsiasi momento nel tuo <a class="gM4fbb"
                                                    href="https://myaccount.google.com/">Account&nbsp;Google</a>.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lSkFK lq3Znf qY2ck" jsname="NPfFvd">
                                <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true"><button
                                        class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 k97fxb yu6jOd"
                                        jscontroller="soHxf"
                                        jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                        data-idom-class="ksBjEc lKxP2d LQeN7 k97fxb yu6jOd" jsname="bySMBb"
                                        jslog="53558; 1:20; track:click,impression">
                                        <div class="VfPpkd-Jh9lGc"></div>
                                        <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                        <div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d">Non
                                            ora</span>
                                    </button></div>
                                <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true"><button
                                        class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 k97fxb xF8ewc TQb0Ce"
                                        jscontroller="soHxf"
                                        jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                        data-idom-class="nCP5yc AjY5Oe DuMIQc LQeN7 k97fxb xF8ewc TQb0Ce"
                                        jsname="iib5kc" jslog="53557; 1:20; track:click,impression">
                                        <div class="VfPpkd-Jh9lGc"></div>
                                        <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                        <div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc"
                                            class="VfPpkd-vQzf8d">Fine</span>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><c-data id="c0" jsdata=" pLRQKc;_;$0"></c-data><view-header style="display: none;">
                <title>Account Google</title>
            </view-header>
        </c-wiz>
    </div>
    <div id="goog-lr-8" aria-live="assertive" aria-atomic="true"
        style="position: absolute; top: -1000px; height: 1px; overflow: hidden;"></div>
</body>

</html>