const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'smallish': '0.925rem',
            },
            height: {
                '228': '57rem',
                300: '300px',
                400: '400px',
                435: '435px',
                445: '445px',
                500: '500px',
                600: '600px',
                625: '625px',
                700: '700px',
                800: '800px',
                900: '900px',
                1000: '1000px',
                1100: '1100px',
                1200: '1200px',
                1300: '1300px',
                1400: '1400px',
                1500: '1500px',
                1600: '1600px',
                1700: '1700px',
                2000: '2000px',
            },
            width: {
                300: '300px',
                400: '400px',
                435: '435px',
                445: '445px',
                500: '500px',
                600: '600px',
                625: '625px',
                700: '700px',
                800: '800px',
                900: '900px',
                1000: '1000px',
                1100: '1100px',
                1200: '1200px',
                1300: '1300px',
                1400: '1400px',
                1500: '1500px',
                1600: '1600px',
                1700: '1700px',
                2000: '2000px',
            },
            colors: {

                primary: {
                    50: '#eaeeea',
                    100: '#d6ddd5',
                    200: '#c1ccc1',
                    300: '#adbbac',
                    400: '#98aa97',
                    500: '#839882',
                    600: '#0C3D20;',
                    700: '#3A5342',
                    800: '#2A4633',
                    900: '#274326',
                    1000: '#223b21',
                    1100: '#192a18',
                },
                secondary: {
                    50:  '#f8f8f8',
                    100: '#f4f3da',
                    200: '#EDEBBB',
                    300: '#EDEBBB',
                    400: '#e4e1a2',
                    500: '#dfdb8f',
                    600: '#d9d57c',
                    700: '#d4cf69',
                    800: '#c9c344',
                    900: '#b5b03d',
                    1000: '#797529',
                    1100: '#504e1b',
                },
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/line-clamp'),
    ],
};
