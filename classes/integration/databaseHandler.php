<?php

namespace classes\integration;

class databaseHandler
{
    public function getCommentsMB()
    {
        $commentData = file('classes/database/container.html');
        return $commentData;
    }
    
    public function getCommentsPC()
    {
        $commentData = file('classes/database/containerpancakes.html');
        return $commentData;
    }
    
    public function getUsers()
    {
        $loginData = file('classes/database/accounts.txt');
        return $loginData;
    }
    
    public function addCommentMB($content,$nickname)
    {
        $handle = fopen("classes/database/container.html", "a");
        $t=time();
        fwrite($handle, "<b>".$nickname." ".gmdate("Y-m-d",$t)."</b>:<br>".$content."<p hidden>".time().",".$nickname."</p><br><br>"."\n");
        fclose($handle);
    }
    
    public function addcommentPC($content,$nickname)
    {
        $handle = fopen("classes/database/containerpancakes.html", "a");
        $t=time();
        fwrite($handle, "<b>".$nickname." ".gmdate("Y-m-d",$t)."</b>:<br>".$content."<p hidden>".time().",".$nickname."</p><br><br>"."\n");
        fclose($handle);
    }
    
    public function deletecommentPC($line)
    {
       $handle = fopen("classes/database/containerpancakes.html", "a");
       fwrite($handle,$line);
       fclose($handle);
    }
    
    public function deletecommentMB($line)
    {
       $handle = fopen("classes/database/container.html", "a");
       fwrite($handle,$line);
       fclose($handle);    
    }
    
    public function clearMB()
    {
        file_put_contents('classes/database/container.html','');
    }
    
    public function clearPC()
    {
        file_put_contents('classes/database/containerpancakes.html','');
    }
    
    public function insertUser($uname,$psw)
    {
       $handle = fopen("classes/database/accounts.txt", "a");
       fwrite($handle,"\n".$uname.','.$psw);
       fclose($handle);
    }
    
}

