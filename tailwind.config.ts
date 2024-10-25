import type { Config } from 'tailwindcss'
import plugin from 'tailwindcss/plugin';

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.ts",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./vendor/kalel1500/laravel-hexagonal-and-ddd-architecture-utilities/resources/**/*.js",
    "./vendor/kalel1500/laravel-hexagonal-and-ddd-architecture-utilities/resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      screens: {
        'vsm': '440px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    plugin(function ({ addVariant }) {
      addVariant('sc', '&:is(.sc *)');
    })
  ],
} satisfies Config

