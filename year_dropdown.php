//get year 
window.onload = function () {
    var year = document.getElementById("year");
    var currentYear = (new Date()).getFullYear();
    for (var i = currentYear; i >= 1990; i--) {
        var option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        year.appendChild(option);
    }
};
