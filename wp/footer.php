	<script type="text/javascript">
		function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "<?php echo get_template_directory_uri(); ?>/js/main.js";
		document.body.appendChild(element);
		}
		if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
		else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
		else window.onload = downloadJSAtOnload;
	</script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


	<?php wp_footer(); ?>
</body>
</html>