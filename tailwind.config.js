/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["cupcake", "dark", "cmyk"], // index 0=light, 1=dark, 2..=can be applied to any mode
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
    },
}

