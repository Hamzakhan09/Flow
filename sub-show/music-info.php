
<!DOCTYPE html>
<html lang="en">

<head>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/file.php' ?>

      <style>
          .container1{
              border: 1px solid black;
              padding: 10px;
              margin: 50px;
          }
      </style>
</head>

<body>

      <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/nav.php' ?>

    <!--Include Dynamic breadcrumbs--->
      <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(dist/img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
           <h1>Song Name</h1>
            <!-- <h2>Login</h2> -->
        </div>
    </section>

    <div class="container1">
    <div class="row">
     <div class="col-md-4">
     <div class="photo">
     <img src=""  alt="Music Thumbnail" style="object-fit: cover;" />
       <div class="music-info text-center">
        <h4>Singer Name</h4>
        <h5>Music Release</h5>
        <p>Music Language</p>
       </div>
     </div>
     </div>
     
     
     <div class="col-md-8">
     <div class="song-play-area mt-5" data-aos="fade-bottom">
                            <audio preload="auto" controls>
                                <source src="./dist/audio/cheez-badi-hai.mp3">
                            </audio>
                        </div>
     </div>

    </div>
    </div>








      <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/footer.php';
      include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/scripts_file.php'
      ?>
</body>

</html>