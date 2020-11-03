<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstrap js cdn -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>
    <div id="one">

    </div>

    <div id="all">

    </div>

    <div id="load_comments">

    </div>

    <script>
        $(document).ready(function() {
            // load 1 bản ghi
            $.ajax({
                type: "get",
                url: "https://jsonplaceholder.typicode.com/posts/4",
                data: $("form").serialize(),
                success: function(data) {
                    $("#one").append(data.id + "<br>" + data.title + "<br>" + data.body);
                }
            });

            // load all
            $.ajax({
                type: "get",
                url: "https://jsonplaceholder.typicode.com/posts",
                data: $("form").serialize(),
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        $("#all").append(data[i].id + "<br>" + data[i].title + "<br>" + data[i].body);
                    }
                }
            });

            // Jquery shortcuts để đọc JSON
            $.getJSON(
                "comments.json", // đây là url của file json ta để 
                function(data) {
                    $.each(data, function(key, value) {
                        $("#load_comments").append(value.id + "<br>" + value.name + "<br>" + value.email);
                    })
                }
            );
        });
    </script>
</body>

</html>