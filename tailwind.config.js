/** @type {import('tailwindcss').Config} */
module.exports = {
  safelist: [
    'w-64',
    'w-1/2',
    'rounded-l-lg',
    'rounded-r-lg',
    'bg-gray-200',
    'grid-cols-4',
    'grid-cols-7',
    'h-6',
    'leading-6',
    'h-9',
    'leading-9',
    'shadow-lg'
  ],
  darkMode: 'class',
  content: ["./src/**/*.{js,jsx,ts,tsx}", 
            "./index.html",
            "./node_modules/flowbite/**/*.js",
          ],
  theme: {
    extend: {},
  },
  plugins: [
    // ...
    require('tailwindcss'),
    require('flowbite/plugin'),
    // ...
    ]
}

