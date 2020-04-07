<?php  

require_once 'urunler.php';

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <title>Sepet</title>
</head>
<body>
  <hr>
  <div class="container">
    <h2>Sepet <a href="index.php"><button class="btn btn-info btn-sm">Geri Dön</button></a></h2>
    <hr>


    <div class="row">


      <div class="col-md-12">

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Resim</th>
              <th scope="col">Ad</th>
              <th scope="col">Fiyat</th>
              <th scope="col">Adet</th>
              <th scope="col">Toplam</th>
            </tr>
          </thead>
          <tbody>
            <form action="islem.php" method="GET">
            <?php  
            $say=1;
            foreach ($_COOKIE['sepet'] as $key => $value) { 

              $topla+=$urunler[$key]['fiyat']*$value;
              ?>

              <tr>
                <th scope="row"><?php echo $say++ ?></th>
                <td><img width="60" src="<?php echo $urunler[$key]['resim']; ?>"></td>
                <td><?php echo $urunler[$key]['ad']; ?></td>
                <td><?php echo $urunler[$key]['fiyat']; ?> TL</td>
                <td><input type="number" name="urun[<?php echo $key ?>][]" min="1" value="<?php echo $value ?>"></td>
                <td><?php echo $urunler[$key]['fiyat']*$value ?> TL</td>
                <td><a href="islem.php?sepetSil=1&id=<?php echo $key ?>"><i class="fas fa-trash-alt"></i></a></td>
              </tr>

              <?php } ?>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>Toplam Fiyat:</b></td>
                <td><?php echo $topla ?> TL</td>
                <td></td>
              </tr>

            </tbody>
          </table>

          <div align="right" class="col-md-12">

            <button type="submit" name="sepetGuncelle" class="btn btn-success">Sepeti Güncelle</button>
            </form>
          </div>

        </div>



      </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>