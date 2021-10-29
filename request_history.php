<?php include_once "header.php"?>

    <div class="grid-container">
        <div class = "vertical-menu">
            <a href = "donate_page.php">Donate</a>
            <a href = "receive_page.php">Receive</a>
            <a href = "request_history.php" class="active">Request History</a>
        </div>
        <div class="content">
            <h1>Request History</h1>

            <table id="users">
                <tr>
                    <th>Date</th>
                    <th>Request type</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>02/01/2020</td>
                    <td>Donate</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>17/03/2020</td>
                    <td>Receive</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>20/05/2020</td>
                    <td>Receive</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>01/07/2020</td>
                    <td>Receive</td>
                    <td>Failed</td>
                </tr>
                <tr>
                    <td>02/07/2020</td>
                    <td>Receive</td>
                    <td>Pending</td>
                </tr>
            </table>
        </div>   
    </div>

<?php include_once "footer.php"?>
