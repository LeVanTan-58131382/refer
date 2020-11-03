<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstrap js cdn -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        load();

        function load() {
            $.ajax({
                type: "post",
                url: "ajax_load.php",
                success: function(response) {
                    $("#content").html(response)
                }
            });
        }

        function xoa(id) {
            $.ajax({
                type: "post",
                url: "ajax_load.php",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response)
                    load();
                }
            });
        }
    </script>
    <title>Title</title>
</head>

<body>

    <div class="container">
        <br>
        <br>
        <br>
        <div id="search">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">Navbar</a>
                <form class="form-inline">
                    <input id="input_search" name="input-search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="nut_search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
        <div id="ketqua_search">

        </div>
        <br>
        <br>
        <br>
        <div id="content">

        </div>

        <div>
            <form class="form-control" action="">
                Tên: <input class="form-control" type="text" name="ten" id="ten">
                Tuổi: <input class="form-control" type="number" name="tuoi" id="tuoi">
                <button class="btn btn-primary" id="add">Thêm</button>
            </form>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $("#add").click(function(e) {
            e.preventDefault();
            console.log("kk");
            // var ten = $("#ten").val();
            // var tuoi = $("#tuoi").val();

            $.ajax({
                type: "post",
                url: "ajax_load.php",
                data: $("form").serialize(),
                success: function(response) {
                    $("form").trigger("reset")
                    load();
                }
            });
        });

        $(".update_student").click(function(e) {
            e.preventDefault();

            var id = $(this).data('id');

            var id_input_ten = "ten_" + id;
            var id_input_tuoi = "tuoi_" + id;

            var ten = $('#' + id_input_ten).val();
            var tuoi = $('#' + id_input_tuoi).val();

            console.log(id);
            console.log(ten);
            console.log(tuoi);

            $.ajax({
                type: "post",
                url: "ajax_load.php",
                data: {
                    id_capnhat: id,
                    ten_capnhat: ten,
                    tuoi_capnhat: tuoi
                },
                success: function(response) {
                    location.reload();
                    load();
                }
            });
        });

        $("#input_search").on("keyup", function() {
            var search_term = $(this).val();
            console.log(search_term);
            $.ajax({
                url: "ajax_load.php",
                type: "POST",
                data: {
                    input_search: search_term
                },
                success: function(data) {
                    // nếu dc thì đổ dữ liệu ra
                    //$("#table-data").html(data);
                    //$("#ketqua_search").html(data);
                    $("#content").html(data);
                }
            });
        });
    });
</script>

</html>