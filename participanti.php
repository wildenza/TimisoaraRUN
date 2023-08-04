<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link rel="stylesheet" href="participanti.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="participanti.js"></script>


</head>

<body>
    <div class="type">
        <h1 class="text">PARTICIPANTI TIMISOARA RUN</h1>
    </div>
    <div class="main">
    <div class="table-container">
    <div class="filter">
        <input type="text" id="Introducere" onkeyup="filterTable()" placeholder="Introduceti Traseul">
    </div>
    <table id="participantTable">
        <tr>
            <th>ID</th>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Traseu</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "message_db");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id, Nume, Prenume, Varsta, Email, Telefon, Marime, Gender, Traseu, Afiliere FROM message";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Nume"] . "</td><td>"
                    . $row["Prenume"] . "</td><td>" . $row["Traseu"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();


        ?>
    </table>
</div>
    </div>
    <div style="background-color:  rgb(19, 161, 255); position:relative">
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </div>
    <div class="backbt">
        <button onclick="window.history.back()" class="backbutton">
          <i class="fas fa-arrow-left"></i>
        </button>
    </div>
</body>
</html>
