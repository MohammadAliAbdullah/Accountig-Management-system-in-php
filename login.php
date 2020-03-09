<?php
session_start();
include_once 'database.php';

if (isset($_POST['login_user'])) {
  $username =  $_POST['username'];
  $password =  $_POST['password'];

  $username = strip_tags(mysqli_real_escape_string($conn, trim($username)));
  $password = strip_tags(mysqli_real_escape_string($conn, trim($password)));
  $query = "SELECT * FROM `sm_hr_emp`, `org_info` WHERE user_name='" . $username . "'";
  $selectQueryResult = mysqli_query($conn, $query);
  if (mysqli_num_rows($selectQueryResult) > 0) {
    $row = mysqli_fetch_array($selectQueryResult);
    // ======== sm_hr_emp =========
    $password_hash = $row['password'];
    $emp_no = $row['emp_no'];
    $office_code = $row['emp_no'];
    $office_code = $row['office_code'];
    // ======== org_info ========
    $org_no = $row['org_no'];
    $org_name = $row['org_name'];
    $org_addr1 = $row['org_addr1'];
    $org_email = $row['org_email'];
    $org_website = $row['org_website'];
    $org_tel = $row['org_tel'];
    $org_logo = $row['org_logo'];
    $org_fin_month = $row['org_fin_month'];
    $org_budget_year = $row['org_fin_year_st'];
    $org_budget_year = $row['org_budget_year'];
    $org_eod_bod_proceorg_date = $row['org_eod_bod_proceorg_date'];
    $org_eod_bod_flag = $row['org_eod_bod_flag'];


    // if (password_verify($password, $password_hash) || $org_eod_bod_flag==0) {
    if (password_verify($password, $password_hash)) {
      // ======== sm_hr_emp =========
      $_SESSION["username"] = $username;
      $_SESSION["emp_no"] = $emp_no;
      $_SESSION["office_code"] = $office_code;
      // ======== org_info ========
      $_SESSION["org_no"] = $org_no;
      $_SESSION["org_name"] = $org_name;
      $_SESSION["org_addr1"] = $org_addr1;
      $_SESSION["org_email"] = $org_email;
      $_SESSION["org_website"] = $org_website;
      $_SESSION["org_tel"] = $org_tel;
      $_SESSION["org_logo"] = $org_logo;
      $_SESSION["org_fin_month"] = $org_fin_month;
      $_SESSION["org_fin_year_st"] = $org_budget_year;
      $_SESSION["org_budget_year"] = $org_budget_year;

      $_SESSION["org_eod_bod_flag"] = $org_eod_bod_flag;
      if ($org_eod_bod_flag == 0) {
        $_SESSION["org_eod_bod_proceorg_date"] = $org_eod_bod_proceorg_date;
        $_SESSION["org_eod_bod_flag"] = $org_eod_bod_flag + 1;
      }
      if ($org_eod_bod_flag == 1) {
        header("Location: index/index.php");
      } else {
        header("Location:date_check.php");
      }


      // $mg = "login successfully";
    } else {
      $mg = "login failled";
    }
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
      <h1>Welcome To Accounting Soft</h1>
    </div>
    <div class="login-box">
      <form class="login-form" method="POST">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
        <div class="form-group">
          <label class="control-label">USERNAME</label>
          <input class="form-control" type="text" placeholder="User Name" autofocus name="username">
        </div>
        <div class="form-group">
          <label class="control-label">PASSWORD</label>
          <input class="form-control" type="password" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="animated-checkbox">
              <label>
                <input type="checkbox"><span class="label-text">Stay Signed in</span>
              </label>
            </div>
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
          </div>
        </div>
        <div class="form-group btn-container">
          <input type="submit" class="btn btn-primary btn-block" value="SIGN IN" name="login_user">
        </div>
      </form>
      <form class="forget-form" action="index.html">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
        <div class="form-group">
          <label class="control-label">EMAIL</label>
          <input class="form-control" type="text" placeholder="Email">
        </div>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
        </div>
        <div class="form-group mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
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