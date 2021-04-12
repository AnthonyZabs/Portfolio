<?php
####################################
# ShopiLock V1.0                   #
# Developed by J. A. A. Z.         #
#  - 2021                          #
# This is a paid licensed product  #
# and is not allowed to distribute #
####################################

class DBManager extends Dbh {

    private $Con;
    private $Table;       // What table is the target of the query
    private $Column;      // Column target
    private $Condition;   // Conditions ? not required
    private $Limit;       // Limit results ? not required
    private $Additional;  // If is required to add additional Params to the query like ORDER BY
    private $Parameters;  // Required for queries like UPDATE & INSERT
    private $Data = [];    // Require for fetch returns
    public $lastInsertId;

    public function Run($Q) {
        try {
            $this->Con = $this->connect();
            return $this->Con->query($Q);
        } catch (PDOException $e) {
            echo '[Error 102] -> ' . $e->getMessage();
        }
    }

    public function GetRowCount($T, $C, $CO = null, $L = null, $A = null) {

        $this->Table = $T;
        $this->Column = $C;
        $this->Condition = $CO;
        $this->Limit = $L;
        $this->Additional = $A;

        $Query = "SELECT " . $this->Column . " FROM " . $this->Table . "";

        if ($this->Condition != null)
            $Query .= " WHERE " . $this->Condition;
        if ($this->Additional != null)
            $Query .= " " . $this->Additional;
        if ($this->Limit != null)
            $Query .= " LIMIT " . $this->Limit;        

        $SQL = $this->Run($Query);

        if ($SQL != null && $SQL->rowCount())
            return $SQL->rowCount();

        return 0;
    }

    public function GetRow($T, $C, $CO = null) {
        $this->Condition = $CO;
        $Query = "";
        if ($this->Condition != null)
            $Query .= " WHERE " . $this->Condition;

        $SQL = $this->Run("SELECT " . $C . " FROM " . $T . " " . $Query . " LIMIT 1");
        return ($SQL != null) ? $SQL->fetch()[$C] : null;
    }

    public function GetRows($T, $C, $CO = null, $L = null, $A = null) {
        $this->Table = $T;
        $this->Column = $C;
        $this->Condition = $CO;
        $this->Limit = $L;
        $this->Additional = $A;

        $Query = "SELECT " . $this->Column . " FROM " . $this->Table . "";

        if ($this->Condition != null)
            $Query .= " WHERE " . $this->Condition;
        if ($this->Additional != null)
            $Query .= " " . $this->Additional;
        if ($this->Limit != null)
            $Query .= " LIMIT " . $this->Limit;
        
        $SQL = $this->Run($Query);
        return $SQL;
    }

    public function GetAllRows($T, $C, $CO = null, $L = null, $A = null) {

        $this->Table = $T;
        $this->Column = $C;
        $this->Condition = $CO;
        $this->Limit = $L;
        $this->Additional = $A;

        $Query = "SELECT " . $this->Column . " FROM " . $this->Table . "";

        if ($this->Condition != null)
            $Query .= " WHERE " . $this->Condition;
        if ($this->Additional != null)
            $Query .= " " . $this->Additional;
        if ($this->Limit != null)
            $Query .= " LIMIT " . $this->Limit;

        $Data = [];
        $Count = 0;

        if ($this->Column == "*"):
            // Query to get all Column Names
            //Watch this for error
            $ColumnsSQL = $this->Run("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_NAME`='" . $this->Table . "';");

            foreach ($ColumnsSQL as $Column):
                array_push($Data, $Column);
                $Count++;
            endforeach;

        else:
            // No need to get all Columns so we work with the Column property
            $Columns = explode(";", $this->Column);
            foreach ($Columns as $Column):
                array_push($Data, "" . $Column . "");
                $Count++;
            endforeach;
        endif;

        $SQL = $this->Run($Query);

        while ($Row = $SQL->fetch()) {
            for ($x = 0; $Count - 1 >= $x; $x++):
                array_push( $this->Data, $Row[$x]);
            endfor;
        }

        return (!$this->Data)? null : $this->Data;
    }

    public function GetEnumValues($T, $C)
    {
        $query = $this->Run("SHOW COLUMNS FROM `{$T}` LIKE '{$C}'");

        if(!$query->rowCount()) return array();

        preg_match_all('~\'([^\']*)\'~', $query->fetch()['Type'], $matches);

        return $matches[1];
    }

    public function UpdateT($T, $P, $CO = null, $L = null, $A = null) {

        $this->Table = $T;
        $this->Parameters = Extras::UpdateSQLExploder($P);
        $this->Condition = $CO;
        $this->Limit = $L;
        $this->Additional = $A;

        $Query = "UPDATE " . $this->Table . " SET " . $this->Parameters . "";

        if ($this->Condition != null)
            $Query .= " WHERE " . $this->Condition;
        if ($this->Additional != null)
            $Query .= " " . $this->Additional;
        if ($this->Limit != null)
            $Query .= " LIMIT " . $this->Limit;
        
        $SQL = $this->Run($Query);

        if ($SQL || ($SQL && $SQL->rowCount()))
            return true;

        return false;
    }

    public function InsertT($T, $C, $P, $L = null, $A = null) {
        $this->Table = $T;
        $this->Column = $C;
        $this->Parameters = $P;
        $this->Limit = $L;
        $this->Additional = $A;

        $Query = "INSERT INTO " . $this->Table . " (" . $this->Column . ") VALUES (" . $this->Parameters . ")";

        if ($this->Additional != null)
            $Query .= " " . $this->Additional;
        if ($this->Limit != null)
            $Query .= " LIMIT " . $this->Limit;

        $SQL = $this->Run($Query);
        $this->lastInsertId = $this->Con->lastInsertId();

        if ($SQL && $SQL->rowCount())
            return true;

        return false;
    }

    public function DeleteT($T, $C, $L = null, $A = null) {
        $this->Table = $T;
        $this->Condition = $C;
        $this->Limit = $L;
        $this->Additional = $A;

        $Query = "DELETE FROM " . $this->Table . " WHERE " . $this->Condition;

        if ($this->Additional != null)
            $Query .= " " . $this->Additional;
        if ($this->Limit != null)
            $Query .= " LIMIT " . $this->Limit;
            
        $SQL = $this->Run($Query);

        if ($SQL && $SQL->rowCount())
            return true;

        return false;
    }
    
}
?>