<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="col-md-3">
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
        <div class="col-md-9 text-center" >
            <h1 style="font-weight: bolder">Here is H2SO4 web site</h1>
            <h3 style="margin-top: 10%">You can bought chemical staff here</h3>
        </div>
    </section>



<?php include ROOT . '/views/layouts/footer.php'; ?>