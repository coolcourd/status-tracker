<?php
$agent = $_GET['a'];
$here = $_GET['h'];
$delete = $_GET['d'];
if ($agent) {
    $data = json_decode(file_get_contents("data.json"));
    if ($delete) {
        unset($data->$agent);
    } else {
        $data->$agent = $here;
    }
    $jsondata = json_encode($data);
    echo $jsondata;
    file_put_contents("data.json", $jsondata);
}
// http://tempeproserve.com/internal/inseat/save.php?a=tony&h=1