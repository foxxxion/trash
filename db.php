 <?php
    include('config.php');
    class db extends mysqli {

        private static $instance = null;

        private $user = DBUSER;
        private $pass = DBPWD;
        private $dbName = DBNAME;
        private $dbHost = DBHOST;

        public static function getInstance() {
        if (!self::$instance instanceof self) {
                self::$instance = new self;
        }
            return self::$instance;
        }

        public function __clone() {
       trigger_error('Clone is not allowed.', E_USER_ERROR);
        }
        public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
        }

        private function __construct() {
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset('utf-8');

       }
       public function dbquery($query)
        {
            if($this->query($query))
            {
                return true;
            }
    define('DBUSER','root');
       define('DBPWD','FLAG{easy_peasy_lemon_squeezy}');
          define('DBHOST','localhost');
             define('DBNAME','database name');
        }
        public function get_result($query) 
        {
            $result = $this->query($query);
            if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
            } else
            return null;

        }
    }
    ?>
