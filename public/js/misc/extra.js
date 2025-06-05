$('#project_text')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#project_text_h_n').val(li.val());
    });

$('#project_text_f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#project_text_f_h_n').val(li.val());
    });


$('#education-time')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#education-time-h').val(li.val());
    });

$('#education-time-f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#education-time-f-h').val(li.val());
    });
$('#education-place')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#education-place-h').val(li.val());
    });

$('#education-place-f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#education-place-f-h').val(li.val());
    });
$('#education-course')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#education-course-h').val(li.val());
    });

$('#education-course-f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#education-course-f-h').val(li.val());
    });


$('#occupation-time')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#occupation-time-h').val(li.val());
    });

$('#occupation-time-f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#occupation-time-f-h').val(li.val());
    });
$('#occupation-place')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#occupation-place-h').val(li.val());
    });

$('#occupation-place-f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#occupation-place-f-h').val(li.val());
    });
$('#occupation-jobs')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#occupation-jobs-h').val(li.val());
    });

$('#occupation-jobs-f')
    .editableSelect({effects: 'slide'})
    .on('select.editable-select', function (e, li) {
        $('#occupation-jobs-f-h').val(li.val());
    });


setTimeout(function () {
    let address = window.location.search;
    if (address.includes('query=questions')) {
        $("#showContact").trigger("click");
        setTimeout(function () {
            $('#contactShow').modal('show');
        }, 100);
    }
}, 100);


function clearSearch() {
    window.location.search = ''
}
