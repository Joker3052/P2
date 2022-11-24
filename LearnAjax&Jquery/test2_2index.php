<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script language="javascript">
        function load_ajax() {
            //jQuery.post( url [, data ] [, success ] [, dataType ] )
            // URL
            var url = "result2.php";

            // Data
            var data = {
                num: $('#number').val()
            };

            // Success Function
            var success = function(result) {
                $('#result').html(result);
            };

            // Result Type
            var dataType = 'text';

            // Send Ajax
            $.post(url, data, success, dataType);
        }

        //         function load_ajax()
        // {
        //     $.post(
        //             'result2.php', // URL 
        //             {num : $('#number').val()},  // Data
        //             function(result){ // Success
        //                 $('#result').html(result);
        //             }, 
        //             'text' // dataTyppe
        //     );
        // }
    </script>
</head>

<body>
    <div id="result">
        Nội dung ajax sẽ được load ở đây
    </div>
    <br />
    <input type="text" value="" id="number" />
    <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me" />
</body>

</html>