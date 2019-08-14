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


                    <?php if ($result): ?>
                        <p>The order is complete. We will call you.</p>
                    <?php else: ?>

                        <p>Count of chosen products : <?php echo $totalQuantity; ?>, total price: <?php echo $totalPrice; ?>, $</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p style="margin-bottom: 5%">For send order, please fill the form. Our manager will call you. </p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Your name</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p>Phone number</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p>Comment for order</p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Done" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>