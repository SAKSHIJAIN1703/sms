/*! UIkit 2.3.1 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */

(function(t,e,i,n,s){var o={top:0,bottom:0,clsactive:"uk-sticky-active",clswrapper:"uk-sticky-wrapper",getWidthFrom:""},a=[],r=n.height(),l=function(){for(var t=n.scrollTop(),i=s.height(),o=i-r,l=t>o?o-t:0,u=0;a.length>u;u++)if(a[u].stickyElement.is(":visible")){var d=a[u],h=d.stickyWrapper.offset().top,c=h-d.top-l;if(c>=t)null!==d.currentTop&&(d.stickyElement.css({position:"",top:"",width:""}).parent().removeClass(d.clsactive),d.currentTop=null);else{var f=i-d.stickyElement.outerHeight()-d.top-d.bottom-t-l;f=0>f?f+d.top:d.top,d.currentTop!=f&&(d.stickyElement.css({position:"fixed",top:f,width:d.stickyElement.width()}),d.getWidthFrom!==void 0&&d.stickyElement.css("width",e(d.getWidthFrom).width()),d.stickyElement.parent().addClass(d.clsactive),d.currentTop=f)}}},u=function(){r=n.height()},d={init:function(t){var i=e.extend({},o,t);return this.each(function(){var t=e(this);if(!t.data("sticky")){var n=t.attr("id")||"s"+Math.ceil(1e4*Math.random()),s=e("<div></div>").attr("id",n+"-sticky-wrapper").addClass(i.clswrapper);t.wrapAll(s),"right"==t.css("float")&&t.css({"float":"none"}).parent().css({"float":"right"}),t.data("sticky",!0);var o=t.parent();o.css("height",t.outerHeight()),a.push({top:i.top,bottom:i.bottom,stickyElement:t,currentTop:null,stickyWrapper:o,clsactive:i.clsactive,getWidthFrom:i.getWidthFrom})}})},update:l};window.addEventListener?(window.addEventListener("scroll",l,!1),window.addEventListener("resize",u,!1)):window.attachEvent&&(window.attachEvent("onscroll",l),window.attachEvent("onresize",u)),e.fn.uksticky=function(t){return d[t]?d[t].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof t&&t?(e.error("Method "+t+" does not exist on jQuery.sticky"),void 0):d.init.apply(this,arguments)},e(document).on("uk-domready",function(){setTimeout(function(){l(),e("[data-uk-sticky]").each(function(){var t=e(this);t.data("sticky")||t.uksticky(i.Utils.options(t.attr("data-uk-sticky")))})},0)})})(this,jQuery,jQuery.UIkit,jQuery(window),jQuery(document));