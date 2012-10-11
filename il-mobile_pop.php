<?
/*
   Plugin Name: IL Mobile Entry Pop
   Plugin URI: http://www.ilprojects.com/wiki/index.php/Mobile_Pop
   Version: 1.0
   Author: Ciaran McGrath
   Description: Plugin to perform a popup when the site is visited by a mobile browser.
   Text Domain: il_mobile_pop
  */

include('Mobile-Detect/Mobile_Detect.php');
new mobile_pop;


class mobile_pop {
	
	protected $fields = array('ad_code'=> '', 'repeat' => '86400', 'delay' => '2000');
	protected $detect;

	function __construct(){
		add_action('admin_menu', array( &$this, 'init_menus'));
		add_action('wp_footer', array(&$this, 'display_controller'));
		wp_enqueue_script('jQuery_cookie', plugins_url('js/jquery-cookie/jquery.cookie.js', __FILE__), array('jquery'));
		$this->detect = new Mobile_Detect();
	}

	function init_menus(){
		add_options_page('Mobile Entry Pop', 'Mobile Entry Pop', 'manage_options', 'il-mobile_pop', array(&$this, 'admin_controller'));
	}

	function display_controller(){
		if(!$_COOKIE['il_mobile_pop']){
			if($this->detect->isMobile() OR $this->detect->isTablet()){
				$this->load_view('entry_pop', $this->get_options());
			}
		}
	}

	function admin_controller(){
		$this->save_options();
		$this->load_view('admin_menu', $this->get_options());
	}

	function get_options(){
		$return_array = array();
		foreach($this->fields as $field => $value){
			$return_array[$field] = get_option('il-mobile_pop_' .$field);
		}
		return $return_array;
	}
	function save_options(){
		if($_POST['save'] == 'save'){
			error_log('here');
			foreach($this->fields as $field => $value){
				update_option('il-mobile_pop_' . $field, $_POST[$field]);
			}
		}
	}
	function load_view($view_name, $data){
		extract($data);
		include('views/'. $view_name .'.view.php');
	}
}

?>