<?php
class mtc_ckeditor_linkpage {
	public $version = '1.0';
	public $plugin_path ="";

	function __construct()
	{
		$siteurl = trailingslashit(get_option('siteurl'));
		$this->plugin_path = $siteurl .'wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	}

	function ckeditor_plugin($plugins) {
		$plugins['linkpage']=$this->plugin_path.'ckeplugin/';
		return $plugins;
	}

	function ckeditor_buttons($buttons) {
		$buttons[]=array('LinkToPage');
		return $buttons;
	}
}

$mtc_ckeditor_linkpage = new mtc_ckeditor_linkpage();
?>