<?php include_once "header.php"?>

    <div class="grid-container">
        <div class = "vertical-menu">
            <a href = "donate_page.php" class="active">Donate</a>
            <a href = "receive_page.php">Receive</a>
            <a href = "request_history.php">Request History</a>
        </div>
        <div class="content">
            <h1>Blood Donate request Form</h1>
            <div class="card">
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name">
                <br>
                
                <label for="age">Age:</label>
                <input type="number" id="age" min="18" max="100" value="18" >
                <br>

                <label for="contact">Contact no:</label>
                <input type="tel" id="contact">
                <br>

                <label for="blood_groups"> Blood Group: </label>
                <select id="blood_groups">
                    <option> A </option>
                    <option> B </option>
                    <option> AB </option>
                </select>
                <br>

                <label for="disease">Disease (if any):</label>
                <input type="text" id="disease">
                <br>
            </div>
                <br>
                <input type="reset" value="Reset" class="button">
                <input type="submit" value="Submit" class="button">
            </form>
        </div>   
    </div>

<?php include_once "footer.php"?>