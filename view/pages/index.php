<?php $title = 'Home POOTour' ?>
<?php ob_start() ?>

<section class="bg-gray mt-5 galery">
    <div class="container">
    <h2 class="text-center">Le top destination</h2>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <?php require('view/components/title.php')?>  
</div>
</section>

<?php $content = ob_get_clean() ?>
<?php require('view/layout/default.php') ?>