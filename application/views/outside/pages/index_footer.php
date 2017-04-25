<script>

    var x = 10;

    var x = 15;

    window.onload = function() {

        var x = 12;

        // alert(x);

        // alert(q('.header_right.menu_btn').innerHTML);
        // q('.header_right.menu_btn').innerHTML = '<a class="test" id="test111">1111</a>';
        // document.getElementById('test111').onclick = function(){ alert(this.innerHTML); };

        q('.users .user .del').onclick = function() {
            q('.selected_user').innerHTML = this.innerHTML

        };

        $('.users .user .del').on('click', function(){
            var user_id = $(this).parent().attr('user_id');
            // alert(user_id);
            $('.selected_user').html(user_id);
            $('.selected_user').attr('user_id', user_id);
        });

        $('span').on('click', function(){

            var span = $(this);

            span.after('<input type="text" class="input_addon" value="'+span.html()+'"/>');
            span.hide();


        });

    };

    $('body').on('focusout', '.input_addon', function(){

        $(this).prev().html($(this).val());
        $(this).prev().show();
        $(this).remove();

        $.get('/?i='+$(this).val(), function(data){
            alert(data);
        })


    });




    function q(selector) {
        return document.querySelector(selector);
    }

</script>