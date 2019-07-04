$(document).ready(function(){




    // --------------fetch function--------------------
    function fetchData()
    {
        $.ajax({

                url:"fetch.php",
                method:"POST",
                success:function(data)
                {
                    $('#myresult').html(data);
                }
        });
    }

    fetchData();

    // -----------------------insert data---------------------------------

    $(document).on('click','#add',function(){

        var surname = $('#surname').text();
        var firstname = $('#firstname').text();
        var email = $('#email').text();
        var phone_number = $('#phone_number').text();
        if(surname == '')
        {
            alert("Enter surname");
            return false;
        }
        if(firstname == '')
        {
            alert("Enter first name");
            return false;
        }
        if(email == '')
        {
            alert("Enter email");
            return false;
        }
        if(phone_number == '')
        {
            alert("Enter phone number");
            return false;
        }

        $.ajax({

            url:"insert.php",
            method:"POST",
            dataType:"text",
            data:{
                firstname:firstname,
                surname:surname,
                email:email,
                phone_number:phone_number
            },
            success:function(data)
            {

                $('#alert').html(data);
                fetchData();
            }

        });

    });

// -----------------------------edit data------------------------------------


function editData(id,text,column_name)
{
    $.ajax({

            url:"edit.php",
            method:"POST",
            data:{
                id:id,
                text:text,
                column_name:column_name
            },
            dataType:"text",
            success:function(data)
            {
                $('#alert').fadeIn().html(data);
                setTimeout(function(){
        
                    $('#alert').slideUp(2000);
        
                },2000);

            }

    });
}

// --------------------------------------------------------------

$(document).on('blur','.surname',function(){

        var id = $(this).data("id1");
        var surname = $(this).text();

        editData(id,surname,"surname");


});

$(document).on('blur','.firstname',function(){

        var id = $(this).data("id2");
        var firstname = $(this).text();

        editData(id,firstname,"firstname");


});

$(document).on('blur','.email',function(){

        var id = $(this).data("id3");
        var email = $(this).text();

        editData(id,email,"email");


});

$(document).on('blur','.phone_number',function(){

        var id = $(this).data("id4");
        var phone_number = $(this).text();

        editData(id,phone_number,"phone_number");


});

// --------------------------delete data--------------------------
$(document).on('click','#del',function(){

            
            var id = $(this).data("id5");
            var parent = $('tr#'+id+'');
            if(confirm("Are you sure you want to delete this?"))
            {
                    $.ajax({

                        url:"delete.php",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        beforeSend: function() {
                            parent.animate({'opacity':'0.6'},1000);
                        },
                        success:function(data)
                        {
                            
                            $('#alert').fadeIn().html(data);
                            setTimeout(function(){
                    
                                $('#alert').slideUp(2000);
                    
                            },2000);
                            
                            parent.css("background-color","red");
                            parent.fadeOut(1000);
                        }

                    });
            }
            else
            {
                return false;
            }
          
});

// --------------------------fade out function-------------------------------------

      


});