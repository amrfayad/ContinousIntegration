<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use SSH;
/**
 * Description of ServerController
 *
 * @author Amr Fayad
 */
class ServerController extends BaseController {

    private function is_connected()
    {
	// Cheack Internet Connection
        $connected = @fsockopen("www.google.com", 80); //website, port  (try 80 or 443)
        if ($connected){
            $is_conn = true; //action when connected
            fclose($connected);
        }else{
            $is_conn = false; //action in connection failure
        }
        return $is_conn;
    }
    public function deploy() {
        $response = array();

		// write your commands in commands array
        $commands = array(
                   'cd /var/www/html/yourprojectname',
		   'git pull origin master',
		   'other comands'
                );
        $callBack = function($line) use (&$response){
                        $response[] = $line.PHP_EOL; // record server feedback
                    };
        if($this->is_connected()){
            SSH::into('production')->run( $commands, $callBack);
        }else{
            $response[] = "No Internet Connnection";
            $response[] =  " Please Make Sure That you have internet Connection" ;
        }
        return view('pages.response',['response' => $response]);
    }
    public function upload()
    {
        if(!$this->is_connected()){
                $response[] = " No Internet Connnection";
                $response[] = " Please Make Sure That you have internet Connection" ;
                return view('pages.response',['response' => $response]);        
        }
        // Git pull from local server 
        chdir('path to project');
         // CheckOut To Branch Develop
        $checkout = shell_exec('git checkout yourbranchname 2>&1');
        // Pull changes From branch Test
        $pull = shell_exec('git pull origin yourbranchname');
        // Ignore some file from cloud from push
        $ignores = array();
        $ignores['firstfile']  	   = shell_exec('git rm -r --cached firstfile  2>&1');
        $ignores['secondfile']     = shell_exec('git rm -r --cached secondfile  2>&1');
        $ignores['foldername'] 	   = shell_exec('git rm -r --cached foldername  2>&1');
        // commit ignores 
        $ignores['commit'] = shell_exec("git commit -m  'ignore cloud files'  2>&1");
        // Git push to cloud Cloud Repo
        $push = shell_exec('git push origin yourbranchname 2>&1');
        return view('pages.uploadResponse',['checkout' => $checkout,'pull'=>$pull,'ignores'=>$ignores,'push'=>$push]);
    }
    
}
