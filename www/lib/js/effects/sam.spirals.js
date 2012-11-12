/*! sam.spirals.js class
 * Created by Aaron McGuire on 2011-07-27.
 * Copyright (c) 2011. All rights reserved.
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * @depends jquery/jquery-1.6.1.min.js
 */
var sam = sam || {};
sam.spirals = function(){
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	var _theCanvas, _context,_circle,_ball, _radiusInc =2, _fadeAmount = 0.002, _color_index = 0, _theCanvasBottom, _over, _under,_bg,_interVal;
	var _colors = ["#CCCCCC","#333333"];
	var _count = 0,_theCanvasTemp, _temp, _bgFadeAmount = 0.9;
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function(p_layer){
	
				debug.group("# [sam.spirals.js]");
				
				debug.log('- initialized'); 
				
				//--> sof private functions
					_theCanvas = p_layer.canvas;
					_context = p_layer.context;
					_run();
				//--> eof private functions
			    		
				debug.groupEnd();

		},
		
		draw : function(){
	

			_ball.x = _circle.centerX + Math.cos(_circle.angle) * _circle.radius;
			_ball.y = _circle.centerY + Math.sin(_circle.angle) * _circle.radius;
			
			_circle.angle += _ball.speed
			_circle.radius += _radiusInc;
			_context.globalAlpha += _fadeAmount;
			_context.fillStyle = _colors[1];
			_context.beginPath();
			_context.arc(_ball.x,_ball.y,10,0,Math.PI*2, true);
			_context.closePath();
			_context.fill();
			_circle.centerX += 0;
			
				
			
			if(_ball.x > window.innerWidth){
				clearInterval(_interVal);
				_context.save();			
			}
			
		
		},
		getColorIndex : function(){
			
			if(_color_index < _colors.length){
				_color_index++;
				return _color_index;
			}else{
				_color_index = 0;
				return _color_index;
			}
		},
		
		redraw : function(){
			
			_game_init();
		}
		
	}
	
	return self;
	
	// ================================================
	// = Private functionse (function _private() {} ) =
	// ================================================
	
	function _run(){
		
		_game_init();
	}
	
	function _game_init(){
		
		_circle = {centerX:(_theCanvas.width / 2) , centerY:(_theCanvas.height / 2), radius:0, angle:0};
		_ball = {x:0, y:0, speed:2	};
		_context.globalAlpha = 0;
		
		_interVal = setInterval(self.draw, 0);
		
	}
	
}();


