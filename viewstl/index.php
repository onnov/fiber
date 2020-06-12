<?php

$dir = 'stl';
$file = '/fiber/stl/main002.stl';

if (isset($_GET['d'], $_GET['f'])) {
    $dir = $_GET['d'] ;
    $file = '/fiber/' . $dir . '/' . $_GET['f'] . '.' . $dir;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport"
          content="width=device-width, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>Project Fiber</title>

    <style>
        #stl_cont {
            position: fixed;
            top: 15px;
            left: 150px;
            width: calc(100% - 165px);
            height: calc(100% - 30px);
            border: 1px solid darkred;
        }

        /*a {*/
        /*    display: block;*/
        /*    float: left;*/
        /*}*/
    </style>

</head>
<body>

<a href="/fiber/?d=stl&f=main002">"Блин002.stl"</a><br>
<a href="/fiber/?d=svg&f=main002">"Блин002.svg"</a><br>
<a href="/fiber/?d=stl&f=cap001">Крышка001.stl</a><br>
<a href="/fiber/?d=stl&f=cap002">Крышка002.stl</a><br>
<a href="/fiber/?d=stl&f=angle001">Уголок001.stl</a><br>
<a href="/fiber/?d=stl&f=ringTop">Верх.кольцо.stl</a><br>
<a href="/fiber/?d=stl&f=ringBottom">Ниж.кольцо.stl</a><br>
<a href="/fiber/?d=stl&f=axis">Ось.stl</a><br>
<hr>
<a href="/fiber/?d=stl&f=model000">Сборка000.stl</a><br>
<a href="/fiber/?d=stl&f=model001">Сборка001.stl</a><br>
<a href="/fiber/?d=stl&f=model002">Сборка002.stl</a><br>
<a href="/fiber/?d=stl&f=model003">Сборка003.stl</a><br>

<?php
if ($dir == 'svg') { ?>
    <img id="stl_cont" style="background: #fff;" src="<?= $file ?>">
    <?php
}
?>

<?php
if ($dir == 'stl') { ?>
    <div id="stl_cont" style="background: lightgray;"></div>

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
                        filename: "<?= $file ?>",
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
    <?php
}
?>
</body>
</html>
