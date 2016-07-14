$(document).ready(function(){
	$(window).bind("load", function(){
       fitting();
	   barOpen();
		});
		
	function fitting(){ 
	var fit = $.when(
	  $(document).ready(function(){
				var W = $(window).width();
				var H = $(window).height();
				var xW = H*0.814*0.16;
				var yW = H*0.814*0.062;
				var yH = yW+((H-yW*2)*0.08);
				var nW = $("#navwrap nav").width();
				var nW = nW*2
				var aW = W-200-xW*2-(H-yW*2)*0.25;
				var dW = W-200-xW*2-(H-yW*2)*0.25;
				var bW = W-190-xW*2-(H-yW*2)*0.1;
				var cW = W-xW*0.8-(H-yW*2)*0.15;
				var agent = navigator.userAgent;
				if(agent.search(/iPhone/) !== -1){
					$("header").find("img").css({"height":(H-yW*2)-20,"margin-left":xW*0.4,"margin-right":xW*0.4,"margin-bottom":yW,"margin-top":5});
					$("#navwrap").find("nav").css({"margin-top":yH});
					$("#navwrap").find(".articleList").css({"margin-top":yH});
					$(".articleWrap").css({"height":H-yH*2.2,"width":cW,"margin-top":yH});
					$(".articleTxt").css({"width":cW*1,"padding-right":"5px","padding-bottom":yW});
					$("footer").css({"bottom":yW,"left":xW*1.15+(H-yW*2)*0.1});
				}else if(agent.search(/iPad/) !== -1){
				}else if(agent.search(/Android/) !== -1){
				}else{
					$("h1.bar").find("img").wrap("<a class='home'></a>");
					$("a.home").attr('href','http://healthy-yummy.com');
					$("#navwrap").css({"height":H});
					$("h1").find("img").css({"height":H-yW*4.2,"margin-left":xW,"margin-right":xW,"margin-bottom":yW,"margin-top":yW*2});
					$("#navwrap").find("nav").css({"margin-top":yH});
					$("#navwrap").find(".articleList").css({"margin-top":yH});
					$("footer").css({"bottom":yW+10,"left":xW*2+(H-yW*2)*0.09});
					if(W >= 1560){
					$(".articleWrap").css({"height":H-yW*2,"width":dW,"margin-top":yW});
					$(".articleTxt").css({"padding-right":xW,"padding-bottom":(H-yW*2)*0.12});
					}else if(W >=800){
					$(".articleWrap").css({"height":H-yW*2,"width":aW,"margin-top":yW});
					$(".articleTxt").css({"padding-right":xW,"padding-bottom":(H-yW*2)*0.12});
					}else{
					$(".articleWrap").css({"height":H-yW*2,"width":aW,"margin-top":yW});
					$(".articleTxt").css({"padding-right":20,"padding-bottom":(H-yW*2)*0.12});
					}
					
					$(".article").css({"padding-top":(H-yW*2)*0.08});
					$(".articleFadeU").css({"height":(H-yW*2)*0.08});
					$(".articleFadeB").css({"height":(H-yW*2)*0.08});
					
					var S = 1000;
					if (W <= S) {
						$("#navwrap .articleList").css({"margin-top":0});
						$(".articleWrap").css({"width":bW});
					 }
					}
			})
		);
		fit.done(function() {
		  $("#wrap").show();
		});
	}
	/*function fit(){   
				var W = $(window).width();
				var H = $(window).height();
				var xW = H*0.814*0.16;
				var yW = H*0.814*0.062;
				var yH = yW+((H-yW*2)*0.08);
				var nW = $("#navwrap nav").width();
				var nW = nW*2
				var aW = W-380-xW*2-(H-yW*2)*0.25;
				var bW = W-190-xW*2-(H-yW*2)*0.1;
				var cW = W-xW*0.8-(H-yW*2)*0.15;
				var agent = navigator.userAgent;
				if(agent.search(/iPhone/) != -1){
					$("header").find("img").css({"height":(H-yW*2)-20,"margin-left":xW*0.4,"margin-right":xW*0.4,"margin-bottom":yW,"margin-top":5});
					$("#navwrap").find("nav").css({"margin-top":yH});
					$("#navwrap").find(".articleList").css({"margin-top":yH});
					$(".articleWrap").css({"height":H-yH*2.2,"width":cW,"margin-top":yH});
					$(".articleTxt").css({"width":cW*0.85,"padding-right":"5px","padding-bottom":yW});
					$("footer").css({"bottom":yW,"left":xW*1.15+(H-yW*2)*0.1});
				}else if(agent.search(/iPad/) != -1){
				}else if(agent.search(/Android/) != -1){
				}else{
					$("h1.bar").find("img").wrap("<a class='home'></a>");
					$("a.home").attr('href','http://healthy-yummy.com');
					$("#navwrap").css({"height":H});
					$("h1").find("img").css({"height":H-yW*2,"margin-left":xW,"margin-right":xW,"margin-bottom":yW,"margin-top":yW});
					$("#navwrap").find("nav").css({"margin-top":yH});
					$("#navwrap").find(".articleList").css({"margin-top":yH});
					$("footer").css({"bottom":yW+10,"left":xW*2+(H-yW*2)*0.09});
					var navW = $("#navwrap").width();
					$(".articleWrap").css({"height":H-yW*2,"width":aW,"margin-top":yW});
					$(".article").css({"padding-top":(H-yW*2)*0.08});
					$(".articleFadeU").css({"height":(H-yW*2)*0.08});
					$(".articleFadeB").css({"height":(H-yW*2)*0.08});
					$(".articleTxt").css({"padding-right":xW,"padding-bottom":(H-yW*2)*0.12});
					var S = 1000;
					if (W <= S) {
						$("#navwrap .articleList").css({"margin-top":0});
						$(".articleWrap").css({"width":bW});
					 }
					}
				};*/	
		function barOpen(){   
		var agent = navigator.userAgent;
		if(agent.search(/iPhone/) != -1){
				
				$("h1.bar,.button").click(function(){
					if($("#wrap").hasClass("nav_open")){
   						 	$("#wrap").removeClass("nav_open");
							if (!jQuery.support.opacity) {
							$("#wrap").animate({marginLeft:0},200)
							
			 			}
					}else{$("#wrap").addClass("nav_open");
							if (!jQuery.support.opacity) {
							$("#wrap").animate({marginLeft:150},200)
							
			 			}
					}
				});
			}		
		}
				


});