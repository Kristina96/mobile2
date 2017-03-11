$(function(){
$('#formReg').slideUp();
$('#btnReg').on({
    click:function(event){
    //скрытие формы
    $('#formReg').slideDown();
    }
});
$('#formReg').on({
    submit: function(event){
        event.preventDefault();
        $data=$(this).serialize();
        
        $.ajax({
            type: "POST",
            url: "reg.php",
            data: $data,
            success: function(response){
                console.log(response);
            }, 
            error: function (response){
                
            }
        });
    }
    });
$('#formAuth').on({
    submit: function(event){
        event.preventDefault();
        $data=$(this).serialize();
        
        $.ajax({
            type: "POST",
            url: "auth.php",
            data: $data,
            success: function(response){
                console.log(response);
            }, 
            error: function (response){
                console.log(response);
            }
        });
    }
    });
    
});