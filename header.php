<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hcontent {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 5px;
            background-color: #ddd;
        }

        .contact,
        .social-link i {
            color: #222;
            padding-left: 5px;
            font-size: 18px;
        }

        .contact i:hover,
        .social-link i:hover {
            color: crimson;
        }

        .contact a {
            color: #444;
            text-decoration: none;
            padding: 4px;
        }

        .contact a:hover {
            text-decoration: underline;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <Header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 hcontent">
                    <div class="contact">
                        <i class="fa-solid fa-envelope"> </i> <a href="mailto:help@support.com"> Email:
                            info@example.com</a>
                        <i class="fa-solid fa-square-phone"></i><a href="tel:+"> Phone: +91 5589 55488 55 </a>
                    </div>
                    <div class="social-link">
                        <a href="#" class="twitter"><i class="fa-brands fa-facebook"></i></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-whatsapp"></i></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-instagram"></i></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-linkedin"></i></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-github"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </Header>

</body>

</html>