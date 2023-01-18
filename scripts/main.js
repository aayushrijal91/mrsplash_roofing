// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function setOpeningTime() {
    let now, hours, minutes, time, standard;
    now = new Date();
    hours = now.getHours();
    standard = hours < 12 ? "am" : "pm";
    hours = ((hours + 11) % 12 + 1);
    minutes = now.getMinutes();
    minutes = minutes < 10 ? "0" + minutes : minutes;
    time = hours + ":" + minutes + " " + standard;

    $("#current-time").html(time);
}

setOpeningTime();
setInterval(() => { setOpeningTime(); }, 1000);

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});