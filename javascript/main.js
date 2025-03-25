function odliczDo1lipca2024() {
    var dataDocelowa = new Date('2024-07-01T00:00:00Z').getTime();
    var aktualnaData = new Date().getTime();
    var roznicaCzasu = dataDocelowa - aktualnaData;
    var dni = Math.floor(roznicaCzasu / (1000 * 60 * 60 * 24));
    var godziny = Math.floor((roznicaCzasu % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minuty = Math.floor((roznicaCzasu % (1000 * 60 * 60)) / (1000 * 60));
    var sekundy = Math.floor((roznicaCzasu % (1000 * 60)) / 1000);
    var komunikat = 'Czas do rozpoczęcia wakacji: ' + dni + ' dni, ' + godziny + ' godzin, ' + minuty + ' minut, ' + sekundy + ' sekund.';
    document.getElementById('countdown').innerHTML = komunikat;
}
window.onload = function() {
    odliczDo1lipca2024();
    setInterval(odliczDo1lipca2024, 1000);
};
const promocjeSection = document.getElementById('promocje');
const losowaOferta = losoweOferty[Math.floor(Math.random() * losoweOferty.length)];

promocjeSection.innerHTML = `
    <h2>Promocja</h2>
    <img src="${losowaOferta.image}" alt="${losowaOferta.title}">
    <p>${losowaOferta.description}</p>
`;
let currentOferta = 0;
const oferty = document.querySelectorAll('.oferta');

function showOferta(index) {
    oferty.forEach((oferta) => oferta.classList.remove('active'));
    oferty[index].classList.add('active');
}

document.getElementById('prevOferta').addEventListener('click', function () {
    currentOferta = (currentOferta - 1 + oferty.length) % oferty.length;
    showOferta(currentOferta);
});

document.getElementById('nextOferta').addEventListener('click', function () {
    currentOferta = (currentOferta + 1) % oferty.length;
    showOferta(currentOferta);
});
const galeriaImages = document.querySelectorAll('.galeria img');

galeriaImages.forEach((img) => {
    img.addEventListener('click', function () {
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `<img src="${img.src}" alt="${img.alt}">`;
        document.body.appendChild(lightbox);

        lightbox.addEventListener('click', function () {
            document.body.removeChild(lightbox);
        });
    });
});
const formularz = document.querySelector('form');

formularz.addEventListener('submit', function (event) {
    event.preventDefault();
    const imie = document.getElementById('name').value;
    const nazwisko = document.getElementById('nazwisko').value;
    const email = document.getElementById('email').value;
    const telefon = document.getElementById('telefon').value;
    const data = document.getElementById('data').value;
    const liczbaDni = document.getElementById('liczbaDni').value;
    this.submit();
});


var prevScroll = window.pageYOffset;
window.onscroll = function () {
    document.getElementsByTagName("header").style.transition = "0.6s";
    var a = document.getElementsByTagName("a");

    var currentScroll = window.pageYOffset;
        if(prevScroll > currentScroll) {
            document.getElementsByTagName("header").style.top = "0";

        }
        else {
            document.getElementsByTagName("header").style.top = "-150px";
        }
        prevScroll = currentScroll;
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.button').addEventListener('click', function() {
        document.querySelector('.background').classList.toggle('show');
    });
});

