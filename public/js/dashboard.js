const completedHours = 25;
const totalHours = 30; 
const percentage = (completedHours / totalHours) * 100;

document.addEventListener("DOMContentLoaded", function () {
    const progressCircle = document.getElementById("progress-circle");
    const progressValue = document.getElementById("progress-value");

    const radius = 70; 
    const circumference = 2 * Math.PI * radius;
    const offset = circumference - (percentage / 100) * circumference;

    progressCircle.style.strokeDasharray = `${circumference}`;
    progressCircle.style.strokeDashoffset = `${offset}`;
    progressValue.textContent = `${completedHours} / ${totalHours}`;
});