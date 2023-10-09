/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    corePlugins:{
        preflight:false,
    },
    prefix:'tw-',
    import:true,
  theme: {
    extend: {},
  },
  plugins: [],
}

