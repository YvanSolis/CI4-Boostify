<?php
// Component: components/header.php
// $brandTitle: string
// $brandTagline: string|null
// $logo: object
?>
<?php
$nav = [
    ['label' => 'home', 'href' => '/'],
    ['label' => 'moodboard', 'href' => '/moodboard'],
    ['label' => 'roadmap', 'href' => '/roadmap'],
    ['label' => 'Login', 'href' => '/login'],
];

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
        <a href="/login" class="btn-login">Login</a>
    </nav>
</header>