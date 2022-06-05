$(document).ready(function () {
    $("#DataTable").DataTable({
        aaSorting: [],
        "order": [[ 3, "desc" ]],
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        responsive: true,
        columnDefs: [{
            responsivePriority: 1,
            targets: 0
        }, {
            responsivePriority: 2,
            targets: -1
        }],
        "createdRow": function (row, data, index) {

        }
    });
    $(".dataTables_filter input").attr("placeholder", "Cari...").css({
        width: "70%",
        display: "inline-block",
        'margin-top': "5px"
    });
    $(".form-control-sm").css({
        'min-height': "1rem"
    });
});

$(document).ready(function () {
    $("#DataTable2").DataTable({
        aaSorting: [],
        "order": [[ 3, "desc" ]],
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        responsive: true,
        columnDefs: [{
            responsivePriority: 1,
            targets: 0
        }, {
            responsivePriority: 2,
            targets: -1
        }],
        "createdRow": function (row, data, index) {

        }
    });
    $(".dataTables_filter input").attr("placeholder", "Cari...").css({
        width: "70%",
        display: "inline-block",
        'margin-top': "5px"
    });
    $(".form-control-sm").css({
        'min-height': "1rem"
    });
});

$(document).ready(function () {
    $("#DataTable3").DataTable({
        aaSorting: [],
        "order": [[ 3, "desc" ]],
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        responsive: true,
        columnDefs: [{
            responsivePriority: 1,
            targets: 0
        }, {
            responsivePriority: 2,
            targets: -1
        }],
        "createdRow": function (row, data, index) {

        }
    });
    $(".dataTables_filter input").attr("placeholder", "Cari...").css({
        width: "70%",
        display: "inline-block",
        'margin-top': "5px"
    });
    $(".form-control-sm").css({
        'min-height': "1rem"
    });
});

$(document).ready(function () {
    $("#DataTable4").DataTable({
        aaSorting: [],
        "order": [[ 3, "desc" ]],
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        responsive: true,
        columnDefs: [{
            responsivePriority: 1,
            targets: 0
        }, {
            responsivePriority: 2,
            targets: -1
        }],
        "createdRow": function (row, data, index) {

        }
    });
    $(".dataTables_filter input").attr("placeholder", "Cari...").css({
        width: "70%",
        display: "inline-block",
        'margin-top': "5px"
    });
    $(".form-control-sm").css({
        'min-height': "1rem"
    });
});


