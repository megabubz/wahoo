<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- My Style Sheet --> 
        <link href="MainStyle.css" rel="stylesheet" type="text/css"/>
        <title>HTTP POST</title>
</head>

<body class="bg text-center">     
    <div class="bg-1 container text-center">
        
    <h3 class="margin">Hi it's Aman! Tell me about you!</h3><br>

        <form action="" method="POST">
            Username: <input class="form-control" type="text"   name="username" placeholder="username" autofocus="true" required />
            Email: <input class="form-control" type="email"   name="email" placeholder="email" required />
            Date of Birth: <input class="form-control" type="date"   name="birthdate" required />
            Country: <input class="form-control" type="text"   name="country" placeholder="country" required />
            <input class="form-control" type="submit" value="Submit" />
        </form>
    
    </div>
    <div class="bg-2 container">
        <?php
        if (!empty($_POST)) {
            echo "<h3>Welcome $_POST[username]</h3>"; 
            echo "<h3>Your EEEEEEMMMMMAAAAIIIILLLLLLLLL is $_POST[email]</h3>";
            echo "<h3>Your DDDAAATTTTEEEE OFFFF BIIIRRRTHHHH is $_POST[birthdate]</h3>";
            echo "<h3>You live in $_POST[country]</h3>";
        }
        else{
        echo "<h4>You have not submitted any data to the server</h4>";
        }
        ?>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>
