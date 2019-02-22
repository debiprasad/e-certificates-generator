<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <title>Certificate Generator</title>
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
        </header>
        <main role="main" class="inner cover">
            <h1 class="cover-heading">GDG Bhubaneswar</h1>
            <h2 class="cover-heading">Flutter Study Jam</h2>
            <p>Please enter your name in the input below and click on the download button to download your e-certificate.</p>
            <form action="generate.php" method="POST">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" name="name" required="required">
                </div>
                <input type="submit" class="btn btn-primary mb-2" value="Download">
            </form>
            <?php
            if (isset($_GET['error']) and $_GET['error'] === 'name-not-found') {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 20px;">
                    The name you entered is not found in the list of attendees. Please contact us if that's an error.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
            ?>
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
              <p>Developed by <a href="http://github.com/debiprasad">Debiprasad Sahoo</a>.</p>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>