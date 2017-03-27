<?php
function save_ads($company_name, $title, $text, $start_date, $end_date,$url,$newname) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ( $conn, $dbname );
    $query = "INSERT INTO advertise (id, company_name, title, text, start_date, end_date, url, image)
	VALUES ('', '$company_name', '$title','$text','$start_date','$end_date','$url','$newname')";

    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function update_ads($id,$company_name, $title, $text, $start_date, $end_date,$url,$newname) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "UPDATE advertise SET
	company_name='$company_name',
	title='$title',
	text='$text',
	start_date='$start_date',
	end_date='$end_date',
	url='$url',
	image='$newname'
	WHERE id='$id'";

    mysqli_query ($conn, $query );

}
function get_ads_info($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn, "SELECT * FROM advertise WHERE id='$id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) )

    {
        return $row;
    }


}
function getExtension ($str){
    $i = strrpos($str,".");
    if (!$i) {return "";}
    $l = strlen($str) - $i;
    $ext = substr ($str, $i+1,$l);
    return $ext;

}
