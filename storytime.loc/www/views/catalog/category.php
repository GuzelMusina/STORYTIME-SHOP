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
                                    <li><a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a></li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-sm-9 padding-right">
                    <div class="product__list "><!--features_items-->
                        <div class="section__title section__title--2 text-center">
                            <h2 class="title__line" style="margin-bottom: 10%">All products</h2>
                        </div>
                        <?php foreach ($categoryProducts as $product): ?>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="product foo">
                                            <div class="product__inner">
                                                <div class="product__details text-center">
                                                    <img src="<?php echo Product::getImage($product['id']); ?>" alt=""/>
                                                    <h3 style="color: red;">$<?php echo $product['price']; ?></h3>
                                                    <p>
                                                        <a href="/product/<?php echo $product['id']; ?>">
                                                            <?php echo $product['name']; ?>
                                                        </a>
                                                    </p>

                                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                                       class="btn btn-default add-to-cart">
                                                        <i class="ti ti-shopping-cart"></i>Add to Cart
                                                    </a>
                                                </div>
                                                <?php if ($product['is_new']): ?>
                                                    <img src="/template/images/home/new.png" class="new" alt=""/>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div><!--features_items-->


                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>