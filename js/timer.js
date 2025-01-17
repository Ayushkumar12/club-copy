const finaleDate = new Date("january 25, 2025 10:00:00").getTime();

const timer = () => {
    const now = new Date().getTime();
    let diff = finaleDate - now;
    if (diff < 0) {
        document.querySelector('.alert').style.display = 'block';
        document.querySelector('.container').style.display = 'block';
    }

    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
    let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
    let seconds = Math.floor(diff % (1000 * 60) / 1000);

    days <= 99 ? (days <= 9 ? days = `0${days}` : days) : days;
    hours <= 9 ? hours = `0${hours}` : hours;
    minutes <= 9 ? minutes = `0${minutes}` : minutes;
    seconds <= 9 ? seconds = `0${seconds}` : seconds;

    document.querySelector('#days').textContent = days;
    document.querySelector('#hours').textContent = hours;
    document.querySelector('#minutes').textContent = minutes;
    document.querySelector('#seconds').textContent = seconds;

}
timer();
setInterval(timer, 1000);
