document.addEventListener("DOMContentLoaded", function () {
    const date = new Date();
    const hours = date.getHours();
    let timeOfDay;

    if (hours >= 5 && hours < 12) {
        timeOfDay = "morning";
    } else if (hours >= 12 && hours < 18) {
        timeOfDay = "afternoon";
    } else {
        timeOfDay = "evening";
    }

    const greetingElement = document.getElementById("timeOfDay");
    if (greetingElement) {
        greetingElement.textContent = timeOfDay;
    }
});
