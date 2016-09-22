sliderInt=1;
sliderNext=2;
$(document).ready(function(){
	$("#slider > img#1").fadeIn(500);
	startSlider(); //function
});

function startSlider(){
	
	count = $("#slider > img").size(); //#slider > img selects all images within the #slider. Then .size() counts it
	loop=setInterval(function(){ //setInterval() is a jQuery function
		if(sliderNext>count){
			sliderNext=1;
		}

		$("#slider > img").fadeOut(100);

		$("#slider > img#"+sliderNext).fadeIn(500);
		sliderInt=sliderNext;
		sliderNext=sliderNext+1;
	}, 3000)
}