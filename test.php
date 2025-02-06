
<ul>
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="/about" class="nav-link">About</a></li>
    <li><a href="/services" class="nav-link">Services</a></li>
    <li><a href="/contact" class="nav-link">Contact</a></li>
</ul>

<style>
    .active {
        color: red;
        font-weight: bold;
    }
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get current URL path
    let currentPath = window.location.pathname;

    // Select all navigation links
    let navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {
        // Compare href attribute with current path
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });
});
</script>