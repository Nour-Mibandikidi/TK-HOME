
<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="asset/images/logo.png" alt="">
				<br><br>
				<p>Tkhome est une plateforme communautaire qui permet à des particuliers de louer leur propre habitation comme logement de courte ou de longue durée et de monétiser facilement un espace inoccupé et ainsi commencer un business et arrondir les fins du mois.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Quelques liens utiles</h4>
				<ul class="footer-links">
					<li><a href="login.php">Se connecter</a></li>
					<li><a href="register.php">S'enregistrer'</a></li>
					<li><a href="admin_section/dashboard.php">Mon profile</a></li>
					<li><a href="admin_section/ajout.php">Ajouter un bien</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="blog_all.php">Notre Blog</a></li>
					<li><a href="#comment">Comment ça marche</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-3  col-sm-12">
				<h4>Contactez-nous!</h4>
				<div class="text-widget">
					<span>IAI, Libreville, Gabon.</span> <br>
					Téléphone: <span>(+241) 07 92 96 62 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="224d44444b414762475a434f524e470c414d4f">mcrescens@gmail.com</span></a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2019 TKHOME. Tous droits réservés.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script data-cfasync="false" src="../../cdn-cgi/asset/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="asset/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="asset/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="asset/scripts/fr.js"></script>
<script type="text/javascript" src="asset/scripts/jquery.timeago.js"></script>
<script type="text/javascript" src="asset/scripts/jquery.timeago.fr"></script>
<script type="text/javascript" src="asset/scripts/chosen.min.js"></script>
<script type="text/javascript" src="asset/scripts/slick.min.js"></script>
<script type="text/javascript" src="asset/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="asset/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="asset/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="asset/scripts/counterup.min.js"></script>
<script type="text/javascript" src="asset/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="asset/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="asset/scripts/custom.js"></script>
<script type="text/javascript" src="asset/scripts/social.js"></script>


<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
    });

	if ($('.main-search-input-item')[0]) {
	    setTimeout(function(){
	        $(".pac-container").prependTo("#autocomplete-container");
	    }, 300);
	}
}
$(document).ready(function(){
	$(".recherche").click(function(e){
		var check=$("#recherche_id").val();
		if(check===undefined || check===null || check.trim()=='')
			e.preventDefault();
	})
	$("#recherche").keyup(function(){
		var val=$(this).val();
		$.post("recherche_bien.php",{val:val},function(rep){
			$("#affiche_rep").html(rep).show();
		});
	})
});

$(document).ready(function(){
	$("span.timeago").timeago();
});


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>
</body>

<!-- Mirrored from www.vasterad.com/themes/listeo2/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 10:59:40 GMT -->
</html>
