// NAVBAR TOGGLE
const menuToggle = document.getElementById('menu-toggle');
const navMenu = document.getElementById('nav-menu');

if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
        navMenu.classList.toggle('visible');
    });
}

const termsButton = document.getElementById('toggle-terms');
const policiesButton = document.getElementById('toggle-policies');

const terms = document.getElementById('terms-of-service');
const policies = document.getElementById('privacy-policy');

// Function to show both sections (default)
function showDefault() {
    terms.classList.remove('hidden');
    terms.classList.add('visible');

    policies.classList.remove('hidden');
    policies.classList.add('visible');

    // Remove active from both buttons
    termsButton.classList.remove('active');
    policiesButton.classList.remove('active');
}

// Function to show only Terms
function showOnlyTerms() {
    terms.classList.remove('hidden');
    terms.classList.add('visible');

    policies.classList.add('hidden');
    policies.classList.remove('visible');

    termsButton.classList.add('active');
    policiesButton.classList.remove('active');
}

// Function to show only Privacy
function showOnlyPrivacy() {
    policies.classList.remove('hidden');
    policies.classList.add('visible');

    terms.classList.add('hidden');
    terms.classList.remove('visible');

    policiesButton.classList.add('active');
    termsButton.classList.remove('active');
}

if (termsButton && policiesButton && terms && policies) {
    termsButton.addEventListener('click', () => {
        if (termsButton.classList.contains('active')) {
            // Clicking active → return to default
            showDefault();
        } else {
            showOnlyTerms();
        }
    });

    policiesButton.addEventListener('click', () => {
        if (policiesButton.classList.contains('active')) {
            // Clicking active → return to default
            showDefault();
        } else {
            showOnlyPrivacy();
        }
    });
}

// Initial state: both visible
showDefault();
