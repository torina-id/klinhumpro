<?php
    // $debes['debes']=$this->api_data->debes();
    // if(empty($debes['debes'])){
    //     // show_404();
    //     echo "DATA DEBES KOSONG";
    // }      
    // $this->load->view('content/debes', $debes);
    // $lidi['lidi']=$this->api_data->lidi();
    // if(empty($lidi['lidi'])){
    //     // show_404();
    //     echo "DATA DEBES KOSONG";
    // }      
    // $this->load->view('content/lidi', $lidi);

    $dash['dash']=$this->api_data->giat(12);
    if(empty($dash['dash'])){
        echo "DATA DASH KOSONG";
        // show_404();
    } 
    $this->load->view('content/dash', $dash);

    $this->load->view('content/dash_js');
    
    // $this->load->view('content/ppid');

   

?>