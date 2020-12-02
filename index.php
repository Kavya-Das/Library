<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>Library</h1>
    <table class="table">
        <tr>
            <td>Book Name:</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Author:</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Distributor:</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Category:</td>
            <td><input type="radio" class="form-control" name="Category">History</td>
            <td><input type="radio" class="form-control" name="Category">Stories</td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn-info">Search</button></td>
        </tr>
    </table>
</body>
</html>