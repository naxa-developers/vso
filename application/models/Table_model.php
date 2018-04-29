<?php
class Table_model extends CI_Model {






 public function create_table($tbl){  //create table

	if( $this->db->table_exists($tbl) == FALSE ){

                $query = "CREATE TABLE $tbl (

				id bigserial primary key,
				cat_name varchar(255)  NULL,//
				cat_photo varchar(255)  NULL,

				cat_table varchar(255)  NULL



				)";

               return $this->db->query($query);

            }else{

				return 'table exist';

			}



}


 public function table_copy($p,$f,$f_n,$tbl){ //import table

	/* $query="COPY survey(name_of_surveyor,name_of_district,name_of_municipality,ward_no,address,latitude,longitude)
   FROM 'C:\Users\munchen\Downloads\home_survey.csv' DELIMITER ',' CSV HEADER"; */
   var_dump($p);
   echo "    se    ";
   var_dump($f);
   echo "    se    ";
   var_dump($f_n);
   echo "    se    ";
   var_dump($tbl);
   echo "    se    ";
   $query="COPY $tbl($f_n)FROM '$p' DELIMITER ',' CSV HEADER";
	 return $this->db->query($query);

}



}
