<! DOCTYPE HTML>
<head>
    <title>Jawaban Nomer 1</title>
</head>
<body>

<?php

$base_url = "http://" . $_SERVER['HTTP_HOST'] .
$_SERVER['REQUEST_URI'];

$result = file_get_contents($base_url . "/json/biodata.json");

$json_object = json_decode($result);

echo "Nama: " . $json_object->Nama . "<br />";
echo "Alamat: " . $json_object->Alamat . "<br />";
echo "Hobi: " . $json_object->Hobi . "<br />";
echo "Status: " . $json_object->Status . "<br />";
echo "Sekolah: " . $json_object->Sekolah . "<br />";
echo "Keahlian: " . $json_object->Keahlian;    
?>

</body>
</html>