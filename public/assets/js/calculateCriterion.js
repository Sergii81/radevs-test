let score = document.getElementById('score');
let criterion = document.getElementById('criterion');
console.log(score.value);
function calculateCriterion(score) {
    let res = 0;
    if (score < 60) {
        res = Math.ceil(score * 100 / 60);
    } else if (score == 60) {
        res = 100;
    } else if (score > 60 && score < 80) {
        res = score * 5 - 200;
    } else if (score == 80) {
        res = 200;
    } else if (score > 80 && score < 90) {
        res = score * 10 - 600;
    } else if (score == 90) {
        res = 300;
    } else if (score > 90 && score < 100) {
        res = score * 20 - 1500;
    } else if (score == 100) {
        res = 500;
    }

    return res;
}

score.addEventListener("change", (event) => {
    criterion.value = calculateCriterion(score.value)
});
