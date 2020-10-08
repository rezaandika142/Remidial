<?php
$dev = [
  ["TENCENT", "PUBG"],
  ["MOONTON","MOBILE LEGEND"],
  [],
    []
];

// Membuat Pilihan
$temp_arr=[];

foreach ($dev as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$games=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $games=$dev;
    }else{
        foreach($dev as $key)
        {
            if($key[0] == $filter){
                $games[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $games=$dev;
}
// var_dump($games);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Pasokan Laptop</title>
<link rel="shortcut icon" href="gaming.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">              
  <a class="navbar-brand" href="#"><img  width="150" height="100"  src="gaming.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  </div>
</nav>
<div class="d-flex border-bottom solid 5px"><h2 class="mx-auto mt-3">Stock Laptop Gaming AZURE GAMING 13 Maret 2210</div>
<br>

<form class="form-inline my-2 my-lg-0 bg-warning"  action="remidi.php" method="post">
    <select  name="filter" class="mr-2 ml-2 mb-2 mt-2">
            <option value="" class="mr-2 ml-2">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter" class="btn-primary">
      
    </form>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">MERK</th>
      <th scope="col">JENIS</th>
      <th scope="col">STOCK</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($games as $key => $value): ?>
  <tbody>
    <tr>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
      <td>Rp. <?php echo number_format($value[3]); ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[3]*$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Rp. <?php echo number_format($grand_total); ?></th>
    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>