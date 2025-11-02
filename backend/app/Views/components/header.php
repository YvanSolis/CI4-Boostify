<?php
// Component: components/header.php
// $brandTitle: string
// $brandTagline: string|null
// $logo: object
?>
<header>
    <div class="left">
        <img src="/assets/boostifylogo.png" alt="Boostify Logo">
        <h1>Boostify</h1>
    </div>
    <nav>
        <a href="/#home">Home</a>
        <a href="/moodboard">Moodboard</a>
        <a href="/roadmap">Roadmap</a>
        <?= view('components/buttons/button_primary', ['action' => 'login', 'type' => 'link', 'href' => '/login']) ?>
    </nav>
</header>