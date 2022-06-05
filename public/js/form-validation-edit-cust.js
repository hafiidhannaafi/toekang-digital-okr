(function ($) {
    "use strict";
    $.validator.setDefaults({
        submitHandler: function () {
            alert("submitted!");
        },
    });
    $(function () {
        // validate the comment form when it is submitted

        // validate signup form on keyup and submit
        $("#customer_edit").validate({
            rules: { 
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2,
                },
                password: {
                    required: true,
                    minlength: 5,
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password",
                },
                email: {
                    required: true,
                    email: true,
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2,
                },
                agree: "required",
                customer_phone: {
                    required: true,
                    minlength: 10,
                    number: true,
                },
                customer_fax: { 
                    minlength: 10,
                    phonenu: true,
                },
                email: {
                    required: true,
                    email: true
                  },
                customer_website: {
                    minlength: 5,
                    url: true,
                },
                customer_status: "required",
                customer_address: {
                    required: true,
                    minlength: 10,
                },
                customer_name: {
                    required: true,
                    minlength: 3,
                },
                customer_email: {
                    required: true,
                    email: true,
                }
            },
            messages: { 
                customer_name: {
                    required: "Please enter customer name",
                    minlength:
                        "Customer name must consist of at least 3 characters"
                },
                email: "Please enter a valid email address",
                customer_address: {
                    required: "Please enter customer name",
                    minlength:
                        "Customer address must consist of at least 10 characters"
                },
                customer_website: { 
                    minlength:
                        "Customer FAX must consist of at least 10 characters"
                },
                customer_phone: { 
                    required: "Please enter customer phone",
                    minlength:
                        "Customer phone must consist of at least 10 characters"
                },
                customer_fax: { 
                    minlength:
                        "Customer website must consist of at least 5 characters"
                },
                customer_email: {
                    required: "Please enter customer email"
                },
                customer_status: "Please select customer status",
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                username: {
                    required: "Please enter a username",
                    minlength:
                        "Your username must consist of at least 2 characters",
                },
                password: {
                    required: "Please provide a password",
                    minlength:
                        "Your password must be at least 5 characters long",
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength:
                        "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above",
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy",
                topic: "Please select at least 2 topics",
            },
            errorPlacement: function (label, element) {
                label.addClass("mt-2 text-danger");
                label.insertAfter(element);
            },
            highlight: function (element, errorClass) {
                $(element).parent().addClass("has-danger");
                $(element).addClass("form-control-danger");
            },
        });
    });
})(jQuery);
