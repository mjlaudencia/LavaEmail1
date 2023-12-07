<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form with File Attachment</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #56a366, #39933d); /* Gradient Background - Shades of Green */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff; /* Text Color */
        }

        .container {
            margin-top: 50px;
        }

        .box {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent White Background */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 20px #888888;
        }

        .box h2 {
            color: #28a745; /* Bootstrap Success Green */
        }

        .form-group label {
            color: #333; /* Dark Gray */
        }

        .form-control {
            border: 1px solid #28a745; /* Bootstrap Success Green */
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent White Background */
            color: #333; /* Dark Gray Text Color */
        }

        .form-control:focus {
            border-color: #218838; /* Darker Green on Focus */
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); /* Focus Shadow */
        }

        .btn-primary {
            background-color: #28a745; /* Bootstrap Success Green */
            border: 1px solid #28a745; /* Bootstrap Success Green */
        }

        .btn-primary:hover {
            background-color: #218838; /* Darker Green on Hover */
            border: 1px solid #218838; /* Darker Green on Hover */
        }

        .alert {
            margin-top: 20px;
        }

        .btn-signout:hover {
            background-color: #c82333; /* Darker Red on Hover */
            border: 1px solid #c82333; /* Darker Red on Hover */
        }

        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="box">
                    <h2 class="mb-4 text-center">Send Email</h2>
                    <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>    
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <?php if (isset($success_message)) { ?>
                        <div class="alert alert-success"><?php echo $success_message; ?></div>
                    <?php } ?>
                    <form action="<?= site_url('email'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="to">To:</label>
                            <input type="email" class="form-control" id="to" name="to" required>
                        </div>
                        <div class="form-group">
                            <label for="from">From:</label>
                            <input type="email" class="form-control" id="from" name="from" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment:</label>
                            <input type="file" class="form-control-file" id="attachment" name="attachment">
                        </div>
                        <div class="mt-3 submit">
                            <input type="submit" value="Submit" class="btn btn-primary" name="submit" />
                        </div>

                    <div class="mt-3 text-center">
                        <a href="<?= site_url('login'); ?>" class="btn btn-signout">Sign Out</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
