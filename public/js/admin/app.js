/* Form category */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    $('.categories-table').DataTable( {
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            { "orderable": false, "targets": 5 },
            { "orderable": false, "targets": 6 },
        ],
        "stripeClasses": []
    } );

} );

$('.category-edit').on('click' ,function() {
    $('#myModalLabel').text('Update Category')
    $('#myModal').modal('show');
    let id = $(this).data('id');
    $.ajax({
        type: 'get',
        url: 'categories/' + id + '/edit',
        success: function(data) {
            $('.formCategory input[name=name]').val(data.name);
            $('.formCategory option[value='+ data.parent_id +']').attr('selected', 'selected');
            $('#parent-category').trigger('change');
            $('.formCategory textarea').val(data.description);
            $('.formCategory').attr('action', 'categories/' + id);
            $('.formCategory').attr('method', 'post');
            $('.formCategory').attr('_method', 'patch');
        },
    });
});

$('.category-add').on('click', function() {
    clearCategoryData();
    clearCategoryErrorData();
    $('#myModalLabel').text('Add Category');
    $('#myModal').modal('show');
    $('.formCategory').attr('action', 'categories');
    $('.formCategory').attr('method', 'post');
    $('.formCategory').attr('_method', 'post');
});

$('.category-delete').on('click', function(e) {
    e.preventDefault();
    let _this = $(this);
    swal({
        title: 'Are you sure to delete?',
        text: "You will not be able to recover this data!",
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            let id = $(this).data('id');

            $.ajax({
                type: 'delete',
                url: ' categories/' + id,
                success: function () {
                    $('#datatable').DataTable().row(_this.parents('tr')).remove().draw(false);
                },
                error: function() {
                    swal("Can not detete this data!", {
                        icon: "error",
                    });
                },
            });
            swal("Done! This data has been deleted!", {
                icon: "success",
            });
        } else {
            swal("This data is safe!");
        }
    });
});

$('.formCategory').on('submit', function(e) {
    e.preventDefault();
    swal({
        title: 'Save change?',
        text: "All data will save!",
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
    .then((save) => {
        if (save) {
            let logo = $('#category-logo').prop('files')[0] ? $('#category-logo').prop('files')[0] : '';
            let image = $('#category-image').prop('files')[0] ? $('#category-image').prop('files')[0] : '';
            let method = $('.formCategory').attr('method');
            let url = $('.formCategory').attr('action');
            let form_data = new FormData();
            form_data.append('logo', logo);
            form_data.append('image', image);
            form_data.append('name', $('.formCategory input[name=name]').val());
            form_data.append('parent_id', $('.formCategory option:selected').val());
            form_data.append('description', $('.formCategory textarea').val());
            form_data.append('_method', $('.formCategory').attr('_method'));
            let _method = $('.formCategory').attr('_method');
            $.ajax({
                type: method,
                url: url,
                dataType: 'JSON',
                processData: false,
                contentType: false,
                data: form_data,
                success: function(data) {
                    let images = JSON.parse(data.images);
                    let logo = images.logo == 'null' ? "images/users/user-2.jpg" : images.logo;
                    let image = images.image == 'null' ? "images/users/user-2.jpg" : images.image;
                    let row = [
                        data.id,
                        '<div><img src="' + logo + '" alt="" class="thumb-md rounded-circle mr-2">'+ data.name +'</div>',
                        data.description,
                        '<img src="'+ image +'" alt="" class="thumb-md rounded-circle mr-2">',
                        data.parent_id,
                        '<div><button class="btn btn-outline-primary category-edit" data-id="' + data.id + '"><i class="far fa-edit"></i></button></div>',
                        '<div><button href="#" class="btn btn-outline-danger" data-id="' + data.id + '"><i class="far fa-trash-alt"></i></button></div>',
                    ];
                    if (_method == 'post') {
                        swal({
                            title: "Added successfully!",
                            icon: "success"
                        });
                        $('#datatable').DataTable().row.add(row).draw();
                    } else {
                        swal({
                            title: "Updated successfully!",
                            icon: "success"
                        });
                        $('#datatable').DataTable().row().data(row).draw();
                    }
                    clearCategoryData();
                    $('#myModal').modal('hide');
                },
                error: function(data) {
                    showCategoryErrorMessage(data);
                }
            });
        }
    });

});

function clearCategoryData() {
    $('.formCategory').trigger('reset');
    $('#parent-category').val(null).trigger('change');
}

function clearCategoryErrorData() {
    if ($('#cat-name').hasClass('field-error')) {
        $('#cat-name').removeClass('field-error');
    }
    $('#category-name-error').text('');

    if ($('#cat-description').hasClass('field-error')) {
        $('#cat-description').removeClass('field-error');
    }
    $('#category-description-error').text('');

    if ($('#select2-parent-category-container').parent('.select2-selection').hasClass('field-error')) {
        $('#select2-parent-category-container').parent('.select2-selection').removeClass('field-error');
    }
    $('#category-parent-error').text('');
}

function showCategoryErrorMessage(data) {
    if (data.status === 200) {
        swal("Ooops...", "Some thing went wrong", {
            icon: "error",
        });
    }
    if (data.status === 422) {
        if (data.responseJSON.errors.name) {
            clearCategoryErrorData();
            $('#cat-name').addClass('field-error');
            $('#category-name-error').text(data.responseJSON.errors.name[0]);
        }
        if (data.responseJSON.errors.parent_id) {
            $('#select2-parent-category-container').parent('.select2-selection').addClass('field-error');
            $('#category-parent-error').text(data.responseJSON.errors.parent_id[0])
        }
        if (data.responseJSON.errors.description) {
            $('#cat-description').addClass('field-error');
            $('#category-description-error').text(data.responseJSON.errors.description[0]);
        }
    }
}

$('#cat-name').on('input', function (){
    $('#cat-name').removeClass('field-error');
    $('#category-name-error').text('');
});

$('#cat-description').on('input', function (){
    $('#cat-description').removeClass('field-error');
    $('#category-description-error').text('');
});

$('#parent-category').on('change', function (){
    $('#select2-parent-category-container').parent('.select2-selection').removeClass('field-error');
    $('#category-parent-error').text('');
});
