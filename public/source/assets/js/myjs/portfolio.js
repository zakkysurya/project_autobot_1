$(document).ready(function () {
    get_data();
});

$("#form-add_data").on("submit", function (e) {
    e.preventDefault();
    let formData = new FormData($(this)[0]);
    let url = $(this).data("url");
    save_data(url, formData);
    get_data();
});

$(document).on("click", "#btn-delete_portolio", function (e) {
    e.preventDefault();
    let id_portfolio = $(this).data("id_portfolio");
    confirm_delete(id_portfolio);
});

function get_data() {
    $.ajax({
        type: "GET",
        url: "portfolio/show",
        dataType: "json",
        success: function (res) {
            $("div.error-text").text("");
            if (res.sts) {
                let data = res.data;
                let html = "";
                data.forEach((row) => {
                    html += html_portfolio(row);
                });
                $("#list_portofolio").html(html);
            }
        },
        complete: function () {
            $("#img").val("");
            $(".image").attr("src", "");
            $(".image").attr("style", "display:none");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message(`Error : ${errorThrown}`);
        },
    });
}

function delete_data(id_portfolio) {
    // let data = { id_portfolio };
    $.ajax({
        type: "GET",
        url: "portfolio/delete/" + id_portfolio,
        // data: data,
        dataType: "json",
        success: function (res) {
            if (res.sts) {
                success_message(res.msg);
                get_data();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message(`Error : ${errorThrown}`);
        },
    });
}

function save_data(url, formData) {
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (res) {
            if (res.sts == 0) {
                $.each(res.error, function (pref, val) {
                    $("div." + pref + "-error").text(val[0]);
                });
            }

            if (res.sts) {
                success_message(res.msg);
                get_data();
            }
        },
        complete: function () {
            $("#modal-form").modal("hide");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message("Some problem occurred, please try again.");
        },
    });
}

function html_portfolio(row) {
    return `
    <figure class="figure">
        <img src="${row.images}" class="figure-img img-fluid rounded" height="200px" width="200px"/>
        <figcaption class="figure-caption text-center">
        <button type="button" id="btn-delete_portolio" data-id_portfolio="${row.id_portfolio}" data-images="${row.images}" class="btn btn-sm btn-danger" >Delete</button>
        </figcaption>
    </figure>`;
}

function error_message(msg) {
    Swal.fire({
        title: "Error!",
        text: msg,
        icon: "error",
        confirmButtonText: "OK",
    }).then((res) => {
        if (res.isConfirmed) {
            get_data();
        } else if (res.isDismissed) {
            Swal.fire({
                icon: "info",
                title: "Waiting for connection, and then refresh browser",
                showConfirmButton: false,
                timer: 2000,
            });
        }
    });
}

function success_message(msg) {
    Swal.fire({
        title: "Success!",
        text: msg,
        icon: "success",
        confirmButtonText: "OK",
    });
}

function confirm_delete(id_service, _token) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            delete_data(id_service, _token);
            Swal.fire("Deleted!", "Your data has been deleted.", "success");
            get_data();
        }
    });
}
