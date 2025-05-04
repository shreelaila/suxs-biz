
function loader(state) {
    var options = {
        theme: "sk-cube-grid",
        backgroundColor: "#e2e2e2",
        textColor: "white"
    };
    if (state == 'open') {
        HoldOn.open(options);
    } else if (state == 'close') {
        HoldOn.close();
    }
}

function daysdifference(firstDate, secondDate) {
    var startDay = new Date(firstDate);
    var endDay = new Date(secondDate);
    var millisBetween = startDay.getTime() - endDay.getTime();
    var days = millisBetween / (1000 * 3600 * 24);
    return Math.round(Math.abs(days) + 1);
}

function simpleConfirmation(type = 'delete_confirmation', callback) {
    if (type == 'delete_confirmation') {
        var title = "Confirm!";
        var content = "Please confirm to remove!";
    } else if (type == 'form_submit') {
        var title = "Confirm!";
        var content = "Please confirm to submit form!";
    } else if (type == 'form_update') {
        var title = "Confirm!";
        var content = "Please confirm to update form!";
    } else if (type == 'change_club_role') {
        var title = "Confirm!";
        var content = "Are you sure you want to change the member role? Please confirm before proceeding.";
    }
    else if (type == 'assign_confirm') {
        var title = "Confirm!";
        var content = "Please confirm to Assign Faculty!";
    } else if (type == 'exam_confirm') {
        var title = "Confirm!";
        var content = "Are you sure you want to activate the exam? Please confirm before proceeding.";
    }
    else if (type == 'pay_confirm') {
        var title = "Confirm!";
        var content = "Please confirm to make payment";
    } else if (type == 'all_voice_group') {
        var title = "Confirm!";
        var content = "Are you sure you want to add all members?";
    }else {
        var title = "Confirm!";
        var content = "Please confirm to proceed further!";
    }
    $.confirm({
        title: title,
        content: content,
        buttons: {
            confirm: function () {
                callback(true);
            },
            cancel: function () {
                // return false;
            },
            /* somethingElse: {
                text: 'Something else',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function () {
                    $.alert('Something else?');
                }
            } */
        }
    });
}


function responseMessage(type = '', title = '', content = '') {
    var icon = ''
    if (type != '') {
        if (type == 'green') {
            icon = 'ri-check-fill'
        } else {
            icon = 'ri-alert-line'
        }
        setTimeout(() => {
            $.alert({
                title: title,
                icon: icon,
                type: type,
                content: content,
            });
        }, 1000);
    }
}
function responseWithRedirect(type = '', title = '', content = '', redirect = '') {
    var icon = ''
    if (type != '') {
        if (type == 'green') {
            icon = 'ri-check-fill'
        } else {
            icon = 'ri-alert-line'
        }
        $.confirm({
            title: title,
            icon: icon,
            type: type,
            content: content,
            buttons: {
                Done: function () {
                    window.location.href = redirect.replace(/&amp;/g, "&");
                }
            }
        });
    }
}

function simapleAlert(message = '') {
    if (message == '') {
        message = "Values not matched propoerly";
    }
    $.alert({
        title: 'Alert!',
        content: message,
    });
}

function handleExcelError(e) {
    if (e.status == 422) {
        // responseMessage('red', 'Upload Failed', 'Failed to upload excel file. Upload errors are given in the "errors" sheet in downloaded excel file')
        responseMessage('red', 'Upload Failed', 'Uploading file to be complianced.')
    }
}

function excelErrorThrow(data, error, url, file = 'data') {
    loader('open');
    data.append('errors', error.responseText);
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        cache: false,
        contentType: false,
        xhrFields: {
            responseType: 'blob'
        },
        headers: {
            'X-Vapor-Base64-Encode': 'True'
        },
        processData: false,
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = file + '.xlsx';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
            loader('close');
        },
    });

}
function simpleConfirmationcustom(type = 'delete_confirmation_custom', customTitle, customContent, callback) {
    if (type == 'delete_confirmation_custom') {
        var title = customTitle || "Confirm!";
        var content = customContent || "Please confirm to remove!";
    }
    $.confirm({
        title: title,
        content: content,
        buttons: {
            confirm: function () {
                callback(true);
            },
            cancel: function () {
                // return false;
            },
            /* somethingElse: {
                text: 'Something else',
                btnClass: 'btn-blue',
                keys: ['enter', 'shift'],
                action: function () {
                    $.alert('Something else?');
                }
            } */
        }
    });
}
