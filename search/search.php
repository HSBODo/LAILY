<?php
include "../main/config.php";
include "../dbcon/db_con.php";

if (isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page=1;

}
$category = $_GET["category"];
$search = $_GET["search"];


?>