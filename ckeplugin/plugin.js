( function() {
	CKEDITOR.plugins.add( 'linkpage', {
		init: function( editor ) {
			var me = this;
			CKEDITOR.on('dialogDefinition', function(ev) {
				var dialogName = ev.data.name;
				var dialogDefinition = ev.data.definition;

				if(dialogName == "link") {
					var infoTab = dialogDefinition.getContents( 'info' );
					infoTab.add( {
						type : 'button',
						id: 'browseInternal',
						label : 'Wordpress Page',
						onClick: function() {
							var wp_path = me.path.substr(0,me.path.lastIndexOf('/',me.path.length-2)+1);
							window.open(wp_path + "pages.php");
						}
					});
				}
			});
		}
	});
} )();
