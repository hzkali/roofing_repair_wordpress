
/*
 * jQuery appear plugin
 *
 * Copyright (c) 2012 Andrey Sidorov
 * licensed under MIT license.
 *
 * https://github.com/morr/jquery.appear/
 *
 * Version: 0.3.3
 */
(function(e){function u(){r=false;for(var n=0;n<t.length;n++){var i=e(t[n]).filter(function(){return e(this).is(":appeared")});i.trigger("appear",[i]);if(o){var s=o.not(i);s.trigger("disappear",[s])}o=i}}var t=[];var n=false;var r=false;var i={interval:250,force_process:false};var s=e(window);var o;e.expr[":"]["appeared"]=function(t){var n=e(t);if(!n.is(":visible")){return false}var r=s.scrollLeft();var i=s.scrollTop();var o=n.offset();var u=o.left;var a=o.top;if(a+n.height()>=i&&a+(n.data("appear-bottom-offset")||0)<=i+s.height()&&u+n.width()>=r&&u-(n.data("appear-left-offset")||0)<=r+s.width()){return true}else{return false}};e.fn.extend({appear:function(s){var o=e.extend({},i,s||{});var a=this.selector||this;if(!n){var f=function(){if(r){return}r=true;setTimeout(u,o.interval)};e(window).scroll(f).resize(f);n=true}if(o.force_process){setTimeout(u,o.interval)}t.push(a);return e(a)}});e.extend({force_appear:function(){if(n){u();return true}return false}})})(jQuery)

// smoothscroll.min.js
!function(e,t){"use strict";"function"==typeof define&&define.amd?define(t):"object"==typeof exports&&"object"==typeof module?module.exports=t():e.smoothScroll=t()}(this,function(){"use strict";if("object"==typeof window&&void 0!==document.querySelectorAll&&void 0!==window.pageYOffset&&void 0!==history.pushState){var e=function(e){return"HTML"===e.nodeName?-window.pageYOffset:e.getBoundingClientRect().top+window.pageYOffset},t=function(e){return.5>e?4*e*e*e:(e-1)*(2*e-2)*(2*e-2)+1},n=function(e,n,o,i){return o>i?n:e+(n-e)*t(o/i)},o=function(t,o,i,r){o=o||500,r=r||window;var u=window.pageYOffset;if("number"==typeof t)var a=parseInt(t);else var a=e(t);var d=Date.now(),f=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||function(e){window.setTimeout(e,15)},s=function(){var e=Date.now()-d;r!==window?r.scrollTop=n(u,a,e,o):window.scroll(0,n(u,a,e,o)),e>o?"function"==typeof i&&i(t):f(s)};s()},i=function(e){e.preventDefault(),location.hash!==this.hash&&window.history.pushState(null,null,this.hash),o(document.getElementById(this.hash.substring(1)),500,function(e){location.replace("#"+e.id)})};return document.addEventListener("DOMContentLoaded",function(){for(var e,t=document.querySelectorAll('a[href^="#"]:not([href="#"])'),n=t.length;e=t[--n];)e.addEventListener("click",i,!1)}),o}});