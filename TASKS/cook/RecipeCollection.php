<?php

class RecipeCollection
{
    private array $recipes = [];

    /**
     * @param array $recipes
     */
    public function setRecipes(array $recipes): void
    {
        $this->recipes = $recipes;
    }

    /**
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    public function possibleRecipes(Product $product): array
    {
        $recipeBox = [];
        foreach ($this->getRecipes() as $recipe) {
            foreach ($product->getProduct() as $ingredient) {
                if (in_array($ingredient, $recipe->getProducts())) {
                    if (!in_array($recipe, $recipeBox)) {
                        $recipeBox[] = $recipe;
                    }
                }
            }
        }
        return $recipeBox;
    }
}