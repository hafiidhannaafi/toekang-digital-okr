(function($) {
    'use strict';
    $.validator.setDefaults({
      submitHandler: function() {
        alert("submitted!");
      }
    });
    $(function() {
      // validate the comment form when it is submitted
      $("#commentForm").validate({
        errorPlacement: function(label, element) {
          label.addClass('mt-2 text-danger');
          label.insertAfter(element);
        },
        highlight: function(element, errorClass) {
          $(element).parent().addClass('has-danger')
          $(element).addClass('form-control-danger')
        }
      });
    $(function () {
        // validate signup form on keyup and submit
        $("#customer_edit").validate({
            rules: {
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
                customer_status: "Please select customer status"
            },
            errorPlacement: function(label, element) {
              label.addClass('mt-2 text-danger');
              label.insertAfter(element);
            },
            highlight: function(element, errorClass) {
              $(element).parent().addClass('has-danger')
              $(element).addClass('form-control-danger')
            }
          });
          // propose username by combining first- and lastname
          $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if (firstname && lastname && !this.value) {
              this.value = firstname + "." + lastname;
            }
          });
          //code to hide topic selection, disable for demo
          var newsletter = $("#newsletter");
          // newsletter topics are optional, hide at first
          var inital = newsletter.is(":checked");
          var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
          var topicInputs = topics.find("input").attr("disabled", !inital);
          // show when newsletter is checked
          newsletter.on("click", function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
          });
        });
      })(jQuery);