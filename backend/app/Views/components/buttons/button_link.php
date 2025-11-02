<?php
// Component: components/buttons/button_link.php
// Data contract:
// $href: string|null
// $label: string|null

$href = $href ?? '/';
$label = $label ?? '← Back to Home';
?>

<a href="<?= esc($href) ?>" class="btn-back-home">
    <?= esc($label) ?>
</a>