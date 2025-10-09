<?php
// Component: components/sections/cta_section.php
// Props:
// $title — string, main heading
// $description — string, paragraph text
// $buttonHref — string, CTA button link
// $buttonLabel — string, CTA button label

$title = $title ?? 'Ready to Boost Your Valorant Journey?';
$description = $description ?? 'Join thousands of players who trust Boostify to reach their dream rank and improve their gameplay. Whether you need rank boosting or personalized coaching, we’ve got your back.';
$buttonHref = $buttonHref ?? '/login';
$buttonLabel = $buttonLabel ?? 'Get Started Now';
?>

<section class="cta">
    <div class="cta-content">
        <h2><?= esc($title) ?></h2>
        <p><?= esc($description) ?></p>
        <?= view('components/buttons/button_primary', [
            'action' => 'cta',
            'href' => $buttonHref,
            'label' => $buttonLabel
        ]) ?>
    </div>
</section>