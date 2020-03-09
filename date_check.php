<?php
session_start();
include_once 'database.php';
        $proceorg_date = $_SESSION["org_eod_bod_proceorg_date"];
        $next_proceorg_date = date('Y-m-d', strtotime($proceorg_date . ' +1 day'));
        $org_no = $_SESSION['org_no'];
       
if (isset($_POST['start_date'])) {
    // org_eod_bod_proceorg_date
    $updateQuery = "update `org_info` set `org_eod_bod_flag`='1', `org_eod_bod_proceorg_date`='$next_proceorg_date' where org_no='$org_no'";
    // echo $updateQuery;
    // exit;
    $conn->query($updateQuery);
    if ($conn->affected_rows == 1) {

        header("Location: index/index.php");
    } else {
        header("Location:date_check.php");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Accounting SOft</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <!-- <h2>Dear User Please Check Date!!</h2> -->
        </div>
        <div class="login-box">
            <form class="login-form" method="POST">
                <h4 class="login-head">Last Transcation Date: <br><?php echo $_SESSION['org_eod_bod_proceorg_date']; ?></h4>
                <div class="form-group">
                    <label class="control-label"></label>
                    <input class="form-control" type="hidden" placeholder="" autofocus name="username">
                </div>
                <div class="form-group">
                    <h4>Please Start With New Day</h4>
                    <!-- <label class="control-label">Please Start With New Day</label> -->
                    <input class="form-control" type="date" value="<?php echo  $next_proceorg_date; ?>" placeholder="" autofocus name="date" readonly>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <input type="submit" class="btn btn-primary btn-block" value="START" name="start_date">
                    </div>
                    <div class="col-6">
                        <a href="index/index.php"><input type="button" class="btn btn-danger btn-block" value="CANCEL"></a>
                    </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
</body>

</html>