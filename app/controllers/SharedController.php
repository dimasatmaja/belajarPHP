<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * lemburan_nama_option_list Model Action
     * @return array
     */
	function lemburan_nama_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama AS label FROM user ORDER BY id";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * data_material_vendor_option_list Model Action
     * @return array
     */
	function data_material_vendor_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT nama_vendor AS value , nama_vendor AS label FROM vendor_list ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * material_masuk_id_material_option_list Model Action
     * @return array
     */
	function material_masuk_id_material_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , nama_material AS label FROM data_material ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * material_keluar_id_material_option_list Model Action
     * @return array
     */
	function material_keluar_id_material_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,nama_material AS label FROM data_material";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
