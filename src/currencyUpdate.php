<?php 
    include_once("./config.php");

    $info = $conn->query("SELECT name, recent_price, least_recent_price FROM currencies ORDER BY recent_price DESC");

    for($i = 0; $i < $info->num_rows; $i++) {
        $row = $info->fetch_assoc();

        $trend = ($row['recent_price'] - $row['least_recent_price']) / $row['least_recent_price'] * 100;
        //calculate trend based off of last 10 prices

        echo '<tr class="' . ($trend > 0 ? 'increaseTrend' : 'decreaseTrend') . '" data-href="#">';
        echo '<td scope="row">' . $row['name'] . "</td>";
        echo '<td>$' . number_format($row['recent_price'], 2) . '</td>';
        echo '<td id="trend">' . number_format($trend, 2) . '%</td></tr>';
    }

    $conn->close();
?>