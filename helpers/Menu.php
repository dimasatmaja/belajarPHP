<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => 'hasil_lembur', 
			'label' => 'Hasil Lembur', 
			'icon' => ''
		),
		
		array(
			'path' => 'lemburan', 
			'label' => 'Lemburan', 
			'icon' => ''
		),
		
		array(
			'path' => 'lokasi', 
			'label' => 'Lokasi', 
			'icon' => ''
		),
		
		array(
			'path' => 'user', 
			'label' => 'User', 
			'icon' => ''
		),
		
		array(
			'path' => 'unit_kerja', 
			'label' => 'Unit Kerja', 
			'icon' => ''
		),
		
		array(
			'path' => 'data_material', 
			'label' => 'Data Material', 
			'icon' => ''
		),
		
		array(
			'path' => 'vendor_list', 
			'label' => 'Vendor List', 
			'icon' => ''
		)
	);
		
			public static $navbartopleft = array(
		array(
			'path' => 'material_masuk', 
			'label' => 'Material Masuk', 
			'icon' => ''
		),
		
		array(
			'path' => 'material_keluar', 
			'label' => 'Material Keluar', 
			'icon' => ''
		)
	);
		
	
	
			public static $kategori = array(
		array(
			"value" => "ORDER", 
			"label" => "ORDER", 
		),
		array(
			"value" => "MASUK", 
			"label" => "MASUK", 
		),
		array(
			"value" => "INPROGRES", 
			"label" => "INPROGRES", 
		),);
		
}