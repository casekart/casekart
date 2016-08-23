<?php

//brand_names_model.php (Array of Strings)

class auto_cmpl extends CI_Model{

  function get_bird($q){

    $this->db->select('brand_name');

    $this->db->like('brand_name', $q);

    $query = $this->db->get('brands');

    if($query->num_rows() > 0){

      foreach ($query->result_array() as $row){

        $row_set[] = htmlentities(stripslashes($row['brand_name'])); //build an array

      }

      echo json_encode($row_set); //format the array into json data

    }

  }

}