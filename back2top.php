<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>back to top</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <style>
        button{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #myBtn {
            /* Hidden by default */
            position: fixed;
            /* Fixed/sticky position */
            bottom: 20px;
            /* Place the button at the bottom of the page */
            right: 30px;
            /* Place the button 30px from the right */
            z-index: 99;
            /* Make sure it does not overlap */
            border: crimson 2px solid;
            /* Remove borders */
            outline: none;
            /* Remove outline */
            background-color: transparent;
            /* Set a background color */
            color: crimson;
            /* Text color */
            cursor: pointer;
            /* Add a mouse pointer on hover */
            padding: 15px;
            /* Some padding */
            border-radius: 50px;
            /* Rounded corners */
            font-size: 18px;
            /* Increase font size */
            width: 50px;
            height: 50px;
        }

        #myBtn:hover {
            background-color: crimson;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- html code  -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-up-long"></i></button>
    <!-- html code  -->

    <script>
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

</body>

</html>