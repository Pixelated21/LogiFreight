module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
    darkMode: 'class',

    theme: {
    extend: {}
  },
  variants: {
      extend: {
          opacity: ['disabled'],
      },
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
