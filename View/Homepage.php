<?php require 'includes/Header.php' ?>

<section class="container" id="toggle">
    <form method="post">
        <div class="input-group mb-3">
            <select name="productId" class="custom-select">
                <optgroup label="Choose a product">
                    <?php
                    /** @var Product[] $products */
                    foreach ($products as $product) {
                        $id = $product->getId();
                        $name = ucfirst($product->getName());
                        $price = number_format($product->getPrice() / 100, 2);
                        echo "<option value='{$id}'>{$name} = {$price} &euro;</option>";
                    }
                    ?>
                </optgroup>
            </select>
            <select name="customerId" class="custom-select">
                <optgroup label="Choose a customer">
                    <?php
                    /** @var Customer[] $customers */
                    foreach ($customers as $customer) {
                        $id = $customer->getId();
                        $firstName = $customer->getFirstName();
                        $lastName = $customer->getLastName();
                        echo "<option value='{$id}'>{$firstName} {$lastName}</option>";
                    }
                    ?>
                </optgroup>
            </select>
            <div class="input-group-append">
                <button class="btn btn-outline-info" type="submit">Calculate</button>
            </div>
        </div>
    </form>
</section>
<section class="container" id="price">
    </br>
    </br>
    <h1>Your price is <?php ?></h1>
</section>

<?php require 'includes/Footer.php' ?>




