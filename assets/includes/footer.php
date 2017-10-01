<!-- Footer -->
<footer>
	<section id="footer">  
  		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				  <ul class="text-center list-unstyled list-inline small">
					<li class="pull-left"><?php auto_copyright();?> Partly Proper</li>
					<li class="pull-right"><a href="/privacy_policy">Privacy Policy</a></li>
					<li class="pull-right"><a href="/terms_conditions">Terms &amp; Conditions</a></li>
				  </ul>
				</div>
			</div>
		 </div>
	</section>
</footer>

<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!--Smooth Scroll-->
<script>$(document).on('click', 'a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});</script>

<?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  // get this year as 4-digit value
    if (!is_numeric($startYear)) {
		$year = $thisYear; // use this year as default
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
		echo "&copy;$thisYear"; // display single year
	} else {
		echo "&copy; $year&ndash;$thisYear"; // display range of years
	}   
 } 
?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-77337091-13', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script> -->