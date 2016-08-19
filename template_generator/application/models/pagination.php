<?php 
    public function jQuerypagination_countriesdata($per_page,$offset) {	
    $sdata = array();
    $this->db->get_where('image_gallery')->result();
    $this->db->limit($per_page,$offset);
    $query_result = $this->db->get();
    // if($query_result->num_rows() > 0) {
    //     foreach ($query_result->result_array() as $row)
    //     {
    //         $sdata[] = array('countryCode' => $row['countryCode'],'countryName' => $row['countryName'],'currencyCode' => $row['currencyCode'],'idCountry' => $row['idCountry'],'population' => $row['population'],'capital' => $row['capital'],'continentName' => $row['continentName'],'continent' => $row['continent'],'areaInSqKm' => $row['areaInSqKm']);
    //     }			
    // }
    // return $sdata;
}