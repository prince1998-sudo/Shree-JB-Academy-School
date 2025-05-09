document.addEventListener("DOMContentLoaded", function () {
    // Get all navigation links
    const navLinks = document.querySelectorAll(".sidebar nav ul li a");

    // Get all content sections
    const sections = document.querySelectorAll("section");

    // Function to hide all sections
    function hideAllSections() {
        sections.forEach(section => {
            section.style.display = "none";
        });
    }

    // Function to handle navigation clicks
    navLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the default link behavior

            // Get the target section ID from the link's href
            const targetId = link.getAttribute("href").replace("#", "");

            // Validate if the target section exists
            const targetSection = document.getElementById(targetId);
            if (!targetSection) {
                alert("Invalid section selected!");
                return;
            }

            // Hide all sections and show the selected section
            hideAllSections();
            targetSection.style.display = "block";
        });
    });

    // Initial state: Hide all sections
    hideAllSections();
});
