(function($){
	var WW = $(window).width();
	var WH = $(window).height();
	var z = 0;
	var isMenuOpen = false;
	var display_type = "";
	var viewpost_str = "";
	var ua_type = "";

	//***************************************
	//common
	//***************************************
	var common = $.fukuyama = {
		init : function(){
			common.ww_check();
			common.fit_width();
			common.contents_fadein();
			common.menu_toggle();
		},
		ww_check : function(){
			var agent = navigator.userAgent;
			if(agent.search(/iPhone/) != -1){
				ua_type = "is_iphone";
			}else if(agent.search(/iPad/) != -1){
				ua_type = "is_tablet";
			}else if(agent.search(/Android/) != -1){
				ua_type = "is_android";
			}
			if(ua_type){
				display_type = "is_smart";
				viewpost_str = "width=640";
				WW = 640;
			}else if(WW>768){
				display_type = "is_pc";
				viewpost_str = "width=1214";
				$(".navArea").width("auto");
			}else if(WW<=768 && WW>640){
				display_type = "is_tablet";
				viewpost_str = "width=1214";
			}
			$("meta[name='viewport']").attr('content','').attr('content',viewpost_str);
			$("body").attr("class","").addClass(display_type);
		},
		fit_width : function(){
			$(window).resize(function(){
				WW = $(window).width();
				WH = $(window).height();
				$(".navArea").height(WH);
				common.ww_check();
			});
			$(".navArea").height(WH);
		},

	 contents_fadein : function(){
		 	$("#loading").fadeOut();
		 	$("#wrap").scrollTop(0).fadeIn();
	 },

	 menu_toggle : function(){
		 $("#button").click(function(){
			 if(!isMenuOpen){
				 
				$(".navArea").width(WW);
				$("#navwrap").addClass("open");
				isMenuOpen = true;
 				$(".navArea").height($("body").height());
			 }else{
				 $("#navwrap").removeClass("open");
				 isMenuOpen = false;
			 }
		 });
	 }

	};


	//***************************************
	// WINDOW LOAD
	//***************************************
	$(function () {
		$(window).load(function(){
			common.init();
		});
	});

	//***************************************
	//SMOOTH SCROLL
	//***************************************
	$('a[href^=#]').click(function() {
		var speed = 400;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
})(jQuery);
