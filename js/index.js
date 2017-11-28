$(function(){
    //CHECKBOXES
    $(".check").change(function(event){
        var value = "." + $(this).val();
        $(value).fadeToggle("slow");
    });
    
    //FOOTER
    $("#aboutme").click(function(){
        $("#modal_aboutme").show();
    });
    $("#x_aboutme").click(function(){
        $("#modal_aboutme").hide();
    });
    $("#footer_terms_info").click(function(){
        $("#modal_terms").show();
    });
    $("#x_terms").click(function(){
        $("#modal_terms").hide();
    });
    $(window).click(function(event){
        if (event.target == modal_aboutme){
            $("#modal_aboutme").hide();
        } else if (event.target == modal_terms){
            $("#modal_terms").hide();
        }
    });
    
    //MAIL
    $("#mail").click(function(){
        $("#modal_note").hide();
        $("#modal_form").show();
        $("#subject").val("");
        $("#message").val("");
        $("#email").val("");
        $("#modal").show();
    });
    $("#x").click(function(){
        $("#modal").hide();
    });
    $(window).click(function(event){
        if (event.target == modal){
            $("#modal").hide();
        }
    });
    $("#send").click(function(){
        if(validateForm()){
            $.ajax({
                type: "GET",
                url: "/site/php/mail.php",
                dataType: "text",
                data: {
                    subject: $("#subject").val(),
                    message: $("#message").val(),
                    email: $("#email").val()
                }, 
                beforeSend: function(){
                    $("#form").blur();
                    $("#modal_form").hide();
                },
                error: function(){
                    $("#modal_note").html("Transmission failed.").show();
                },
                success: function (){
                    $("#modal_note").html("<i class='fa fa-envelope-o'></i><br>Thanks for your mail. I will respond promptly.").show();
                }
            });
        }
    });
    function validateForm(){
        if ($("#subject").val() == ""){
            alert("Please fill in a subject.");
            return false;
        } else if ($("#message").val() == ""){
            alert("Please write a message.");
            return false;
        } else if ($("#email").val() == "" || !validateEmail($("#email").val())){
            alert("Please provide a valid email address.");
            return false;
        }
        return true;
    }
    function validateEmail(email){
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
            return true;
        } else {
            return false;
        }
    }
});