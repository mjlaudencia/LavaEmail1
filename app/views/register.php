<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../public/vendors/feather/feather.css">
  <link rel="stylesheet" href="../public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
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
      <h4>New here?</h4>
      <h6>Signing up is easy. It only takes a few steps</h6>
      <?php $LAVA =& lava_instance(); ?>
      <?php echo $LAVA->form_validation->errors(); ?>
      <form action="<?= site_url('validate_reg'); ?> " method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Username" value="" size="50" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" value="" size="50" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" value="" size="50" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="confpassword" placeholder="Confirm Password" value="" size="50" required>
        </div>
        <div class="mt-4">
          <input type="submit" value="Sign Up" class="btn btn-primary" />
        </div>
        <div class="text-center mt-4 font-weight-light">
          Already have an account? <a href="login" class="text-primary">Login</a>
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
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
