'use strict';

let idHome = document.getElementById('home');
let idFeatures = document.getElementById('features');
let idPricing = document.getElementById('pricing');
let idReviews = document.getElementById('reviews');
let homeURL = "http://laravelprojectone.loc/";
let arrID = [idHome, idPricing, idReviews];
const currentUrl = window.location.href;
if(currentUrl == homeURL){
  arrID.forEach(elem => elem.classList.remove('text-secondary'));
  idHome.classList.remove("text-white");
  idHome.classList.add("text-secondary");
} else if(currentUrl == homeURL+'features'){
  arrID.forEach(elem => elem.classList.remove('text-secondary'));
  idFeatures.classList.remove("text-white");
  idFeatures.classList.add("text-secondary");
} else if(currentUrl == homeURL+'pricing'){
  arrID.forEach(elem => elem.classList.remove('text-secondary'));
  idPricing.classList.remove("text-white");
  idPricing.classList.add("text-secondary");
} else if(currentUrl == homeURL+'reviews'){
  arrID.forEach(elem => elem.classList.remove('text-secondary'));
  idReviews.classList.remove("text-white");
  idReviews.classList.add("text-secondary");
}

//Modal Login

const modalLoginBtn = document.getElementById('login-btn');
const modalLogin = document.getElementById('login');
const modalLoginClose = document.getElementById('close-login');

function openModalLogin() {
  modalLogin.classList.add('show');
  modalLogin.classList.remove('hide');
  if(modalSignUp.classList.contains('show')){
    closeModalSignUp();
  }
}

function closeModalLogin() {
  modalLogin.classList.add('hide');
  modalLogin.classList.remove('show');
}

modalLoginBtn.addEventListener('click', openModalLogin);
modalLoginClose.addEventListener('click', closeModalLogin);

//Modal Sign-up

const modalSignUpBtn = document.getElementById('sign-up-btn');
const modalSignUp = document.getElementById('sign-up');
const modalSignUpClose = document.getElementById('close');

function openModalSignUp() {
  modalSignUp.classList.add('show');
  modalSignUp.classList.remove('hide');
  if(modalLogin.classList.contains('show')){
    closeModalLogin();
  }
}

function closeModalSignUp() {
  modalSignUp.classList.add('hide');
  modalSignUp.classList.remove('show');
}

modalSignUpBtn.addEventListener('click', openModalSignUp);
modalSignUpClose.addEventListener('click', closeModalSignUp);