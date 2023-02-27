<?php

  $a_fruits = [
    ["ID" => 1,"nama" => "Pisang", "warna" => "Kuning", "stok" => 20, "harga" => 15000, "deskripsi" => "Pisang merupakan salah satu buah yang kaya akan mineral kalium dan serat pektin."],
    ["ID" => 2,"nama" => "Melon", "warna" => "Hijau", "stok" => 15, "harga" => 28000, "deskripsi" => "Melon banyak mengandung vitamin A, B, dan C, serta mengandung protein, kalsium, dan fosfor."],
    ["ID" => 3,"nama" => "Berry", "warna" => "Merah", "stok" => 8, "harga" => 12000, "deskripsi" => "Jenis buah yang tinggi serat, kaya vitamin C, dan mengandung polifenol antioksidan."],
    ["ID" => 4,"nama" => "Durian", "warna" => "Kuning", "stok" => 6, "harga" => 10000, "deskripsi" => "Buah durian diam-diam mengandung antioksidan yang cukup tinggi."],
    ["ID" => 5,"nama" => "Alpukat", "warna" => "Hijau", "stok" => 9, "harga" => 13000, "deskripsi" => " Kandungan alpukat terdiri dari sekitar 73% air, 15% lemak, 8,5% karbohidrat yang sebagian besar adalah serat, dan 2% protein."],
    ["ID" => 6,"nama" => "Apel", "warna" => "Merah", "stok" => 14, "harga" => 7000, "deskripsi" => "Buah apel mempunyai kandungan yaitu senyawa pektin, selain dari itu, buah apel juga mempunyai kandungan zat-zat gizi."],
    ["ID" => 7,"nama" => "Rambutan", "warna" => "Merah", "stok" => 12, "harga" => 10000, "deskripsi" => "Buah rambutan memiliki kandungan karbohidrat sehingga dapat menjadi buah pemberi sumber energi."],
    ["ID" => 8,"nama" => "Nanas", "warna" => "Kuning", "stok" => 22, "harga" => 15000, "deskripsi" => "Terdapat berbagai nutrisi dalam buah nanas yang bisa memberikan berbagai manfaat kesehatan untuk tubuh secara menyeluruh."],
    ["ID" => 9,"nama" => "Semangka", "warna" => "Merah", "stok" => 10, "harga" => 9000, "deskripsi" => "Di dalam buah semangka terkandung karbohidrat, serat, folat, asam pantotenat, vitamin A, C, E, kalium, kalsium, tembaga, beta-karoten, lycophene dan berbagai kandungan lainnya."],
    ["ID" => 10,"nama" => "Jeruk", "warna" => "Kuning", "stok" => 15, "harga" => 12000, "deskripsi" => "Kandungan jeruk yang utama adalah karbohidrat dan air dengan sedikit protein, lemak, dan kalori."],
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover" border = 1>
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          </tr>
      </thead>

      <tbody>
        <?php
          
          foreach ($a_fruits as $fruit){
            echo "<tr>" ;
            echo "<td>" .$fruit["ID"]. "</td>";
            echo "<td>" .$fruit["nama"]. "</td>";
            echo "<td>" .$fruit["warna"]. "</td>";
            echo "<td>" .$fruit["harga"]. "</td>";
            echo "<td>" .$fruit["stok"]. "</td>";
            echo "<td>" .$fruit["deskripsi"]. "</td>";
            echo "</tr>" ;
        }
            
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>