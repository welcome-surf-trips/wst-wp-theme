/**
* hoverIntent r5 // 2007.03.27 // jQuery 1.1.2
* <http://cherne.net/brian/resources/jquery.hoverIntent.html>
* 
* @param  f  onMouseOver function || An object with configuration options
* @param  g  onMouseOut function  || Nothing (use configuration options object)
* @return    The object (aka "this") that called hoverIntent, and the event object
* @author    Brian Cherne <brian@cherne.net>
*/
(function($){$.fn.hoverIntent=function(f,g){var cfg={sensitivity:7,interval:100,timeout:0};cfg=$.extend(cfg,g?{over:f,out:g}:f);var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY;};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if((Math.abs(pX-cX)+Math.abs(pY-cY))<cfg.sensitivity){$(ob).unbind("mousemove",track);ob.hoverIntent_s=1;return cfg.over.apply(ob,[ev]);}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob);},cfg.interval);}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=0;return cfg.out.apply(ob,[ev]);};var handleHover=function(e){var p=(e.type=="mouseover"?e.fromElement:e.toElement)||e.relatedTarget;while(p&&p!=this){try{p=p.parentNode;}catch(e){p=this;}}if(p==this){return false;}var ev=jQuery.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);}if(e.type=="mouseover"){pX=ev.pageX;pY=ev.pageY;$(ob).bind("mousemove",track);if(ob.hoverIntent_s!=1){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob);},cfg.interval);}}else{$(ob).unbind("mousemove",track);if(ob.hoverIntent_s==1){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob);},cfg.timeout);}}};return this.mouseover(handleHover).mouseout(handleHover);};})(jQuery);



// Sticky Plugin
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 2/14/2011
// Date: 2/12/2012
// Website: http://labs.anthonygarand.com/sticky
// Description: Makes an element on the page stick on the screen as you scroll
//              It will only set the 'top' and 'position' of your element, you
//              might need to adjust the width in some cases.

(function($) {
    var defaults = {
            topSpacing: 0,
            bottomSpacing: 0,
            className: 'is-sticky',
            wrapperClassName: 'sticky-wrapper',
        },
        $window = $(window),
        $document = $(document),
        sticked = [],
        windowHeight = $window.height(),
        scroller = function() {
            var scrollTop = $window.scrollTop(),
                documentHeight = $document.height(),
                dwh = documentHeight - windowHeight,
                extra = (scrollTop > dwh) ? dwh - scrollTop : 0;
            for (var i = 0; i < sticked.length; i++) {
                var s = sticked[i],
                    elementTop = s.stickyWrapper.offset().top,
                    etse = elementTop - s.topSpacing - extra;
                if (scrollTop <= etse) {
                    if (s.currentTop !== null) {
                        s.stickyElement
                            .css('position', '')
                            .css('top', '')
                            .removeClass(s.className);
                        s.stickyElement.parent().removeClass(s.className);
                        s.currentTop = null;
                    }
                }
                else {
                    var newTop = documentHeight - s.stickyElement.outerHeight()
                        - s.topSpacing - s.bottomSpacing - scrollTop - extra;
                    if (newTop < 0) {
                        newTop = newTop + s.topSpacing;
                    } else {
                        newTop = s.topSpacing;
                    }
                    if (s.currentTop != newTop) {
                        s.stickyElement
                            .css('position', 'fixed')
                            .css('top', newTop)
                            .addClass(s.className);
                        s.stickyElement.parent().addClass(s.className);
                        s.currentTop = newTop;
                    }
                }
            }
        },
        resizer = function() {
            windowHeight = $window.height();
        },
        methods = {
            init: function(options) {
                var o = $.extend(defaults, options);
                return this.each(function() {
                    var stickyElement = $(this);

                    stickyId = stickyElement.attr('id');
                    wrapper = $('<div></div>')
                        .attr('id', stickyId + '-sticky-wrapper')
                        .addClass(o.wrapperClassName);
                    stickyElement.wrapAll(wrapper)
                    var stickyWrapper = stickyElement.parent();
                    stickyWrapper.css('height', stickyElement.outerHeight());
                    sticked.push({
                        topSpacing: o.topSpacing,
                        bottomSpacing: o.bottomSpacing,
                        stickyElement: stickyElement,
                        currentTop: null,
                        stickyWrapper: stickyWrapper,
                        className: o.className
                    });
                });
            },
            update: scroller
        };

    // should be more efficient than using $window.scroll(scroller) and $window.resize(resizer):
    if (window.addEventListener) {
        window.addEventListener('scroll', scroller, false);
        window.addEventListener('resize', resizer, false);
    } else if (window.attachEvent) {
        window.attachEvent('onscroll', scroller);
        window.attachEvent('onresize', resizer);
    }

    $.fn.sticky = function(method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.sticky');
        }
    };
    $(function() {
        setTimeout(scroller, 0);
    });
})(jQuery);


/*! http://tinynav.viljamis.com v1.03 by @viljamis */
(function(a,i,g){a.fn.tinyNav=function(j){var c=a.extend({active:"selected",header:!1},j);return this.each(function(){g++;var h=a(this),d="tinynav"+g,e=".l_"+d,b=a("<select/>").addClass("tinynav "+d);if(h.is("ul,ol")){c.header&&b.append(a("<option/>").text("Navigation"));var f="";h.addClass("l_"+d).find("a").each(function(){f+='<option value="'+a(this).attr("href")+'">'+a(this).text()+"</option>"});b.append(f);c.header||b.find(":eq("+a(e+" li").index(a(e+" li."+c.active))+")").attr("selected",!0);
b.change(function(){i.location.href=a(this).val()});a(e).after(b)}})}})(jQuery,this,0);


//TOTEM SLIDER FOR NEWSSLIDER
// http://buildinternet.com/project/totem/
// License: MIT//
(function(a){if(!a.omr){a.omr=new Object()}a.omr.totemticker=function(c,b){var d=this;d.el=c;d.$el=a(c);d.$el.data("omr.totemticker",d);d.init=function(){d.options=a.extend({},a.omr.totemticker.defaultOptions,b);d.ticker;d.format_ticker();d.setup_nav();d.start_interval()};d.start_interval=function(){clearInterval(d.ticker);d.ticker=setInterval(function(){d.$el.find("li:first").animate({marginTop:"-"+d.options.row_height,},d.options.speed,function(){a(this).detach().css("marginTop","0").appendTo(d.$el)})},d.options.interval)};d.reset_interval=function(){clearInterval(d.ticker);d.start_interval()};d.stop_interval=function(){clearInterval(d.ticker)};d.format_ticker=function(){if(typeof(d.options.max_items)!="undefined"&&d.options.max_items!=null){var f=d.options.row_height.replace(/px/i,"");var e=f*d.options.max_items;d.$el.css({height:e+"px",overflow:"hidden",})}else{d.$el.css({overflow:"hidden",})}};d.setup_nav=function(){if(typeof(d.options.stop)!="undefined"&&d.options.stop!=null){a(d.options.stop).click(function(){d.stop_interval();return false})}if(typeof(d.options.start)!="undefined"&&d.options.start!=null){a(d.options.start).click(function(){d.start_interval();return false})}if(typeof(d.options.previous)!="undefined"&&d.options.previous!=null){a(d.options.previous).click(function(){d.$el.find("li:last").detach().prependTo(d.$el).css("marginTop","-"+d.options.row_height);d.$el.find("li:first").animate({marginTop:"0px",},d.options.speed,function(){d.reset_interval()});return false})}if(typeof(d.options.next)!="undefined"&&d.options.next!=null){a(d.options.next).click(function(){d.$el.find("li:first").animate({marginTop:"-"+d.options.row_height,},d.options.speed,function(){a(this).detach().css("marginTop","0px").appendTo(d.$el);d.reset_interval()});return false})}if(typeof(d.options.mousestop)!="undefined"&&d.options.mousestop===true){d.$el.mouseenter(function(){d.stop_interval()}).mouseleave(function(){d.start_interval()})}};d.debug_info=function(){console.log(d.options)};d.init()};a.omr.totemticker.defaultOptions={message:"Ticker Loaded",next:null,previous:null,stop:null,start:null,row_height:"100px",speed:800,interval:4000,max_items:null,};a.fn.totemticker=function(b){return this.each(function(){(new a.omr.totemticker(this,b))})}})(jQuery);



/*
 * Simple jQuery Equal Heights
 *
 * Copyright (c) 2012 Matt Banks
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 1.3
 */
(function(a){a.fn.equalHeights=function(){var b=0,c=a(this);return c.each(function(){var c=a(this).innerHeight();c>b&&(b=c)}),c.height(b)}})(jQuery);

