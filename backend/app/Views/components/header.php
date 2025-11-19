<?php $session = session(); ?>
<header>
    <div class="left">
        <img src="/assets/boostifylogo.png" alt="Boostify Logo">
        <h1>Boostify</h1>
    </div>
    <nav>
        <a href="/#home">Home</a>
        <a href="/moodboard">Moodboard</a>
        <a href="/roadmap">Roadmap</a>

        <?php if (! $session->has('user')): ?>

            <!-- LOGIN BUTTON -->
            <?= view('components/buttons/button_primary', [
                'action' => 'login',
                'type'   => 'link',
                'href'   => '/login'
            ]) ?>

        <?php else: ?>

            <!-- LOGOUT BUTTON (POST FORM, same design as login) -->
            <form action="/logout" method="post" style="display:inline;">
                <?= csrf_field() ?>
                <?= view('components/buttons/button_primary', [
                    'action' => 'logout',
                    'type'   => 'form'
                ]) ?>
            </form>

        <?php endif; ?>
    </nav>
</header>