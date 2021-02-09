// menu
function goToSection() {
  scrollTo(0, document.querySelector(`.${this.textContent}`).offsetTop);
}

// scroll
function changeSection() {
  const menu = document.querySelectorAll('nav li');
  const scroll = window.scrollY;

  const about = document.querySelector('.about');
  const skills = document.querySelector('.skills');
  const projects = document.querySelector('.projects');
  // const contact = document.querySelector('.contact');

  const halfAboutHeight = about.clientHeight * .4;
  const halfSkillsHeight = skills.clientHeight * .4;
  const halfProjectsHeight = projects.clientHeight * .3;
  // const halfContactHeight = contact.clientHeight * .4;

  const aboutOffset = about.offsetTop;
  const skillsOffset = skills.offsetTop;
  const projectsOffset = projects.offsetTop;
  // const contactOffset = contact.offsetTop;

  if(scroll  < aboutOffset - halfAboutHeight ) {
    menu.forEach(li => li.style.color = "#333");
  } else if(scroll > aboutOffset - halfAboutHeight && scroll < skillsOffset - halfSkillsHeight) {
    menu.forEach(li => li.style.color = "#333");
    menu[0].style.color = "#fff";
  } else if(scroll > skillsOffset - halfSkillsHeight && scroll < projectsOffset - halfProjectsHeight) {
    menu.forEach(li => li.style.color = "#333");
    menu[1].style.color = "#fff";
  } else if(scroll > projectsOffset - halfProjectsHeight) {
    menu.forEach(li => li.style.color = "#333");
    menu[2].style.color = "#fff";
  } 
  // if(scroll > contactOffset - halfContactHeight || scroll + window.innerHeight >= document.body.scrollHeight - 10) {
  //   menu.forEach(li => li.style.color = "#333");
  //   menu[3].style.color = "#fff";
  // } 
}

// sprawdzenie formularza
function checkForm(e) {
  const inputs = document.querySelectorAll('form input');
  const textarea = document.querySelector('form textarea');

  const testEmail = /^(.[A-Za-z0-9\-]*\w)+@+([A-Za-z0-9\-]*\w)+(\.[A-Za-z]*\w)+$/;
  const mail = inputs[1].value;
  const result_mail = mail.match(testEmail);

  if(inputs[0].value === "" || inputs[1].value === "" || textarea.value === "") {
    e.preventDefault();
    alert('Wypełnij wszystkie pola formularza!');
  } else if(inputs[0].value === " " || textarea.value === " ") {
    e.preventDefault();
    alert('Wypełnij wszystkie pola formularza!');
  } else if(result_mail === null) {
    e.preventDefault();
    alert('Niepoprawny adres email!');
  }
}

// document.querySelector('form').addEventListener('submit', checkForm);
document.querySelectorAll('nav li').forEach(li => li.addEventListener('click', goToSection));
window.addEventListener('scroll', changeSection);