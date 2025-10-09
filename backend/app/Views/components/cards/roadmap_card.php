<?php
// Component: components/cards/roadmap_card.php
// Data contract:
// $title: string
// $description: string
// $status: string (e.g. 'Planned', 'Backlog', 'InProgress', 'Done')
// $priority: string (e.g. 'High', 'Medium', 'Low')
?>

<article class="roadmap-card">
    <?php if (!empty($title)): ?>
        <h3><?= esc($title) ?></h3>
    <?php endif; ?>

    <?php if (!empty($description)): ?>
        <p><?= esc($description) ?></p>
    <?php endif; ?>

    <?php if (!empty($status)): ?>
        <span class="status <?= esc($status) ?>"><?= esc($status) ?></span>
    <?php endif; ?>

    <?php if (!empty($priority)): ?>
        <p class="priority">Priority: <?= esc($priority) ?></p>
    <?php endif; ?>
</article>