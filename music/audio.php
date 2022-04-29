<!DOCTYPE html>
<html lang="en">

<head>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/file.php' ?>
</head>

<body>

      <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/nav.php' ?>

      <!-- <div style="height: 330px;"></div>
      <div class="container">
            <div class="form-group d-flex justify-content-center">
                  <input type="text" class="form-control"  id="exampleInputPassword1">
                  <button class="oneMusic-btn mt-30">Search</button>
            </div>


      </div> -->

      <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container">
            <div class="row">
            <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>All Songs</h2>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <img src="../dist/img/bg-img/b1.jpg" alt="">
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="../sub-show/music-info.php" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info text-center">
                            <a href="#">
                                <h5>Garage Band</h5>
                            </a>
                            <p>Radio Station</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </section>




      <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/footer.php';
      include $_SERVER['DOCUMENT_ROOT'] . '/flow/components/scripts_file.php'
      ?>
</body>

</html>