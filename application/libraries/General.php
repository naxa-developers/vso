<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class General {
	/**

	 * CodeIgniter global

	 *

	 * @var string

	 **/

	protected $ci;
	/**

	 * account status ('not_activated', etc ...)

	 *

	 * @var string

	 **/
	protected $status;

	public $adjacencyList;

	public $adjacencyCheckboxlist;
	/**

	 * error message (uses lang file)

	 *

	 * @var string

	 **/

	protected $errors = array();
	public $members_data;
	public function __construct() {
		$this->ci = &get_instance();
		//define site settings info
		$this->referer = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "";
		$this->onpage = $_SERVER['REQUEST_URI'];
		$site_info = $this->get_site_settings_info();
		$cur_date = date('Y/m/d');
		// define('CURDATE_EN', $cur_date);
		define('SITE_NAME_EN', $site_info['site_name']);
		define('SITE_SLOGAN_EN', $site_info['site_logo']);
		define('SITE_TEXT_EN', $site_info['site_text']);
		define('COVER_POHOTO_EN', $site_info['cover_photo']);
		define('COVER_SMALL_EN', $site_info['cover_small']);
		define('FOOTER_BIG_EN', $site_info['footer_big']);
		define('FACEBOOK', $site_info['facebook']);
		define('TWITTER', $site_info['twitter']);
		define('GOOGLE', $site_info['google']);
		define('COPYRIGHT', $site_info['copyright']);
		define('COPY_TEXT', $site_info['copy_text']);
		define('SUBSCRIBE_BTN', $site_info['subscribe_btn']);
		define('COPY_DATE', $site_info['copy_date']);
		define('TWO_NAME', $site_info['2_name']);
		define('ONE_NAME', $site_info['1_name']);
		define('IMP_LINK', $site_info['imp_link']);
		define('EMAIL', $site_info['email']);
		define('SUBSCRIBE', $site_info['subscribe']);
		define('FOOTER_SMALL', $site_info['footer_small']);
		define('LINK_ONE', $site_info['1_link']);
		define('LINK_TWO', $site_info['2_link']);





	}	
	public function get_site_settings_info() {
		//pp($this->ci->session->userdata('Language'));
		if($this->ci->session->userdata('Language')==NULL){
      		$this->ci->session->set_userdata('Language','nep');
    	}
    	$lang=$this->ci->session->get_userdata('Language');
    	if($lang== 'en')
    	{
    		$whr = '1';
    	}else{
    		$whr = '2';
    	}
    	if ($whr) {
			$this->ci->db->where('id',$whr);
		}
		$query = $this->ci->db->get("site_setting");
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
		}
		$query->free_result();
		//echo $this->ci->db->last_query(); exit;
		return $data;
	}
	// return result 
	public function get_tbl_data_result($select, $table = false, $where = false, $order = false, $order_by = 'ASC') {
		$this->ci->db->select($select);
		if ($where) {
			$this->ci->db->where($where, false);
		}
		if ($order) {
			$this->ci->db->order_by($order, $order_by);
		}
		$qry = $this->ci->db->get($table);
		 //echo $this->ci->db->last_query(); exit;
		if ($qry->num_rows() > 0) {
			return $qry->result();
		}
		return false;
	}
	// return all data row
	public function get_tbl_data_rows($select, $table = false, $where = false, $order = false, $order_by = 'ASC') {
		$this->ci->db->select($select);
		if ($where) {
			$this->ci->db->where($where, null, false);
		}
		if ($order) {
			$this->ci->db->order_by($order, $order_by);
		}
		$qry = $this->ci->db->get($table);
		//echo $this->ci->db->last_query(); exit;
		if ($qry->num_rows() > 0) {
			return $qry->num_rows();
		}
		return false;
	}
	public function get_count_table_rows($id = false, $fields = false, $table = false) {
		$qry = $this->ci->db->get_where($table, array($fields => $id));
		//echo $this->ci->db->last_query(); exit;
		if ($qry->num_rows() > 0) {
			return $qry->num_rows();
		}
		return 0;
	}
}
        