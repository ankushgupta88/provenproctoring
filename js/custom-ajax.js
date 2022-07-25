$(document).ready(function() {
    //Code for add to cart
    $(document).on("click",".custom_add_to_cart",function(e) {
        e.preventDefault();
        var product_id = $(this).attr("data-product_id");
        var product_count = $(this).attr("data-product_count");
         //alert(product_id); 
         
        $.ajax({
            url : "submit/cart.php",
            type : 'POST',
            data: {
                product_id: product_id, 
                action: "add_to_cart"  
            },
            beforeSend: function() {
               $(this).attr("disabled", true); 
            },
            success : function (response) {
                $('.add_to_cart_responce'+product_count).html(response);
                $(this).attr("disabled", false);
                setTimeout(function() {
                    $('.msg-success').fadeOut("slow");
                    $('.msg-unsuccess').fadeOut("slow");
                }, 3000); 
            } 
       });
    });
     
    //Code for remove cart item from cart
    $(document).on("click",".remove_cart_item",function(e) {
        e.preventDefault();
        var product_id = $(this).attr("data-product_id");
        //alert(product_id); 
         
        $.ajax({
            url : "submit/cart.php",
            type : 'POST',
            data: {
                product_id: product_id, 
                action: "remove_cart_item"  
            },
            beforeSend: function() {
               $(this).attr("disabled", true); 
            },
            success : function (response) {
                $('.remove_cart_item_responce').html(response);
                $(this).attr("disabled", false);
                setTimeout(function() {
                    $('.msg-success').fadeOut("slow");
                    $('.msg-unsuccess').fadeOut("slow");
                    location.reload();
                }, 3000); 
            } 
       });
    }); 
    
    //Submit contact_form start 
    $("#contact_form").validate({
        rules: {
            fullname: "required",
            email: {
                required: true,
                email: true,
            },
            message: "required",
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#contact_form').submit(function(e) {
        e.preventDefault();
        if ($('#contact_form').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/contact-form-submit.php?" + $("#contact_form").serialize(), {}, function(response) {
                //console.log(response);
                $('.contact_form_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false 
        } 
    });
    //Submit contact_form order end
    
    //Submit login_form start 
    $("#login_form").validate({
        rules: {
            password: "required",
            email: {
                required: true,
                email: true,
            },
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#login_form').submit(function(e) {
        e.preventDefault();
        if ($('#login_form').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/login-form-submit.php?" + $("#login_form").serialize(), {}, function(response) {
                //console.log(response);
                $('.login_form_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false 
        } 
    });
    //Submit login_form end
    
    //Submit register_form start 
    $("#register_form").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            phone_number: {
                required: true,
                number: true,
            },
            email: {
                required: true,
                email: true,
            },
            password: "required",
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#register_form').submit(function(e) {
        e.preventDefault();
        if ($('#register_form').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/register-form-submit.php?" + $("#register_form").serialize(), {}, function(response) {
                //console.log(response);
                $('.register_form_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false; 
        } 
    });
    //Submit register_form end
    
    //Submit checkout_form start 
    $("#checkout_form").validate({
        rules: {
            fname: "required",
            lname: "required",
            email: {
                required: true,
                email: true,
            },
            phone_number: {
                required: true,
                number: true,
            },
            street_address: "required",
            city: "required",
            state: "required",
            zip_code: {
                required: true,
                number: true,
            },
            billing_country: "required",
            card_number: {
                required: true,
                number: true,
            },
            cc_expmonth: "required",
            cc_expyear: "required",
            ccv_code: {
                required: true,
                number: true,
            },
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#checkout_form').submit(function(e) {
        e.preventDefault();
        if ($('#checkout_form').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/checkout-form-submit.php?" + $("#checkout_form").serialize(), {}, function(response) {
                //console.log(response);
                $('.checkout_form_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false; 
        } 
    });
    //Submit checkout_form end
    
    //Change passwod
    $('body').on('submit', '#change_user_password', function(event) {
        event.preventDefault();
        $("#change_user_password").validate({
            rules: {
                old_password: { 
                    required: true,
                },
                new_password : {
                    required: true
                },
             confirmpassword: {
                required: true,
                equalTo: "#newpass"
            },
               
            },
            messages: {
                confirmpassword: "New password and confirm password not matched.",
            }
        });
    
        if($('#change_user_password').valid()) {
            $('.submit_disable').attr('disabled', true);
            $.post("submit/submit-change-password.php?"+$("#change_user_password").serialize(), {}, function(response) {
                $('.submit_disable').attr('disabled', false);
                    $('.change_password_responce').html(response);
            });
        }
    });
    
    //Submit update_user_profile start 
    $("#update_user_profile").validate({
        rules: {
            first_name: "required",
            last_name: "required",
            phone_number: {
                required: true,
                number: true,
            },
            email: {
                required: true,
                email: true,
            },
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#update_user_profile').submit(function(e) {
        e.preventDefault();
        if ($('#update_user_profile').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/update-profile.php?" + $("#update_user_profile").serialize(), {}, function(response) {
                //console.log(response);
                $('.update_profile_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false; 
        } 
    });
    //Submit register_form end
    
    
    //Submit update_user_pic start 
    $("#update_user_pic").validate({
        rules: {
            upload_profileimage : {
                required: true
            },
        },
        submitHandler: function(form,e) {
            e.preventDefault();
            var imgfile = $('#upload_profileimage')[0].files[0];
            var form = new FormData();
            form.append('upload_profileimage', imgfile);
            
            $.ajax({
                url : 'submit/update-profile-pic.php',
                type : 'POST',
                data: form,
                processData: false,
                contentType: false, 
                mimeType: "multipart/form-data",
                beforeSend: function() {
                   $('.submit_disable').attr('disabled', true);
                },
                success : function (response) {
                    $('.submit_disable').attr('disabled', false);
                    $('.update_user_pic_res').html(response);
                },
            });   
            return false;
         }
    });
    //Submit register_form end
});