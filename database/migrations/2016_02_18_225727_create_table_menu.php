<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->string('img');
            $table->integer('cat_id');
            $table->integer('subcat_id');
        });

        DB::table('menu')->insert(array(
            array('type' => 'cat', 'title' => '2 For 20', 'img'=>'2420.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Better for You', 'img'=>'better4u.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Beverages', 'img'=>'beverages.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Handcrafted Burgers', 'img'=>'handcraftedHamburger.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Desserts', 'img'=>'desserts.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Main Entrees', 'img'=>'entrees.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Lunch Combos', 'img'=>'LunchCombos.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Fresh Salads', 'img'=>'salads.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Pub Diet', 'img'=>'pubDiet.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'New Handhelds', 'img'=>'handHeld.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'Kids', 'img'=>'kids.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'cat', 'title' => 'New Apps & Bar Snacks', 'img'=>'apps.jpg', 'cat_id'=>'', 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Appetizers', 'img'=>'apps.jpg', 'cat_id'=>1, 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Entrees', 'img'=>'chicken_penne.jpg', 'cat_id'=>1, 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Alcohol', 'img'=>'wine_toast.jpg', 'cat_id'=>3, 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Refreshments', 'img'=>'Beers.jpg', 'cat_id'=>3, 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Steaks', 'img'=>'steak.jpg', 'cat_id'=>6, 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Ribs', 'img'=>'riblets.jpg', 'cat_id'=>6, 'subcat_id'=>''),
            array('type' => 'subcat', 'title' => 'Chicken', 'img'=>'brewhouse_chicken.jpg', 'cat_id'=>6, 'subcat_id'=>''),
            array ('type' => 'item', 'title' => 'Mozzarella Sticks', 'img' => 'mozzeralla_sticks.jpg', 'cat_id' => '1', 'subcat_id' => '13'),
            array ('type' => 'item', 'title' => 'Onion Rings', 'img' => 'onion_rings.jpg', 'cat_id' => '1', 'subcat_id' => '13'),
            array ('type' => 'item', 'title' => 'Two Side Salads', 'img' => 'caesar_salad.jpg', 'cat_id' => '1', 'subcat_id' => '13'),
            array ('type' => 'item', 'title' => 'Three-Cheese Chicken Penne', 'img' => 'chicken_penne.jpg', 'cat_id' => '1', 'subcat_id' => '14'),
            array ('type' => 'item', 'title' => 'Chicken Tenders Basket', 'img' => 'chicken_tend.jpg', 'cat_id' => '1', 'subcat_id' => '14'),
            array ('type' => 'item', 'title' => 'The American Standard', 'img' => 'allinburger.jpg', 'cat_id' => '1', 'subcat_id' => '14'),
            array('type' => 'item', 'title' => 'Smarter Choice', 'img'=>'bourbon_chicken.jpg', 'cat_id'=>2, 'subcat_id'=>''),
            array('type' => 'item', 'title' => 'Hot Shot Whiskey Chicken', 'img'=>'bourbon_chicken.jpg', 'cat_id'=>2, 'subcat_id'=>''),
            array('type' => 'item', 'title' => 'Savory Cedar Salmon', 'img'=>'salmon.jpg', 'cat_id'=>2, 'subcat_id'=>''),
            array('type' => 'item', 'title' => 'Shrimp Wonton Stir-Fry', 'img'=>'shrimpWonton.jpg', 'cat_id'=>2, 'subcat_id'=>''),
            array('type' => 'item', 'title' => 'Beers', 'img'=>'Beers.jpg', 'cat_id'=>3, 'subcat_id'=>'15'),
            array('type' => 'item', 'title' => 'Wines', 'img'=>'wines.jpg', 'cat_id'=>3, 'subcat_id'=>'15'),
            array('type' => 'item', 'title' => 'Tea', 'img'=>'tea.jpg', 'cat_id'=>3, 'subcat_id'=>'15'),
            array ('type' => 'item', 'title' => 'Lemon', 'img' => 'lemonades.jpg', 'cat_id' => '3', 'subcat_id' => '16'),
            array ('type' => 'item', 'title' => 'Limeaid', 'img' => 'limeades.jpg', 'cat_id' => '3', 'subcat_id' => '16'),
            array ('type' => 'item', 'title' => 'Mushroom Swiss', 'img' => 'burger_mushroomswiss.jpg', 'cat_id' => '4', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'The American Standard', 'img' => 'burger_american.jpg', 'cat_id' => '4', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Triple Bacon Burger', 'img' => 'burger_triplebacon.jpg', 'cat_id' => '4', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Triple Chocolate Meltdown', 'img' => 'triple_choc.jpg', 'cat_id' => '5', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Butter Pecan Blondie', 'img' => 'maple_blondie.jpg', 'cat_id' => '5', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Apple Chimi-Cheesecake', 'img' => 'apple_cheesecake.jpg', 'cat_id' => '5', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => '7oz Grilled Onion Sirloin with Stout Gravy', 'img' => 'grilled_onion_sirloin.jpg', 'cat_id' => '6', 'subcat_id' => '17'),
            array ('type' => 'item', 'title' => '9oz House Sirloin', 'img' => 'sirloin.jpg', 'cat_id' => '6', 'subcat_id' => '17'),
            array ('type' => 'item', 'title' => 'Pepper-Crusted Sirloin & Whole Grains', 'img' => 'pepper_sirloin.jpg', 'cat_id' => '6', 'subcat_id' => '17'),
            array ('type' => 'item', 'title' => 'Applebees Riblets', 'img' => 'riblets.jpg', 'cat_id' => '6', 'subcat_id' => '18'),
            array ('type' => 'item', 'title' => 'Double-Glazed Baby Back Ribs', 'img' => 'ribs.jpg', 'cat_id' => '6', 'subcat_id' => '18'),
            array ('type' => 'item', 'title' => 'Crispy Chicken Brewhouse', 'img' => 'brewhouse_chicken.jpg', 'cat_id' => '6', 'subcat_id' => '19'),
            array ('type' => 'item', 'title' => 'Burbon Street Chicken & Shrimp', 'img' => 'bourbon_chicken.jpg', 'cat_id' => '6', 'subcat_id' => '19'),
            array ('type' => 'item', 'title' => 'Chicken Tenders Platter', 'img' => 'chicken_tenders.jpg', 'cat_id' => '6', 'subcat_id' => '19'),
            array ('type' => 'item', 'title' => 'Tomato Basil-Soup', 'img' => 'salmon.jpg', 'cat_id' => '7', 'subcat_id' => ''),
            array ('type' =>  'item', 'title' => 'House Salad', 'img' => 'oriental_salad.jpg', 'cat_id' => '7', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Shrimp-Scampi', 'img' => 'shrimp.jpg', 'cat_id' => '7', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Thai Shrimp', 'img' => 'ThaiShrimp.jpg', 'cat_id' => '8', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Fiesta-Chicken', 'img'=> 'FiestaChicken.jpg', 'cat_id' => '8', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Ceasar Salad', 'img' => 'ChickenCeasar.jpg', 'cat_id' => '8', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Shrimp-Wonton', 'img' => 'ShrimpWonton.jpg', 'cat_id' => '9', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Sirloin-Stout', 'img' => 'SirloinStout.jpg', 'cat_id' => '9', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Cedar Grilled Lemon Chicken', 'img' => 'CedarChicken.jpg', 'cat_id' => '9', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Triple-Hog-Dare', 'img' => 'triple_hog_dare_ya.jpg', 'cat_id' => '10', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Kickin Turkey Stacker', 'img' => 'turkey_stacker.jpg', 'cat_id' => '10', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'American BLT', 'img' => 'blt.jpg', 'cat_id' => '10', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Kid1', 'img' => 'smores.jpg', 'cat_id' => '11', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Kid2', 'img' => 'pepper_crusted_sirloin.jpg', 'cat_id' => '11', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Kid3', 'img' => 'lemon_chicken.jpg', 'cat_id' => '11', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Shrimp', 'img' => 'lemon_chicken.jpg', 'cat_id' => '12', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Meatballs', 'img' => 'lemon_chicken.jpg', 'cat_id' => '12', 'subcat_id' => ''),
            array ('type' => 'item', 'title' => 'Smores', 'img' => 'smores.jpg', 'cat_id' => '12', 'subcat_id' => '')
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::drop('menu');
    }
}
