$(function(){
	$(".side").height($("#Container").height());
	
	$(".ico_left").toggle(function(){
		$(".side").animate({left:"-200px"});
		$("#Container").animate({left:"0"});
		$(".welcome").animate({paddingLeft:"10px"});
		$(this).find("img").attr("src","images/ico_8a.png");
		},
		function(){
		$(".side").animate({left:"0px"});
		$("#Container").animate({left:"200px"});
		$(".welcome").animate({paddingLeft:"65px"});
		$(this).find("img").attr("src","images/ico_8.png");
		}
	  );
	
});

$(function(){
	$(".side li a").click(function(){
	  $(".side li a").removeClass("hover");
	  $(this).addClass("hover");
	});
	
	
	$(".n1").click(function(){
	  $("iframe").attr("src","home.html");
	});
	$(".n2").click(function(){
	  $("iframe").attr("src","home1.2.1.html");
	});
	$(".n3").click(function(){
	  $("iframe").attr("src","home1.3.1.html");
	});
	$(".n4").click(function(){
	  $("iframe").attr("src","home1.4.1.html");
	});
	$(".n5").click(function(){
		$("iframe").attr("src","home1.5.1.html");
	});
	$(".n6").click(function(){
	  $("iframe").attr("src","home1.6.1.html");
	});
	$(".n7").click(function(){
	  $("iframe").attr("src","home1.7.1.html");
	});
	$(".n8").click(function(){
	  $("iframe").attr("src","home1.8.1.html");
	});
	$(".n9").click(function(){
	  $("iframe").attr("src","home1.9.1.html");
	});
	$(".n10").click(function(){
	  $("iframe").attr("src","home1.10.1.html");
	});
	$(".n11").click(function(){
	  $("iframe").attr("src","home1.11.1.html");
	});

	
	
	
	
	$(".p1").click(function(){
	  $("iframe").attr("src","home2.1.1.html");
	});
	$(".p2").click(function(){
	  $("iframe").attr("src","home2.2.1.html");
	});
	$(".p3").click(function(){
	  $("iframe").attr("src","home2.3.1.html");
	});
	$(".p4").click(function(){
	  //$("iframe").attr("src","home2.4.1.html");
	});
	$(".p5").click(function(){
	  $("iframe").attr("src","home2.5.1.html");
	});
	$(".p6").click(function(){
	  $("iframe").attr("src","home2.6.1.html");
	});
	$(".p7").click(function(){
	  $("iframe").attr("src","home2.7.1.html");
	});
	
	
	$(".d1").click(function(){
	  $("iframe").attr("src","home3.1.1.html");
	});
	$(".d2").click(function(){
	  $("iframe").attr("src","home3.2.1.html");
	});
	$(".d3").click(function(){
	  $("iframe").attr("src","home3.3.1.html");
	});
	$(".d4").click(function(){
	  $("iframe").attr("src","home3.4.1.html");
	});
	$(".d5").click(function(){
	  $("iframe").attr("src","home3.5.1.html");
	});
	$(".d6").click(function(){
	  $("iframe").attr("src","home3.6.1.html");
	});
	$(".d7").click(function(){
	  $("iframe").attr("src","home3.7.1.html");
	});
	
	
	$(".h1").click(function(){
	  $("iframe").attr("src","home4.1.1.html");
	});
	$(".h2").click(function(){
	  $("iframe").attr("src","home4.2.1.html");
	});
	$(".h3").click(function(){
	  $("iframe").attr("src","home4.3.1.html");
	});
	$(".h4").click(function(){
	  $("iframe").attr("src","home4.4.1.html");
	});
	$(".h5").click(function(){
	  $("iframe").attr("src","home4.5.1.html");
	});
	$(".h6").click(function(){
	  $("iframe").attr("src","home4.6.1.html");
	});
	$(".h7").click(function(){
	  $("iframe").attr("src","home4.7.1.html");
	});
	$(".h8").click(function(){
	  $("iframe").attr("src","home4.8.1.html");
	});
	$(".h9").click(function(){
	  $("iframe").attr("src","home4.9.1.html");
	});
	
	
	$(".y1").click(function(){
	  $("iframe").attr("src","home5.1.1.html");
	});
	$(".y2").click(function(){
	  $("iframe").attr("src","home5.2.1.html");
	});
	$(".y3").click(function(){
	  $("iframe").attr("src","home5.3.1.html");
	});
	$(".y4").click(function(){
	  $("iframe").attr("src","home5.4.1.html");
	});
	$(".y5").click(function(){
	  $("iframe").attr("src","home5.5.1.html");
	});
	$(".y6").click(function(){
	  $("iframe").attr("src","home5.6.1.html");
	});
	$(".y7").click(function(){
	  $("iframe").attr("src","home5.7.1.html");
	});
	$(".y8").click(function(){
	  $("iframe").attr("src","home5.8.1.html");
	});
	$(".y9").click(function(){
	  $("iframe").attr("src","home5.9.1.html");
	});
	$(".y10").click(function(){
	  $("iframe").attr("src","home5.10.1.html");
	});
	
	
	
	$(".f1").click(function(){
	  $("iframe").attr("src","home7.1.1.html");
	});
	$(".f2").click(function(){
	  $("iframe").attr("src","home7.2.1.html");
	});
	$(".f3").click(function(){
	  $("iframe").attr("src","home7.3.1.html");
	});
	$(".f4").click(function(){
	  $("iframe").attr("src","home7.4.1.html");
	});
	$(".f5").click(function(){
	  $("iframe").attr("src","home7.5.1.html");
	});
	$(".f6").click(function(){
	  $("iframe").attr("src","home7.6.1.html");
	});
	$(".f7").click(function(){
	  $("iframe").attr("src","home7.7.1.html");
	});
	$(".f8").click(function(){
	  $("iframe").attr("src","home7.8.1.html");
	});
	$(".f9").click(function(){
	  $("iframe").attr("src","home7.9.1.html");
	});
	$(".f10").click(function(){
	  $("iframe").attr("src","home7.10.1.html");
	});
	$(".f11").click(function(){
	  $("iframe").attr("src","home7.10.1.html");
	});
	
	
	
	
	
	
});


$(function(){
	$(".district dt span").click(function(){
		$(".district").hide();
	});
	
	$(".close").click(function(){
		$(".district").hide();
	});
	
	
	$(".show").click(function(){
		$(".district").show();
	});
	
	$(".dell").click(function(){
		$(this).parent().hide();
	});
	
	$(".close1").click(function(){
		$(".pop_box").hide();
	});
	
	$(".show_box").click(function(){
		$(".pop_box").show();
	});
	
	
	$(".clos1").click(function(){
		$(".pop_box1").hide();
	});
	
	$(".show_box1").click(function(){
		$(".pop_box1").show();
	});
	
	
	$(".batch").hover(function(){
		
		$(this).find("p").show();
		
		},function(){
		
		$(this).find("p").hide();
		
	});
	
});


$(function(){
	$(".province li span").click(function(){
		$(this).next("ul").toggle();
	});
	
	$(".province li span").toggle(
	  function(){
	  	$(this).next("ul").slideDown();
	  	$(this).parent("li").addClass("jian");
		$(this).parent("li").removeClass("jia");
	  },
	  function(){
	  	$(this).next("ul").slideUp();
		$(this).parent("li").addClass("jia");
		$(this).parent("li").removeClass("jian");
	  }
	);
	
	
	
	$(".toggle").toggle(
	  function(){
	  	$(this).nextAll("ul").slideDown();
	  	$(this).find("b").addClass("ico_jian");
		$(this).find("b").removeClass("ico_jia");
	  },
	  function(){
	  	$(this).nextAll("ul").slideUp();
		$(this).find("b").addClass("ico_jia");
		$(this).find("b").removeClass("ico_jian");
	  }
	);
	
	
	
	
});

