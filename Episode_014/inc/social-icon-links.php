<div class="social-icons">

    <?php if (get_theme_mod('tailwind_twitter') != ''): ?>
        <a target="_blank" href="<?php echo get_theme_mod('tailwind_twitter'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg"
                 aria-label="Twitter" role="img"
                 viewBox="0 0 512 512">
                <rect
                        width="512" height="512"
                        rx="15%"
                        fill="#1da1f3"/>
                <path fill="#fff"
                      d="M437 152a72 72 0 0 1-40 12 72 72 0 0 0 32-40 72 72 0 0 1-45 17 72 72 0 0 0-122 65 200 200 0 0 1-145-74 72 72 0 0 0 22 94 72 72 0 0 1-32-7 72 72 0 0 0 56 69 72 72 0 0 1-32 1 72 72 0 0 0 67 50 200 200 0 0 1-105 29 200 200 0 0 0 309-179 200 200 0 0 0 35-37"/>
            </svg>
        </a>
    <?php endif; ?>

    <?php if (get_theme_mod('tailwind_facebook') != ''): ?>
        <a target="_blank" href="<?php echo get_theme_mod('tailwind_facebook'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg"
                 aria-label="Facebook" role="img"
                 viewBox="0 0 512 512">
                <rect
                        width="512" height="512"
                        rx="15%"
                        fill="#3b5998"/>
                <path fill="#fff"
                      d="M330 512V322h64l9-74h-73v-47c0-22 6-36 37-36h39V99c-7-1-30-3-57-3-57 0-95 34-95 98v54h-64v74h64v190z"/>
            </svg>
        </a>
    <?php endif; ?>

    <?php if (get_theme_mod('tailwind_instagram') != ''): ?>
        <a target="_blank" href="<?php echo get_theme_mod('tailwind_instagram'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg"
                 aria-label="Instagram" role="img"
                 viewBox="0 0 512 512">
                <rect
                        width="512" height="512"
                        rx="15%"
                        fill="#d43377"/>
                <g fill="none" stroke="#fff" stroke-width="29">
                    <rect height="296" rx="78" width="296" x="108" y="108"/>
                    <circle cx="256" cy="256" r="69"/>
                </g>
                <circle cx="343" cy="169" fill="#fff" r="19"/>
            </svg>
        </a>
    <?php endif; ?>
</div>