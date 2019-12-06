<?php
    class Router{
        public static function parseUrl($url, $request){
            try {
                //code...
                $url = trim($url);
                //echo $url;
                if( $url == '/Panafricain/'){
                    $request -> controller = "Home";
                    $request -> action = "index";
                    $request -> params = [];
                
                }else{
                   // echo "Hello ". $url;
                    $split_url = explode("/", $url);
                    $split_url =  array_slice($split_url, 2);

                    $request -> controller = $split_url[0];
                    $request -> action = $split_url[1];
                    $request -> params =  [];
                   
                   // $request -> params = array_slice($split_url, 2);
                        //var_dump($request -> params);
                   // array_slice($split_url[2], 1) !== null ? array_slice($split_url[2], 1) : [] ;
                   //echo "Paara ".  $request -> params[0];


                }
            } catch (Exception $err) {
                //throw $th;
            }
        }
    }