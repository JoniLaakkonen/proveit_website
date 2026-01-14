<?php
$title = "Home | ProveIt";
include __DIR__ . "/partials/head.php";
include __DIR__ . "/partials/navbar.php";
?>
<main>
    <div class="hero-header-large">
        <img src="assets/reindeer-alpha.png" alt="ProveIt logo(Reindeer holding a camera)">
    </div>
    <article class="header">
        <h1>Enjoy moments share</br>memories</h1>
        <span>
            Experience new way to memorize or spice up your travels, parties or just a regular days.
            Create tasks, share with friends and enjoy.
        </span>
    </article>
    <div class="features">
        <h3>
            <strong>Easy to start</strong>
        </h3>
        <div class="features-content">
            <div class="feature-box">
                <i class="fa-solid fa-users"></i>
                <span>Create tasks</span>
            </div>
            <div class="feature-box">
                <i class="fa-solid fa-camera"></i>
                <span>Complete tasks</span>
            </div>
            <div class="feature-box">
                <i class="fa-solid fa-face-grin-squint-tears"></i>
                <span>Have fun</span>
            </div>
        </div>
    </div>
    <div class="download-links">
        <button type="button" class="download-link">
            Download for iOS
        </button>
        <button type="button" class="download-link">
            Download for Android
        </button>
    </div>
</main>
<?php
include __DIR__ . "/partials/footer.php";
include __DIR__ . "/partials/scripts.php";