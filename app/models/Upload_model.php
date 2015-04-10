<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

      

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function add($data)
        {
		$insert = array(
			'file_name' => $data['file_name'],
			'full_path' => $data['full_path'],
			'file_size' => $data['file_size'],
			'image_width' => $data['image_width'],
			'image_height' => $data['image_height'],
			'image_type' => $data['image_type'],
			'raw_name' => $data['raw_name'],
			'orig_name' => $data['orig_name']
			
		);
		
		$this->db->insert('images',$insert);
        }
        
        public function get()
        {	
		$query = $this->db->get('images');
		$rows = array();
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rows[] = $row;
			}
		}
                return $rows;
        }
        
        
        
}
