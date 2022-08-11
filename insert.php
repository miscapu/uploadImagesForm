<?php
/**
 * method="post"
 * <input type="file" name="filepond" value="upload" class="filepond" accept="image/png, image/jpeg, image/gif">
 *
 * CREATE TABLE `crud_image` (
`u_id` int(10) NOT NULL,
`u_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`u_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 *
 */
error_reporting( 0 );
// Add file db_config for data DB
require ( 'db_config.php' );

// Conditional errors
if ( isset( $_POST[ 'insert' ] ) )
{
    // Value default
    $name       =   'product';
    $file_name  =   $_FILES[ 'file' ][ 'name' ];
    $tmp_name   =   $_FILES[ 'file' ][ 'tmp_name' ];

    $insert     =   'INSERT INTO wp_posts( post_type, guid ) VALUES ( '.$name.', '.$file_name.' )';
    /**
     * @var mysqli $conn (db_config.php file)
     */
    $result     =   mysqli_query( $conn, $insert );

    // Upload file in folder uploads into root
    move_uploaded_file( $tmp_name,  "/uploads/".$file_name."" );
    header( "location:../index.php" );

}

