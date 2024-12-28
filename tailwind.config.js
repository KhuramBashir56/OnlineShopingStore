import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

export default {
    content: [
        './resources/views/**/*.blade.php',
        './app/livewire/**/*.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            screens: {
                'xs': '425px',
                '2xs': '320px',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
