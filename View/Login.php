<?php
declare(strict_types=1);
require 'includes/Header.php';
?>

<style>

    }
</style>

    <div class="container" id="login">
        <form method="post">
            <div class="form-group">
                <label for="firstname">Your first name here</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" >
            </div>
            <div class="form-group">
                <label for="lastname">Your last name here</label>
                <input type="text" class="form-control" id="lastname" name="lastname"placeholder="Lastname">
            </div>
            <button type="submit" class="btn btn-warning">Log in</button>
        </form>
</div>

<?php
require 'includes/Footer_login.php';
?>


