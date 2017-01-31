<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone-number">Phone number</label>
            <input type="text" class="form-control" id="phone-number" name="phoneNumber">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <input type="submit">
        </div>
    </form>
</div>
<div class="container">
    <?php

    $table = '<table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>';

    if (! empty($_POST)) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : 0;
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $table .= "<tr>
            <td>$name</td>
            <td>$phoneNumber</td>
            <td>$age</td>
            <td>$address</td>
        </tr>";
    }

    $table .= '</tbody></table>';
    echo $table;
    ?>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>