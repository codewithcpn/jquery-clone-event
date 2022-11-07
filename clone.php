<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    #a {
        cursor: pointer;
    }

    #i {
        cursor: pointer;
    }

    #n {
        cursor: pointer;
    }

    #d {
        cursor: pointer;
    }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class=" mt-3 text-primary">jQuery: Clone Methods</h1>
            <hr class="text-center" style="width:50%">
            <div class="col-md-12 border border-primary bg-info" id="box">
                <h3>Alphabet :</h2>
                    <p style="letter-spacing:10px" class="display-4"><span id="a" class="text-white"> A </span> <span
                            id="i" class="text-white"> I </span> <span id="d" class="text-white"> D </span> <span id="n"
                            class="text-white"> N </span> <span id="s" class="text-white"> S </span> <span id="u"
                            class="text-white"> U </span> </p>
            </div>
        </div><br><br>
        <div class="row">
            <hr class="text-center" style="width:50%">
            <div class="col-md-12 border border-danger bg-dark text-white" id="box1">


            </div>
        </div><br><br>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#a').click(function() {
            $('#a').clone().appendTo('#box1');
        });

        $('#n').click(function() {
            $('#n').clone().appendTo('#box1');
        });

        $('#d').click(function() {
            $('#d').clone().appendTo('#box1');
        });

        $('#i').click(function() {
            $('#i').clone().appendTo('#box1');
        });


    })
    </script>
</body>


</html>
