<?php
/*
    Variables disponibles
        - $categories ARRAY(ARRAY(id, name, created_at))
*/
?>
<ul class="list-reset">
    <?php foreach ($categories as $category) : ?>
        <li>
            <a class="text-gray-300 hover:text-white" href="#">
                <?php echo $category['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>