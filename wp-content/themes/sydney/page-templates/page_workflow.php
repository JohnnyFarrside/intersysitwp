
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->

<script LANGUAGE="JavaScript">
// function myFunction(id) {
//     var x = document.getElementById(id);
//     if (x.className.indexOf("w3-show") == -1) {
//         x.className += " w3-show";
// 			console.log(x.className.indexOf("w3-show")+ "begin");
//
//     } else {
//         x.className = x.className.replace(" w3-show", "");
// 		  console.log(x.className.indexOf("w3-show")+ "end");
//     }
// }
// /**
//  * Use this function for the on-click action of the worklflow menu buttons
//  */
// function menubar(id){
// 	var $ = jQuery.noConflict();
// 	var x = document.getElementById(id);
// 	var butun = document.getElementById("men-"+id);
// 	var wkPlus = document.getElementById("plus-"+id);
// 	var wkMinus = document.getElementById("minus-"+id);
// 	//==> Hide all other menus details (can go up to 11 menus)
// 	var i = 0;
// 	for(i; i<10; i++){  	// loop of reinitialization(kinda)
// 		var y = document.getElementById(i);
// 		var butun2 = document.getElementById("men-"+i);
// 		var tempWkPlus = document.getElementById("plus-"+i);
// 		var tempWkMinus = document.getElementById("minus-"+i);
// 		if(y !== null && y!==x){
// 			y.className = y.className.replace(" w3-show", "");
// 			butun2.className = butun2.className.replace(" shadowed", "");
// 			tempWkPlus.className = tempWkPlus.className.replace(" hide", "");
// 			//console.log("Showing: "+tempWkPlus.className);	//->debug
//
// 			if(!tempWkMinus.classList.contains("hide")){
// 				tempWkMinus.className += " hide";
// 			}
// 			//console.log("Hidding: "+tempWkMinus.className);	//->debug
//
// 		}
// 	}
//
// 	if (x.className.indexOf("w3-show") == -1) { //if there is not already visible
//         x.className += " w3-show";
// 			//console.log(x.className.indexOf("w3-show")+ "begin");	//-->debug
// 			butun.className += " shadowed";
// 			wkPlus.className += " hide";
// 			wkMinus.className = wkMinus.className.replace(" hide", "");
// 			if(screen.width<780 && id==0){
// 				document.getElementById("men-0").scrollIntoView({behavior: "smooth"});
// 				//Scroll_To(document.getElementById("wk-1st-menu"), 100	);
// 			}else if(screen.width>780){
// 				//document.getElementById("men-"+(id-1)).scrollIntoView({behavior: "smooth"});
// 				//document.getElementById("wk-1st-menu").scrollIntoView({behavior: "smooth"});
// 			}else{
// 				document.getElementById("men-"+id).scrollIntoView({behavior: "smooth"});
// 			}
//
//
//
//    }else {
// 		x.className = x.className.replace(" w3-show", "");
// 		//console.log(x.className.indexOf("w3-show")+ "end");  //->debug
// 		butun.className = butun.className.replace(" shadowed", "");
// 		wkPlus.className = wkPlus.className.replace(" hide", "");
// 		wkMinus.className += " hide";
// 		if(screen.width>780){
// 			//document.getElementById("wk-1st-menu").scrollIntoView({behavior: "smooth"});
// 		}else{
// 			document.getElementById("men-0").scrollIntoView({behavior: "smooth"});
// 		}
// 	}
//
// 	try{
// 		disasterPrep();
// 	}catch(err){
// 		return null;
// 	}
// }
//
//
//
//
// function disasterPrep(){
// 	// Get the modal
//
// 	var footer = document.getElementById("sidebar-footer");
// 	var modal = document.getElementById('myModal');
// 	var header = document.getElementsByClassName("site-header fixed float-header");
//
// 	// Get the button that opens the modal
// 	var btn = document.getElementById("myBtn");
//
// 	// Get the <span> element that closes the modal
// 	var span = document.getElementsByClassName("close")[0];
//
// 	// When the user clicks the button, open the modal
// 	btn.onclick = function() {
// 		modal.style.display = "block";
// 		//butun.className = butun.className.replace(" shadowed", "");
// 		footer.className += " hide";
// 		header.className += " hide";
// 		contact.className += " hide";
// 		//console.log("I open!"); //==> Debug
// 	};
//
// 	// When the user clicks on <span> (x), close the modal
// 	span.onclick = function() {
// 		 modal.style.display = "none";
// 		 footer.className = footer.className.replace(" hide", "");
// 		 header.className = header.className.replace(" hide", "");
// 		 //console.log("I clic on the cross!"); //==> Debug
// 	};
//
// 	// When the user clicks anywhere outside of the modal, close it
// 	window.onclick = function(event) {
// 		 if (event.target == modal) {
// 			  modal.style.display = "none";
// 			  footer.className = footer.className.replace(" hide", "");
// 			  header.className = footer.className.replace(" hide", "");
// 			 //console.log("I clic on the the page!"); //==> Debug
//
// 		 }
// 	};
// }
//
//
// function processForm(form){
// 	//var kvpairs = [];
// 	var cpt = 0;
// 	//var form = // get the form somehow
// 	for ( var i = 0; i < form.elements.length; i++ ) {
// 		var e = form.elements[i];
// 		//kvpairs.push(encodeURIComponent(e.name) => encodeURIComponent(e.value);
// 		//kvpairs[encodeURIComponent(e.name)] = encodeURIComponent(e.value);
// 		if(getCheckedValue(encodeURIComponent(e.name))==1){
// 			cpt++;
// 			//console.log("bieeeen");
// 		}
// 	}
//
// 	//console.log(cpt/3);
// 	cpt /= 3;
//
// 	//Cancel all the conflocts to be able to use JQuery :D
// 	var $ = jQuery.noConflict();
//
// 	if(cpt>=9){
// 		//window.alert("Congratulations! Your are well prepared for disasters.");
// 		//find something better lol
// 		$( "div.success" ).fadeIn( 300 ).delay( 3000 ).fadeOut( 400 );
// 		//console.log(cpt);
// 	}else{
// 		//window.alert("Watch out! Your are vulnerable to disasters.");
// 		$( "div.failure" ).fadeIn( 300 ).delay( 3000 ).fadeOut( 400 );
// 		//console.log(cpt);
// 	}
//
// }
//
// function getCheckedValue( groupName ) {
//     var radios = document.getElementsByName( groupName );
//     for( i = 0; i < radios.length; i++ ) {
//         if( radios[i].checked ) {
//             return radios[i].value;
//         }
//     }
//     return null;
// }

</script>




<?php
/*
Template Name: Workflow
*/

get_header();
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="entry-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

				</div>
			</div><!-- .entry-content -->

		</main><!-- #main -->
	</div><!-- #primary -->
<style>
	.icon-foot{
		margin-top: 7.5px;
	}
</style>
<?php get_footer(); ?>
