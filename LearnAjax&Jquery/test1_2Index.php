<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script> -->
        <script language="javascript">
            function load_ajax(){
                $.ajax({
                    url : "result1.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         
                    },
                    success : function (re){
                        $('#r').html(re);
                    }
                });
            }
        </script>
    </head>
    <body>
        <div id="r">
            Nội dung ajax sẽ được load ở đây
        </div>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>