<section class="products">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mb-5 g-4 p-4">

            <?php foreach ($ecommerce as $product) : ?>
                <div class="col">
                    <div class="card bg-warning bg-gradient rounded border-0 h-100">
                        <a href="#">
                            <img src="<?= $product->icon ?>" alt="" width="50" class="p-1">
                        </a>
                        <img src="<?= $product->img_path ?>?random=<?= $product->getId() ?>" alt="" class="card-img-top p-4 rounded-circle">
                        <div class="card-body">
                            <h2><?= $product->getName() ?></h2>
                            <h5><?= $product->price ?>€</h5>
                            <p>Restano ancora <?= $product->stock_quantity ?> pezzi</p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>