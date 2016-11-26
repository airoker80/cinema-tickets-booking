<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle();
    });
});
</script>
</head>
<body>
<button>Watch Location</button>
<p><img id="image" src="img/civilmall.jpg" alt="no image displayed"></p>



</body>
</html>