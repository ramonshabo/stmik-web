<!-- 5 pondasi OOP & 4 pilar OOP -->
<!-- 
1. Class = Hewan
2. Object = Unggas
3. Access Modifier = Public
4. Property = nama & kaki
5. method = jalan
 -->
<?php 
class Hewan{
    public $nama = "Ayam";
    public $kaki = 2;

    public function jalan(){
        return "... Sedang Berjalan";
    }
}

$unggas = new Hewan();
echo $unggas->nama;
echo $unggas->jalan();

?>