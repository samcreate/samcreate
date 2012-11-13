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
		
	}
	
	return self;
	
	// ================================================
	// = Private functionse (function _private() {} ) =
	// ================================================
	
	function _run(){



		$('.videoHolder').each(function(index, value) {
				if($(this).find('video').size() > 0) {
					debug.log("HERE")
					_V_($(this).find('video').attr('id'));
				}
			});


		if(sam.bgController.canvasOkay()){
			
			sam.spirals.init(sam.bgController.animationLayer());
			sam.bgController.queue(sam.spirals.redraw);
			
			
		}

		var _controller = $.superscrollorama();
		var scrollDuration = 450;
		var _$menuClone = $('#mainMenu').clone().attr('id','#mainMenu2');
		$("#PageWrapper").prepend(_$menuClone);
		_$menuClone.css({position:"fixed",right:"50%",margin:"0 -488px 0 auto","z-index":4,top:"-65px"});
		
		debug.log("this is called");
		_controller.addTween(
	  '#MainContent',
	  (new TimelineLite())
	    .append(
	      [TweenMax.fromTo($('#mainMenu'), 0.5, 
	        {css:{opacity: 1}, immediateRender:true}, 
	        {css:{opacity: 1}}),
	      TweenMax.fromTo($('.logo'), 1, 
	        {css:{opacity: 1}, immediateRender:true}, 
	        {css:{opacity: 0},onComplete:function(){
	        	_$menuClone.addClass('animatedLogo').css({backgroundImage:"none"});
		        	var img = document.createElement('img');
			        img.src = "media/images/logo2.gif?p" + new Date().getTime();

			        /* Once the image has loaded, set it as the background-image */
			        $(img).load(function(){
			            _$menuClone.css({backgroundImage: "url("+img.src+")"});
			        });
	        }, onReverseComplete:function(){ 
	        	

	        }})
	      ]
	      
	    ).append(TweenMax.fromTo(_$menuClone, 1, 
	        {css:{opacity: 1},immediateRender:true}, 
	        {css:{opacity: 1, top: 0},delay:1,

	        	onReverseComplete:function(){
	        		_$menuClone.css({backgroundImage:"none"});
	        	},onComplete:function(){
		        	
	        	
	        }})),
	  scrollDuration, 150 // scroll duration of tween
	);
		

		
	
	}	
}();
sam.main.queue(sam.homePage.init);


