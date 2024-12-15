<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <style>
        body {
            background-color: #e3f2fd; /* soft pastel blue background */
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffcccb; /* pastel red/pink background for the entire table */
        }

        th {
            background-color: #4caf50; /* pastel green header */
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            background-color: #ffc1b6; /* lighter pastel red for all rows */
        }

        /* Add padding to table headers and cells */
        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:hover td {
            background-color: #ffdab9; /* light pastel orange on hover */
        }

    </style>
</head>
<body>

    <h1>Products</h1>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // replace with your MySQL username
    $password = ""; // replace with your MySQL password
    $dbname = "contact_data"; // replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve all records from the products table
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a structured format (HTML table)
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                </tr>";
        // Loop through and display each record
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["price"] . "</td>
                    <td>" . $row["quantity"] . "</td>
                    <td>" . $row["description"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No products found.";
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>
