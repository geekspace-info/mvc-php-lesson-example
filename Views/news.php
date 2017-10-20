<?php
/**
 * @var array $data - массив новостей
 */
?>

<h2>Новости</h2>

<div class="news-block">
    <?php foreach ($data as $item): ?>
        <div class="news-item" style="border: 1px solid black">
            <div class="title">
                <span><?= $item['title']; ?></span>
            </div>
            
            <div class="description">
                <span><?= $item['description']; ?></span>
            </div>
        </div>
        
        <br/>
    <?php endforeach; ?>
</div>