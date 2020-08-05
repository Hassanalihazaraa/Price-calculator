<?php require 'includes/Header.php' ?>

    <section class="container">
    <form method="post">
        <div class="input-group mb-3">
            <select name="productId" class="custom-select">
                <option selected disabled value="">
                    Choose product</option>

            </select>
            <select name="customerId" class="custom-select">
                <option selected disabled value="">
                    Choose customer</option>


            </select>
            <div class="input-group-append">
                <button class="btn btn-outline-info" type="submit">Calculate</button>
            </div>
        </div>
    </form>
    </section>

    <section class="container" id="price">
        Your price is <?php ?>
    </section>

<?php require 'includes/Footer.php' ?>



