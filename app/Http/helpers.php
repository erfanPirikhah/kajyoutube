<?php

use App\Menu;

function chidSub($id)
    {
    
         return    Menu::where('id',$id)->first();
       
  
    }