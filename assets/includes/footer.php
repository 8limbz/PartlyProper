<!-- Footer -->
<footer>
	<section id="footer">  
  		<div class="footer navbar-default">
      		<div class="container">
      
    		</div>
  		</div>
	</section>
</footer>
<div class="copyright">
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
</div>

<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>

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