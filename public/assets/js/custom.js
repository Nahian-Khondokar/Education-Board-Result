(function($){
    $(document).ready(function(){

        // Result Add Modal Show
        $(document).on('click', 'a#add_result_btn', function(e){
            e.preventDefault();

            $('#add_result_modal').modal('show');
            
        });

        // Result Add Modal Submit
        $(document).on('submit', '#add_result_form', function(e){
            e.preventDefault();


            $.ajax({
                url : 'result_store',
                method : 'POST',
                data : new FormData(this),
                contentType : false,
                processData : false,
                success : function(data){
                    $('#add_result_modal').modal('hide');
                    $('#add_result_form')[0].reset();
                }
            });
            
        });




        // Result Checking System
        $(document).on('submit', '#result_check_form', function(e){
            e.preventDefault();

            $.ajax({
                url : 'result_check',
                method : 'POST',
                data : new FormData(this),
                contentType : false,
                processData : false,
                success : function(d){
                    alert(d);
                }
            });
            
        });



        // Result Checking System
        $(document).on('submit', '#result_check_form', function(e){
            e.preventDefault();

            $.ajax({
                url : 'result',
                success : function(data){
                    alert(data.name);
                    
                }
            });
            
        });






        // allStudent();
        // function allStudent(){
        //     $.ajax({
        //         url : 'result',
        //         success : function(data){
        //             alert(data.name);
        //         }
        //     });
        // }


    })
})(jQuery)


