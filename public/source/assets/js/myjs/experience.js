$(document).ready(function () {
    get_data();
    // console.log("js ready");
});

$("#form-add_data").on("submit", function (e) {
    e.preventDefault();
    let formData = new FormData($(this)[0]);
    let url = $(this).data("url");
    save_data(url, formData);
});

$(document).on("click", "#btn-delete_experience", function (e) {
    e.preventDefault();
    let id_experience = $(this).data("id_experience");
    confirm_delete(id_experience);
});

function get_data() {
    $.ajax({
        type: "GET",
        url: "experiences/show",
        dataType: "json",
        success: function (res) {
            $("div.error-text").text("");
            if (res.sts) {
                let data = res.data;
                let html = "";
                data.forEach((row) => {
                    html += html_experiences(row);
                });
                $("#list_experiences").html(html);
            }
        },
        complete: function () {
            $("#inputCompanyName").val("");
            $("#inputPosition").val("");
            $("#inputStartYear").val("0");
            $("#inputEndYear").val("0");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message(`Error : ${errorThrown}`);
        },
    });
}

function delete_data(id_experience) {
    $.ajax({
        type: "GET",
        url: "experiences/delete/" + id_experience,
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

function html_experiences(row) {
    return `
    <li class="todo-item">
        <div class="todo-item-content">
            <span class="todo-item-title">${row.company_name}<span class="badge badge-style-light rounded-pill badge-info">${row.start_year} sd ${row.end_year}</span></span>
            <span class="todo-item-subtitle">${row.position}</span>
        </div>
        <div class="todo-item-actions">
            <a href="javascript:;" class="todo-item-delete" id="btn-delete_experience" data-id_experience="${row.id_experience}"><i class="material-icons-outlined no-m">close</i></a>
        </div>
    </li>`;
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
