<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include $_SERVER['DOCUMENT_ROOT'] . '/flow/helpers/database.php';

$db = new Database();
if (isset($_POST['submit'])) {
    $data['user_name'] = $_POST['name'];
    $data['user_email'] = $_POST['email'];
    $data['user_password'] = $_POST['password'];
    $db->select('users', 'user_email', '`user_email` = "' . $data['user_email'] . '"');
    if (mysqli_num_rows($db->res) > 0) {
        header("Location:signup.php?error=Email is already taken!");
    } else {
        $db->insert('users', $data);
        if ($db->res) {
            $db->select('users', '*', '`user_email` = "' . $data['user_email'] . '"');
            $user = mysqli_fetch_assoc($db->res);
            header('location:login.php');
        }
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'components/file.php';
    ?>
    <style>
        .disabled {
            opacity: 0.3
        }

        .disabled:hover {
            background-color: transparent;
            color: black;
        }

        .error {
            color: red;
            margin-top: 2px ;
        }
    </style>
</head>

<body>
    <?php
    include 'components/nav.php';
    ?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(dist/img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>Hi There!</p>
            <h2>Create an account</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" 
                                    pattern="[a-zA-Z][a-zA-Z ]{2,}" 
                                    title="Invalid characters in Name field" 
                                    maxlength="50" required>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" required>
                                    <?php if (isset($_GET['error'])) { 
                                        echo '<span class="error">'.$_GET["error"] .'</span>';
                                    }?>
                                      <!-- <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="pass1" type="password" class="form-control" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="passwordConfirm">Confirm Password</label>
                                    <input id="pass2" type="password" class="form-control" name="passwordConfirm">
                                    <span id="passMessage" class="fs-6 text-danger" hidden>Password don't match</span>
                                </div>

                                <button id="submit" type="submit" class="oneMusic-btn mt-30 disabled" name="submit" disabled>Sign up</button>
                                <div class="mt-2">
                                    <p> Already have an account? <a href="login.php">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <?php
    include 'components/footer.php';
    include 'components/scripts_file.php';
    ?>
    <script>
        $(document).ready(function() {
            $("#pass2").on('keyup', function() {
                $("#submit").addClass('disabled');
                let passMatch = $("#pass1").val() === $("#pass2").val();
                $("#passMessage").prop('hidden', passMatch);
                $("#submit").prop('disabled', !passMatch);
                if (passMatch) $("#submit").removeClass('disabled');
            })
        })
    </script>
</body>

</html>