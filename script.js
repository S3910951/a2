document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navbar a");

    // Function to remove 'nav-current' class from all nav links
    function removeCurrentClass() {
        navLinks.forEach(link => {
            link.classList.remove('nav-current');
        });
    }

    // Function to add 'nav-current' class to the active nav link
    function addCurrentClass(id) {
        removeCurrentClass();
        const activeLink = document.querySelector(`.navbar a[href="#${id}"]`);
        if (activeLink) {
            activeLink.classList.add('nav-current');
        }
    }

    // Listen for click events on nav links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').replace("#", "");
            addCurrentClass(targetId);
        });
    });

    // Update nav links on scroll
    window.addEventListener('scroll', function() {
        let currentSection = "";
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                currentSection = section.getAttribute('id');
            }
        });
        addCurrentClass(currentSection);
    });
});
