<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['install'])) {
    // Set the installation status to success
    $installationStatus = "success";

    // Download and extract ZIP file
    $zipFileURL = 'https://kidsop.blob.core.windows.net/zero/kidsop.zip'; // Replace with the actual URL
    $zipFileName = 'zero.zip'; // Replace with the desired local file name

    $zipContents = file_get_contents($zipFileURL);

    if ($zipContents !== false) {
        // File downloaded successfully, now extract the Zip file
        file_put_contents(__DIR__ . '/' . $zipFileName, $zipContents);
        echo "Zip file downloaded successfully\n";

        $zip = new ZipArchive;
        if ($zip->open(__DIR__ . '/' . $zipFileName) === TRUE) {
            $zip->extractTo(__DIR__);
            $zip->close();
            echo "Zip file extracted successfully\n";

            // Delete ZIP file after extraction
            unlink(__DIR__ . '/' . $zipFileName);
            echo "Zip file deleted successfully\n";

            // Redirect to two.php
            header("Location: two.php");
            exit;
        } else {
            echo "Error extracting Zip file\n";
        }
    } else {
        echo "Error downloading Zip file\n";
    }
}
?>
<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['install'])) {
    // Set the installation status to success
    $installationStatus = "success";

    // Download and extract ZIP file
    $zipFileURL = 'https://kidsop.blob.core.windows.net/zero/kidsop.zip'; // Replace with the actual URL
    $zipFileName = 'zero.zip'; // Replace with the desired local file name

    $zipContents = file_get_contents($zipFileURL);

    if ($zipContents !== false) {
        // File downloaded successfully, now extract the Zip file
        file_put_contents(__DIR__ . '/' . $zipFileName, $zipContents);
        echo "Zip file downloaded successfully\n";

        $zip = new ZipArchive;
        if ($zip->open(__DIR__ . '/' . $zipFileName) === TRUE) {
            $zip->extractTo(__DIR__);
            $zip->close();
            echo "Zip file extracted successfully\n";

            // Delete ZIP file after extraction
            unlink(__DIR__ . '/' . $zipFileName);
            echo "Zip file deleted successfully\n";

            // Redirect to two.php
            header("Location: two.php");
            exit;
        } else {
            echo "Error extracting Zip file\n";
        }
    } else {
        echo "Error downloading Zip file\n";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Installation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
            padding: 20px;
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: bold;
            color: #333333;
        }

        .form-control {
            border-color: #333333;
        }

        .btn-primary {
            background-color: #333333;
            border-color: #333333;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #555555;
            border-color: #555555;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="mb-4">Installation by ZERO</h1>
        <?php if ($installationStatus === "success") : ?>
            <div class="alert alert-success" role="alert">
                Installation successful!
            </div>
        <?php endif; ?>
        <form method="post">
            <!-- Your form fields go here -->

            <button type="submit" class="btn btn-primary btn-block" name="install">Install</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("button[name='install']").click(function() {
                $(this).addClass("animated rubberBand");
            });
        });
    </script>
</body>
</html>
￼Enter
