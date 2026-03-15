document.addEventListener('DOMContentLoaded', () => {
    const applyBlink = (link) => {
        link.classList.add('blink-cart-link');

        if (link.dataset.blinkBound !== 'true') {
            link.dataset.blinkBound = 'true';

            link.addEventListener('click', () => {
                link.classList.remove('blink-cart-link');
            });
        }

        clearTimeout(link._blinkTimeout);
        link._blinkTimeout = setTimeout(() => {
            link.classList.remove('blink-cart-link');
        }, 10000);
    };

    const observer = new MutationObserver(() => {
        document
            .querySelectorAll('a.added_to_cart.wc-forward')
            .forEach((link) => applyBlink(link));
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true,
    });

    document
        .querySelectorAll('a.added_to_cart.wc-forward')
        .forEach((link) => applyBlink(link));
});
