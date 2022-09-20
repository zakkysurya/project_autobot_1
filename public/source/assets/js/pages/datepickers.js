$(document).ready(function () {
    "use strict";
    $(".flatpickr1").flatpickr();

    $(".flatpickr2").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });

    $(".flatpickr3").flatpickr({
        plugins: [
            new monthSelectPlugin({
                //shorthand: true, //defaults to false
                dateFormat: "Y", //defaults to "F Y"
                altFormat: "Y", //defaults to "F Y"
                theme: "dark", // defaults to "light"
            }),
        ],
    });
});
