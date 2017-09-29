$(function(){
    $(".check").change(function(event){
        var value = "." + $(this).val();
        $(value).fadeToggle("slow");
    });
})

function shuffle(){
    var boxes = $(".box");
    var container = $("#container");
    var nums = [];
    while(nums.length < boxes.length){
        var randNum = Math.round(Math.random()*(boxes.length-1))
        //returns -1 if the value does not occur
        if(nums.indexOf(randNum) == -1){
            nums[nums.length] = randNum;
        } else{
            continue;
        }
    }
    nums.forEach(function(num){
       container.append(boxes[num]) 
    });
};