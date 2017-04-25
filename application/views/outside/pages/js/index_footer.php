<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">

    $(function(){

        // ======================================= Save MAIN Form ============================
        $('.save_form').on('click', function(){

            var options = {
                url: "/js/save/",
                success: function(data) {
                    alert(data);
                }
            };
            $("#inputs_form").ajaxSubmit(options);

        });

        // ======================================= TABLE ============================

        $.get('/js/table/', function(data){
            $('.table_holder').html(data);
            $( ".sortable" ).sortable({
                stop: function( ) {
                    var priority_arr = [];
                    $(".table_holder .sortable tr").each(function(){
                        priority_arr.push($(this).attr('db_id'));
                    });
                    $.get('/js/sorting_save/?data='+encodeURI(JSON.stringify(priority_arr)),function(data){alert(data)});
                }
            });
        });

        // ======================================= TABLE ADD FORM ============================

        $('.table_holder').on('click', '.btn_table_add', function(){

            $.get('/js/add_form/', function(data){
                $('h4.modal-title').html('ADD');
                $('.table_modal_content').html(data);
            });

        });

        // ======================================= TABLE ADD REQUEST ============================

        $('.table_modal_content').on('click', '.add_request', function(){

            var options = {
                url: "/js/add_request/",
                success: function(data) {
                    alert(data);
                }
            };
            $(this).parent().parent().ajaxSubmit(options);

        });

        // ======================================= TABLE EDIT FORM ============================

        $('.table_holder').on('click', '.btn_table_edit', function(){

            var id = $(this).parent().parent().attr('db_id');

            $.get('/js/edit_form/'+id, function(data){
                $('h4.modal-title').html('EDIT #'+id);
                $('.table_modal_content').html(data);
            });

        });

        // ======================================= TABLE EDIT REQUEST ============================

        $('.table_modal_content').on('click', '.add_request', function(){

            var options = {
                url: "/js/add_request/",
                success: function(data) {
                    alert(data);
                }
            };
            $(this).parent().parent().ajaxSubmit(options);

        });

        // ======================================= TABLE DELETE FORM ============================

        $('.table_holder').on('click', '.btn_table_del', function(){
            var that = $(this);
            var line = that.parent().parent();
            if (confirm('Delete?')) {
                $.get('/js/del/'+line.attr('db_id'));
                line.remove();
            }
        });

        // ======================================= TABLE DELETE FORM ============================
        $('.table_holder').on('click', '.drop_children_btn', function(){
            var line = $(this).parent().parent();


            if (line.hasClass('active')) {

                line.removeClass('active');
                $(this).html('show');
                $('tr[parent_id='+line.attr('db_id')+']').remove();

            } else {

                line.addClass('active');

                $.get('/js/get_children/'+line.attr('db_id'),function(data){
                    line.after(data);
                });
                $(this).html('hide');

            }




        });


    });
</script>