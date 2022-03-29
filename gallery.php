<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <?php include "menu.php"; ?>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .header {
        text-align: center;
        padding: 32px;
    }

    .row {
        display: -ms-flexbox;
        /* IE 10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE 10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create two equal columns that sits next to each other */
    .column {
        -ms-flex: 50%;
        /* IE 10 */
        flex: 50%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Style the buttons */
    .btn {
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color: #f1f1f1;
        cursor: pointer;
        font-size: 18px;
    }

    .btn:hover {
        background-color: #ddd;
    }

    .btn.active {
        background-color: #666;
        color: white;
    }
    </style>
</head>

<body>
    <section class="container">
        <!-- Header -->
        <div class="header" id="myHeader">
            <h1 class="text-primary">Our Gallery</h1>
            <p>All Events and function images gallery</p>
            <button class="btn" onclick="one()">1</button>
            <button class="btn active" onclick="two()">2</button>
            <button class="btn" onclick="four()">4</button>
        </div>

        <!-- Photo Grid -->
        <div class="row mb-5">
            <div class="column">
                <img src="images/gallery/1.jpg" style="width:100%">
                <img src="images/gallery/gallery-2.jpg" style="width:100%">
                <img src="images/gallery/3.jpg" style="width:100%">
                <img src="images/gallery/gallery-4.jpg" style="width:100%">
                <img src="images/gallery/gallery-5.jpg" style="width:100%">
                <img src="images/gallery/gallery-6.jpg" style="width:100%">
                <img src="images/gallery/gallery-7.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="images/gallery/gallery-9.jpg" style="width:100%">
                <img src="images/gallery/gallery-8.jpg" style="width:100%">
                <img src="images/gallery/gallery-7.jpg" style="width:100%">
                <img src="images/gallery/5.jpg" style="width:100%">
                <img src="images/gallery/gallery-4.jpg" style="width:100%">
                <img src="images/gallery/gallery-3.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="images/gallery/gallery-1.jpg" style="width:100%">
                <img src="images/gallery/2.jpg" style="width:100%">
                <img src="images/gallery/gallery-9.jpg" style="width:100%">
                <img src="images/gallery/gallery-8.jpg" style="width:100%">
                <img src="images/gallery/gallery-7.jpg" style="width:100%">
                <img src="images/gallery/gallery-6.jpg" style="width:100%">
                <img src="images/gallery/gallery-4.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="images/gallery/gallery-9.jpg" style="width:100%">
                <img src="images/gallery/2.jpg" style="width:100%">
                <img src="images/gallery/gallery-7.jpg" style="width:100%">
                <img src="images/gallery/gallery-8.jpg" style="width:100%">
                <img src="images/gallery/gallery-6.jpg" style="width:100%">
                <img src="images/gallery/4.jpg" style="width:100%">
            </div>
        </div>
        </section>
        <script>
        // Get the elements with class="column"
        var elements = document.getElementsByClassName("column");

        // Declare a loop variable
        var i;

        // Full-width images
        function one() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "100%"; // IE10
                elements[i].style.flex = "100%";
            }
        }

        // Two images side by side
        function two() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "50%"; // IE10
                elements[i].style.flex = "50%";
            }
        }

        // Four images side by side
        function four() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.msFlex = "25%"; // IE10
                elements[i].style.flex = "25%";
            }
        }

        // Add active class to the current button (highlight it)
        var header = document.getElementById("myHeader");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
        </script>
        <?php include "footer.php"; ?>

</body>

</html>