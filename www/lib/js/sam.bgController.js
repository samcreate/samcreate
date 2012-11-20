/*! sam.bgController.js class
 * Created by Aaron McGuire on 2011-07-31.
 * Copyright (c) 2011. All rights reserved.
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * @depends jquery/jquery-1.6.1.min.js
 */
var sam = sam || {};
sam.bgController = function(){
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	var _theCanvasTop, _context_top, _theCanvasBottom, _bg_img, _context_bottom, _canvasOkay = false, _queue = [];
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function(){
	
				debug.group("# [sam.bgController.js]");
				
				debug.log('- initialized'); 
				
				//--> sof private functions
					_run();
				//--> eof private functions
			    		
				debug.groupEnd();

		},
		
		setBG : function(p_func){
			
			p_func();
			
		},
		
		draw : function(){
		
	
			_theCanvasTop.width = window.innerWidth;
			_theCanvasTop.height = window.innerHeight;
			
			_theCanvasBottom.width = window.innerWidth;
			_theCanvasBottom.height = window.innerHeight;
			
			_context_top.drawImage(_bg_img, 0, 0,_bg_img.width,_bg_img.height);
			
			
			for (var i = 0; i < _queue.length; i++) {
				try{
				   _queue[i](); 
				}catch(e){
				  debug.error(e);  
				}

	        }
			
		},
		animationLayer : function(){
			
			return {"canvas":_theCanvasBottom,"context":_context_bottom};
		},
		canvasOkay : function(){
			
			return _canvasOkay;
			
		},
		
		queue : function(f){
			
			if (arguments.length > 0) {
				for (var i = 0; i < arguments.length; i++) {
					_queue.push(arguments[i]);
				}
			}
			
		},
		dequeue : function(f){
			
			
			for (var i = 0; i < _queue.length; i++) {
				_queue.push(arguments[i]);
				if(_queue[i] === f){
					_queue.remove(i);
				}
			}
			
			
		}
		
	}
	
	return self;
	
	// ================================================
	// = Private functionse (function _private() {} ) =
	// ================================================
	
	function _run(){
		
		
		
		
		_theCanvasTop = document.getElementById('canvas_top');
		
		_theCanvasBottom = document.getElementById('canvas_bottom');
		
		
		
		if(!_theCanvasTop || !_theCanvasTop.getContext) { debug.log('noCanvas Support'); return;}
		
		
		_canvasOkay = true;
		
		_theCanvasTop.width = window.innerWidth;
		_theCanvasTop.height = window.innerHeight;
		_theCanvasBottom.width = window.innerWidth;
		_theCanvasBottom.height = window.innerHeight;
					
		
		//set context
		_context_top = _theCanvasTop.getContext('2d');
		_context_bottom = _theCanvasBottom.getContext('2d');
		
		//set clipping
		_context_top.beginPath();
		_context_top.rect(0, 0, _theCanvasTop.width, _theCanvasTop.height);
		_context_top.clip();
		
		//load main bg 
		_bg_img = new Image();
		_bg_img.src = "/media/images/bg.png";
		_bg_img.onload = function() {
			
			self.draw();
		};
		
		window.onresize = function () {
			self.draw();
		}
	
		

	}
	
}();
sam.main.queue(sam.bgController.init);

