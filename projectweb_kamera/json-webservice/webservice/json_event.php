<?php
//include ('../inc/config.php');
mysql_connect("localhost", "root", "");
/* pilih databasenya */
mysql_select_db("projectweb");

$query = "SELECT * from barang ";
//echo $query;
$result = mysql_query($query) or die(mysql_error());
$arr = array();
while ($row = mysql_fetch_assoc($result)) {

    $temp = array("id_barang" => $row["id_barang"],
     "nama_barang" => $row["nama_barang"],
      "harga" => $row["harga"], 
  "stok" => $row["stok"]);

    array_push($arr, $temp);
}

$data = json_encode($arr);
echo "{\"list_event\":" . $data . "}";
?>