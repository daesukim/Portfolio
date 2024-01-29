var countdownSeconds = 100;
var elapsedTime = 0;

function updateProgress(){
    var progressBar = document.getElementById('progress');
    var percentage = Math.floor((elapsedTime / countdownSeconds) * 100);
    progressBar.innerHTML = percentage + "%";
    elapsedTime++;
    if (elapsedTime > countdownSeconds){
        window.location.href="../HTML/homepage.html";
    } else {
        setTimeout(updateProgress, 35);
    }
}

window.onload = function(){
    updateProgress();
};


