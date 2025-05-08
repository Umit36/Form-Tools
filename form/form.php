<meta charset="utf8">
<form action = "kaydet.php" method="post" enctype="multipart/form-data">
	Ad: <input type="text" name="isim"/><br/>
	Soyad: <input type="text" name="soyisim"/><br/>
	Cinsiyet:
	Erkek <input type="radio" name="cinsiyet" value = "1" />
	Kadın<input type="radio" name="cinsiyet" value = "2" /><br/>
	Yaş: <input type="text" name="yas"/><br/>
	
	Doğum Yeri:<select name="dogum_yeri">
  <option value="Adana">Adana</option>
  <option value="Adıyaman">Adıyaman</option>
  <option value="Afyonkarahisar">Afyonkarahisar</option>
  <option value="Ağrı">Ağrı</option>
  <option value="Aksaray">Aksaray</option>
  <option value="Amasya">Amasya</option>
  <option value="Ankara">Ankara</option>
  <option value="Antalya">Antalya</option>
  <option value="Ardahan">Ardahan</option>
  <option value="Artvin">Artvin</option>
  <option value="Aydın">Aydın</option>
  <option value="Balıkesir">Balıkesir</option>
  <option value="Bartın">Bartın</option>
  <option value="Batman">Batman</option>
  <option value="Bayburt">Bayburt</option>
  <option value="Bilecik">Bilecik</option>
  <option value="Bingöl">Bingöl</option>
  <option value="Bitlis">Bitlis</option>
  <option value="Bolu">Bolu</option>
  <option value="Burdur">Burdur</option>
  <option value="Bursa">Bursa</option>
  <option value="Çanakkale">Çanakkale</option>
  <option value="Çankırı">Çankırı</option>
  <option value="Çorum">Çorum</option>
  <option value="Denizli">Denizli</option>
  <option value="Diyarbakır">Diyarbakır</option>
  <option value="Düzce">Düzce</option>
  <option value="Edirne">Edirne</option>
  <option value="Elazığ">Elazığ</option>
  <option value="Erzincan">Erzincan</option>
  <option value="Erzurum">Erzurum</option>
  <option value="Eskişehir">Eskişehir</option>
  <option value="Gaziantep">Gaziantep</option>
  <option value="Giresun">Giresun</option>
  <option value="Gümüşhane">Gümüşhane</option>
  <option value="Hakkâri">Hakkâri</option>
  <option value="Hatay">Hatay</option>
  <option value="Igdır">Iğdır</option>
  <option value="Isparta">Isparta</option>
  <option value="İstanbul">İstanbul</option>
  <option value="İzmir">İzmir</option>
  <option value="KahramanMaras">Kahraman Maraş</option>
  <option value="Karabuk">Karabük</option>
  <option value="Karaman">Karaman</option>
  <option value="Kars">Kars</option>
  <option value="Kastamonu">Kastamonu</option>
  <option value="Kayseri">Kayseri</option>
  <option value="Kilis">Kilis</option>
  <option value="Kirikkale">Kırıkkale</option>
  <option value="Kırklareli">Kırklareli</option>
  <option value="Kırşehir">Kırşehir</option>
  <option value="Kocaeli">Kocaeli</option>
  <option value="Konya">Konya</option>
  <option value="Kütahya">Kütahya</option>
  <option value="Malatya">Malatya</option>
  <option value="Manisa">Manisa</option>
  <option value="Mardin">Mardin</option>
  <option value="Muğla">Muğla</option>
  <option value="Muş">Muş</option>
  <option value="Nevşehir">Nevşehir</option>
  <option value="Niğde">Niğde</option>
  <option value="Ordu">Ordu</option>
  <option value="Osmaniye">Osmaniye</option>
  <option value="Rize">Rize</option>
  <option value="Sakarya">Sakarya</option>
  <option value="Samsun">Samsun</option>
  <option value="Siirt">Siirt</option>
  <option value="Sinop">Sinop</option>
  <option value="Sivas">Sivas</option>
  <option value="Sanliurfa">Şanlıurfa</option>
  <option value="Sirnak">Şırnak</option>
  <option value="Tekirdağ">Tekirdağ</option>
  <option value="Tokat">Tokat</option>
  <option value="Trabzon">Trabzon</option>
  <option value="Tunceli">Tunceli</option>
  <option value="Usak">Uşak</option>
  <option value="Van">Van</option>
  <option value="Yalova">Yalova</option>
  <option value="Yozgat">Yozgat</option>
  <option value="Zonguldak">Zonguldak</option>
</select><br/>

	Fotoğraf:
	<input for="file" type="file" name="fotograf" accept=".jpg" /><br/>
	
	Mesaj: <input type="textarea" name="mesaj"/><br/>
	<input type="submit" value="Kaydet" />
</form>
