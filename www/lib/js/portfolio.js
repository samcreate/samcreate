/*! portfolio class
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * 
 */
var sam = sam || {};
sam.portfolio = function(){
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function(){
	
				debug.group("# [portfolio.js]");
				
				debug.log('- initialized');
				
				//--> sof private functions
					_run();
				//--> eof private functions

				debug.groupEnd();

		}
		
	};
	
	return self;
	
	// ================================================
	// = Private functionse (function _private() {} ) =
	// ================================================
	
	function _run(){

		$('.videoHolder').each(function(index, value) {
			if($(this).find('video').size() > 0) {
				var _id = $(this).find('video').attr('id');
				_V_(_id);
			}
		});

		$('.flexslider').flexslider({
			animation: "slide",
			itemWidth: 975,
			slideshow: false
		});
	
	}
}();


