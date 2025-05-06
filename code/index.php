<?php
class product
{
    public $name;
    public $price;
    private $image;
    public $description;
   
     function __construct($name,$price,$description) {
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
    }
    function upload_image($image)
    {
          $this->image=$image;
    }
    function calc_price($discount)
    {
        $discount_num =(($this->price * $discount) / 100);
        return $this->price - $discount_num ;
    }
}




class book extends product {
   private array $publishers;
   public $writer;
   public $color;
   public $supplier;
    function __construct($name,$price,$description,$writer,$color,$supplier) {
    parent::__construct($name,$price,$description);
    $this->writer=$writer;
    $this->color=$color;
    $this->supplier=$supplier;
   }
   function set_publisher($publishers)  {
    $this->publishers[] = $publishers;
   }
   function choose_publisher()  {
    return $this->publishers[rand(0,count($this->publishers)-1)]."<br>";
   }
    
   function show_all_publishers()  {
      echo "<ul> ";
    foreach ($this->publishers as $publisher) {
       echo "<li>". $publisher ."</li> ";
    }
    echo "</ul>";
   }
}







class Babycar extends product {
   private array $materials;
   public $age;
   public $weigth;
   private $special_tax;
    function __construct($name,$price,$description,$age,$weigth,$special_tax) {
    parent::__construct($name,$price,$description);
    $this->age=$age;
    $this->weigth=$weigth;
    $this->special_tax=$special_tax;
   }
   function set_materials($materials)  {
    $this->materials[]=$materials;
   }

   function display_materials()  {
      echo "<ul> ";
    foreach ($this->materials as  $material) {
       echo "<li>". $material ."</li>";
    }
    echo "</ul> ";
   }
   function get_final_price($discount)  {
   $price= parent::calc_price($discount);
    return $price+$this->special_tax;
   }
}


class gift extends product{
   
}









$product1 = new product("phone",100,"iphone 15 pro max");
echo " price is :". $product1->calc_price(10)."<br>";
$product1->upload_image("image path");
var_dump($product1);

echo "<hr>";

$book1 = new book("book1",200,"NEW BOOK","osama","blue","eraa soft");
$book1->set_publisher("publisher1");
$book1->set_publisher("publisher2");
$book1->set_publisher("publisher3");
echo "choose_publisher :    ". $book1->choose_publisher();
$book1->show_all_publishers();
var_dump($book1);

echo "<hr>";


$Babycar1 = new Babycar("Babycar1",200,"NEW babycar",23,120,20);
$Babycar1->set_materials("materials1");
$Babycar1->set_materials("materials2");
$Babycar1->set_materials("materials3");
 $Babycar1->display_materials();
echo "final_price :". $Babycar1->get_final_price(10) .'<br>';
var_dump($Babycar1);


