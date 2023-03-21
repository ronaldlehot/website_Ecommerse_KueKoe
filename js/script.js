navbar = document.querySelector(".header .flex .navbar");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  profile.classList.remove("active");
};

profile = document.querySelector(".header .flex .profile");

document.querySelector("#user-btn").onclick = () => {
  profile.classList.toggle("active");
  navbar.classList.remove("active");
};

window.onscroll = () => {
  navbar.classList.remove("active");
  profile.classList.remove("active");
};

function loader() {
  document.querySelector(".loader").style.display = "none";
}

function fadeOut() {
  setInterval(loader, 5000);
}

window.onload = fadeOut;

document.querySelectorAll('input[type="number"]').forEach((numberInput) => {
  numberInput.oninput = () => {
    if (numberInput.value.length > numberInput.maxLength) numberInput.value = numberInput.value.slice(0, numberInput.maxLength);
  };
});

// let menu = document.querySelector("#menu-bar");
// let navbar = document.querySelector(".navbar");

// menu.onclick = () => {
//   menu.classList.toggle("fa-times");
//   navbar.classList.toggle("active");
// };

// window.onscroll = () => {
//   menu.classList.remove("fa-times");
//   navbar.classList.remove("active");

//   if (window.scrollY > 60) {
//     document.querySelector("#scroll-top").classList.add("active");
//   } else {
//     document.querySelector("#scroll-top").classList.remove("active");
//   }
// };
