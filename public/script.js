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

const loginBtn = document.getElementById('login-btn');
const registerBtn = document.getElementById('register-btn');

loginBtn.addEventListener('click', () => {
  window.location.href = `${homeURL}login`;
});
registerBtn.addEventListener('click', () => {
  window.location.href = `${homeURL}register`;
});