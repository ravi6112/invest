<?php
function list_post_seekers() {
    include 'conf/config.php';
    include 'conf/opendb.php';

    echo '<div class="table-responsive" >
    <table id="example1" style="width: 100%;" class="table table-bordered table-striped dt-responsive">
        <thead>
        <tr>
            <th>Seeker</th>
            <th>Post</th>
            <th>Likes</th>
            <th>Block/Approve</th>
        </tr>
        </thead>';

    $result = mysqli_query($conn, "SELECT * FROM proposal");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '
        <tr>
            <td>' . $row[seeker] . '</td>
            <td>' .  substr($row[detail], 0, 180) . '<a href="../proposal.php?job=view&id=' . $row[ref_no] . '"> more</a></td>';

        $like_count=get_like_count($row[ref_no], 1);
           echo' <td>' . $like_count. '</td>';
           if ($row[cancel_status]==0) {
               echo '<td><a href="post.php?job=block&ref_no=' . $row [ref_no] . '" class="btn btn-danger">Block</a></td>';
           }
           else {
               echo '<td><a href="post.php?job=approve&ref_no=' . $row [ref_no] . '" class="btn btn-success">Approve</a></td>';
           }

           echo'</tr>';
    }
    echo '</tbody></table>';

    include 'conf/closedb.php';
}

function  block_post($ref_no){
    include 'conf/config.php';
    include 'conf/opendb.php';


    $query = "UPDATE proposal SET 
    cancel_status='1'
	WHERE ref_no='$ref_no'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}
function  approve_post($ref_no){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query = "UPDATE proposal SET 
    cancel_status='0'
	WHERE ref_no='$ref_no'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}