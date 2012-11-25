/*! work class
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * 
 */
var sam = sam || {};
sam.work = function(){
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function(){
	
				debug.group("# [work.js]");
				
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

		

		if(!sam.main.vars.isMobile){

			
			$('.video').each(function(index, value) {
				if($(this).find('video').size() > 0) {
					var _vid = _V_($(this).find('video').attr('id'));
				}
			});
		}

		$('.flexslider').flexslider({
			animation: "slide",
			itemWidth: 975,
			slideshow: false
		});
	
	}
}();


