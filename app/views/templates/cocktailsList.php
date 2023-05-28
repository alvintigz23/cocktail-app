<div class="container">
    <div class="card-list">
        <?php 

        foreach($vars['data'] as $cocktail){
            
        ?>
        <div class="card">
            <div class="top-card">
                <div class="card-image">
                    <img src="<?= $cocktail['strDrinkThumb']?>" alt="<?= $cocktail['strDrink']?>">
                </div>
                <div class="card-details">
                    <span class="detail-subtitle"><?= $cocktail['strAlcoholic']?></span>
                    <h3><?=$cocktail['strDrink']?></h3>
                    <span>Category: <?=$cocktail['strCategory']?></span>
                    <h4>Ingredients</h4>
                    <ul>
                        <?php 
                            $i = 1;
                            while(!empty($cocktail['strIngredient'.$i])){
                                echo '<li>'.$cocktail['strMeasure'.$i] . ' ' .  $cocktail['strIngredient'.$i].'</li>';
                                $i++;
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="bottom-card">
                <div class="ingredients">
                    <p class="instructions">
                        <?=isset($cocktail['strInstructions'.$lang])? $cocktail['strInstructions'.$lang] : $cocktail['strInstructions']?>
                    </p>
                </div>
            </div>
            
        </div>
        <?php 
        }
        ?>
    </div>
</div>