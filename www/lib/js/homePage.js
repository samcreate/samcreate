/*! homePage class
 * Put javascript plugin depedencies below (see main.js for an exmaple)
 * 
 */
var sam = sam || {};
sam.homePage = function(){
	// =================================================
	// = Private variables (example: var _foo = bar; ) =
	// =================================================
	
	
	
	// =================================================
	// = public functions                              =
	// =================================================
	var self = {
		
		init : function(){
	
				debug.group("# [homePage.js]");
				
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

		

		SyntaxHighlighter.all();
	
	}
		
}();


