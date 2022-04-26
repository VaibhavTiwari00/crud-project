const pop_background = document.getElementById('pop-up-login')
const form = document.getElementById('form')
const pop_form = document.getElementById('form')

function pop() {
    pop_background.style.top = "0%";
    form.style.top = "50%";
    form.style.transition = "all .5s";
}

const cross = document.getElementById('cross')


cross.addEventListener("click", function() {
    popdown()
});

function popdown() {
    pop_background.style.top = "-100%";
    form.style.top = "-50%";
    form.style.transition = "all 0.8s";
    // pop_background.style.transition = "all 0.8s";
}


const play = document.getElementById('login_btn')

play.addEventListener("click", function() {
    playy()
});



function playy() {
    var audio = new Audio('./assets/notification.mp3');
    audio.addEventListener("canplaythrough", event => {
        /* the audio is now playable; play it if permissions allow */
        audio.play();
    });
}
console.log("playy");