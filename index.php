<?php

namespace AlaminFirdows\JSONToMySql;

require_once 'vendor/autoload.php';

use AlaminFirdows\JSONToMySql\Importer;

if ('POST' === $_SERVER['REQUEST_METHOD'] && $data = $_POST) {
    $importer = new Importer($data);
    if ($importer->check()) {
        $importer->import();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON to MySQL</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        margin-top: 20vh;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-control {
        display: block;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-control:hover {
        border-color: #009688;
        box-shadow: 0 0 0 0.2rem rgba(0, 150, 136, 0.25);
    }

    .custom-file-input input[type=file] {
        display: none
    }

    .custom-file-input,
    .custom-file-input label {
        cursor: pointer;
    }

    .button {
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        cursor: pointer;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: background-color .15s ease-in-out;
    }

    .button:hover {
        color: #ffffff;
        background-color: #009688;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="form-group custom-file-input">
                <label for="json_file">
                    <div class="form-control">
                        Select your JSON file
                    </div>
                    <input type="file" name="json_file" id="json_file">
                </label>
            </div>

            <div class="form-group">
                <button type="submit" class="button">Import</button>
            </div>
        </form>
    </div>

</body>

</html>