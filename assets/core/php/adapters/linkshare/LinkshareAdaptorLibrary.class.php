<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LinkshareAdaptorLibrary extends AdaptorLibraryBase{
   

     public function Initilize(){
         parent::Initilize('linkshare', 'iTunes');//This connects to the API
         $this->AddService(Service::MUSIC, 'LinkshareMusicAdaptorService');
         
     }
     
}
?>
