<?php
include("config.php");
$email=$_GET['email'];
$query=mysqli_query($connect,"SELECT * FROM chess WHERE email_first='$email' OR email_second='$email'");
$row=mysqli_num_rows($query);     
           
     if ($query) 
     {
      if ($row>0) 
      {
        
     echo'<center>
     <table class="table" width="200px">
    <thead>
      <tr>
        <th>Opponent</th>
        <th>Opponent\'s Email Address</th>
        <th>User Status</th>   
        <th>Game Status</th>
        <th>Action/Remark</th>
      </tr>
    </thead>
    <tbody>
    ';
      while ($value=mysqli_fetch_assoc($query)) 
      {
      $flag=1;  
      $femail=$value['email_first'];
      $semail=$value['email_second'];
      if ($email==$femail) {
        $you=1;
        $opponent=$semail;
        $color="white";
      }
      else
      {
        $you=2;
        $opponent=$femail;
        $color="black";
      }
      if ($value['winner']==0) 
      {
        $status="In Progress";
        $action="Go to the game";
      }
      else
      {
        if ($value['winner']==1) 
        {
          if ($you==1) 
          {
            $status="You won the game";
            $ustatus="--";
            $flag=0;
            $raction="Congratulations";
          }
          else
          {
            $status="Opponent won the game";
            $ustatus="--";
            $flag=0;
            $raction="Tough Luck";
          }
          $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
            while ($values=mysqli_fetch_assoc($q)) 
            {
              $online=$values['online'];
              $name=$values['firstname'];
            }
        }
        else if ($value['winner']==2) 
        {
         
          if ($you==2) 
          {
            $status="You won the game";
            $ustatus="--";
            $flag=0;
            $raction="Congratulations";
          }
          else
          {
            $ustatus="--";
            $flag=0;
            $status="Opponent won the game";
            $raction="Tough Luck";
          } 
          $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
            while ($values=mysqli_fetch_assoc($q)) 
            {
              $online=$values['online'];
              $name=$values['firstname'];
            }
        }
        else
        {
          $status="Game was aborted";
          $ustatus="--";
            $flag=0;
           $raction="--";

           $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
            while ($values=mysqli_fetch_assoc($q)) 
            {
              $online=$values['online'];
              $name=$values['firstname'];
            }  
        }
      }
      $online=1;
      $id=$value['id'];
      if ($flag==1) 
      {
         $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
        while ($values=mysqli_fetch_assoc($q)) 
        {
          $online=$values['online'];
          $name=$values['firstname'];
        }
        if ($online==1) 
        {
             $ustatus="Online";  
             $raction="<a href='newchess1.php'>".$action."</a> | <a href='home.php?abort=1&id=".$id."'>Abort the game</a>";
        }
        else
        {
             $ustatus="Offline";
             $raction="Opponent is offline | <a href='home.php?abort=1&id=".$id."'>Abort the game</a>";
        }
      }  
        echo "<tr>
              <td><b>".$name."(".$color.")</b></td>
              <td><b>".$opponent."</b></td>
              <td><b>".$ustatus."</b></td>
              <td><b>".$status."</b></td>        
              <td><b>".$raction."</b></td>
              </tr>";

      }
}
}
/*echo "</tbody>
</table></center>";
echo '<br><br><br><br><br><center><div class="f">
<input type="submit" name="submit" class="btn btn-default" value="Save changes">
</center></form></div>';
*/


?>

