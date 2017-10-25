<?php
/*
Template Name: Form Template
*/


get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">
		<!--<h1 class="title-post">Are you prepared for a disaster ?</h1>-->
			<?php
						if(isset($_POST['1'])){
							//Process data
							$result=0;
							for($i=1; $i<=13; $i++){
								if($_POST[$i]=="1"){
									$result += 1;
								}
							}
							
							//Conclusion
							
							//=> Values from form
							define("WARNING", "Warning! You need some improvements! ");
							define("OK", "You are quite secured!");
							
							
							if($result < 9){
								$level = WARNING;
								$img = get_template_directory_uri() . "/images/form/formuFail.jpg";
							}else{
								$level = OK;
								$img = get_template_directory_uri() . "/images/form/formuSucces.jpg";
							
							}
							echo "<p><h2>".$level."</h2>";
							//echo "<img src=\"$img\"></p>";
							
							//echo "[TEST]score: $result"; // What should we do ? x)
						?>
							
							
						<?php
						}else{
						?>
					<fieldset>
						<form name="disasterPrep" action="" method="POST">
							<table class="disasterTable">
								<thead>
								 <tr>
									 <th>True</th>
									 <th>False</th>
									 <th>Don't Know</th>
								 </tr>
								</thead>
								<tbody>
								 <tr>
									<label><td><input type="radio" name="rad1" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad1" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad1" value="-1"onClick=0 ></label></td>
									<label><td><strong>My office has an emergency contingency plan in place for physical disasters.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad2" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad2" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad2" value="-1"onClick=0 ></label></td>
									<label><td><strong>IT is the only department responsible for disaster preparedness within my organization.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad3" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad3" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad3" value="-1"onClick=0 ></label></td>
									<label><td><strong>I keep my employees updated on the most current security threats and provide guidance on what to look for.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad4" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad4" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad4" value="-1"onClick=0 ></label></td>
									<label><td><strong>My business operations require a 24/7/365 model that involves constant uptime.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad5" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad5" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad5" value="-1"onClick=0 ></label></td>
									<label><td><strong>My organization houses onsite data that is critical to business operations.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad6" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad6" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad6" value="-1"onClick=0 ></label></td>
									<label><td><strong>My organization and its departments are tightly organized and can coordinate effectively in the event of a catastrophic system failure or disaster.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad7" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad7" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad7" value="-1"onClick=0 ></label></td>
									<label><td><strong>If my business location were struck by a disaster, it could re-establish operations seamlessly or at a minimum within hours or days.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad8" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad8" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad8" value="-1"onClick=0 ></label></td>
									<label><td><strong>IT systems such as email, document storage, telephone PBX, etc. are essential components of doing business.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad9" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad9" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad9" value="-1"onClick=0 ></label></td>
									<label><td><strong>My datacenter can guarantee a 99.95% uptime.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad10" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad10" value="-1"onClick=0></td></label>
									<label><td><input type="radio" name="rad10" value="-1"onClick=0></label></td>
									<label><td><strong>My datacenter has an offsite disaster recovery location established and configured.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad11" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad11" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad11" value="-1"onClick=0 ></label></td>
									<label><td><strong>My organization needs a partner that can integrate my systems to mitigate disaster risk and ensure availability of systems and resources.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad12" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad12" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad12" value="-1"onClick=0 ></label></td>
									<label><td><strong>Critical IT systems and data are backed on an hourly and/or daily basis.</strong></td>
								 </tr>
								 <tr>
									<label><td><input type="radio" name="rad13" value="1" onClick=0 ></td></label>
									<label><td><input type="radio" name="rad13" value="-1"onClick=0 ></td></label>
									<label><td><input type="radio" name="rad13" value="-1"onClick=0 ></label></td>
									<label><td><strong>In the event of system/server failure or disaster, data can be restored quickly and effectively.</strong></td>
								 </tr>
								</tbody>
							</table> 
							
							<input type="submit" value="Submit">
						</form>
					</fieldset>
					<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php if (!is_front_page()) {
	get_sidebar();
}?>
<?php get_footer(); ?>