<meta charset="utf8">
<?php
$baglanti = new PDO("mysql:host=localhost;dbname=odev;charset=utf8","root","");

$sorgu = $baglanti->prepare("SELECT id, ad, soyad FROM bireyler");

$sorgu->execute();
$veriler = $sorgu->fetchAll();

foreach($veriler as $veri){

echo $veri["ad"]." ".$veri["soyad"]. "<a href='sil.php? id=".$veri["id"]."'> SİL </a>"." ". 
"<a href='guncelle.php? id=".$veri["id"]."'> GÜNCELLE </a>" ;
echo "<br/>";
}

?>