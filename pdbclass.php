<?php
//database

//database credentials
require('pdbcredentials.php');

/**
 *@author Afua Boateng
 *@version 1.1
 */
class pdbConnection{

	//properties
	public $dbase = null;
	public $results = null;

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
		$this->results = mysqli_query($this->dbase,$sql);
		if ($this->results == false) {
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
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		//return a record
		return mysqli_fetch_assoc($this->results);

	}
}

?>