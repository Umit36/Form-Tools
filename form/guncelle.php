<?php
try {
    $baglanti = new PDO("mysql:host=localhost;dbname=odev;charset=utf8", "root", "");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sorgu = $baglanti->prepare("SELECT * FROM bireyler WHERE id = ?");
    $sorgu->execute([$id]);

    $rowCount = $sorgu->rowCount();
    if ($rowCount > 0) {
        $row = $sorgu->fetch(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelle</title>
</head>
<body>
    <h2>Kayıt Güncelle</h2>
    <form action="guncelle.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Ad: <input type="text" name="isim" value="<?php echo $row['ad']; ?>"><br>
        Soyad: <input type="text" name="soyisim" value="<?php echo $row['soyad']; ?>"><br>
        Cinsiyet:
        Erkek <input type="radio" name="cinsiyet" value="1" <?php echo ($row['cinsiyet'] == 1) ? 'checked' : ''; ?>> 
        Kadın <input type="radio" name="cinsiyet" value="2" <?php echo ($row['cinsiyet'] == 2) ? 'checked' : ''; ?>> 
        <br>
        Yaş: <input type="text" name="yas" value="<?php echo $row['yas']; ?>"><br>
        Doğum Yeri:
        <select name="dogum_yeri">
        <option value="adana">Adana</option>
  <option value="adiyaman">Adıyaman</option>
  <option value="afyonkarahisar">Afyonkarahisar</option>
   <option value="aksaray">Aksaray</option>
  <option value="agri">Ağrı</option>
  <option value="amasya">Amasya</option>
  <option value="ankara">Ankara</option>
  <option value="antalya">Antalya</option>
  <option value="ardahan">Ardahan</option>
  <option value="artvin">Artvin</option>
  <option value="aydin">Aydın</option>
  <option value="balikesir">Balıkesir</option>
  <option value="bartin">Bartın</option>
  <option value="batman">Batman</option>
  <option value="bayburt">Bayburt</option>
  <option value="bilecik">Bilecik</option>
  <option value="bingol">Bingöl</option>
  <option value="bitlis">Bitlis</option>
  <option value="bolu">Bolu</option>
  <option value="burdur">Burdur</option>
  <option value="bursa">Bursa</option>
  <option value="canakkale">Çanakkale</option>
  <option value="cankiri">Çankırı</option>
  <option value="corum">Çorum</option>
  <option value="denizli">Denizli</option>
  <option value="diyarbakir">Diyarbakır</option>
  <option value="duzce">Düzce</option>
  <option value="edirne">Edirne</option>
  <option value="elazig">Elazığ</option>
  <option value="erzincan">Erzincan</option>
  <option value="erzurum">Erzurum</option>
  <option value="eskisehir">Eskişehir</option>
  <option value="gaziantep">Gaziantep</option>
  <option value="giresun">Giresun</option>
  <option value="gumushane">Gümüşhane</option>
  <option value="hakkari">Hakkâri</option>
  <option value="hatay">Hatay</option>
  <option value="igdir">Iğdır</option>
  <option value="isparta">Isparta</option>
  <option value="istanbul">İstanbul</option>
  <option value="izmir">İzmir</option>
  <option value="kahramanmaras">Kahramanmaraş</option>
  <option value="karabuk">Karabük</option>
  <option value="karaman">Karaman</option>
  <option value="kars">Kars</option>
  <option value="kastamonu">Kastamonu</option>
  <option value="kayseri">Kayseri</option>
  <option value="kilis">Kilis</option>
  <option value="kirikkale">Kırıkkale</option>
  <option value="kirklareli">Kırklareli</option>
  <option value="kirsehir">Kırşehir</option>
  <option value="kocaeli">Kocaeli</option>
  <option value="konya">Konya</option>
  <option value="kutahya">Kütahya</option>
  <option value="malatya">Malatya</option>
  <option value="manisa">Manisa</option>
  <option value="mardin">Mardin</option>
  <option value="mersin">Mersin</option>
  <option value="mugla">Muğla</option>
  <option value="mus">Muş</option>
  <option value="nevsehir">Nevşehir</option>
  <option value="nigde">Niğde</option>
  <option value="ordu">Ordu</option>
  <option value="osmaniye">Osmaniye</option>
  <option value="rize">Rize</option>
  <option value="sakarya">Sakarya</option>
  <option value="samsun">Samsun</option>
  <option value="siirt">Siirt</option>
  <option value="sinop">Sinop</option>
  <option value="sivas">Sivas</option>
  <option value="sanliurfa">Şanlıurfa</option>
  <option value="sirnak">Şırnak</option>
  <option value="tekirdag">Tekirdağ</option>
  <option value="tokat">Tokat</option>
  <option value="trabzon">Trabzon</option>
  <option value="tunceli">Tunceli</option>
  <option value="usak">Uşak</option>
  <option value="van">Van</option>
  <option value="yalova">Yalova</option>
  <option value="yozgat">Yozgat</option>
  <option value="zonguldak">Zonguldak</option>
        </select><br>
        Fotoğraf: <input type="file" name="fotograf"><br>
        Mesaj: <textarea name="mesaj"><?php echo $row['mesaj']; ?></textarea><br>
        <button type="submit">Güncelle</button>
    </form>
</body>
</html>

<?php
} else {
    echo "Güncelleme başarısız.";
    exit();
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $ad = $_POST["isim"];
    $soyad = $_POST["soyisim"];
    $cinsiyet = isset($_POST["cinsiyet"]) ? $_POST["cinsiyet"] : null;
    $yas = $_POST["yas"];
    $dogum_yeri = isset($_POST["dogum_yeri"]) ? $_POST["dogum_yeri"] : null;
    $mesaj = $_POST["mesaj"];

    
    if ($_FILES["fotograf"]["error"] == UPLOAD_ERR_OK) {
        $hedef_dizin = "uploads/"; 
        $hedef_yol = $hedef_dizin . basename($_FILES["fotograf"]["name"]);
        
        
        if (move_uploaded_file($_FILES["fotograf"]["tmp_name"], $hedef_yol)) {
            $fotograf = $hedef_yol;
        } else {
            echo "Hata: Dosya yükleme başarısız.";
            exit();
        }
    }

    $sorgu = $baglanti->prepare("UPDATE bireyler SET 
        ad = ?, 
        soyad = ?, 
        cinsiyet = ?, 
        yas = ?, 
        dogum_yeri = ?, 
        fotograf = ?, 
        mesaj = ? 
        WHERE id = ?");

    $sorgu->execute([$ad, $soyad, $cinsiyet, $yas, $dogum_yeri, $fotograf, $mesaj, $id]);

    echo "Güncelleme başarılı.";
}
?>