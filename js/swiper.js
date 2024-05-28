const swiper = new Swiper('.swiper', {
  speed: 1600,
  loop: true,
  // autoplay: {
  //   delay: 5000,
  // }
})

const button = document.querySelector('.header-zhiviesteni-btn');
const close = document.querySelector('.popup-zhiviesteni-close');
const shadow =document.querySelector('.shadow');
const popup = document.querySelector('.popup-zhiviesteni');
const form = document.querySelector('.popup-zhiviesteni-form');

button.addEventListener('click', function () {
  popup.classList.add('popup-open')
  shadow.classList.add('popup-open')
})
close.addEventListener('click', function () {
  popup.classList.remove('popup-open')
  shadow.classList.remove('popup-open')
})
shadow.addEventListener('click', function () {
  popup.classList.remove('popup-open')
  shadow.classList.remove('popup-open')
})


form.addEventListener('submit', formSend);

async function formSend(e) {
  e.preventDefault();
  let formData = new FormData(form);
  let tel = document.getElementById('tel').value;


  let response = await fetch('sendmail.php', {
    method : "POST",
    body : JSON.stringify(tel),
    headers: {
      "Content-Type": "application/json; charset=UTF-8"
    }
  })
  let result = await response.text();
}
