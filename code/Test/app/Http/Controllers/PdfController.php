<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Pdf;

class PdfController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function index(){                        
        $dest = imagecreatefromjpeg(public_path().''."/assets/img/1.jpg");  

        $low =  "http://homstead.test/assets/img/l.jpg"; 
        $low = imagecreatefromjpeg($low);                   
        imagecopymerge($dest, $low, 444,995, 0, 0, 1459, 511, 100);

        $med =  "http://homstead.test/assets/img/m.jpg"; 
        $med = imagecreatefromjpeg($med);                   
        imagecopymerge($dest, $med, 2044,1002, 0, 0, 1459, 511, 100);      
          
        header('Content-type: image/jpeg');
        imagejpeg($dest, NULL, 100);	
        imagejpeg($dest, "assets/img/sunn.jpg");
        imagedestroy($dest);
    }

    public function index2(){                        
        $dest = imagecreatefromjpeg(public_path().''."/assets/img/1.jpg");  

        $low =  "http://homstead.test/assets/img/h.jpg"; 
        $low = imagecreatefromjpeg($low);                   
        imagecopymerge($dest, $low, 444,995, 0, 0, 1459, 511, 100);

        $med =  "http://homstead.test/assets/img/vh.jpg"; 
        $med = imagecreatefromjpeg($med);                   
        imagecopymerge($dest, $med, 2044,1002, 0, 0, 1459, 511, 100);      
          
        header('Content-type: image/jpeg');
        imagejpeg($dest, NULL, 100);	
        imagejpeg($dest, "assets/img/sunn2.jpg");
        imagedestroy($dest);
    }

    public function generate(){                        
        return view('generate');
    }


}