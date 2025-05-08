<meta charset="utf8">
<?php
$baglanti = new PDO("mysql:host=localhost;dbname=odev;charset=utf8","root","");

$sorgu = $baglanti->prepare("INSERT INTO bireyler (ad, soyad, cinsiyet, yas, dogum_yeri, fotograf, mesaj) 
VALUES (:isim, :soyisim, :cinsiyet, :yas, :dogum_yeri, :fotograf, :mesaj)");

$sorgu->execute(array("isim" => $_POST["isim"], "soyisim" => $_POST["soyisim"], "cinsiyet" => $_POST["cinsiyet"],
                      "yas" => $_POST["yas"], "dogum_yeri" => $_POST["dogum_yeri"], "fotograf" => "uploads/" . basename($_FILES["fotograf"]["name"]),
                      "mesaj" => $_POST["mesaj"]));
if($sorgu==TRUE){
    echo "Kayıt Başarılı";
}
else{
    echo "Kayıt Başarısız";
}


?>


