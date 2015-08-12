/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});


/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * /

/*!
 *  Kwicks: Sexy Sliding Panels for jQuery - v2.1.0
 *  http://devsmash.com/projects/kwicks
 *
 *  Copyright 2013 Jeremy Martin (jmar777)
 *  Contributors: Duke Speer (Duke3D)
 *  Released under the MIT license
 *  http://www.opensource.org/licenses/mit-license.php
 */

(function(e){var t={init:function(t){var r={maxSize:-1,minSize:-1,spacing:5,duration:500,isVertical:false,easing:undefined,behavior:null,autoResize:true,showSpeed:undefined};var i=e.extend(r,t);if(i.minSize!==-1&&i.maxSize!==-1)throw new Error("Kwicks options minSize and maxSize may not both be set");if(i.behavior&&i.behavior!=="menu"&&i.behavior!=="slideshow")throw new Error("Unrecognized Kwicks behavior specified: "+i.behavior);e.each(["minSize","maxSize"],function(e,t){var n=i[t];switch(typeof n){case"number":i[t+"Units"]="px";break;case"string":if(n.slice(-1)==="%"){i[t+"Units"]="%";i[t]=+n.slice(0,-1)/100}else if(n.slice(-2)==="px"){i[t+"Units"]="px";i[t]=+n.slice(0,-2)}else{throw new Error("Invalid value for Kwicks option "+t+": "+n)}break;default:throw new Error("Invalid value for Kwicks option "+t+": "+n)}});return this.each(function(){e(this).data("kwicks",new n(this,i))})},expand:function(t){return this.each(function(){var n=e(this),r;if(n.is(".kwicks-processed")){if(typeof t!=="number")throw new Error('Kwicks method "expand" requires an index');if(t>=0)r=n.children().eq(t)}else if(n.parent().is(".kwicks-processed")){r=n;t=r.index()}else{throw new Error('Cannot call "expand" method on a non-Kwicks element')}var i=r&&r.length?r:n;i.trigger("expand.kwicks",{index:t})})},expanded:function(){var e=this.first().data("kwicks");if(!e)throw new Error('Cannot called "expanded" method on a non-Kwicks element');return e.expandedIndex},select:function(t){return this.each(function(){var n=e(this),r;if(n.is(".kwicks-processed")){if(typeof t!=="number")throw new Error('Kwicks method "select" requires an index');if(t>=0)r=n.children().eq(t)}else if(n.parent().is(".kwicks-processed")){r=n;t=r.index()}else{throw new Error('Cannot call "expand" method on a non-Kwicks element')}var i=r&&r.length?r:n;i.trigger("select.kwicks",{index:t})})},selected:function(){var e=this.first().data("kwicks");if(!e)throw new Error('Cannot called "selected" method on a non-Kwicks element');return e.selectedIndex},resize:function(t){return this.each(function(){var t=e(this),n=t.data("kwicks");if(!n){throw new Error('Cannot called "resize" method on a non-Kwicks element')}n.resize()})}};e.fn.kwicks=function(e){if(t[e]){return t[e].apply(this,Array.prototype.slice.call(arguments,1))}else if(typeof e==="object"||!e){return t.init.apply(this,arguments)}else{throw new Error("Unrecognized kwicks method: "+e)}};e.event.special.expand={_default:function(t,n){if(t.namespace!=="kwicks")return;var r=e(t.target);var i=r.data("kwicks")||r.parent().data("kwicks");if(!i)return;i.expand(n.index)}};e.event.special.select={_default:function(t,n){if(t.namespace!=="kwicks")return;var r=e(t.target);var i=r.data("kwicks")||r.parent().data("kwicks");if(!i)return;i.select(n.index)}};var n=function(n,r){this.opts=r;var i=r.isVertical?"vertical":"horizontal";this.$container=e(n).addClass("kwicks").addClass("kwicks-"+i);this.$panels=this.$container.children();this.selectedIndex=this.$panels.filter(".kwicks-selected").index();this.expandedIndex=this.selectedIndex;this.primaryDimension=r.isVertical?"height":"width";this.secondaryDimension=r.isVertical?"width":"height";this.calculatePanelSizes();this.primaryAlignment=r.isVertical?"top":"left";this.secondaryAlignment=r.isVertical?"bottom":"right";this.$timer=e({progress:0});this.offsets=this.getOffsetsForExpanded();this.initStyles();this.initBehavior();this.initWindowResizeHandler();this.initSlideShow()};n.prototype.calculatePanelSizes=function(){var e=this.opts,t=this.$panels.length,n=this.getContainerSize(true),r=e.spacing*(t-1),i=n-r;this.panelSize=i/t;if(e.minSize===-1){if(e.maxSize===-1){if(t<5){this.panelMaxSize=n/3*2}else{this.panelMaxSize=n/3}}else if(e.maxSizeUnits==="%"){this.panelMaxSize=i*e.maxSize}else{this.panelMaxSize=e.maxSize}this.panelMinSize=(i-this.panelMaxSize)/(t-1)}else if(e.maxSize===-1){if(e.minSizeUnits==="%"){this.panelMinSize=i*e.minSize}else{this.panelMinSize=e.minSize}this.panelMaxSize=i-this.panelMinSize*(t-1)}};n.prototype.getOffsetsForExpanded=function(){var e=this.expandedIndex,t=this.$panels.length,n=this.opts.spacing,r=this.panelSize,i=this.panelMinSize,s=this.panelMaxSize;var o=[0];for(var u=1;u<t;u++){if(e===-1){o[u]=u*(r+n)}else if(u<=e){o[u]=u*(i+n)}else{o[u]=s+i*(u-1)+u*n}}return o};n.prototype.setStyle=function(){if(e.support.style){return function(e,t){e.setAttribute("style",t)}}else{return function(e,t){e.style.cssText=t}}}();n.prototype.updatePanelStyles=function(){var e=this.offsets,t=this.$panels,n=this.primaryDimension,r=this.primaryAlignment,i=this.secondaryAlignment,s=this.opts.spacing,o=this.getContainerSize();var u=!!this._stylesInited?"":"position:absolute;",a,f,l,c;for(var h=t.length;h--;){l=a;a=Math.round(e[h]);if(h===t.length-1){f=o-a;c=i+":0;"+n+":"+f+"px;"}else{f=l-a-s;c=r+":"+a+"px;"+n+":"+f+"px;"}this.setStyle(t[h],u+c)}if(!this._stylesInited){this.$container.addClass("kwicks-processed");this._stylesInited=true}};n.prototype.initStyles=function(){var e=this.opts,t=this.$container,n=this.$panels,r=n.length,i=this.primaryDimension,s=this.secondaryDimension;this.updatePanelStyles()};n.prototype.initBehavior=function(){if(!this.opts.behavior)return;var t=this.$container;switch(this.opts.behavior){case"menu":this.$container.on("mouseleave",function(){t.kwicks("expand",-1)}).children().on("mouseover",function(){e(this).kwicks("expand")}).click(function(){e(this).kwicks("select")});break;case"slideshow":this.$panels.click(function(){e(this).kwicks("select")});break;default:throw new Error("Unrecognized behavior option: "+this.opts.behavior)}};n.prototype.initWindowResizeHandler=function(){if(!this.opts.autoResize)return;var t=this,n=0,r=false;var i=function(e){if(!e){r=false}var s=+(new Date);if(s-n<20){if(r)return;setTimeout(i,20-(s-n));r=true;return}n=s;t.resize()};e(window).on("resize",i)};n.prototype.initSlideShow=function(){if(!this.opts.showSpeed||this.opts.behavior!=="slideshow")return;if(isNaN(this.opts.showSpeed)){throw new Error("Invalid slideShow option (not a number): "+this.opts.slideShow)}var e=this,t=parseInt(this.opts.showSpeed)*1e3,n=this.$panels.length,r=0;clearInterval(this.slideShowInterval);this.slideShowInterval=setInterval(function(){e.expand(r++%n)},t)};n.prototype.getContainerSize=function(e){var t=this._containerSize;if(e||!t){t=this._containerSize=this.$container[this.primaryDimension]()}return t};n.prototype.getExpandedPanel=function(){return this.expandedIndex===-1?e([]):this.$panels.eq(this.expandedIndex)};n.prototype.getCollapsedPanels=function(){return this.expandedIndex===-1?e([]):this.$panels.not(this.getExpandedPanel())};n.prototype.getSelectedPanel=function(){return this.selectedIndex===-1?e([]):this.$panels.eq(this.selectedIndex)};n.prototype.resize=function(e){if(this.getContainerSize()===this.getContainerSize(true))return;this.calculatePanelSizes();this.offsets=this.getOffsetsForExpanded();if(this.isAnimated){this._dirtyOffsets=true}else{this.updatePanelStyles()}};n.prototype.select=function(e){if(e===this.selectedIndex){return this.expand(e)}this.getSelectedPanel().removeClass("kwicks-selected");this.selectedIndex=e;this.getSelectedPanel().addClass("kwicks-selected");this.expand(e)};n.prototype.expand=function(e){var t=this;if(e===-1)e=this.selectedIndex;if(e===this.expandedIndex)return;this.getExpandedPanel().removeClass("kwicks-expanded");this.getCollapsedPanels().removeClass("kwicks-collapsed");this.expandedIndex=e;this.getExpandedPanel().addClass("kwicks-expanded");this.getCollapsedPanels().addClass("kwicks-collapsed");var n=this.$timer,r=this.$panels.length,i=this.offsets.slice(),s=this.offsets,o=this.getOffsetsForExpanded();n.stop()[0].progress=0;this.isAnimated=true;n.animate({progress:1},{duration:this.opts.duration,easing:this.opts.easing,step:function(e){if(t._dirtyOffsets){s=t.offsets;o=t.getOffsetsForExpanded();t._dirtyOffsets=false}s.length=0;for(var n=0;n<r;n++){var u=o[n],a=u-(u-i[n])*(1-e);s[n]=a}t.updatePanelStyles()},complete:function(){t.isAnimated=false}})}})(jQuery)