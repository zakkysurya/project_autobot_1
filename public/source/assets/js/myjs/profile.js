$(document).on("click", "#btn-togglePassword", function (e) {
    e.preventDefault();
    const inputPassword = $("#password");
    const btnShowHide = $(this);

    //to change button style
    if (btnShowHide.hasClass("btn-primary")) {
        btnShowHide.removeClass("btn-primary");
        btnShowHide.addClass("btn-danger");
        btnShowHide.text("hide");
    } else {
        btnShowHide.removeClass("btn-danger");
        btnShowHide.addClass("btn-primary");
        btnShowHide.text("show");
    }
    //to show hide password
    inputPassword.attr("type") == "password"
        ? inputPassword.attr("type", "text")
        : inputPassword.attr("type", "password");
});

$(document).on("submit", "#form-profile", function (e) {
    e.preventDefault();

    let form = $(this);
    let actionUrl = form.attr("action");

    $.ajax({
        type: "PUT",
        url: actionUrl,
        enctype: "multipart/form-data",
        data: form.serialize(),
        dataType: "json",
        success: function (res) {
            console.log(res);
        },
    });
});

// function update_data(url, form) {
//     $.ajax({
//         type: "PUT",
//         contentType: "application/json",
//         enctype: "multipart/form-data",
//         headers: { "X-CSRF-TOKEN": $("input[name=_token]").val() },
//         url: url,
//         data: form[0],
//         dataType: "json",
//         success: function (res) {
//             console.log(res);
//         },
//         error: function (e) {
//             console.log("ERROR : ", e);
//         },
//     });
// }
