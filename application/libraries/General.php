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
		//$site_info = $this->get_site_settings_info();
		$cur_date = date('Y/m/d');
		// define('CURDATE_EN', $cur_date);
		// define('ORGA_NAME', $site_info['site_name']);
		// define('SITE_SLOGAN', $site_info['site_slogan']);
		// define('ORGA_ADDRESS1', $site_info['address_line1']);
		// define('ORGA_ADDRESS2', $site_info['address_line2']);
		// define('WEBSITE_NAME', $site_info['site_name']);
		// define('SITE_STATUS', $site_info['status']);
		// define('GOOGLE_MAP_CODE', $site_info['google_map_code']);
		// define('COMPANY_PHONE', $site_info['company_phone']);
		// define('COMPANY_EMAIL', $site_info['company_email']);
		// define('COMPANY_EMAIL1', $site_info['company_email1']);
		// define('COMPANY_EMAIL2', $site_info['company_email2']);
		// define('ADDRESS_lINE1', $site_info['address_line1']);
		// define('ADDRESS_lINE2', $site_info['address_line2']);
		// define('POBOXNO', $site_info['poboxno']);
		// define('FAX', $site_info['fax']);
		// define('MOBILENO', $site_info['mobileno']);
		// define('LOGO_IMG', $site_info['logo_img']);
		// define('LOG_ADMIN_ACTIVITY', $site_info['log_admin_activity']);
		// define('LOG_ADMIN_INVALID_LOGIN', $site_info['log_admin_invalid_login']);
		// define('FACEBOOK_EMBEDED_CODE', $site_info['facebook_embeded']);
		// define('FACEBOOK_LINK', $site_info['facebook']);
		// define('TWITTER_LINK', $site_info['twitter']);
		// define('INSTAGRAM_LINK', $site_info['instagram']);
		// define('YOUTUBE_LINK', $site_info['youtube']);
		// define('LINKEDIN_LINK', $site_info['linkedin']);
		// define('GOOGLEPLUS_LINK', $site_info['googleplus']);
	}	
	public function get_site_settings_info() {
		$query = $this->ci->db->get("tbl_site_settings");
		if ($query->num_rows() > 0) {
			$data = $query->row_array();
		}
		$query->free_result();
		return $data;
	}
	// return result 
	public function get_tbl_data_result($select, $table = false, $where = false, $order = false, $order_by = 'ASC') {
		$this->ci->db->select($select);
		if ($where) {
			$this->ci->db->where($where, null, false);
		}
		if ($order) {
			$this->ci->db->order_by($order, $order_by);
		}
		$qry = $this->ci->db->get($table);
		// echo $this->ci->db->last_query(); exit;
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
        