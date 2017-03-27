<?php
function list_admins() {
include 'conf/config.php';
include 'conf/opendb.php';

echo '<div class="table-responsive" >
    <table id="example1" style="width: 100%;" class="table table-bordered table-striped dt-responsive">
        <thead>
        <tr>
            <th>Edit</th>
            <th>Name</th>
            <th>Full Name</th>
            <th>Department</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Access</th>
            <th>Delete</th>
        </tr>
        </thead>';

        $result = mysqli_query($conn, "SELECT * FROM admin_user WHERE cancel_status='0' ORDER BY id DESC LIMIT 100");
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '
        <tr>
            <td><a href="admin_manage.php?job=edit&id=' . $row [id] . '" class="btn"><i class="fa fa-pencil-square-o"></i></a></td>

            <td>' . $row[employee_name] . '</td>
            <td>' . $row[full_name] . '</td>
            <td>' . $row[department] . '</td>
            <td>' . $row[email] . '</td>
            <td>' . $row[mobile] . '</td>
            <td>' . $row[address] . '</td>
            <td><a href="admin_manage.php?job=access&id=' . $row [id] . '"><i class="fa fa-key fa-lg"></i></a></td>
            <td><a href="admin_manage.php?job=delete&id='.$row[id].'" onclick="javascript:return confirm(\'Are you sure you want to delete this entry?\')"><i class="fa fa-times fa-2x"></i></a></td>

        </tr>';
        }
        echo '</tbody></table>';

    include 'conf/closedb.php';
    }

function save_admin($employee_name, $full_name, $department, $email, $telephone, $mobile, $address, $user_name, $password){
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query =  "INSERT INTO admin_user (id, employee_name,full_name, department, email, telephone, mobile, address, user_name, password)
	VALUES ('', '$employee_name','$full_name', '$department', '$email', '$telephone', '$mobile', '$address', '$user_name', '$password')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));


    include 'conf/closedb.php';
}

function update_admin($id, $employee_name, $full_name, $department, $email, $telephone, $mobile, $address, $user_name, $password )
{
    include 'conf/config.php';
    include 'conf/opendb.php';

    $query = "UPDATE admin_user SET
	employee_name='$employee_name',
	full_name='$full_name',
	department='$department',
	email='$email',
	telephone='$telephone',
	mobile='$mobile',
	address='$address',
	user_name='$user_name',
	password='$password'
	WHERE id='$id'";

    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}

function get_admin_info($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query($conn, "SELECT * FROM admin_user WHERE id='$id'");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        return $row;
    }
    include 'conf/closedb.php';
}

function get_admin_info_id($user_id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result=mysqli_query($conn, "SELECT * FROM admin_user WHERE id='$user_id'");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        return $row;
    }
}
function list_admin_module($user_id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ( $conn, "SELECT * FROM admin_has_module WHERE user_id='$user_id'" );

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
        $module_info = get_module_info ( $row ['module_no'] );
        $module_name = $module_info ['module_name'];

        echo '<div class="col-lg-9">' . $module_name . '</div>
              <div class="col-lg-3"><a href="admin_manage.php?job=remove_access&module_no=' . $row [module_no] . '"> <i class="fa fa-times fa-2x"></i></a></div>';
    }
}

function list_not_admin_module($user_id) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    $result = mysqli_query ($conn , "SELECT * FROM modules WHERE modules.cancel_status='0' AND modules.module_no NOT IN (SELECT admin_has_module.module_no FROM admin_has_module WHERE admin_has_module.user_id='$user_id' )");

    while ( $row = mysqli_fetch_array ( $result, MYSQLI_ASSOC ) ) {
        echo '<div class="col-lg-9">' . $row [module_name] . '</div>
              <div class="col-lg-3"><a href="admin_manage.php?job=add_access&module_no=' . $row [module_no] . '"> <i class="fa fa-check fa-2x"></i></a></div>';
    }
}


function add_admin_module($user_id, $module_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "INSERT INTO admin_has_module (user_id, module_no)
	VALUES ('$user_id', '$module_no')";
    mysqli_query ($conn, $query ) or die ( mysqli_connect_error () );


}
function remove_admin_module($user_id, $module_no) {
    include 'conf/config.php';
    include 'conf/opendb.php';

    mysqli_select_db ($conn, $dbname );
    $query = "DELETE FROM admin_has_module WHERE user_id='$user_id' AND module_no='$module_no'";
    mysqli_query ($conn, $query );


}
function delete_admin($id) {
    include 'conf/config.php';
    include 'conf/opendb.php';


    $query = "UPDATE admin_user SET
	cancel_status='1',
	canceled_by='$_SESSION[user_name]'
	WHERE id='$id'";
    mysqli_query($conn, $query);

    include 'conf/closedb.php';
}