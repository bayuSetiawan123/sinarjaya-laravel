
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'background': '#f7f9fb',
                'primary': '#001428',
                'primary-container': '#0f2942',
                'primary-fixed': '#d1e4ff',
                'primary-fixed-dim': '#b0c9e8',
                'on-primary': '#ffffff',
                'on-primary-container': '#7991af',
                'on-primary-fixed': '#011d35',
                'on-primary-fixed-variant': '#314863',

                'secondary': '#a83900',
                'secondary-container': '#fc6018',
                'secondary-fixed': '#ffdbcf',
                'secondary-fixed-dim': '#ffb59a',
                'on-secondary': '#ffffff',
                'on-secondary-container': '#531800',
                'on-secondary-fixed': '#380d00',
                'on-secondary-fixed-variant': '#802a00',

                'tertiary': '#051325',
                'tertiary-container': '#1a283a',
                'tertiary-fixed': '#d5e3fc',
                'tertiary-fixed-dim': '#b9c7df',
                'on-tertiary': '#ffffff',
                'on-tertiary-container': '#818fa5',
                'on-tertiary-fixed': '#0d1c2e',
                'on-tertiary-fixed-variant': '#3a485b',

                'surface': '#f7f9fb',
                'surface-variant': '#e0e3e5',
                'surface-dim': '#d8dadc',
                'surface-bright': '#f7f9fb',
                'surface-tint': '#49607c',
                'surface-container': '#eceef0',
                'surface-container-low': '#f2f4f6',
                'surface-container-lowest': '#ffffff',
                'surface-container-high': '#e6e8ea',
                'surface-container-highest': '#e0e3e5',

                'on-background': '#191c1e',
                'on-surface': '#191c1e',
                'on-surface-variant': '#43474d',

                'outline': '#74777e',
                'outline-variant': '#c3c6ce',

                'error': '#ba1a1a',
                'error-container': '#ffdad6',
                'on-error': '#ffffff',
                'on-error-container': '#93000a',

                'inverse-primary': '#b0c9e8',
                'inverse-surface': '#2d3133',
                'inverse-on-surface': '#eff1f3',
            },

            borderRadius: {
                DEFAULT: '0.125rem',
                lg: '0.25rem',
                xl: '0.5rem',
                full: '0.75rem',
            },

            spacing: {
                'space-xs': '0.25rem',
                'space-sm': '0.5rem',
                'space-md': '1rem',
                'space-lg': '1.5rem',
                'space-xl': '2.5rem',
                'margin': '2rem',
                'margin-sm': '1rem',
                'gutter-sm': '1rem',
                'gutter': '1.5rem',
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'sans-jakarta': ['Plus Jakarta Sans', 'sans-serif'],

                'headline-md': ['Plus Jakarta Sans', 'sans-serif'],
                'display-lg': ['Plus Jakarta Sans', 'sans-serif'],
                'body-md': ['Plus Jakarta Sans', 'sans-serif'],
                'headline-lg-mobile': ['Plus Jakarta Sans', 'sans-serif'],
                'headline-sm': ['Plus Jakarta Sans', 'sans-serif'],
                'label-lg': ['Plus Jakarta Sans', 'sans-serif'],
                'label-sm': ['Plus Jakarta Sans', 'sans-serif'],
                'display-lg-mobile': ['Plus Jakarta Sans', 'sans-serif'],
                'headline-lg': ['Plus Jakarta Sans', 'sans-serif'],
                'title-lg': ['Plus Jakarta Sans', 'sans-serif'],
                'label-md': ['Plus Jakarta Sans', 'sans-serif'],
                'body-lg': ['Plus Jakarta Sans', 'sans-serif'],
                'title-md': ['Plus Jakarta Sans', 'sans-serif'],
                'body-sm': ['Plus Jakarta Sans', 'sans-serif'],
            },

            fontSize: {
                'body-sm': ['12px', {
                    lineHeight: '16px',
                    fontWeight: '400',
                }],
                'body-md': ['14px', {
                    lineHeight: '20px',
                    fontWeight: '400',
                }],
                'body-lg': ['16px', {
                    lineHeight: '24px',
                    fontWeight: '400',
                }],
                'label-sm': ['11px', {
                    lineHeight: '14px',
                    letterSpacing: '0.04em',
                    fontWeight: '700',
                }],
                'label-md': ['12px', {
                    lineHeight: '16px',
                    letterSpacing: '0.02em',
                    fontWeight: '600',
                }],
                'label-lg': ['14px', {
                    lineHeight: '20px',
                    letterSpacing: '0.01em',
                    fontWeight: '600',
                }],
                'title-md': ['16px', {
                    lineHeight: '24px',
                    fontWeight: '600',
                }],
                'title-lg': ['18px', {
                    lineHeight: '26px',
                    fontWeight: '600',
                }],
                'headline-sm': ['20px', {
                    lineHeight: '28px',
                    fontWeight: '600',
                }],
                'headline-md': ['24px', {
                    lineHeight: '32px',
                    letterSpacing: '-0.01em',
                    fontWeight: '600',
                }],
                'headline-lg-mobile': ['24px', {
                    lineHeight: '32px',
                    letterSpacing: '-0.01em',
                    fontWeight: '700',
                }],
                'headline-lg': ['32px', {
                    lineHeight: '40px',
                    letterSpacing: '-0.015em',
                    fontWeight: '700',
                }],
                'display-lg-mobile': ['32px', {
                    lineHeight: '40px',
                    letterSpacing: '-0.01em',
                    fontWeight: '800',
                }],
                'display-lg': ['48px', {
                    lineHeight: '56px',
                    letterSpacing: '-0.02em',
                    fontWeight: '800',
                }],
            },
        },
    },

    plugins: [forms],
};
