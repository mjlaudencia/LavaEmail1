<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gmail Account Verification</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include Bootstrap JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container-scroller {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
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

    h2 {
      color: #333333;
    }

    .form-group {
      margin-bottom: 20px;
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
</head>
<body>
  <div class="container-scroller">
    <div class="auth-form-light">
      <h2 class="mb-4">Email Verification</h2>
      <?php $LAVA =& lava_instance(); ?>
      <?php echo $LAVA->form_validation->errors(); ?>    
      <?php if (isset($success_message)) { ?>
        <div class="alert alert-success"><?php echo $success_message; ?></div>
      <?php } ?>
      <?php if (isset($error_message)) { ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
      <?php } ?>
      <form action="<?= site_url('check'); ?>" method="post">
        <div class="form-group">
          <label for="to">Verification code</label>
          <input type="text" class="form-control" id="to" name="verify" placeholder="Enter verification code" required>
          <input type="hidden" name="email" value="<?= $email ?>">
        </div>
        <div class="mt-3">
          <input type="submit" value="Submit" class="btn btn-primary btn-block" />
        </div>
      </form>
    </div>
  </div>
</body>
</html>
