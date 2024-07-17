<!-- holiday.php -->
<?php
include 'header.php';
?>

<div class="content">
       <h1 style="transition: none;">PUPLIC HOLIDAYS</h1>
       <p>Check out the upcoming public holidays and plan your days off.</p>
    <table border="1">
        <tr>
            <th>Date</th>
            <th>Holiday Name</th>
            <th>Day</th>
        </tr>
        <?php
        // Fetching the public holidays from the API
        $url = 'https://data.gov.sg/api/action/datastore_search?resource_id=6228c3c5-03bd-4747-bb10-85140f87168b&limit=10';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if ($data && isset($data['result']['records'])) {
            foreach ($data['result']['records'] as $holiday) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($holiday['date']) . "</td>";
                echo "<td>" . htmlspecialchars($holiday['holiday']) . "</td>";
                echo "<td>" . htmlspecialchars($holiday['day']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No holidays found.</td></tr>";
        }
        ?>
    </table>
</div>

<?php
include 'footer.php';
?>
