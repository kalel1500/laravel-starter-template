import type { Config } from 'tailwindcss'

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.ts",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      screens: {
        'vsm': '440px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
} satisfies Config

