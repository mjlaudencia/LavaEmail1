<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../public/vendors/feather/feather.css">
  <link rel="stylesheet" href="../public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container-scroller {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .auth-form-light {
      background-color: #ffffff;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h4, h6 {
      color: #333333;
    }

    .form-group {
      margin-bottom: 25px;
    }

    input.form-control {
      border: 1px solid #ced4da;
      border-radius: 5px;
      padding: 15px;
      width: 100%;
      box-sizing: border-box;
    }

    .btn-primary {
      background-color: #4CAF50;
      color: #ffffff;
      border-radius: 5px;
      padding: 15px 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #45a049;
    }

    .mt-4 {
      margin-top: 20px;
    }

    .text-center {
      text-align: center;
    }

    .text-primary {
      color: #4CAF50;
    }
  </style>
  <!-- endinject -->
  <link rel="shortcut icon" href="../public/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="auth-form-light">
      <h4>Welcome</h4>
      <h6>Sign in to continue.</h6>
      <?php $LAVA =& lava_instance(); ?>
      <?php echo $LAVA->form_validation->errors(); ?>    
      <?php if (isset($error_message)) { ?>
        <div class="alert alert-danger"><?= $error_message; ?></div>
      <?php } ?>
      <?php if (isset($success_message)) { ?>
        <div class="alert alert-success"><?= $success_message; ?></div>
      <?php } ?>
      <form action="<?= site_url('validate_login'); ?> " method="post">
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="mt-4">
          <input type="submit" value="Login" class="btn btn-primary" />
        </div>
        <div class="text-center mt-4 font-weight-light">
          Don't have an account? <a href="register" class="text-primary">Create</a>
        </div>
      </form>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../public/js/off-canvas.js"></script>
  <script src="../public/js/hoverable-collapse.js"></script>
  <script src="../public/js/template.js"></script>
  <script src="../public/js/settings.js"></script>
  <script src="../public/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
