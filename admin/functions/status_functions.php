<?php
function list_seeker_status() {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo '<div class="table-responsive" >
    <table id="example1" style="width: 100%;" class="table table-bordered table-striped dt-responsive">
        <thead>
        <tr>
            
            <th>Seeker</th>
            <th>Details</th>
            <th>status</th>
            
        </tr>
        </thead>';

    $result = mysqli_query($conn, "SELECT * FROM proposal WHERE cancel_status='1'");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '
        <tr>
            <td>' . $row[seeker] . '</td>
            <td>' .  substr($row[detail], 0, 180) . '<a href="../proposal.php?job=view&id=' . $row[ref_no] . '"> more</a></td>
            <td>' . $row[invester_status] . '</td>
        </tr>';
    }
    echo '</tbody></table>';

    include 'conf/closedb.php';
}
