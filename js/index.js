$(function(){
    //CHECKBOXES
    $(".check").change(function(event){
        var value = "." + $(this).val();
        $(value).fadeToggle("slow");
    });
});
