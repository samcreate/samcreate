/*! main class
 * @depends jquery/jquery-1.8.0.min.js
 */
var sam  = sam || {};
sam.main = function(){
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	var _queue = [];
	var _app_vars = "app vars not set!";
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {

		vars : {
			isMobile : false,
			isIpad : false
		},
		
		init : function(){
			
				debug.time( 'Initialization time');
			
				debug.group("# [main.js]");
				
				debug.log('- initialized');
				
				$('html').removeClass('no-js');

				_V_.options.flash.swf = "/media/swf/video-js.swf";

				debug.groupEnd();
				
				self.appVARS(window._app_vars);
				self.checkMobile();
				self.checkIpad();
				_setup_scollMenu();
				_run();
				_setup_bg(); //must be after run
		},
		queue : function(f){
			
			if (arguments.length > 0) {
				for (var i = 0; i < arguments.length; i++) {
					_queue.push(arguments[i]);
				}
			}
			
		},
		appVARS : function(p_vars){
			if(p_vars){
				_app_vars = p_vars;
			}else{
				return _app_vars;
			}
		},
		purgatory : function(p_func, p_options){
			
			return new purgatoryCell(p_func,p_options);
			
			
		},
		checkMobile: function() {
			if(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) ||navigator.userAgent.match(/BlackBerry/i)){
				self.vars.isMobile = true;	
			} 
		},		
		checkIpad: function() {
			if(navigator.userAgent.match(/iPad/i) != null) {
				self.vars.isIpad = true;
			}
		},
	
	};
	
	return self;
	
	// ================================================
	// = Private functionse (function _private() {} ) =
	// ================================================
	
	function _run(){
		//everything is init'ed here
		
		for (var i = 0; i < _queue.length; i++) {
			try{
				_queue[i]();
			}catch(e){
				debug.error(e);
			}
       
        }
		debug.timeEnd( 'Initialization time');
	}
	

	function purgatoryCell(p_func, p_options) {
		p_options = p_options || {};
		this.count = 0;
		this.func = p_func;
		this.amount = p_options.amount || 10;
		this.time = p_options.time || 1000;
		this._scope = this;
		(function(_functorun, _o) {
			try {
				_functorun();
			} catch (e) {
				if(_o.scope.count >= _o.amount) { debug.warn("purgatory function has been tried "+_o.scope.count+" times. ",_functorun); return;}
				var _parent = arguments.callee;
				var _t = setTimeout(function() {
							_o.scope.count++;
							_parent.call(_o.scope, _functorun,_o);
						}, _o.time);
			}
		}(this.func, {scope:this._scope,amount:this.amount,time:this.time}));
	}

	function _setup_bg () {
		if(sam.bgController.canvasOkay() && !self.vars.isMobile){
			sam.spirals.init(sam.bgController.animationLayer());
			sam.bgController.queue(sam.spirals.redraw);
			
		}
	}

	function _setup_scollMenu(){


		if(self.vars.isIpad || self.vars.isMobile) return;

		var $_menu = $("#mainMenu"),
		_v_pos,
		_menuInnerHeight = $("#mainMenu").innerHeight();


		$(window).scroll( function(e){
			
			_v_pos = ($(window).scrollTop()-$("#mainMenu").offset().top)-_menuInnerHeight;

			if(_v_pos > 0 && $("#mainMenu").offset().top != 200){

				$_menu.css({position:"fixed",right:"50%",margin:"0 -487px 0 auto","z-index":4,top:"-65px"});
				$_menu.stop().animate({top: 0}, 240).addClass('animatedLogo').css({backgroundImage:"none"}).css({
						backgroundImage: "url(/media/images/logo2.gif?p"+ new Date().getTime()+")"
				});
		

			}else if($("#mainMenu").offset().top <= 119){
				$_menu.attr("style","");
			}

		});

	}


}();

/*
 * JavaScript Debug - v0.4 - 6/22/2010
 * http://benalman.com/projects/javascript-debug-console-log/
 * With lots of help from Paul Irish!
 * http://paulirish.com/
 */

window.debug=(function(){var i=this,b=Array.prototype.slice,d=i.console,h={},f,g,m=9,c=["error","warn","info","debug","log"],l="assert clear count dir dirxml exception group groupCollapsed groupEnd profile profileEnd table time timeEnd trace".split(" "),j=l.length,a=[];while(--j>=0){(function(n){h[n]=function(){m!==0&&d&&d[n]&&d[n].apply(d,arguments)}})(l[j])}j=c.length;while(--j>=0){(function(n,o){h[o]=function(){var q=b.call(arguments),p=[o].concat(q);a.push(p);e(p);if(!d||!k(n)){return}d.firebug?d[o].apply(i,q):d[o]?d[o](q):d.log(q)}})(j,c[j])}function e(n){if(f&&(g||!d||!d.log)){f.apply(i,n)}}h.setLevel=function(n){m=typeof n==="number"?n:9};function k(n){return m>0?m>n:c.length+m<=n}h.setCallback=function(){var o=b.call(arguments),n=a.length,p=n;f=o.shift()||null;g=typeof o[0]==="boolean"?o.shift():false;p-=typeof o[0]==="number"?o.shift():n;while(p<n){e(a[p++])}};return h})();

$(document).ready(function() {
	
 sam.main.init();

});

