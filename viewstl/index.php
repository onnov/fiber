<?php
$stl = 'main002';

if (isset($_GET['f'])) {
    $stl = $_GET['f'];
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Project Fiber</title>

    <style>
        #stl_cont {
            position: fixed;
            top: 15px;
            left: 150px;
            width: calc(100% - 165px);
            height: calc(100% - 30px);
            background: lightgray;
            border: 1px solid darkred;
        }
        /*a {*/
        /*    display: block;*/
        /*    float: left;*/
        /*}*/
    </style>

</head>
<body>

<a href="/fiber/?f=main002">"Блин002"</a><br>
<a href="/fiber/?f=cap001">Крышка001</a><br>
<a href="/fiber/?f=cap002">Крышка002</a><br>
<a href="/fiber/?f=angle001">Уголок001</a><br>

<div id="stl_cont"></div>

<script src="/fiber/js/stl_viewer.min.js"></script>
<script>
    let stl_viewer = new StlViewer
    (
        document.getElementById("stl_cont"),
        {
            auto_rotate: true,
            // bgcolor: "#20FAAC",
            allow_drag_and_drop: true,
            models: [
                {
                    id: 1,
                    filename: "/fiber/stl/<?=$stl?>.stl",
                    color: '#9999ff',
                    // edges: true,
                    opacity: 0
                }
            ]
        }
    );

    // stl_viewer.remove_model(0);
    // stl_viewer.clean();
    // stl_viewer.add_model({id:2, filename:'../cap002.stl'});
    // stl_viewer.add_models([{id: 1, filename: "cap002.stl"}]);
    // stl_viewer.set_color (0, "#0000FF");
    // stl_viewer.set_opacity(2, 1);
    // stl_viewer.set_edges(0, true);

</script>
</body>
</html>
