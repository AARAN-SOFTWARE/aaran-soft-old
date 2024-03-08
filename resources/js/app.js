import './bootstrap';

let btn = document.querySelector("#msg");

btn.addEventListener("click", isSend);

function isSend() {
    btn.innerHTML = "Successful! 🎉";
    btnReset();
}

function btnReset() {
    setTimeout(function() {
        btn.innerHTML = "Send message";
    }, 2000);
}


