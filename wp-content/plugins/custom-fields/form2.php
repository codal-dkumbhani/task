<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add or Remove Input Fields Dynamically using jQuery - MyNotePaper</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container"style="max-width: 700px;">

        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Add or Remove Input Fields Dynamically using jQuery</span>
        </div>

        <form method="post" action="">
            <div class="row">
                <div class="col-lg-12">
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                            <input type="file"  id = "img[]" name="img[]" class="form-control m-input" placeholder="Enter icon" autocomplete="off">
                            <input type="text" id = "title[]" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">
                            <input type="text" id = "dis[]" name="dis[]" class="form-control m-input" placeholder="Enter Discripation" autocomplete="off">
                            <div class="input-group-append">                
                                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                            </div>
                        </div>
                    </div>

                    <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info">Add Row</button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="file" id = "img[]" name="img[]" class="form-control m-input" placeholder="Enter icon" autocomplete="off">';
            html += '<input type="text" id = "title[]" name="title[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
            html += '<input type="text" id = "dis[]" name="dis[]" class="form-control m-input" placeholder="Enter Discripation" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
</body>
</html>