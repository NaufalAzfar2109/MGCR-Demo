
// =========================================
// NAVBAR MOBILE
// Menutup navbar setelah menu diklik
// =========================================

const navLinks = document.querySelectorAll(
    '.navbar-nav .nav-link'
);

const navCollapse = document.querySelector(
    '#navbarContent'
);

navLinks.forEach(function(link) {

    link.addEventListener('click', function() {

        if (window.innerWidth < 992) {

            const bsCollapse = bootstrap.Collapse.getOrCreateInstance(
                navCollapse,
                {
                    toggle: false
                }
            );

            bsCollapse.hide();

        }

    });

});
