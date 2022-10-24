$(document).ready(function () {
    get_data();
});

$("#form-add_data").on("submit", function (e) {
    e.preventDefault();
    let formData = new FormData($(this)[0]);
    let url = $(this).data("url");
    save_data(url, formData);
});

$(document).on("click", "#btn-delete_testimonial", function (e) {
    e.preventDefault();
    let id_testimonial = $(this).data("id_testimonial");
    confirm_delete(id_testimonial);
});

$(document).on("click", "#btn-edit_testimonial", function (e) {
    e.preventDefault();
    let id_testimonial = $(this).data("id_testimonial");
    detail_data(id_testimonial);
});

// Event for modal dialog
$(document).on("change", "#modal-photo", function (e) {
    e.preventDefault();
    const imgPrev = document.getElementById("modal-image-preview");
    const imgShow = imgPrev.querySelector(".modal-show-image");

    const file = this.files[0];
    const type = file.type.split("/")[0];

    if (type != "image") {
        imgShow.style.display = "null";
        imgShow.setAttribute("src", "");
        imgShow.setAttribute("height", "");
        imgShow.innerHTML = '<p style="color:red"><i>Cannot read file</i></p>';
    } else {
        if (file) {
            const reader = new FileReader();
            imgShow.style.display = "block";
            reader.addEventListener("load", function () {
                imgShow.setAttribute("height", "300px");
                imgShow.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        } else {
            imgShow.style.display = "null";
            imgShow.setAttribute("src", "");
        }
    }
});
// end event modal dialog

function get_data() {
    $.ajax({
        type: "GET",
        url: "testimonial/show",
        dataType: "json",
        success: function (res) {
            $("div.error-text").text("");
            if (res.sts) {
                let data = res.data;
                let html = "";
                data.forEach((row) => {
                    html += html_testimonial(row);
                });
                $("#list_testimonials").html(html);
            }
        },
        complete: function () {
            $("#photo").val("");
            $(".image").attr("src", "./fe/images/team/user.png");

            $("#inputName").val("");
            $("#inputPosition").val("");
            $("#inputText").val("");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error_message(`Error : ${errorThrown}`).then((res) => {
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
        },
    });
}

function delete_data(id_testimonial) {
    $.ajax({
        type: "GET",
        url: "testimonial/delete/" + id_testimonial,
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

function detail_data(id_testimonial) {
    $.ajax({
        type: "GET",
        url: "testimonial/detail/" + id_testimonial,
        dataType: "json",
        success: function (res) {
            console.table(res);
            if (res.sts) {
                let data = res.data;
                $("#modal-photo").val("");
                $("#modal-photo_old").val(data.image);
                $(".modal-show-image").attr("src", data.image);
                $("#modal-inputName").val(data.name);
                $("#modal-inputPosition").val(data.position);
                $("#modal-inputText").val(data.text);
            }
            $("#modal-form").modal("show");
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

function html_testimonial(row) {
    return `
    <li class="todo-item">
        <div class="todo-item-content">
            <div class="row">
                <div class="col-2">
                    <img src="${
                        row.image
                    }" alt="Image Preview" class="img-thumbnail" width="200px" height="200px">
                </div>
                <div class="col-6">
                    <span class="todo-item-title">${row.name.toUpperCase()}<span class="badge badge-style-light rounded-pill badge-info">${row.position.toUpperCase()}</span></span>
                    <span class="todo-item-subtitle">${row.text}</span>
                </div>
            </div>
        </div>
        <div class="todo-item-actions">
            <a href="javascript:;" id="btn-delete_testimonial" data-id_testimonial="${
                row.id_testimonial
            }" class="todo-item-delete" title="Delete"><i class="material-icons-outlined no-m">close</i></a>
            <a href="javascript:;" id="btn-edit_testimonial" data-id_testimonial="${
                row.id_testimonial
            }"  class="todo-item-done"  title="Edit"><i class="material-icons-outlined no-m">done</i></a>
        </div>
    </li>`;
}

function error_message(msg) {
    Swal.fire({
        title: "Error!",
        text: msg,
        icon: "error",
        showCancelButton: true,
        cancelButtonText: "Close",
        cancelButtonColor: "#d33",
        confirmButtonText: "Refresh",
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
