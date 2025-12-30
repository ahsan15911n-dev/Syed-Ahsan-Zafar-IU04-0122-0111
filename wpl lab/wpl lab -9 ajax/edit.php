<?php
$conn = mysqli_connect('localhost', 'root', '', 'products');

$id = $_GET['p_id'];
$query = "SELECT * FROM producs WHERE p_id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

$data = mysqli_fetch_assoc($result);

include 'main.html';
?>


<html>

<head>
    <title>Document</title>
</head>

<body>
    <h3 class="text-center mt-5 mb-4">Edit Info: <?php echo $data['p_name']; ?></h3>
    <div class="container">
        <div style="border: none;" class="card w-50 mx-auto">
            <div class="row">
                <form id="edit_form" class="mx-auto mt-4">
                    <div class="input-group mb-4 mt-4">
                        <input type="hidden" class="form-control" value="<?php echo $data['p_id']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <label >product name</label>
                        <input name="p_name" id="p_name" type="text" class="form-control" value="<?php echo $data['p_name']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <label>product category</label>
                        <input name="p_category" id="p_category" type="text" class="form-control" value="<?php echo $data['p_category']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <label >product type</label>
                        <input name="p_type" id="p_type" type="number" class="form-control" value="<?php echo $data['p_type']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <label>product price</label>
                        <input name="p_price" id="p_price" type="number" class="form-control" value="<?php echo $data['p_price']; ?>">
                    </div>
                    <button id="submitButton" class="btn btn-primary w-100" onclick="return confirm('you sure?')">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#edit_form').on('submit', function(e){
                e.preventDefault()

                let jsonFile = {
                     'p_id': $('#p_id').val(),
                    'p_name': $('#p_name').val(),
                    'p_category': $('#p_category').val(),
                    'p_type': $('#p_type').val(),
                    'p_price': $('#p_price').val(),
                }   
                console.log(jsonFile)

                $.ajax({
                    type: 'POST',
                    url: 'update.php?p_id=<?php echo $data['p_id'];?>',
                    data: jsonFile,
                    success: function(response){
                        window.location.href = 'webpage.php';
                        console.log(response)
                    },
                    error: function(error){
                        console.log(error)
                    }
                })
            })
        })
    </script>
</body>

</html>