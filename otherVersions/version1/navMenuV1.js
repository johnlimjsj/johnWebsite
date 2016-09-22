$(document).ready(function() { //the ready function means the jquery will be run as soon as the html page loads 

	$(".nav-Content").hide(); //a jquery function that hides the <p> tags on loading

	$(".nav-main").click(function(){ //if user clicks on the h1 tag, then the code in the curly bracket is run
		$(".nav-main").children().slideDown(300) //"this" refers to the element that is being clicked right now. tells browse to toggle the visibility of the tag that comes right after the heading tag
		
	});
	/*
	$("div#first").click(function(){ //if user clicks on the tags with id"#main", then the code in the curly bracket is run
		$(this).css("background-color", "red") 
		//"div , p" allows u to select to 2 types of elements. 
		//"div > p" means we select the CHILDREN p> elements inside of <div>, meaning only affects elements one level down 
		//"div > p" means we select the DESCENDANT p> elements inside of <div>, meaning it affects all ements within the parent
		// is used to specify all elements
		
			For greater specificity:
			$( "div.foo" ).has( "p" );         // div.foo elements that contain <p> tags
			$( "h1" ).not( ".bar" );           // h1 elements that don't have a class of bar
			$( "ul li" ).filter( ".current" ); // unordered list items with class of current
			$( "ul li" ).first();              // just the first unordered list item
			$( "ul li" ).eq( 5 );              // the sixth
			to save selection in a variable:
				var divs = $( "div" );
		

	*/

	



});