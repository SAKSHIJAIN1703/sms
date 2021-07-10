/*! UIkit 2.3.1 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */

(function(t,e){var n={},i={},s=function(e){return"string"==t.type(e)&&(e={message:e}),arguments[1]&&(e=t.extend(e,"string"==t.type(arguments[1])?{status:arguments[1]}:arguments[1])),new a(e).show()},o=function(t,e){if(t)for(var n in i)t===i[n].group&&i[n].close(e);else for(var n in i)i[n].close(e)},a=function(e){this.options=t.extend({},a.defaults,e),this.uuid="ID"+(new Date).getTime()+"RAND"+Math.ceil(1e5*Math.random()),this.element=t(['<div class="uk-notify-message">','<a class="uk-close"></a>',"<div>"+this.options.message+"</div>","</div>"].join("")).data("notifyMessage",this),this.options.status&&(this.element.addClass("uk-notify-message-"+this.options.status),this.currentstatus=this.options.status),this.group=this.options.group,i[this.uuid]=this,n[this.options.pos]||(n[this.options.pos]=t('<div class="uk-notify uk-notify-'+this.options.pos+'"></div>').appendTo("body").on("click",".uk-notify-message",function(){t(this).data("notifyMessage").close()}))};t.extend(a.prototype,{uuid:!1,element:!1,timout:!1,currentstatus:"",group:!1,show:function(){if(!this.element.is(":visible")){var t=this;n[this.options.pos].show().prepend(this.element);var e=parseInt(this.element.css("margin-bottom"),10);return this.element.css({opacity:0,"margin-top":-1*this.element.outerHeight(),"margin-bottom":0}).animate({opacity:1,"margin-top":0,"margin-bottom":e},function(){if(t.options.timeout){var e=function(){t.close()};t.timeout=setTimeout(e,t.options.timeout),t.element.hover(function(){clearTimeout(t.timeout)},function(){t.timeout=setTimeout(e,t.options.timeout)})}}),this}},close:function(t){var e=this,s=function(){e.element.remove(),n[e.options.pos].children().length||n[e.options.pos].hide(),delete i[e.uuid]};this.timeout&&clearTimeout(this.timeout),t?s():this.element.animate({opacity:0,"margin-top":-1*this.element.outerHeight(),"margin-bottom":0},function(){s()})},content:function(t){var e=this.element.find(">div");return t?(e.html(t),this):e.html()},status:function(t){return t?(this.element.removeClass("uk-notify-message-"+this.currentstatus).addClass("uk-notify-message-"+t),this.currentstatus=t,this):this.currentstatus}}),a.defaults={message:"",status:"",timeout:5e3,group:null,pos:"top-center"},e.notify=s,e.notify.message=a,e.notify.closeAll=o})(jQuery,jQuery.UIkit);