<?php
require ( 'db_config.php' );

$select     =   " SELECT * FROM wp_posts";

/**
 * @var mysqli $conn ( db_config.php file )
 */
$result     =   mysqli_query( $conn, $select )  or die( "Could nto display data" );

echo "
    <table border='1' cellspacing='0' cellpadding='10'>
    
        <tr bgcolor='orange'>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
      
    
    </table>  
";