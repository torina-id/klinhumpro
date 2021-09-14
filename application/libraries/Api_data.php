<?php


class Api_data {
    public function __construct(){
        $this->CI =& get_instance();
    }


    public function giat($row){

        $data = file_get_contents(DASH_URL."rows/".$row);
        if($data!="")
            {
                $arr= $data; 
                $json = json_decode($arr,true);
                return $json;
            }
    }

    public function debes(){

        $data = file_get_contents(GLAM_URL.'banner/api');

        if($data!="")
            {
                $arr= $data; 
                $json = json_decode($arr,true);
                return $json;
            }
    }

    public function lidi(){

        $data = file_get_contents(GLAM_URL.'library/api');

        if($data!="")
            {
                $arr= $data; 
                $json = json_decode($arr,true);
                return $json;
            }
    }    

    public function giatById($id){
        $data = file_get_contents(DASH_URL."id_kegiatan/".$id);
        // print_r($data["content"]);
        if($data!="")
            {
                $arr= $data; 
                $json = json_decode($arr,true);
                return $json;
            }
    }

    public function bulan($bln)
    {
        $bulan["01"]="Jan";
        $bulan["02"]="Feb";
        $bulan["03"]="Mar";
        $bulan["04"]="Apr";
        $bulan["05"]="Mei";
        $bulan["06"]="Jun";
        $bulan["07"]="Jul";
        $bulan["08"]="Agu";
        $bulan["09"]="Sep";
        $bulan["10"]="Okt";
        $bulan["11"]="Nov";
        $bulan["12"]="Des";
        return $bulan[$bln];
    }
}
