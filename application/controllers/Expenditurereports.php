<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Expenditurereports extends CI_Controller {



	public function __Construct(){

		parent::__Construct();

		$this->load->model('UserModel', 'um');

		$this->admin = $this->session->userdata('admin_id');

	}



	public function index()

	{
        if($this->session->userdata('admin_id') == '') {
            redirect('adminlogin');

        }else {

		$data['page_title'] = "Expenditure Reports";

        $data['fromdate'] = date('Y-m-d');
        $data['todate'] = date('Y-m-d');

        $data['expenditures'] = $this->um->getexpenditures("expenditures",[]);

		$this->settemplate->dashboard("expenditurereports/index",$data);
    }

	}

	public function reports() 
	{
        if($this->session->userdata('admin_id') == '') {
            redirect('adminlogin');

        }else {
		$data['page_title'] =  "Expenditure Reports";

        $data['fromdate'] = date('Y-m-d', strtotime($this->input->post('from_date')));
        $data['todate'] = date('Y-m-d', strtotime($this->input->post('to_date')));

        if($this->input->post('user_id') == ''){
            $user_id = $this->session->userdata('adminId');
        }else {
            $user_id = $this->input->post('user_id');
        }


        $fsdfrom_date = $this->input->post('from_date');
        $fsdto_date = $this->input->post('to_date');

        

        


        if($fsdfrom_date == ''){

            $from_date = $this->input->post('from_date');

            $to_date = $this->input->post('to_date');

        }else if($fsdto_date == ''){

            $from_date = $this->input->post('from_date');

            $to_date = $this->input->post('to_date');

        }else {
            $from_date = date('Y-m-d',strtotime($fsdfrom_date));
            $to_date = date('Y-m-d',strtotime($fsdto_date));
        }

		$whr = [];

		$data['expenditures'] = $this->um->getSearchExpenditurereports("expenditures", $whr, $from_date, $to_date);

		$this->settemplate->dashboard("expenditurereports/reports",$data);
    }

	}


   
    // Export_Database($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,  $tables=false, $backup_name=false );
    public function Export_Database($host,$user,$pass,$name,  $tables=false, $backup_name=false )
    {
        $mysqli = new mysqli($host,$user,$pass,$name); 
        $mysqli->select_db($name); 
        $mysqli->query("SET NAMES 'utf8'");
        $queryTables    = $mysqli->query('SHOW TABLES'); 
        while($row = $queryTables->fetch_row()) 
        { 
            $target_tables[] = $row[0]; 
        }   
        if($tables !== false) 
        { 
            $target_tables = array_intersect( $target_tables, $tables); 
        }
        foreach($target_tables as $table)
        {
            $result         =   $mysqli->query('SELECT * FROM '.$table);  
            $fields_amount  =   $result->field_count;  
            $rows_num=$mysqli->affected_rows;     
            $res            =   $mysqli->query('SHOW CREATE TABLE '.$table); 
            $TableMLine     =   $res->fetch_row();
            $content        = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";
            for ($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter=0) 
            {
                while($row = $result->fetch_row())  
                { //when started (and every after 100 command cycle):
                    if ($st_counter%100 == 0 || $st_counter == 0 )  
                    {
                            $content .= "\nINSERT INTO ".$table." VALUES";
                    }
                    $content .= "\n(";
                    for($j=0; $j<$fields_amount; $j++)  
                    { 
                        $row[$j] = str_replace("\n","\\n", addslashes($row[$j]) ); 
                        if (isset($row[$j]))
                        {
                            $content .= '"'.$row[$j].'"' ; 
                        }
                        else 
                        {   
                            $content .= '""';
                        }     
                        if ($j<($fields_amount-1))
                        {
                                $content.= ',';
                        }      
                    }
                    $content .=")";
                    //every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
                    if ( (($st_counter+1)%100==0 && $st_counter!=0) || $st_counter+1==$rows_num) 
                    {   
                        $content .= ";";
                    } 
                    else 
                    {
                        $content .= ",";
                    } 
                    $st_counter=$st_counter+1;
                }
            } $content .="\n\n\n";
        }
        
        $backup_name = $name.".sql";

        header('Content-Type: application/octet-stream');   
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"".$backup_name."\"");  
        echo $content; exit;

        redirect("addashboard");
    }
	

}