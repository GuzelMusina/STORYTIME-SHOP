<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
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
                <div class="product__list">
                    <div class="section__title section__title--2 text-center">
                        <h2 class="title__line">Cart</h2>
                    </div>
                    
                    <?php if ($productsInCart): ?>
                        <p style="margin-top: 5%; margin-bottom: 5%">You choose such products:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Product's code</th>
                                <th>Name</th>
                                <th>Cost, $</th>
                                <th>Quantity</th>
                                <th>Delete</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="ti ti-minus"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="4">Total price, $:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="ti ti-shopping-cart"></i> Checkout</a>
                    <?php else: ?>
                        <p>Cart is empty</p>
                        
                        <a class="btn btn-default checkout" href="/catalog/"><i class="ti ti-shopping-cart"></i> Back to catalog</a>
                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>