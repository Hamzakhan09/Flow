<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include $_SERVER['DOCUMENT_ROOT'] . '/flow/helpers/database.php';
$db = new Database();

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $db->selectJoin('albums','music', 'albums.*, music.*', "albums.album_id = music.music_album", "album_id = $id");
  $album = mysqli_fetch_assoc($db->res);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../components/file.php';
  ?>
  <style>
    .bg-img {
      background-image: url("<?php echo 'data:image/jpg;charset=utf8;base64,' . base64_encode($album['album_thumbnail']) ?>");
    }
    .music-list-wrapper {
      width: 150%;
    }
  </style>
</head>

<body>
  <?php
  include '../components/nav.php';
  ?>

  <!-- ##### Breadcumb Area Start ##### -->

  <section class="breadcumb-area bg-img bg-overlay">
    <div class="bradcumbContent">
      <h2><?php echo $album['album_title'] ?></h2>
    </div>
  </section>

 

  <?php
  include '../components/footer.php';
  include  '../components/scripts_file.php';
  ?>
</body>

</html>