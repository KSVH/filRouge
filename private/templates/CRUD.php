<?php $title = "Le filRouge CRUD Panel"; ?>
<?php ob_start(); ?>
    <h1>CRUD</h1>
    <p>filRougeParagraph</p>
    <div class="container">

        <div class="row">
            <div class="databaseTableUser col-lg-3 modelItem">
                <h1>Users</h1>
                <a href="readUsers">Read</a>
                <a href="createUsers">Create</a>
            </div>
            <div class="databaseTableAdmin col-lg-3 modelItem">
                <h1>Admin</h1>
                <a href="readAdmin">Read</a>
                <a href="createAdmin">Create</a>
            </div>
            <div class="databaseTableProducts col-lg-3 modelItem">
                <h1>Products</h1>
                <a href="readProducts">Read</a>
                <a href="createProducts">Create</a>
            </div>
            <div class="databaseTableCategories col-lg-3 modelItem">
                <h1>Categories</h1>
                <a href="readCategories">Read</a>
                <a href="createCategories">Create</a>
            </div>
        </div>

        <div class="row">
            <div class="databaseTableColors col-lg-3 modelItem">
                <h1>Colors</h1>
                <a href="readColors">Read</a>
                <a href="createColors">Create</a>
            </div>
            <div class="databaseTableSizes col-lg-3 modelItem">
                <h1>Sizes</h1>
                <a href="readSizes">Read</a>
                <a href="createSizes">Create</a>
            </div>
            <div class="databaseTablePhotos col-lg-3 modelItem">
                <h1>Photos</h1>
                <a href="readPhotos">Read</a>
                <a href="createPhotos">Create</a>
            </div>
            <div class="databaseTableDiscounts col-lg-3 modelItem">
                <h1>Discounts</h1>
                <a href="readDiscounts">Read</a>
                <a href="createCiscounts">Create</a>
            </div>
        </div>

        <div class="row">
            <div class="databaseTableColors col-lg-3 modelItem">
                <h1>Colors</h1>
                <a href="readColors">Read</a>
                <a href="createColors">Create</a>
            </div>
            <div class="databaseTableSizes col-lg-3 modelItem">
                <h1>Sizes</h1>
                <a href="readSizes">Read</a>
                <a href="createSizes">Create</a>
            </div>
            <div class="databaseTablePhotos col-lg-3 modelItem">
                <h1>Photos</h1>
                <a href="readPhotos">Read</a>
                <a href="createPhotos">Create</a>
            </div>
            <div class="databaseTableDiscounts col-lg-3 modelItem">
                <h1>Discounts</h1>
                <a href="readDiscounts">Read</a>
                <a href="createDiscounts">Create</a>
            </div>
        </div>

        <div class="row">
            <div class="databaseTableOrders col-lg-3">
                <h1>Orders</h1>
                <a href="readOrders">Read</a>
                <a href="createOrders">Create</a>
            </div>
            <div class="databaseTableDiscountProduct col-lg-3">
                <h1>Discount_P</h1>
                <a href="readDiscountProduct">Read</a>
                <a href="createDiscountProduct">Create</a>
            </div>
            <div class="databaseTableProductColorSize col-lg-3">
                <h1>PCS</h1>
                <a href="readProductColorSize">Read</a>
                <a href="createProductColorSize">Create</a>
            </div>
            <div class="databaseTableRatings col-lg-3">
                <h1>Ratings</h1>
                <a href="readRatings">Read</a>
                <a href="createRatings">Create</a>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean();?>
<?php require('layout.php') ?>  






Catégories : Shampooing / Coiffant / Après shampoing soin et masque capillaire AS soins ;
Sous-catégories : - Shampooing(Cheveux colorés, Cheveux secs, Cheveux normaux à déshydratés, Cheveux gras)
-	Coiffant(Gel, cire cheveux, Brillance)
- Après-shampooing(Cheveux colorés, Cheveux secs, Cheveux normaux à déshydratés, Cheveux gras)
-	Soins(Soin cheveux colorés, soin cheveux secs, soin cheveux fins, soin cheveux longs)
