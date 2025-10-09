<?php
// Component: components/buttons/button_border.php
// Props: $label, $href, $dark (bool), $disable (bool)

$label = $label ?? 'Border';
$href = $href ?? '#';
$dark = $dark ?? false;
$disable = $disable ?? false;

$classes = 'btn border';
if ($dark) $classes .= ' dark-mode';
if ($disable) $classes .= ' disabled';
?>

<?php if ($disable): ?>
    <button class="<?= esc($classes) ?>" disabled><?= esc($label) ?></button>
<?php else: ?>
    <a href="<?= esc($href) ?>" class="<?= esc($classes) ?>"><?= esc($label) ?></a>
<?php endif; ?>