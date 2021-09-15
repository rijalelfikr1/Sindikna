"use strict";

function ucapan() {
    var jam = new Date();
    var hours = jam.getHours();

    hours = updateTime(hours);

    var time = setTimeout(ucapan, 1000);

    if (hours < 12) {
        var greeting = "Selamat Pagi";
    }
    if (hours >= 12 && hours <= 15) {
        var greeting = "Selamat Siang";
    }
    if (hours >= 15 && hours <= 18) {
        var greeting = "Selamat Sore";
    }
    if (hours >= 18 && hours <= 24) {
        var greeting = "Selamat Malam";
    }
    document.getElementById("greeting").innerHTML = greeting;
}
function updateTime(k) {
    return k;
}
ucapan();