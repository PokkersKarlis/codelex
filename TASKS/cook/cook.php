<?php

require_once 'RecipeCollection.php';
require_once 'Product.php';
require_once 'Recipe.php';

$recipes = new RecipeCollection();

$recipes->setRecipes([
    new Recipe('Salad', 'cucumber', 'tomato', 'cream', 'egg'),
    new Recipe('Soup', 'potato', 'tomato', 'cream', 'meat'),
    new Recipe('Vegetable plate', 'cucumber', 'tomato', 'carrot')
]);


$chooseProducts = new Product();

$productCount = readline('How much products do you have: ');
while ($productCount != 0) {
    $product = readline("Input product: ");
    $chooseProducts->addProduct($product);
    $productCount--;
}
foreach ($recipes->possibleRecipes($chooseProducts) as $recipe) {
    echo 'You can make : ' . $recipe->getName() . ' but you have missing products -> ';
    foreach ($recipe->getProducts() as $product) {
        if (!in_array($product, $chooseProducts->getProduct())) {
            echo $product . ', ';
        }
    }
    echo PHP_EOL;
}
