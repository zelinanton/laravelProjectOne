'use strict';

let idHome = document.getElementById('home');
let idReviews = document.getElementById('reviews');
let idProducts = document.getElementById('products');
let homeURL = "http://laravelprojectone.loc/";
let arrID = [idHome, idReviews];
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