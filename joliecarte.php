<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edenis</title>
    <link rel="stylesheet" href="node_modules/mini.css/dist/mini-default.min.css">
    <link rel="stylesheet" href="map_mende/01_enedis/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
</head>
<body>
    <div id="progressbar">

    </div>
</body>
<script src="node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(function() {
            var x = 30
            $("#progressbar").progressbar({
                value : 30
            });
            $(".ui-widget-header").css("background-color", "green");
            if (x <= 50) {
                $(".ui-widget-header").css("background-color", "red");
            };
        // console.log($("#progressbar").val)

        //anneeprec x 100 / annecourante;
    })
    })
</script>
</html>
