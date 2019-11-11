<?
class kontek {
    public static function plugin_activation() {
        global $wpdb;
        $table_name = $wpdb->prefix . "kontekParts";
        $charset_collate = $wpdb->get_charset_collate();

        // CREATE PARTS DATABASE
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            projectId mediumint(9) NOT NULL,
            PRIMARY KEY(projectId),
            tagNumber varchar(16) NOT NULL, 
            partDescription varchar (111), 
            location varchar(116), 
            partNumber varchar(27), 
            UnitSellPrice Decimal(19,4)
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta( $sql ); 
    }
    public static function plugin_deactivation() {

    }

    public static function plugin_uninstall() {
        $sql = "DROP TABLE $table_name";
        
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta( $sql ); 
    }
    
}