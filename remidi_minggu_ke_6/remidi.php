<?php

$game = [
  ["TENCENT", "PUBG", 1],
  ["MOONTON","MOBILE LEGEND", 2],
  ["GARENA", "CODM", 3],
  ["GARENA", "FREE FIRE", 4],
  ["TENCENT", "AOV", 5],
  ["TENCENT", "CROS FIRE", 6],
  ["SUPERCELL", "CLASH OF CLANS", 7],
  ["SUPERCELL", "CLASH ROYALE", 8],
  ["MOONTON", "SCS.io", 9]

];

// Membuat Pilihan
$temp_arr=[];

foreach ($game as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$dev_game=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $dev_game=$game;
    }else{
        foreach($game as $key)
        {
            if($key[0] == $filter){
                $dev_game[]=[$key[0],$key[1],$key[2]];
            }
        }
    }
}else{
    $dev_game=$game;
}
// var_dump($dev_game);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center" style="color: red;">DAFTAR GAME</h2>
        <form action="remidi.php" method="post">
            <select name="filter">
                <option value="">
                    Tampilkan Semua
                </option>
                <?php foreach ($pilihan as $key): ?>
                    <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                <?php endforeach; ?>      
              </select>
            <input class="btn btn-primary" type="submit" value="filter">
          </form>
        <table class="table table-secondary mt-2">
      <thead class="thead-light">
        <tr>
          <th scope="col">DEVELOPER</th>
          <th scope="col">GAME</th>
          <th scope="col">PERINGKAT</th>
        </tr>
        </thead>
        <?php $grand_total=0; ?>
        <?php foreach ($dev_game as $key => $value): ?>
        <tbody>
        <tr>
          <td><?php echo $value[0]; ?></td>
          <td><?php echo $value[1]; ?></td>
          <td><?php echo $value[2]; ?></td>
        </tr>
      </tbody>
      <?php $grand_total+=$value[2]; ?>
      <?php endforeach; ?>
      <thead class="thead-light">
        <tr>
          <th scope="col">Total Keseluruhan</th>
          <th scope="col"></th>
          <th scope="col"><?php echo $grand_total; ?></th>
        </tr>
      </thead>
</table>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>