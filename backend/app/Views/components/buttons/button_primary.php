<?php
// Component: components/buttons/button_primary.php
// Data contract:
// $type: string|null ('form' or 'link')
// $action: string|null ('login', 'signup', 'cta', 'primary', 'learnmore')
// $href: string|null (used for link buttons or CTA/primary links)
// $label: string|null (used for CTA/primary/learnmore button text)
// $dark: bool|null (for primary moodboard style)
// $disable: bool|null (for disabled state)

// Defaults
$type = $type ?? 'form';
$action = $action ?? 'login';
$label = $label ?? 'Get Started Now';
$href = $href ?? '#';
$dark = $dark ?? false;
$disable = $disable ?? false;
?>

<?php if ($action === 'login'): ?>
    <?php if ($type === 'form'): ?>
        <!-- FORM LOGIN BUTTON -->
        <button type="submit" class="btn-login">
            Login
        </button>
    <?php else: ?>
        <!-- LINK LOGIN BUTTON -->
        <a href="<?= esc($href) ?>" class="btn-login">
            Login
        </a>
    <?php endif; ?>

<?php elseif ($action === 'signup'): ?>
    <?php if ($type === 'form'): ?>
        <!-- FORM SIGNUP BUTTON -->
        <button type="submit" class="btn-signup">
            Sign Up
        </button>
    <?php else: ?>
        <!-- LINK SIGNUP BUTTON -->
        <a href="<?= esc($href) ?>" class="btn-signup">
            Sign up here
        </a>
    <?php endif; ?>

<?php elseif ($action === 'cta'): ?>
    <!-- CTA BUTTON (always a link) -->
    <a href="<?= esc($href) ?>" class="btn-cta">
        <?= esc($label) ?>
    </a>

<?php elseif ($action === 'primary'): ?>
    <!-- MOODBOARD PRIMARY BUTTON -->
    <?php
    $classes = 'btn primary';
    if ($dark) $classes .= ' dark-mode';
    if ($disable) $classes .= ' disabled';
    ?>
    <?php if ($disable): ?>
        <button class="<?= esc($classes) ?>" disabled><?= esc($label) ?></button>
    <?php else: ?>
        <a href="<?= esc($href) ?>" class="<?= esc($classes) ?>"><?= esc($label) ?></a>
    <?php endif; ?>

<?php elseif ($action === 'learnmore'): ?>
    <!-- LEARN MORE BUTTON -->
    <a href="<?= esc($href) ?>" class="btn-learn-more">
        <?= esc($label ?? 'Learn More') ?>
    </a>

<?php endif; ?>