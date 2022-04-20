<?php
include $_SERVER['DOCUMENT_ROOT'] . '/flow/helpers/database.php';

$db = new Database();
if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $db->select('users', '*', "user_id = $id");
  $data = mysqli_fetch_assoc($db->res);

} else {
  header('location:./');
}
if (isset($_POST['submit'])) {
  $name = '"'.$_POST['name'].'"';
  $email = '"'.$_POST['email'].'"';
  $password = '"'.$_POST['password'].'"';
  $db->update('users', ['user_name' => $name, 'user_email' => $email, 'user_password' => $password], "user_id = $id");
  if ($db->res) {
    header('location:./index.php');
  }
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/admin/components/headtag.php' ?>
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/admin/components/navbar.php' ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/admin/components/sidebar.php' ?>

  <div class="page-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/admin/components/breadcrumb.php' ?>
    <div class="container-fluid py-0">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-5">
              <form method="POST">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control"  id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="<?php echo $data['user_name'] ?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"  value="<?php echo $data['user_email'] ?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password"  value="<?php echo $data['user_password'] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- footer -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/flow/admin/components/footer.php' ?>
  <script>
    $('ol.breadcrumb').append('<li class="breadcrumb-item">Edit</li>')
  </script>
</body>

</html>