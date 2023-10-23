function updateCountdown() {
    var now = new Date();
    var endTime = new Date(now);

    if (now.getHours() >= 12) {
        endTime.setHours(23, 59, 59, 999);
    } else {
        endTime.setHours(12, 0, 0, 0);
    }

    var timeDifference = endTime - now;

    var hours = Math.floor(timeDifference / (1000 * 60 * 60));
    var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    var hourElement = document.getElementById("hour");
    var minuteElement = document.getElementById("minute");
    var secondElement = document.getElementById("second");

    function animateNumber(element) {
        element.classList.remove("inactive");
        setTimeout(function () {
            element.classList.add("inactive");
        }, 1);
    }

    animateNumber(hourElement);
    animateNumber(minuteElement);
    animateNumber(secondElement);

    document.getElementById("hour").textContent = hours;
    document.getElementById("minute").textContent = minutes;
    document.getElementById("second").textContent = seconds;
}

setInterval(updateCountdown, 1000);

function startCountdown(targetHour) {
    const countdownElement = document.querySelector(".countdown");
    const valueElements = countdownElement.querySelectorAll(
        'span[style^="--value"]',
    );

    let now = new Date();
    let targetDate = new Date(now);

    targetDate.setHours(targetHour, 0, 0, 0); // Set target hour

    let timeDiff = targetDate - now;

    if (timeDiff < 0) {
        targetDate.setDate(targetDate.getDate() + 1);
        timeDiff = targetDate - now;
    }

    const countdownInterval = setInterval(() => {
        timeDiff -= 1000;

        if (timeDiff <= 0) {
            clearInterval(countdownInterval);
            alert("Countdown selesai!");
        } else {
            let hours = Math.floor(timeDiff / (1000 * 60 * 60));
            let minutes = Math.floor(
                (timeDiff % (1000 * 60 * 60)) / (1000 * 60),
            );
            let seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

            valueElements[0].style.setProperty("--value", hours);
            valueElements[1].style.setProperty("--value", minutes);
            valueElements[2].style.setProperty("--value", seconds);
        }
    }, 1000);
}

window.onload = function () {
    startCountdown(24); // Countdown dari saat ini hingga 24:00
};
