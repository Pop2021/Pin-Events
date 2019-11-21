<?php
//database

//database credentials
require('pdbcredentials.php');


class pdbConnection{

	//properties
	public $dbase = null;
	public $result = null;

    /**
     * Constructor
     */
    public function __construct($dbase, $result){
        $this->dbase = $dbase;
        $this->result = $result;
        echo __CLASS__." created<br>";

    }


     /**
     * Deconstructor
     */

    public function __deconstruct(){
        echo __CLASS__." destroyed<br>";
    }

	//connection
	/** 
     *
     * @return boolean
     */
	function pdbConnect(){
		//connection
		$this->dbase = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
        
        //checking the connection
        if (!$this->dbase) {
            die("Connection failed: " . mysqli_connect_error());
            return false;
        }else{
            return true;
        }
    
		
	}

	//Running a Query
	/**
     * This function is used to execute SQL queries
     *
     * @param - a connection, an sql query
     * @return boolean
     */
	function pdbRunQuery($sql){
		if (!$this->pdbConnect()) {
			return false;
		} 
		elseif ($this->dbase==null) {
			return false;
		}

		//running a query 
		$this->result = mysqli_query($this->dbase,$sql);
		if ($this->result == false) {
			return false;
        }
        else{
			return true;
		}
		
	}

	//Fetching data
	/**
	*Fetch select data
    *@return - a record
    *
	*/
	function pdbFetchRecord(){
		//check if result was set
		if ($this->result == null) {
			return false;
		}
		elseif ($this->result == false) {
			return false;
		}
		//return a record
		return mysqli_fetch_assoc($this->result);

	}
}

?>