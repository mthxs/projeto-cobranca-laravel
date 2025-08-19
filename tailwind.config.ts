import type { Config } from 'tailwindcss'
import scrollbarHide from 'tailwind-scrollbar-hide'

const config: Config = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.ts',
    './resources/**/*.vue',
    './public/**/*.html',
  ],
  theme: {
    extend: {},
  },
  plugins: [scrollbarHide],
}

export default config
