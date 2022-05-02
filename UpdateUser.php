<?php
  session_start();
  if (!isset($_SESSION["authenticated"])) {
    echo "<script> location.href='LoginPage.php'; </script>";
  }
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <title>Update User</title>
    <?php include 'styles.html'; ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <?php include 'navbar.php'; ?>
        <div class="main">
            <section class="module bg-dark-60 contact-page-header bg-dark" data-background="registerImg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Update User</h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div>
                            <h4 class="font-alt">Update User</h4>
                            <hr class="divider-w mb-10">
                            <form class="form" method="POST" action="UpdateUser.php">
                                <?php
                                ini_set('display_errors', 1);
                                ini_set('display_startup_errors', 1);
                                error_reporting(E_ALL);
                                $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
                                if (mysqli_connect_errno()) {
                                    echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
                                } else {
                                    $query = "SELECT * FROM userInfo WHERE userID = ?;";
                                    $stmt = $db->prepare($query);
                                    $stmt->bind_param("i", $_SESSION['user']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $row = $result->fetch_assoc();
                                    echo '<div class="form-group">
                                            <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email" value="' . $row['email'] . '" required />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="username" type="text" name="username" placeholder="Username" value="' . $row['username'] . '" required />
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-round btn-b">Update</button>
                                        </div>';

                                    $stmt->close();
                                    $db->close();
                                }
                                ?>
                            </form>
                            <?php
                            function updateUser()
                            {
                                $db = new mysqli('127.0.0.1', 'root', null, 'lessons');
                                if (mysqli_connect_errno()) {
                                    echo '<p>Error: Could not connect to database.<br/>Please try again later.</p>';
                                } else {
                                    $query = "UPDATE userInfo SET email = ?, username = ? WHERE userID = ?;";
                                    $stmt = $db->prepare($query);
                                    $stmt->bind_param("ssi", $_POST['email'], $_POST['username'], $_SESSION['user']);

                                    try {
                                        $stmt->execute();
                                        echo "<script> location.href='UpdateUser.php'; </script>";
                                    } catch (mysqli_sql_exception $e) {
                                        if ($e->getCode() == 1062) {
                                            echo '<p>Error: username already exists.</p>';
                                        }
                                    } finally {
                                        $stmt->close();
                                        $db->close();
                                    }
                                }
                            }
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                updateUser();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'footer.html'; ?>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
</body>
<?php include 'mainScripts.html'; ?>

</html>
