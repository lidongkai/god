!function(){"use strict";!function(){function n(n,e){window.postMessage&&window.top!==window&&window.top.postMessage(JSON.stringify({type:n,args:e}),"*")}function e(n,e,t){var r;if(null==n)throw new TypeError('"this" is null or not defined');var o=p(n),i=o.length>>>0;if(0===i)return-1;var a=+t||0;if(Math.abs(a)===Infinity&&(a=0),a>=i)return-1;for(r=Math.max(a>=0?a:i-Math.abs(a),0);r<i;){if(r in o&&o[r]===e)return r;r++}return-1}function t(n,e){function t(){return R.get(u)}function r(){var n=t();if(n){var e=n.split(",");e.push(a)>5&&e.shift(),R.set(u,e.toString(),c)}else R.set(u,a,c)}function o(){var n=t().split(","),e=n.length,r=n[e-1],o="";return e>1&&(o=n[e-2]),[r,o]}var i=X(),a=e(),c={expires:365,path:"/",domain:"."+i},u=n.charAt(0).toUpperCase()+n.slice(1),s=R.get(n),d=R.get(u);return s&&(R.set(n,0,{expires:-1,path:"/"}),d||R.set(u,s,c)),{get:t,set:r,getLast:o}}function r(n,e,t,r){return null!=n&&(n.addEventListener?n.addEventListener(e,t,!!r):n.attachEvent?n.attachEvent("on"+e,t):n["on"+e]=t,!0)}function o(){var n="";try{n=window.top.document.referrer}catch(e){}return n}function i(n,e,t){var o=document.getElementsByTagName("script")[0],i=document.createElement("script");i.type="text/javascript",i.async=!0,i.defer=!0,i.src=n,o.parentNode.insertBefore(i,o),r(i,"load",e),r(i,"error",t),r(i,"readystatechange",function(n){/^complete|loaded$/.test(i.readyState)&&e()})}function a(n){var e={};return e.cl=m.pixelDepth||m.colorDepth||"0",e.ds=m.width+"x"+m.height,e.ln=v.language||v.browserLanguage||"unknown",e.ck=n?1:0,e.et=0,e}function c(){var n="BackCompat"===document.compatMode?"body":"documentElement",e=document[n];return[Math.max(e.scrollWidth,e.clientWidth),Math.max(e.scrollHeight,e.clientHeight)]}function u(n){n=D.fixTarget(n);var e=n.clientX,t=n.clientY,r=A.getScroll(),o=r.scrollY,i=r.scrollX,a=c();window._qha("send",{et:10,x:e+i,y:t+o,w:a[0],h:a[1]})}function s(n,e){function t(n){var t=n.split(",");if(""===t)return E.log("mv is null");var r={et:20,eid:e,ep:t[0],vid:t[1],ctn:t[2]};i=!0,R.set("mediav",U.object2String({eid:e,ep:t[0],vid:t[1],ctn:t[2]})),window._qha("send",r)}function o(n){"http://360fenxi.mediav.com"===n.origin||"https://360fenxi.mediav.com"===n.origin?i||t(n.data):E.log("invalid iframe url")}var i=!1;"postMessage"in window?r(window,"message",o):window.navigator._qha_message=function(n){t(n)}}function d(){var n=G.getInfo(),e={et:3,ep:A.nowBySeconds()-F};return L.assign(e,n)}function f(n){var e=G.getInfo(),t=a(n);t=L.assign(t,e),M||(window._qha("send",t),M=!0)}function l(n){return n.replace(/([.*+?^=!:${}()|[\]\/\\])/g,"\\$&")}function w(n){return new RegExp(l(n).replace("\\*",".*"))}function g(n){var t=h.href;return e(n,"*")>-1?w(n).test(t):n===t}var p={}.constructor,h=window.location,m=window.screen,v=window.navigator,_=window.Image,y=window._qha_data,b=h.protocol+"//"+y.host+"/s.gif",x=y.domain,S="2.0.0",q=function(){return+new Date};if((new _).src=b+"?et=100&t="+q()+"&si="+y.domain,!window._qha||!0!==window._qha.init){var k=function(){},j=function(){return window.console&&"function"==typeof console.info?console.info.bind(console):k}(),E={dumped:void 0,stack:[],log:function(){for(var n=[],e=arguments.length;e--;)n[e]=arguments[e];this.dumped?j.apply(null,n):this.stack.push(arguments)},dump:function(){var n=this;for(this.dumped=!0;this.stack.length;)j.apply(null,n.stack.shift())}},C=y.e360,O=y.pageClk,I=1===y.urlClk,T=y.idClk,N=y.mvid,M=!1,A={isNumber:function(n){return"number"==typeof n},isString:function(n){return"string"==typeof n},now:function(){return(new Date).getTime()},nowBySeconds:function(){return parseInt(this.now()/1e3)},isArray:function(n){return"[object Array]"===p.prototype.toString.call(n)},isObject:function(n){return"[object Object]"===p.prototype.toString.call(n)},getScroll:function(){var n=window.pageXOffset!==undefined,e="CSS1Compat"===(document.compatMode||"");return{scrollX:n?window.pageXOffset:e?document.documentElement.scrollLeft:document.body.scrollLeft,scrollY:n?window.pageYOffset:e?document.documentElement.scrollTop:document.body.scrollTop}},getBrowser:function(){var n=v.userAgent.toLowerCase(),t={"360se-ua":"360se",TT:"tencenttraveler",Maxthon:"maxthon",GreenBrowser:"greenbrowser",Sogou:"se 1.x / se 2.x",TheWorld:"theworld"};for(var r in t)if(e(n,t[r])>-1)return r;var o=!1;try{var i=window.external.twGetSecurityID(window);+window.external.twGetVersion(i).replace(/\./g,"")>1013&&(o=!0)}catch(c){}if(o)return"360se-noua";var a=n.match(/(msie|chrome|safari|firefox|opera|trident)/);return a?a[0]:""},guid:function(){function n(n){var e=0,t=0,r=n.length-1;for(r;r>=0;r--){var o=parseInt(n.charCodeAt(r),10);e=(e<<6&4294967295)+o+(o<<14),0!=(t=4261412864&e)&&(e^=t>>21)}return e}return function(){for(var e=[v.appName,v.version,v.language||v.browserLanguage,v.platform,v.userAgent,m.width,"x",m.height,m.colorDepth,document.referrer].join(""),t=e.length,r=window.history.length;r;)e+=r--^t++;return 2147483647*(Math.round(2147483647*Math.random())^n(e))}()}},U=function(){function n(n){var e,t=[];for(var r in n)e=n[r],A.isString(e)&&(e='"'+e+'"'),t.push('"'+r+'":'+e);return"{"+t.join(",")+"}"}function e(e){if(!A.isArray(e))return"";if(window.JSON)return JSON.stringify(e);for(var t=[],r=0,o=e.length;r<o;r++){var i=e[r];A.isObject(i)&&t.push(n(e[r])),A.isString(i)&&t.push('"'+i+'"'),A.isNumber(i)&&t.push(i)}return"["+t.join(",")+"]"}function t(n){if(!A.isString(n))return null;if(window.JSON)return JSON.parse(n);var e=/^[\],:{}\s]*$/,t=/\\(?:["\\/bfnrt]|u[0-9a-fA-F]{4})/g,r=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+-]?\d+)?/g,o=/(?:^|:|,)(?:\s*\[)+/g;if(e.test(n.replace(t,"@").replace(r,"]").replace(o,"")))return new Function("return "+n)();throw new Error("invalid JSON data: ",n)}return{array2String:e,object2String:n,string2Object:t}}(),B=function(){function n(n){return o.apply(n,[0,1])[0]}function t(n){return o.apply(n,[1,n.length])}function r(n){for(var t=[],r=0;r<n.length;r++)e(t,n[r])<0&&t.push(n[r]);return t}var o=Array.prototype.slice;return{first:n,rest:t,distinct:r}}(),D={fixTarget:function(n){if(!("target"in n)){var e=n.srcElement||n.target;e&&3===e.nodeType&&(e=e.parentNode),n.target=e}return n}},L=function(){function n(n,e){if(e===undefined||null===e)return n;for(var t in e)e.hasOwnProperty(t)&&(n[t]=e[t]);return n}function e(n){var e=[];for(var t in n)if(null!=n[t])if(A.isArray(n[t])){var r=U.array2String(n[t]);e.push(encodeURIComponent(t)+"="+encodeURIComponent(r))}else e.push(encodeURIComponent(t)+"="+encodeURIComponent(n[t]));return e.join("&")}return{assign:n,obj2EncodeURI:e}}(),R={get:function(n){var e=new RegExp("(^| )"+n+"=([^;]*)(;|$)"),t=document.cookie.match(e);return t&&t[2]?unescape(t[2]):""},set:function(n,e,t){t=t||{};var r=-1,o=t.path,i=t.domain;t.expires&&(r=new Date(24*t.expires*60*60*1e3+q()));try{document.cookie=[n,"=",escape(e),r>=0?";expires="+r.toUTCString():"",o?";path="+o:"",i?";domain="+i:""].join("")}catch(a){E.log("error:",a)}}},X=function(){for(var n=document.domain,e=n.split("."),t=e.length,r=n,o="";t--;)if(o=e.slice(t).join("."),R.set("__qhart","1",{domain:"."+o}),"1"===R.get("__qhart")){r=o,document.cookie="__qhart=0;expires="+(new Date).toUTCString()+";domain=."+o;break}return function(){return r}}(),J=t("qs_lvt_"+x,function(){return A.nowBySeconds().toString()}),Y=t("qs_pv_"+x,function(){return A.guid().toString()}),$=function(){function n(n,e){var t="";switch(n){case"chrome":t=e.slice(0,8182);break;case"msie":t=e.slice(0,2083);break;case"firefox":t=e.slice(0,65536);break;case"safari":t=e.slice(0,8e4);break;default:t=e}return t}function t(e){e=n(A.getBrowser(),e),E.log("data is: ",e);var t="log_img_"+q(),r=window.__qha_log_imgs[t]=new _;r.onload=r.onerror=function(){window.__qha_log_imgs&&window.__qha_log_imgs[t]&&(window.__qha_log_imgs[t]=null,delete window.__qha_log_imgs[t])},r.src=e}function r(n,t,r){if(r=L.assign(r||{},t||{}),r.et>=30)try{var o=U.string2Object(R.get("mediav"));r=L.assign(r,o)}catch(a){}var i=L.obj2EncodeURI(r);return n+(e(n,"?")>-1?"&":"?")+i+"&t="+q()}return window.__qha_log_imgs={},{logData:function(n,e,o){t(r(n,e,o))}}}(),G={getInfo:function(){var n={};return window._e360_uid&&(n.e_uid=window._e360_uid||"",n.e_cid=window._e360_campaignid||"",n.e_gid=window._e360_groupid||"",n.e_yid=window._e360_creativeid||"",n.e_kid=window._e360_keywordid||"",n.e_clkid=window._e360_clickid||""),window._e360_commerce&&(n.e_com=window._e360_commerce||""),n}},P=function(){function n(n){n=D.fixTarget(n);var e=0,t=n.target,r={};for(r.t=t.nodeName;e<3&&t&&"A"!==t.nodeName;)e++,t=t.parentNode;return r.u=t&&"A"===t.nodeName?t.href:"",r}function t(n){n=D.fixTarget(n);var e={};return n.pageX&&(e.x=n.pageX),n.pageY&&(e.y=n.pageY),e}function r(n,e){var t=[];for(var r in n)n.hasOwnProperty(r)&&t.push(r+":"+encodeURIComponent(n[r]));for(var o in e)e.hasOwnProperty(o)&&t.push(o+":"+encodeURIComponent(e[o]));return t.join(",")}return function(o){var i=n(o);if(!(""===i.u||e(i.u,"javascript")>-1)){var a={},c=t(o),u=r(i,c);a.et=2,a.ep=u,window._qha("send",a)}}}(),W=function(e,t){W.c&&W.c.push([e,t]),n(e,[t])};W.c=[],W.trace=function(){var e=W.c;if(e){for(var t=null;e.length;)t=e.shift(),n(t[0],[t[1]]);W.c=null}};var F=A.nowBySeconds(),H=function(n,e){var t=!1;if(n){var r=n.split(","),i=parseInt(r.slice(-1));t=!(Math.abs(e-+i)>28800||!function(n,e){var t=document.createElement("a");t.href=e;var r=t.hostname,o=X(),i=r.indexOf(o);return i>=0&&r.slice(i)===o}(document.domain,o()))}else t=!1;return t}(J.get(),F);!function(n){n||J.set(),Y.set()}(H);var V=function(n,e){var t={};t.si=n,t.url=h.href,t.su=o(),t.flt=e,t.v=S;var r=J.getLast();t.lt=r[0],""!==r[1]&&(t.lt2=r[1]);var i=Y.getLast();return t.pt=i[0],""!==i[1]&&(t.pt2=i[1]),t}(x,F),z={send:function(n){$.logData(b,V,n)},init:function(){},trace:function(){W.trace()},dump:function(){E.dump()}};if(function(n){function e(e){var t=B.first(e),r=B.rest(e);"function"==typeof n[t]&&("trace"!==t&&W(t,r[0]),n[t].apply({},r))}var t=window._qha;t&&t.c&&A.isArray(t.c)&&function(n){for(var t=0,r=n.length;t<r;t++)e(n[t])}(t.c),t=window._qha=null;var r=function(){e(arguments)};window._qha=r,r("init",[x]),r.init=!0}(z),""!==C&&function(n,e,t){var r="https:"===h.protocol?"https:":"http:";E.log(n,e);var o=function(){t()};""===n||e?t():i(r+"//e.so.com/search/c.js?u="+n,o,o)}(C,H,function(){f(H)}),setTimeout(function(){f(H)},500),N&&function(n){var e='<iframe  name="'+n+'">',t=null;try{t=document.createElement(e)}catch(o){t=document.createElement("iframe"),t.name=n}t.height=0,t.width=0,t.border=0,t.style.display="none",t.src=h.protocol+"//360fenxi.mediav.com/mv.html",t.onload="",s(t,n),document.body?document.body.appendChild(t):r(window,"load",function(){document.body.appendChild(t)})}(N),r(window,"unload",function(){window._qha("send",d())}),null!==T){var K=function(n){var e=[];for(var t in T)g(t)&&e.push(T[t]);return B.distinct(e.join(",").split(","))}(T);K?r(document,"mousedown",function(n){return function(t){t=D.fixTarget(t);var r=t.target,o=r.id;o&&e(n,o)>-1&&window._qha("send",{et:11,ep:o})}}(K),!0):E.log("ids error: ",K)}if(I&&r(document,"mousedown",P,!0),null!==O){for(var Q=!1,Z=0;Z<O.length;Z++){if(g(O[Z])){Q=!0;break}}Q&&r(document,"mousedown",u,!0)}}}()}();