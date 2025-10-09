<?php
// Component: components/cards/moodboard_card.php
// Data contract:
// $title: string
// $excerpt: string
// $href: string|null
?>
<article class="card">
    <?php if (!empty($title)): ?>
        <h3><?= esc($title) ?></h3>
    <?php endif; ?>

    <?php if (!empty($excerpt)): ?>
        <p><?= esc($excerpt) ?></p>
    <?php endif; ?>

    <?php if (!empty($href)): ?>
        <a href="<?= esc($href) ?>">Read more</a>
    <?php endif; ?>
</article>