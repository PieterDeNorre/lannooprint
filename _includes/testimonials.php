<div id="testimonials_cont" class="testimonialscont">
	<div id="vac_nav" >
		<div id="vac_img"></div>
	</div>
	<h1 id="testimonials_title">Testimonials</h1>
	<div id="container_test" class="scroll-pane">
<?php include '_php/error.php' ?>
<?php include '_php/db_config.php' ?>
<?php include '_php/db_connect.php' ?>
<?php

	$result=mysqli_query($connect,"SELECT * FROM testimonials WHERE testimonials_active = 1 ORDER BY testimonials_date DESC");
	if (!$result) { die('Invalid query: Line 12' . mysql_error());};

	$numrows=mysqli_num_rows($result);
	if (!$numrows) { die('Invalid num_rows: Line 15 ' . mysql_error());};
	
	if (!empty($numrows)) {
		$i=0;
		while ($i < $numrows) {
			$f1=html_entity_decode(mysql_result($result,$i,"testimonials_id"));
			$f2=html_entity_decode(mysql_result($result,$i,"testimonials_klant"));
			$f3=html_entity_decode(mysql_result($result,$i,"testimonials_date"));
			$f4=html_entity_decode(mysql_result($result,$i,"testimonials_txt"));
?>

	<div id="testimonials" class="test">
		<h2 id="klant"><?php echo htmlspecialchars($f2); ?></h2>
		<p id="date"><?php echo htmlspecialchars($f3); ?></p>
		<p id="txt"><?php echo htmlspecialchars($f4); ?></p>
	</div>
		<div id="arrow"></div>

<?php
		$i++;
		}
	}
	mysqli_close($connect);
?>
<script src="_js/vacs.js"></script>
</div>
</div>
<script type="text/javascript">
   // $('.testimonialscont:not(:has(div.test))').hide();
   // $('.testimonialscont:not(:has(div.test))').hide(function(){
   //       $("#vac_cont").animate({
   //          right:'0px'
   //       });   
   // });
</script>