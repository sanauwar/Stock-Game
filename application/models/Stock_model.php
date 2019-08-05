<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Stock_model class.
 * 
 * @extends CI_Model
 */
class Stock_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
	}

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function get_stock_market_data() {
		$this->db->select('*');
		$this->db->from('stock_market');
		$query = $this->db->get();
		return $query->result();
	}

}