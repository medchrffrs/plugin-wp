<?php
/**
 * Plugin Name: Application Formulaire
 * Description: This plugin allows users subscribe to recent posts
 * Version: 1.0.0
 * Author: Mohamed cherif fares
 * Author URL: https://softifi.com
 */


add_action('admin_menu', 'application_plugin_setup_menu');

function application_plugin_setup_menu()
{
	add_menu_page(
		'application_form', // Page Title
		'Application Form', // Menu Title
		'manage_options', // Capabiliy
		'app_page', // Menu_slug
		'displayList', // function
		'dashicons-schedule', // plugins_url('/customplugin/img/icon.png') // icon_url
		3   // position
	);


} // admin_menu

add_action("admin_menu", "customplugin_menu");
function customplugin_menu()
{
	add_submenu_page(
		"app_page",
		"All Entries", 
		"All entries",
		"manage_options", 
		"allentries", 
		"displayList"
	);
	add_submenu_page(
		"app_page",
		"Add new Entry", 
		"Add new Entry",
		"manage_options", 
		"addnewentry", 
		"addEntry"
	);
}
function displayList(){
	include "displaylist.php";
  }
  
function addEntry(){
include "addentry.php";
}
function editEntry(){
include "editentry.php";
}

function create_plugin_database_table(){

	global $table_prefix, $wpdb;

	$wp_track_table = $table_prefix . "application_form";
	$charset_collate = $wpdb->get_charset_collate();

	#Check to see if the table exists already, if not, then create it

	if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table) 
	{

		$sql = "CREATE TABLE $wp_track_table (
			id int(11) NOT NULL auto_increment,
			name text(255)  NULL,
			nationality varchar(255) NOT NULL,
			address text(60) NOT NULL,
			tel int(10) NOT NULL,
			email text(200) NOT NULL,
			proposalOne text(60) NOT NULL,
			proposalTwo text(60) NOT NULL,
			proposalThree text(60) NOT NULL,
			activities text(1000) NOT NULL,
			nameManager text(60) NOT NULL,
			nationalityCompany text(60) NOT NULL,
			capitalCompany text(60) NOT NULL,
			currency text(1000) NOT NULL,
			nameShareholders text(60) NOT NULL,
			nationalityShareholders text(60) NOT NULL,
			subscriptionShareholders text(1000) NOT NULL,
			land text(60) NOT NULL,
			premises text(1000) NOT NULL,
			office text(60) NOT NULL,
			constructionArea text(60) NOT NULL,
			permanent text(1000) NOT NULL,
			temporary text(60) NOT NULL,
			mixed text(1000) NOT NULL,
			firstYear text(1000) NOT NULL,
			secondYear text(60) NOT NULL,
			thirdYear text(1000) NOT NULL,

			estimatedExport text(1000) NOT NULL,
			localAddedValue text(60) NOT NULL,
			originImportedGoods text(1000) NOT NULL,
			exportDestination text(1000) NOT NULL,

			constructionEquipments int(10) NOT NULL,
			importedEquipments int(10) NOT NULL,
			localEquipments int(10) NOT NULL,
			meansTransport int(10) NOT NULL,
			otherCosts int(10) NOT NULL,
			workingCapital int(10) NOT NULL,
			totalInvestment int(10) NOT NULL,

			capitalFinance int(10) NOT NULL,
			currentAccountPartners int(10) NOT NULL,
			longTermCredit int(10) NOT NULL,
			middleTermCredit int(10) NOT NULL,
			shortTermCredit int(10) NOT NULL,
			totalFinance int(10) NOT NULL,

			creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
			status text(10) NOT NULL,
			user_id text(10) NOT NULL,


			UNIQUE KEY id (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	  //  add_option( 'db_version', $db_version );
	}
}

register_activation_hook( __FILE__, 'create_plugin_database_table' );




add_action( 'template_redirect', 'insert_form_to_database_table' );
function insert_form_to_database_table(){


	if (isset($_POST['submitBtn'])) {
		global $wpdb;
		$table = $wpdb->prefix . "application_form";

		$emailSent = true;
		$name = $_POST['name'];
		$nationality = $_POST['nationality'];
		$address = $_POST['address'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$proposalOne = $_POST['proposalOne'];
		$proposalTwo = $_POST['proposalTwo'];
		$proposalThree = $_POST['proposalThree'];
		$activities = $_POST['activities'];
		$nameManager = $_POST['nameManager'];
		$nationalityCompany = $_POST['nationalityCompany'];
		$capitalCompany = $_POST['capitalCompany'];
		$currency = $_POST['currency'];
		$nameShareholders = $_POST['nameShareholders'];
		$nationalityShareholders = $_POST['nationalityShareholders'];
		$subscriptionShareholders = $_POST['subscriptionShareholders'];
		$land = $_POST['land'];
		$premises = $_POST['premises'];
		$office = $_POST['office'];
		$constructionArea = $_POST['constructionArea'];
		$permanent = $_POST['permanent'];
		$temporary = $_POST['temporary'];
		$mixed = $_POST['mixed'];
		$firstYear = $_POST['firstYear'];
		$secondYear = $_POST['secondYear'];

		$thirdYear = $_POST['thirdYear'];
		$estimatedExport = $_POST['estimatedExport'];
		$localAddedValue = $_POST['localAddedValue'];
		$originImportedGoods = $_POST['originImportedGoods'];

		$exportDestination = $_POST['exportDestination'];
		$constructionEquipments = $_POST['constructionEquipments'];
		$importedEquipments = $_POST['importedEquipments'];
		$localEquipments = $_POST['localEquipments'];
		$meansTransport = $_POST['meansTransport'];
		$otherCosts = $_POST['otherCosts'];
		$workingCapital = $_POST['workingCapital'];
		$totalInvestment = $_POST['totalInvestment'];

		$capitalFinance = $_POST['capitalFinance'];
		$currentAccountPartners = $_POST['currentAccountPartners'];
		$longTermCredit = $_POST['longTermCredit'];
		$middleTermCredit = $_POST['middleTermCredit'];
		$shortTermCredit = $_POST['shortTermCredit'];
		$totalFinance = $_POST['totalFinance'];

		$current_user = wp_get_current_user()->ID;
		$status = 'Request sent';
		date_default_timezone_set('Africa/tunis');
		$createDate = date('m-d-Y h:i:s', time());


		$insert_sql = "INSERT INTO ".$table."(
			name,nationality, email, address, tel, proposalOne, proposalTwo, proposalThree, activities, nameManager,
			nationalityCompany, capitalCompany, currency, nameShareholders, nationalityShareholders, subscriptionShareholders,
			land, premises, office, constructionArea, permanent, temporary, mixed, firstYear, secondYear, thirdYear, estimatedExport,
			localAddedValue, originImportedGoods, exportDestination, constructionEquipments, importedEquipments, localEquipments,
			meansTransport, otherCosts, workingCapital, totalInvestment, capitalFinance, currentAccountPartners, longTermCredit, 
			middleTermCredit, shortTermCredit, totalFinance, status, user_id
		) values(
			'".$name."','".$nationality."','".$email."','".$address."','".$tel."','".$proposalOne."', '".$proposalTwo."',
			'".$proposalThree."','".$activities."','".$nameManager."','".$nationalityCompany."','".$capitalCompany."', 
			'".$currency."','".$nameShareholders."','".$nationalityShareholders."','".$subscriptionShareholders."',
			'".$land."','".$premises."', '".$office."','".$constructionArea."', '".$permanent."','".$temporary."',
			'".$mixed."','".$firstYear."','".$secondYear."','".$thirdYear."','".$estimatedExport."','".$localAddedValue."',
			'".$originImportedGoods."','".$exportDestination."','".$constructionEquipments."','".$importedEquipments."',
			'".$localEquipments."','".$meansTransport."', '".$otherCosts."','".$workingCapital."', '".$totalInvestment."',
			'".$capitalFinance."','".$currentAccountPartners."','".$longTermCredit."','".$middleTermCredit."',
			'".$shortTermCredit."', '".$totalFinance."', '".$status."', '".$current_user."'
		) ";
       	$success = $wpdb->query($insert_sql);


	    $last_inserted_id = $wpdb->insert_id;

		$adminmail = 'ndrine@investinzarzis.tn';
		$mailClient = $email;

		$subjAdmin = 'Application Form ';
		$bodyAdmin = 'Sequance : ' . str_pad($last_inserted_id, 5, '0', STR_PAD_LEFT) .
					 '
					 Promoter Name : '. $name .
					 '
					 Date : ' . $createDate .
					 '
					 Sector :' . $activities .
					 '
					 Email :' . $mailClient ;
		$headersAdmin = 'From: '.$name.' <ndrine@investinzarzis.tn>';	

		// $headersAdmin = 'From: '.$name.' <'.$adminmail.'>' . "\r\n" . 'Reply-To: ' . $mailClient;

		$subjClient = 'Application Form '. str_pad($last_inserted_id, 5, '0', STR_PAD_LEFT);
		$bodyClient = 'Your request has been successfully sent.
		Please follow the status of your request in your account created on the site www.investinzarzis.tn';
		$headersClient = 'From: '.$name .' <ndrine@investinzarzis.tn>';

		wp_mail( $adminmail, $subjAdmin, $bodyAdmin, $headersAdmin);
		wp_mail( $mailClient, $subjClient, $bodyClient, $headersClient);
		wp_redirect( '"'.home_url().'/thank-you/"', 301 );

	
	}

}
// register_activation_hook( __FILE__, 'insert_form_to_database_table' );





add_filter( 'posts_join', 'acme_search_submission_join' );
/**
 * Performs a JOIN on the post and the post meta tables so that we can retrieve results
 * that also include data stored in the post meta table.
 *
 * @param     string $join    The initial JOIN clause.
 * @return    string $join    The clause for joining the post and the post meta tables, if on the search template.
 */
function acme_search_submission_join( $join ) {

	if ( is_admin() || ! is_search() ) {
		return $join;
	}

	global $wpdb;
	$join .= "JOIN $wpdb->postmeta ON $wpdb->posts.ID = $wpdb->postmeta.post_id ";

	return $join;

}









































class PageTemplater {

	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

	/**
	 * The array of templates that this plugin tracks.
	 */
	protected $templates;

	/**
	 * Returns an instance of this class.
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new PageTemplater();
		}

		return self::$instance;

	}

	/**
	 * Initializes the plugin by setting filters and administration functions.
	 */
	private function __construct() {

		$this->templates = array();


		// Add a filter to the attributes metabox to inject template into the cache.
		if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {

			// 4.6 and older
			add_filter(
				'page_attributes_dropdown_pages_args',
				array( $this, 'register_project_templates' )
			);

		} else {

			// Add a filter to the wp 4.7 version attributes metabox
			add_filter(
				'theme_page_templates', array( $this, 'add_new_template' )
			);

		}

		// Add a filter to the save post to inject out template into the page cache
		add_filter(
			'wp_insert_post_data',
			array( $this, 'register_project_templates' )
		);


		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter(
			'template_include',
			array( $this, 'view_project_template')
		);


		// Add your templates to this array.
		$this->templates = array(
			'form-template.php' => 'Form Application Page',
			'list-template.php' => 'List Application Page',
		);

	}

	/**
	 * Adds our template to the page dropdown for v4.7+
	 *
	 */
	public function add_new_template( $posts_templates ) {
		$posts_templates = array_merge( $posts_templates, $this->templates );
		return $posts_templates;
	}

	/**
	 * Adds our template to the pages cache in order to trick WordPress
	 * into thinking the template file exists where it doens't really exist.
	 */
	public function register_project_templates( $atts ) {

		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

		// Retrieve the cache list.
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if ( empty( $templates ) ) {
			$templates = array();
		}

		// New cache, therefore remove the old one
		wp_cache_delete( $cache_key , 'themes');

		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge( $templates, $this->templates );

		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add( $cache_key, $templates, 'themes', 1800 );

		return $atts;

	}

	/**
	 * Checks if the template is assigned to the page
	 */
	public function view_project_template( $template ) {
		// Return the search template if we're searching (instead of the template for the first result)
		if ( is_search() ) {
			return $template;
		}

		// Get global post
		global $post;

		// Return template if post is empty
		if ( ! $post ) {
			return $template;
		}

		// Return default template if we don't have a custom one defined
		if ( ! isset( $this->templates[get_post_meta(
			$post->ID, '_wp_page_template', true
		)] ) ) {
			return $template;
		}

		// Allows filtering of file path
		$filepath = apply_filters( 'page_templater_plugin_dir_path', plugin_dir_path( __FILE__ ) );

		$file =  $filepath . get_post_meta(
			$post->ID, '_wp_page_template', true
		);

		// Just to be safe, we check if the file exist first
		if ( file_exists( $file ) ) {
			return $file;
		} else {
			echo $file;
		}

		// Return template
		return $template;

	}

}
add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );
