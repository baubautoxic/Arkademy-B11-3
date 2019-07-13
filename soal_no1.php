<?php
$biodata = array (
	"name"      	=> "Reynhard Ramadhan Halaka",
	"age"			=> "22 years old",
	"address"		=> "Griya Asri 2, Tambun Selatan, Bekasi",
	"hobbies"     	=> array(
		"Futsal", "Ngoding", "Games"
	),
	"is_married" 	=> FALSE,
    "list_school" 	=> array (
    	"college" 	=> array(
        	"name" 			=> "Universitas Gunadarma",
        	"year_in" 		=> "2014",
        	"year_out" 		=> "2018",
        	"major"			=> "S1 Sistem Informasi"
    	),
    	"highSchool" 		=> array(
        	"name" 			=> "SMK Yadika 13",
        	"year_in" 		=> "2011",
        	"year_out" 		=> "2014",
        	"major"			=> "Teknik Komputer & Jaringan"
    	),
    	"juniorHighschool" 	=> array(
        	"name" 			=> "SMP Negeri 5 Tambun Selatan",
        	"year_in" 		=> "2009",
        	"year_out" 		=> "2011",
        	"major"			=> null
    	),
    	"elementarySchool" 	=> array(
        	"name" 			=> "SD Negeri 4 Sumberjaya",
        	"year_in" 		=> "2003",
        	"year_out" 		=> "2009",
        	"major"			=> null
    	),
    ),
    "skills" => array (
        array("skill_name" => "PHP", "level"=>"advanced"),
  		array("skill_name" => "HTML", "level"=>"advanced"),
  		array("skill_name" => "Javascript", "level"=>"beginer"),
    ),
    "interest_in_coding"  => TRUE,
);

// encode array ke json
$json = json_encode($biodata);

// membuat file format .json dengan nama "biodara.json"
if (file_put_contents("biodata.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Terjadi error saat membuat file JSON...";
?>