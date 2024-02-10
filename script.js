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


    // Select all day and seat dropdown elements
    const dayDropdowns = document.querySelectorAll('input[name="day"]');
    const seatDropdowns = document.querySelectorAll('select[name^="seats"]');

    // Function to update the total price
    function updateTotalPrice() {
        let pricingPolicy = 'FULL'; // Default pricing policy
        dayDropdowns.forEach(day => {
            if (day.checked) {
                pricingPolicy = day.getAttribute('data-pricing');
            }
        });

        let totalPrice = 0;
        seatDropdowns.forEach(seat => {
            const seatCount = parseInt(seat.value) || 0;
            const seatPrice = parseFloat(seat.getAttribute(`data-${pricingPolicy}`)) || 0;
            totalPrice += seatCount * seatPrice;
        });

        // Display total price or hide it
        if (totalPrice > 0) {
            document.getElementById('totalPrice').textContent = `$${totalPrice.toFixed(2)}`;
        } else {
            document.getElementById('totalPrice').textContent = '';
        }

        // Block or allow form submission
        document.querySelector('input[type="submit"]').disabled = !(totalPrice > 0);
    }

    // Attach event listeners to all day and seat selection dropdowns
    dayDropdowns.forEach(day => day.addEventListener('change', updateTotalPrice));
    seatDropdowns.forEach(seat => seat.addEventListener('change', updateTotalPrice));

    // Initial calculation in case the form is pre-filled
    updateTotalPrice();
});
