<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Phones</title>
    <style media="screen">
        .w-500 {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Phones</h1>
    <form class="w-500" action="add-phone.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Phone Name</label>
            <input type="text" class="form-control" name="phone[name]" id="title" placeholder="Phone name">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <select name="phone[color]" class="form-control" id="color">
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Blue">Blue</option>
                <option value="Black">Black</option>
                <option value="White">White</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Phone Price</label>
            <input type="number" name="phone[price]" class="form-control" id="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <input type="submit" class="btn btn-dark" value="Add Phone">
    </form>
    <?
    require_once 'bootstrap.php';
    require_once 'functions.php';
    $rep = new FileRepository('storage/database.store');
    ?>
    <ul>
        <? foreach ($rep->getProducts() as $product): ?>
            <li>
                <img src="<?= $product->image ?>" alt="" width="100px">
                <p> <?= $product->name ?>  </p>
                <p> <?= $product->color ?>  </p>
                <p> <?= $product->price ?>  </p>
            </li>
        <? endforeach ?>
    </ul>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
