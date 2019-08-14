<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="categories-menu mrg-xs">
                    <div class="category-heading">
                        <h3>Сatalog</h3>
                    </div>
                    <div class="category-menu-list">
                        <ul>
                            <?php foreach ($categories as $categoryItem): ?>
                                <li><a href="/category/<?php echo $categoryItem['id']; ?>">
                                        <?php echo $categoryItem['name']; ?>
                                    </a></li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product__details"><!--/product-information-->

                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p style="margin-bottom: 5%">Beilstein/REAXYS Number: <?php echo $product['code']; ?></p>
                                <span>
                                    <span style="color: red; font-weight: bold"> US $<?php echo $product['price']; ?></span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="ti ti-shopping-cart"></i>Add to cart
                                    </a>
                                </span>
                                <p><b>Availability:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Brand:</b> <?php echo $product['brand']; ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5 style="margin-bottom: 5%">About product</h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>