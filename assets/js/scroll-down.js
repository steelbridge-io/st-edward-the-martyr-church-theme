
jQuery(document).ready(function($) {
    console.log('Scroll down script loaded');

    // Create the scroll button HTML
    var scrollButtonHTML = `
        <div id="scroll-down-btn" class="scroll-down-button">
            <div class="scroll-arrow">
                <i class="lni lni-arrow-downward"></i>
            </div>
            <div class="scroll-text">Scroll Down</div>
        </div>
    `;

    // Add button to body
    $('body').append(scrollButtonHTML);
    console.log('Scroll button added to DOM via JavaScript');

    // Make it visible after a delay
    setTimeout(function() {
        $('#scroll-down-btn').addClass('visible');
        console.log('Button should now be visible');
    }, 2000);

    // Simple smooth scroll when button is clicked
    $(document).on('click', '#scroll-down-btn', function(e) {
        e.preventDefault();
        console.log('Scroll button clicked');

        let target = $('#main-content');
        if (!target.length) {
            target = $('#primary');
        }

        if (target.length) {
            console.log('Scrolling to target');

            // Native smooth scroll - works great in all modern browsers including Chrome
            target[0].scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

        } else {
            console.log('No scroll target found');
        }
    });

    // Hide button when user scrolls
    $(window).scroll(function() {
        const scrollPosition = $(window).scrollTop();
        const windowHeight = $(window).height();

        if (scrollPosition > windowHeight * 0.8) {
            $('#scroll-down-btn').addClass('hidden');
        } else {
            $('#scroll-down-btn').removeClass('hidden');
        }
    });
});