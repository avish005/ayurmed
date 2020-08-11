function send_message() {
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var message = $("#message").val();

    if (name == "") {
        alert('Please enter name');
    } else if (email == "") {
        alert('Please enter email');
    } else if (mobile == "") {
        alert('Please enter mobile');
    } else if (message == "") {
        alert('Please enter message');
    } else {
        $.ajax({
            url: 'send_message.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&message=' + message,
            success: function(result) {
                alert(result);
            }
        });
    }
}

function user_register() {
    $('.field_error').html('');
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var password = $("#password").val();
    var is_error = '';
    if (name == "") {
        $('#name_error').html('Please enter name');
        is_error = 'yes';
    }
    if (email == "") {
        $('#email_error').html('Please enter email');
        is_error = 'yes';
    }
    if (mobile == "") {
        $('#mobile_error').html('Please enter mobile');
        is_error = 'yes';
    }
    if (password == "") {
        $('#password_error').html('Please enter password');
        is_error = 'yes';
    }
    if (is_error == '') {
        $.ajax({
            url: 'register_submit.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&password=' + password,
            success: function(result) {
                if (result == 'email_present') {
                    $('#email_error').html('Email id already present');
                }
                if (result == 'mobile_present') {
                    $('#mobile_error').html('Mobile number already present');
                }
                if (result == 'insert') {
                    $('.register_msg p').html('Thank you for registeration');
                }
            }
        });
    }

}


function user_login() {
    $('.field_error').html('');
    var email = $("#login_email").val();
    var password = $("#login_password").val();
    var is_error = '';
    if (email == "") {
        $('#login_email_error').html('Please enter email');
        is_error = 'yes';
    }
    if (password == "") {
        $('#login_password_error').html('Please enter password');
        is_error = 'yes';
    }
    if (is_error == '') {
        $.ajax({
            url: 'login_submit.php',
            type: 'post',
            data: 'email=' + email + '&password=' + password,
            success: function(result) {
                if (result == 'wrong') {
                    $('.login_msg p').html('Please enter valid login details');
                }
                if (result == 'valid') {
                    window.location.href = window.location.href;
                }
            }
        });
    }
}


function manage_cart(pid, type) {
    if (type == 'update') {
        var qty = $("#" + pid + "qty").val();
    } else {
        var qty = $("#qty").val();
    }
    $.ajax({
        url: 'manage_cart.php',
        type: 'post',
        data: 'pid=' + pid + '&qty=' + qty + '&type=' + type,
        success: function(result) {
            if (type == 'update' || type == 'remove') {
                window.location.href = window.location.href;
            }
            if (result == 'not_available') {
                if (window.location = 'cart.php') {
                    $('.not_enough_stock').html('Not enough stock');
                } else {
                    alert("Not enough stock");
                }
            } else {
                $('.htc__qua').html(result);
            }

        }
    });
}

function sort_product_drop(cat_id, site_path, sub_categories) {
    var sort_product_id = $('#sort_product_id').val();
    window.location.href = site_path + "categories.php?id=" + cat_id + "&sub_categories=" + sub_categories + "&sort=" + sort_product_id;
}

function wishlist_manage(pid, type) {
    $.ajax({
        url: 'wishlist_manage.php',
        type: 'post',
        data: 'pid=' + pid + '&type=' + type,
        success: function(result) {
            if (result == 'not_login') {
                window.location.href = 'login.php';
            } else {
                $('.htc__wishlist').html(result);
            }
        }
    });
}

/* PRELOADER */



/*

image compression
*/
$(document).ready(function() {
    $('#img-tab-1 img').each(function() {
        var maxWidth = 600; // Max width for the image
        var maxHeight = 450; // Max height for the image
        var ratio = 0; // Used for aspect ratio
        var width = $(this).width(); // Current image width
        var height = $(this).height(); // Current image height

        // Check if the current width is larger than the max
        if (width > maxWidth) {
            ratio = maxWidth / width; // get ratio for scaling image
            $(this).css("width", maxWidth); // Set new width
            $(this).css("height", height * ratio); // Scale height based on ratio
            height = height * ratio; // Reset height to match scaled image
            width = width * ratio; // Reset width to match scaled image
            $('#height').html(Math.round(height) + ' px');
        }

        // Check if current height is larger than max
        if (height > maxHeight) {
            ratio = maxHeight / height; // get ratio for scaling image
            $(this).css("height", maxHeight); // Set new height
            $(this).css("width", width * ratio); // Scale width based on ratio
            width = width * ratio; // Reset width to match scaled image
            $('#width').html(Math.round(width) + ' px');
        }
    });
});