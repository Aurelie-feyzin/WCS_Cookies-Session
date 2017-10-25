<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (array_key_exists( 46, $_COOKIE )): ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3> Vous avez <?php echo $_COOKIE[46]; ?> Pecan nuts dans votre panier</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add_to_cart=46" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?delete_to_cart=46" class="btn btn-primary">
                        Delete to cart <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </a>
                     </figcaption>
            </figure>
        </div>
         <?php endif; ?>
        <?php if (array_key_exists( 36, $_COOKIE )): ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3> Vous avez <?php echo $_COOKIE[36]; ?> Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add_to_cart=36" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?delete_to_cart=36" class="btn btn-primary">
                        Delete to cart <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </a>
                </figcaption>
            </figure>
        </div>
        <?php endif; ?>
        <?php if (array_key_exists( 58, $_COOKIE )): ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3> Vous avez <?php echo $_COOKIE[58]; ?> Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add_to_cart=58" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?delete_to_cart=58" class="btn btn-primary">
                        Delete to cart <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </a>
                </figcaption>
            </figure>
        </div>
        <?php endif; ?>
        <?php if (array_key_exists( 32, $_COOKIE )): ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3> Vous avez <?php echo $_COOKIE[32]; ?> M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add_to_cart=32" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?delete_to_cart=32" class="btn btn-primary">
                        Delete to cart <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </a>
                </figcaption>
            </figure>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
