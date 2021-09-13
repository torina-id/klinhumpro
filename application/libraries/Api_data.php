<?php


class Api_data {
    public function __construct(){
        $this->CI =& get_instance();
    }


    public function giat($row){

        $data = $this->get_api(DASH_URL."rows/".$row,"","","GET");
        if($data["content"]!="")
            {
                $arr= $data["content"]; 
                $json = json_decode($arr,true);
                return $json;
            }
    }

    public function debes(){

        $data = $this->get_api(GLAM_URL."banner/api","","","GET");
        if($data["content"]!="")
            {
                $arr= $data["content"]; 
                $json = json_decode($arr,true);
                return $json;
            }
    }

    public function lidi(){

        $data = $this->get_api(GLAM_URL."library/api","","","GET");
        if($data["content"]!="")
            {
                $arr= $data["content"]; 
                $json = json_decode($arr,true);
                return $json;
            }
    }    

    public function giatById($id){
        $data = $this->get_api(DASH_URL."id_kegiatan/".$id,"","","GET");
        // print_r($data["content"]);
        if($data["content"]!="")
            {
                $arr= $data["content"]; 
                $json = json_decode($arr,true);
                return $json;
            }
    }


    private function get_api($url,$post="",$token="",$method="POST")
    {
                $options = array(
                    CURLOPT_CUSTOMREQUEST => $method,
                    CURLOPT_POSTFIELDS => $post,
                    CURLOPT_RETURNTRANSFER => true,     // return web page
                    CURLOPT_HEADER         => false,    // don't return headers
                    CURLOPT_FOLLOWLOCATION => true,     // follow redirects
                    CURLOPT_ENCODING       => "",       // handle all encodings
                    CURLOPT_USERAGENT      => "spider", // who am i
                    CURLOPT_AUTOREFERER    => true,     // set referer on redirect
                    CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
                    CURLOPT_TIMEOUT        => 120,      // timeout on response
                    CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
                    CURLOPT_SSL_VERIFYPEER => false,  // Disabled SSL Cert checks
                    CURLOPT_SSL_VERIFYHOST => false
                );

                
                
                if($token!="")
                {
                
                    $options[CURLOPT_HTTPHEADER]=array("Authorization: ".$token);
                }
                

                $ch      = curl_init( $url );
                curl_setopt_array( $ch, $options );
                $content = curl_exec( $ch );
                $err     = curl_errno( $ch );
                $errmsg  = curl_error( $ch );
                $header  = curl_getinfo( $ch );
                curl_close( $ch );

                $header['errno']   = $err;
                $header['errmsg']  = $errmsg;
                $header['content'] = $content;

                return $header;
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
