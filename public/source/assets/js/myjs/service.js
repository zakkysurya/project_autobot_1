$(document).ready(function () {
    get_data();
});

$("#form-add_data").on("submit", function (e) {
    e.preventDefault();
    let formData = new FormData($(this)[0]);
    let url = $(this).data("url");
    save_data(url, formData);
});

$(document).on("click", "#btn-delete_services", function (e) {
    e.preventDefault();
    let id_service = $(this).data("id_service");
    confirm_delete(id_service);
});

function get_data() {
    $.ajax({
        type: "GET",
        url: "services/show",
        dataType: "json",
        success: function (res) {
            console.log(res);
            if (res.sts) {
                let data = res.data;
                let html = "";
                data.forEach((row) => {
                    html += html_services(row);
                });
                $("#list_services").html(html);
            }
        },
        complete: function () {
            console.log("complete");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message(`Error : ${textStatus}`);
        },
    });
}

function delete_data(id_service) {
    let data = { id_service };
    $.ajax({
        type: "DELETE",
        url: "services/delete",
        data: data,
        dataType: "json",
        success: function (res) {
            if (res.sts) {
                success_message(res.msg);
                get_data();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message(`Error : ${textStatus}`);
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

function html_services(row) {
    return `<div class="alert alert-custom" role="alert">
    <div class="custom-alert-icon"><i class="${row.icon}"></i></div>
    <div class="alert-content">
        <span class="alert-title">${row.service_name}</span>
        <span class="alert-text">${row.description}</span>
        <button type="button" id="btn-delete_services" class="btn btn-sm btn-danger float-right" data-id_service="${row.id_service}">Delete</button>
    </div>
</div>`;
}

function error_message(msg) {
    Swal.fire({
        title: "Error!",
        text: msg,
        icon: "error",
        confirmButtonText: "Cool",
    });
}

function success_message(msg) {
    Swal.fire({
        title: "Success!",
        text: msg,
        icon: "success",
        confirmButtonText: "Cool",
    });
}

function confirm_delete(id_service) {
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
            delete_data(id_service);
            Swal.fire("Deleted!", "Your data has been deleted.", "success");
            get_data();
        }
    });
}
