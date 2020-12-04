<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="backcolor">
    <h1 class="textcolor">Library</h1>
    <table class="table">
        <tr>
            <td class="textcolor">Book Name:</td>
            <td><input type="text" id="name"  class="form-control"></td>
        </tr>
        <tr>
            <td class="textcolor">Author:</td>
            <td><input type="text" id="author" class="form-control"></td>
        </tr>
        <tr>
            <td class="textcolor">Distributor:</td>
            <td><input type="text" id="distributor" class="form-control"></td>
        </tr>
        <tr>
            <td class="textcolor">Category:</td>
            <td><input type="radio" id="category" class="textcolor" name="Category">History<input type="radio" id="category" class="textcolor" name="Category">Stories</td>
        </tr>
        <tr>
            <td class="textcolor">Price:</td>
            <td><input type="text" id="price" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button onclick="clickme()" class="btn btn-info">Search</button></td>
        </tr>
    </table>
    <script src="js\myscript.js">

    </script>
</body>
</html>