<?php
class Buah {
  public $nama;
  public $warna;

  public function __construct($nama, $warna)
  {
    $this->nama = $nama;
    $this->warna = $warna;
  }
}
echo '<pre>';

$pir = new Buah("pir", "kuning");
$anggur = new Buah("anggur", "hijau");
print_r($pir);
print"<p>";
print_r($anggur);
echo '</pre>';

echo "<br><br><strong>By Amellya<strong>";



