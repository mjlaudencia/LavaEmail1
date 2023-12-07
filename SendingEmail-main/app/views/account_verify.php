<!DOCTYPE html>
<html>
<head>
    <title>Gmail Account Verification</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin-top: 50px;
        }
        .box {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px #888888;
        }
        .submit {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2 class="mb-4 text-center">Email Verification</h2>
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
                <div class="submit">
                    <input type="submit" value="Submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>
