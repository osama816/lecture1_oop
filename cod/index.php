<?php
class product
{
    public $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    public $tax;
    function get_name()
    {
        echo  $this->name;
    }
    function price_after_discount($discount)
    {
        $discount_num =(($this->price * $discount) / 100);
        echo $this->price - $discount_num;
    }
    function get_final_price($discount)
    {
        $discount_num =(($this->price * $discount) / 100);
        echo $this->price -  $discount_num + $this->tax;;
    }
}

$product1 = new product();
$product1->name = "phone";
$product1->price = 100;
$product1->brand = "iphone 15";
$product1->image = "image path";
$product1->description = "iphone 15 pro max";
$product1->tax = 10;


$product2 = new product();
$product2->name = "phone";
$product2->price = 200;
$product2->brand = "iphone 14";
$product2->image = "image path";
$product2->description = "iphone 14 pro max";
$product2->tax = 10;


$product3 = new product();
$product3->name = "phone";
$product3->price = 300;
$product3->brand = "iphone 13";
$product3->image = "image path";
$product3->description = "iphone 13 pro max";
$product3->tax = 10;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>price</th>
                            <th>brand</th>
                            <th>price_after_discount</th>
                            <th>get_final_price</th>
                            <th>description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $product1->get_name() ?></td>
                            <td><?= $product1->price ?></td>
                            <td><?= $product1->brand ?></td>
                            <td><?= $product1->price_after_discount(10) ?></td>
                            <td><?= $product1->get_final_price(10) ?></td>
                            <td><?= $product1->description ?></td>
                        </tr>
                        <tr>
                            <td><?= $product2->get_name() ?></td>
                            <td><?= $product2->price ?></td>
                            <td><?= $product2->brand ?></td>
                            <td><?= $product2->price_after_discount(10) ?></td>
                            <td><?= $product2->get_final_price(10) ?></td>
                            <td><?= $product2->description ?></td>
                        </tr>
                        <tr>
                            <td><?= $product3->get_name() ?></td>
                            <td><?= $product3->price ?></td>
                            <td><?= $product3->brand ?></td>
                            <td><?= $product3->price_after_discount(10) ?></td>
                            <td><?= $product3->get_final_price(10) ?></td>
                            <td><?= $product3->description ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>