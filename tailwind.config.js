module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        brand: {
          pink: "#FFF1E8",
          red: "#AD000A",
          orange: {
            light: "#F46523",
            lighter: "#ad6a19",
          },
          black: {
            light: "#121214",
            lighter: "#18181b",
            lightest: "#151517"
          },
          blue: {
            lighter: "#63A7FF",
            light: "#286ce5",
            dark: "#070628",
            darker: "#003C58"
          },
          gray: {
            light: "#474747",
            medium: " #33302E",
            dark: "#333333"
          },
          yellow: {
            light: "#F69219"
          },
          design: {
            1: "#1F2223",
            2: "#5A5A5A",
            3: "#1A1C1B",
            4: "#060606",
            5: "#535353",
            6: "#313538",
            7: "#FFFFFF"
          }        
        },
      },
      fontFamily: {
        body: ["Nunito Sans"],
        titleMain: ["Abhaya Libre"],
        titleSub: ["Poppins"],
        about: ["Inter"]
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

/*
body: #FFF1E8;

blue: #070628
red: AD000A, 90%
gray: 474747, 100%
skyblue: #286CE5 90%;

background-color button : background: #F69219 80%;

border-outline: #F69219

projects: background: #333333 90%;
projects-text: 000000, 45%
text: 000000, 45%
more-projects: 33302E, 100%
footer-text: 33302E, 50%

*/