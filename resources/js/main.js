$(document).ready(function() {

$.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

$('#search').on('keyup',function() {
           var query = $(this).val();
           if(query.length > 0){
$.ajax({
                url:"/filter",
                 type:"GET",
                data:{'search':query},
                success:function(res){
                    $('#search_list').html(res);
$('#description').hide()
            }
        })

           }else{
               $('#search_list').html('<h5 class="text-center">Empty Query</h5>');
               $('#description').show()

           }
           
        });


    $("#age").change(function() {
        var age = $("#age").val();

        if (age > 40) {
            age = 40
            $("#age").val(40);
        } else {
            if (age < 10) {
                age=10
                $("#age").val(10);
            }
        }

        $("#display_age").text("="+" "+ age +" "+"Yrs");
    });
});
