<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('model', '', 0);
class workflow_model extends model {
	public function __construct() {
		$this->db_config = pc_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name = 'numbers';
		parent::__construct();
	}

	/**
	 *
	 * @param $area 地区
	 * @param $operator_type	1移动	2联通	3电信
	 * @param $show_type		1新品	2特价	3精品
	 * @param int $page
	 * @param int $page_size
	 */
	public function get_numbers($area, $operator_type, $show_type, $page=1, $page_size=1) {
		$total = $this->count("`area`='{$area}' AND `operarors`=$operator_type");
		$total = ceil($total/$page_size);
		$order = '';
		if(1 == $show_type) {
			$order = 'update_time DESC';
		}else if(2 == $show_type) {
			$order = 'card_fee ASC';
		}else{
			$order = 'card_fee DESC';
		}
		$start = ($page -1) * $page_size;
		$limit = "$start, $page_size";
		$sql = "SELECT `card_fee`, `numbers` FROM $this->db_tablepre . $this->table_name WHERE `area`='{$area}' AND `operarors`=$operator_type ORDER BY $order LIMIT $limit";
		return array(
			'total'=>$total,
			'list_info'=>$this->query($sql)
		);
	}
}
?>