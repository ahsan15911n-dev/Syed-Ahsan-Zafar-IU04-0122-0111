<?php
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4">User Table</h1>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
                for($i=0; $i<100;$i++){
                    ?>
            <tr>
                <td>1</td>
                <td>Ahsan</td>
                <td>090078601</td>
                <td>ahsan.15911_n@email.com</td>
            </tr>
                <?php
                }
            ?>
            <tr>
                <td>1</td>
                <td>Ahsan</td>
                <td>090078601</td>
                <td>ahsan.15911_n@email.com</td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>