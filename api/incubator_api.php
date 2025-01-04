<?php
// Include the database configuration
require_once '../includes/config.php';

try {
    // Example query to fetch data
    //$stmt = $pdo->query("SELECT * FROM your_table_name");
   // print_r('API reachable');

   // print_r($_POST['device_id']);

    /*
    1.$_POST['device_id']
    */

     /*
    1.json method
    */

    $all_api_machine_data = json_encode($_POST);
    $data_of_inc = json_decode($all_api_machine_data);

    print_r( $data_of_inc);

    $query = "INSERT INTO `incubator_heracell` (`id`, `device_id`, `co2`, `temp`, `updated_at`)
     VALUES (NULL, '$data_of_inc->device_id', '$data_of_inc->inc_co2', '$data_of_inc->inc_temp', current_timestamp())";

    $stmt_result = $pdo->query($query);

    if($stmt_result){  print_r('Success data entered to db'); } else{ 'failed to insert data in to db'; }

} catch (PDOException $e) {

    echo "Query failed: " . $e->getMessage();
}
?>
