<?php

/**
 * Created by PhpStorm.
 * User: CarlosMoreira
 * Date: 9/25/2016
 * Time: 4:29 PM
 */
class ProductGroup extends ProductComponent
{
    public $groupName;
    /**
     * @var array ProductComponent
     */
    public $productComponents = array();

    /**
     * ProductGroup constructor.
     * @param $groupName
     */
    public function __construct($groupName)
    {
        $this->groupName = $groupName;
    }

    public function add(ProductComponent $item)
    {
        $this->productComponents[] = $item;
    }

    public function displayProductInfo()
    {
        echo "<strong>" . $this->groupName .  "</strong><br>";
        /**
         * $productComponent as ProductComponent
         */
        if(count($this->productComponents) < 1){
            echo " - Empty <br>";
            return;
        }

        foreach ($this->productComponents as $productComponent){
            $productComponent->displayProductInfo();
        }
        echo "\n";
    }
}