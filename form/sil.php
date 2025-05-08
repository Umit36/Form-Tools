<meta charset="utf8">
<?php
$baglanti = new PDO("mysql:host=localhost;dbname=odev;charset=utf8","root","");

$sorgu = $baglanti->prepare("DELETE FROM bireyler WHERE id= :id");

$sorgu->execute(array("id" => $_GET["id"]));

if($sorgu==TRUE){
    echo "Silme İşlemi Başarılı";
}
else{
    echo "Silme İşlemi Başarısız";
}
?>