<?php
define('WP_USE_THEMES', false);
require('../../../wp-blog-header.php');
?>
<html>
<head>
	<title>Link to a Wordpress Page</title>
	<script type="text/javascript">
		function addLink() {
			var dialog = window.opener.CKEDITOR.dialog.getCurrent();
			dialog.setValueOf("info","url",this.href);
			window.close();
			return false;
		}
		window.onload = function() {
			var atags = document.getElementsByTagName("a");
			for(var x in atags) {
				atags[x].onclick = addLink;
			}
		}
	</script>
</head>
<body>
<?php wp_list_pages(); ?>
</body>
</html>