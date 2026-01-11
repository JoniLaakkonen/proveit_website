<?php
$title = "Legal issues | ProveIt";
include __DIR__ . "/partials/head.php";
include __DIR__ . "/partials/navbar.php";
?>
<main>
    <div class="hero-header-text">
        <h4>Terms of Service & Privacy Policy</h4>
        <div class="content-tab">
            <button type="button" id="toggle-terms">
                Terms of Service
            </button>
            <button type="button" id="toggle-policies">
                Privacy Policy
            </button>
        </div>
    </div>
    <article class="header push-left">
        <h1>Table of contents</h1>
        <a>Terms of service</a>
        <a>Privacy Policy</a>
        <a>Contact information</a>
    </article>
    <div id="terms-of-service" class="visible">
        <article class="header push-left">
            <h2>Terms of service</h2>
        </article>
        <div class="features push-left">
            <h3>Introduction</h3>
            <p>Welcome to our app. These terms govern your use of our service...</p>
            <h3>User Oblications</h3>
            <p>Welcome to our app. These terms govern your use of our service...</p>
        </div>
    </div>

    <div id="privacy-policy" class="visible">
        <article class="header push-left">
            <h2>Privacy Policy</h2>
        </article>
        <div class="features push-left">
            <h3>User Oblications</h3>
            <p>Welcome to our app. These terms govern your use of our service...</p>
        </div>
    </div>
</main>

<?php
include __DIR__ . "/partials/footer.php";
include __DIR__ . "/partials/scripts.php";