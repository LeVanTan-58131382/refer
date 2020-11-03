<?php include '../view/header.php'; ?>
<?php include '../view/sidebar.php'; ?>


<div class="ad-part-content">
    <div class="noidungcon">
        <h2>Loại sản phẩm</h2>
        <ul>
            <!-- display links for all categories -->
            <?php
            require_once('model/database.php');
            require_once('model/category_db.php');

            foreach ($categories as $category) :
                $name = $category['categoryName'];
                $id = $category['categoryID'];
                $url = $app_path . 'catalog?category_id=' . $id;
            ?>
                <li>
                    <a href="<?= $url; ?>">
                        <?= htmlspecialchars($name); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>

<style>
    .noidungcon {
        position: relative;
        left: 0%;
        top: 0%;
        width: 100%;
        height: 100%;
        /* border: 1px solid black; */
        border-radius: 5px;
        padding: 30px;
    }
</style>