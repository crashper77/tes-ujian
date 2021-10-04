<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_operation', 'operasi');
    }

	public function index(){

        $karakter = array('A', 'B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $n=0;
        do{
            $array = array_rand($karakter);
            $data[$n] = $karakter[$array];
            $data = array_unique($data);
            $n = count($data);
        } while($n<5);

        for($i=0; $i<5; $i++){
            if($i==0){
                $a = $data[$i];
            } else if($i==1){
                $b = $data[$i];
            } else if($i==2){
                $c = $data[$i];
            } else if($i==3){
                $d = $data[$i];
            } else if($i==4){
                $e = $data[$i];
            }
        }

        $aj = array_rand($data);
        $jawaban = $data[$aj];
        
        $db = array(
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'benar' => $jawaban
        );
        $this->operasi->add('soal', $db);
        $data['datanya'] = $this->operasi->viewdata();
		$this->load->view('Home', $data);
	}
}
