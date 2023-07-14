'use strict';

let idHome = document.getElementById('home');
let idFeatures = document.getElementById('features');
let idPricing = document.getElementById('pricing');
let homeURL = "http://laravelprojectone.loc/";
let arrID = [idHome, idPricing];
const currentUrl = window.location.href;
console.log(currentUrl);
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
}