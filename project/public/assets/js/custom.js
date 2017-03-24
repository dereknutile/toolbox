$(document).ready(function() {
    $(".datatable").dataTable({
        "order": [[ 0, "desc" ]]
    });
    $(".datatable-asc").dataTable({
        "order": [[ 0, "asc" ]]
    });

    $("[data-toggle='tooltip']").tooltip();

    tinymce.init({
        selector: "textarea",
        menubar: false,
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    });

    $(".select2-single").select2({
        placeholder: "Type to select",
        allowClear: true
    });

    $(".select2-multiple").select2({
        placeholder: "Type to select multiple options",
        allowClear: true
    });

    $(".select2-tags").select2({
        placeholder: "Type to add tags",
        tags: true
    });

    $(".select2-systems").select2({
        placeholder: "Type to add systems",
        tags: true
    });

    $(".alert-fade-away").delay(3000).slideUp(300);

    $("#startDateTimePicker").datetimepicker();
    $("#endDateTimePicker").datetimepicker();
});
