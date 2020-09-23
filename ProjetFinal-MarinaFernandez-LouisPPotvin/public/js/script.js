const burg = document.getElementsByClassName('burger')[0]
const navbarLinks = document.getElementsByClassName('uLinks')[0]

burg.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})