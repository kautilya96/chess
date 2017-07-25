<?php
session_start();

include("config.php");
if(!isset($_SESSION['name'])){
  header("Location:login.php");
}
?>
<html>
<head>

  <style>  
 div#board
  {
    


  }

  .default
  { 
     
	   background-color:#4d4d4d;
	  float:left;
	  text-align:center;
	  display: table-cell;
      vertical-align:middle;
     
	
  }

 

  .legal
{
	-webkit-box-shadow: inset 0px 0px 0px 5px #f00;
	-moz-box-shadow: inset 0px 0px 0px 5px #f00;
	box-shadow: inset 0px 0px 0px 5px #f00;
}
.legal.squarewhite
{
	background-color: #D2AEAE;
}
.legal.squareblack
{
	background-color: #7E1818;
}
.legal:hover
{
	background-color: yellow;
   -webkit-box-shadow: 0px 0px 25px 10px #ffa;
    box-shadow: 0px 0px 25px 10px #ffa;
}

 div.hover
{
	-webkit-box-shadow: inset 0px 0px 5px 5px #04015b;
	box-shadow: inset 0px 0px 5px 5px #04015b;
}
.squareblack
  {
	  height:12.5%; 
	  width:12.5%;
	  background-color:#4d4d4d;
	  float:left;
	  text-align:center;
	  display: table-cell;
      vertical-align:middle;
	  font-size:60%;
  }
  .squarewhite
  {
	  height:12.5%; 
	  width:12.5%;
	  background-color:#fff;
	  float:left;
	  text-align:center;
	  display: table-cell;
      vertical-align:middle;
	  font-size:60%;
  }
    .fade
 {
	-webkit-transition: box-shadow 0.25s ease-out;
	-moz-transition: box-shadow 0.25s ease-out;
	transition: box-shadow 0.25s ease-out;
	-webkit-transition: background-color 0.25s ease-in time;
	-moz-transition: background-color 0.25s ease-in time;
	transition: background-color 0.25s ease-in time;
 }
.move
{
	-webkit-transition: top 0.35s ease-in-out, left 0.35s ease-in-out;
	-moz-transition: top 0.35s ease-in-out, left 0.35s ease-in-out;
	-ms-transition: top 0.35s ease-in-out, left 0.35s ease-in-out;
	-o-transition: top 0.35s ease-in-out, left 0.35s ease-in-out;
	transition: top 0.35s ease-in-out, left 0.35s ease-in-out;
}

</style>


</head>
<body>


  <!--  <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
           <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <ul class="nav navbar-nav navbar-left">
                    <li>
                       <h3 style="color: gray;"><b>chess</b></h3>
                    </li>
                    </ul>
                <ul class="nav navbar-nav navbar-right">
            
                    <li>
                        <a style="color: gray"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<span >Welcome &nbsp;<?php echo $_SESSION["name"]; ?></span></a>
                    </li>
                    <li>
                        <a style="color: gray" href="home.php?x=1">Logout&nbsp;&nbsp;</a>
                    </li>
                </ul>
            </div>
           
        </div>
        
-->
<span  style="color: gray;"><span align="left" style="font-size: 20px;">Chess</span><span align="right"><a style="color: gray" ><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<span >Welcome &nbsp;<?php echo $_SESSION["name"]; ?></span></a></span>

                      <span align="right"><a style="color: gray" href="home.php?x=1" align="right">Logout&nbsp;&nbsp;</a></span></span>


<center>

<div class="square_black" >
<div class="default"  id="v1"></div><div class="default"  id="v2"></div><div class="default"  id="v3"></div><div class="default"  id="v4"></div><div class="default"  id="v5"></div><div class="default"  id="v6"></div><div class="default"  id="v7"></div><div class="default"  id="v8"></div><div class="default"  id="v9"></div><div class="default"  id="v10"></div><div class="default"  id="v11"></div><div class="default"  id="v12"></div><div class="default"  id="v13"></div><div class="default"  id="v14"></div><div class="default"  id="v15"></div><div class="default"  id="v16"></div>
</div>
<div id="board" >
<span id="rook" class="br1"> &#9820 </span><span id="knight" class="bk1"> &#9822 </span><span id="bishop" class="bb1"> &#9821 </span><span id="queen" class="bq1"> &#9819 </span><span id="king" class="bl1"> &#9818 </span><span id="bishop" class="bb2"> &#9821 </span><span id="knight" class="bk2"> &#9822 </span><span id="rook" class="br2"> &#9820 </span>
<span id="pawn" class="bp1"> &#9823 </span><span id="pawn" class="bp2"> &#9823 </span><span id="pawn" class="bp3"> &#9823 </span><span id="pawn" class="bp4"> &#9823 </span><span id="pawn" class="bp5"> &#9823 </span><span id="pawn" class="bp6"> &#9823 </span><span id="pawn" class="bp7"> &#9823 </span><span id="pawn" class="bp8"> &#9823 </span>

	<div id="00" class="squarewhite fade"></div><div id="01" class="squareblack fade"></div><div id="02" class="squarewhite fade"></div><div id="03" class="squareblack fade"></div><div id="04" class="squarewhite fade"></div><div id="05" class="squareblack fade"></div><div id="06" class="squarewhite fade"></div><div id="07" class="squareblack fade" ></div>

	<div id="10" class="squareblack fade"></div><div id="11" class="squarewhite fade"></div><div id="12" class="squareblack fade"></div><div id="13" class="squarewhite fade"></div><div id="14" class="squareblack fade"></div><div id="15" class="squarewhite fade"></div><div id="16" class="squareblack fade"></div><div id="17" class="squarewhite fade" ></div>


	<div id="20" class="squarewhite fade" ></div><div id="21" class="squareblack fade"></div><div id="22" class="squarewhite fade"></div><div id="23" class="squareblack fade"></div><div id="24" class="squarewhite fade"></div><div id="25" class="squareblack fade"></div><div id="26" class="squarewhite fade"></div><div id="27" class="squareblack fade"></div>

	
	   <div id="30" class="squareblack fade" ></div> <div id="31" class="squarewhite fade"></div><div id="32" class="squareblack fade"></div><div id="33" class="squarewhite fade"></div><div id="34" class="squareblack fade"></div><div id="35" class="squarewhite fade"></div><div id="36" class="squareblack fade"></div><div id="37" class="squarewhite fade"></div>

	<div id="40" class="squarewhite fade" ></div><div id="41" class="squareblack fade"></div><div id="42" class="squarewhite fade"></div><div id="43" class="squareblack fade"></div><div id="44" class="squarewhite fade"></div><div id="45" class="squareblack fade"></div><div id="46" class="squarewhite fade"></div><div id="47" class="squareblack fade"></div>


    <div id="50" class="squareblack fade" ></div> <div id="51" class="squarewhite fade"></div><div id="52" class="squareblack fade"></div><div id="53" class="squarewhite fade"></div><div id="54" class="squareblack fade"></div><div id="55" class="squarewhite fade"></div><div id="56" class="squareblack fade"></div><div id="57" class="squarewhite fade"></div>

   
	<div id="60" class="squarewhite fade"></div><div id="61" class="squareblack fade"></div><div id="62" class="squarewhite fade"></div><div id="63" class="squareblack fade"></div><div id="64" class="squarewhite fade"></div><div id="65" class="squareblack fade"></div><div id="66" class="squarewhite fade"></div><div id="67" class="squareblack fade" ></div>

	<div id="70" class="squareblack fade"></div><div id="71" class="squarewhite fade">	</div><div id="72" class="squareblack fade"></div><div id="73" class="squarewhite fade"></div><div id="74" class="squareblack fade"></div><div id="75" class="squarewhite fade"></div><div id="76" class="squareblack fade"></div><div id="77" class="squarewhite fade" ></div>
   
    <span id="pawn" class="wp1"> &#9817 </span><span id="pawn" class="wp2"> &#9817 </span><span id="pawn" class="wp3"> &#9817 </span><span id="pawn" class="wp4"> &#9817 </span><span id="pawn" class="wp5"> &#9817 </span><span id="pawn" class="wp6"> &#9817 </span><span id="pawn" class="wp7"> &#9817 </span><span id="pawn" class="wp8"> &#9817 </span>
    <span id="rook" class="wr1" > &#9814 </span><span id="knight" class="wk1"> &#9816 </span><span id="bishop" class="wb1"> &#9815 </span><span id="queen" class="wq1"> &#9813 </span><span id="king" class="wl1"> &#9812 </span><span id="bishop" class="wb2"> &#9815 </span><span id="knight" class="wk2"> &#9816 </span><span id="rook" class="wr2"> &#9814 </span>
</div>

<div class="square_white" >
<div class="default"  id="k1"></div><div class="default"  id="k2"></div><div class="default"  id="k3"></div><div class="default"  id="k4"></div><div class="default"  id="k5"></div><div class="default"  id="k6"></div><div class="default"  id="k7"></div><div class="default"  id="k8"></div><div class="default"  id="k9"></div><div class="default"  id="k10"></div><div class="default"  id="k11"></div><div class="default"  id="k12"></div><div class="default"  id="k13"></div><div class="default"  id="k14"></div><div class="default"  id="k15"></div><div class="default"  id="k16"></div>
</div>
</center>
<div id="demo"></div>
<script src="jquery-3.1.1.js"></script>
<script>
    var player1=[];
    turn=0; // 0 ;= white , 1= black
 
   player=[
			 ['br1','bk1','bb1','bq1','bl1','bb2','bk2','br2'],
			 ['bp1','bp2','bp3','bp4','bp5','bp6','bp7','bp8'],
			 ["","","","","","",""," va-+-+"],
			 ["","","","","","","",""],
			 ["","","","","","","",""],
			 ["","","","","","","",""],
			 ['wp1','wp2','wp3','wp4','wp5','wp6','wp7','wp8'],
			 ['wr1','wk1','wb1','wq1','wl1','wb2','wk2','wr2']
	    ];
     dead_white = [];
     dead_black = [];
   //  db=0;
   //  dw=0;
     pawn_white=[0,0,0,0,0,0,0,0,0];
     pawn_black=[0,0,0,0,0,0,0,0,0];




var name="<?php echo $_SESSION['email'] ?>";

   function legalMove(player_id){



   	tiles.removeClass('legal');
   	gridpos=positionOfPlayer(player_id);
   	if(player_id[1]=='r' || player_id[1]=='q'){
         //alert(player[6][gridpos[1]][0]);
		// rook traverse in four direction so 4 case
       // case 1: upper side of rook

	        var flag=0;
				for(var i=parseInt(gridpos[0])-1 ; i<=7&&flag==0&&i>=0 ; i--)
				{

			

					ID=""+i+gridpos[1];
					if(player[i][gridpos[1]]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[i][gridpos[1]][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[i][gridpos[1]]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					    
						
					}
							
				}  



		    // case 2: lower side of rook
	        var flag=0;
				for(var i=parseInt(gridpos[0])+1 ; i<=7&&flag==0&&i>=0 ; i++)
				{

					
					ID=""+i+gridpos[1];
					if(player[i][gridpos[1]]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[i][gridpos[1]][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[i][gridpos[1]]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					    
						
					}
							
				} 

				  // case 3: right side of rook
	        var flag=0;
				for(var i=parseInt(gridpos[1])+1 ; i<=7&&flag==0&&i>=0 ; i++)
				{
					
					ID=""+gridpos[0]+i;
					if(player[gridpos[0]][i]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[gridpos[0]][i][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
						    							
					    }
						   
					}
					else if(player[gridpos[0]][i]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					   
						
					}
							
				}  	
						  // case 4: left side of rook
	        var flag=0;
				for(var i=parseInt(gridpos[1])-1 ; i<=7&&flag==0&&i>=0 ; i--)
				{
					ID=""+gridpos[0]+i;
					if(player[gridpos[0]][i]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[gridpos[0]][i][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[gridpos[0]][i]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					
						
					}
							
				} 	            
 		            
         
         //   alert($('*[id="30"]').attr('class')); 
 
   		}
    if(player_id[1]=='k'){
    	 //alert(row+l_col);
		
		i=parseInt(gridpos[0])+2;
		j=parseInt(gridpos[1])+1;
		
		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])+2;
		j=parseInt(gridpos[1])-1;
		

		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])-2;
		j=parseInt(gridpos[1])+1;
		
		
		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])-2;
		j=parseInt(gridpos[1])-1;
	
		
		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])+1;
		j=parseInt(gridpos[1])+2;
		
		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])+1;
		j=parseInt(gridpos[1])-2;
		
		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])-1;
		j=parseInt(gridpos[1])+2;
		
		knightfunc(i,j,player_id);

		i=parseInt(gridpos[0])-1;
		j=parseInt(gridpos[1])-2;
	
		knightfunc(i,j,player_id);
    } 
    if(player_id[1]=='p'){
        if(player_id[0]=='b'){
               if(pawn_black[player_id[2]]==0)
               {
       			
					i=parseInt(gridpos[0])+2;
					
				     	if(player[i][gridpos[1]]=="" &&player[i-1][gridpos[1]] =="")
					knightfunc(i,gridpos[1],player_id);
					//pawn_white[player_id[3]]=1;
               }
               	i=parseInt(gridpos[0])+1;
               	if(player[i][gridpos[1]]=="" )
				knightfunc(i,gridpos[1],player_id);
				

				i=parseInt(gridpos[0])+1;
				j=parseInt(gridpos[1])+1;
					
				if(player[i][j]!="" && player_id[0]!=player[i][j][0])
						{
						    knightfunc(i,j,player_id);
							
					    }
				
				i=parseInt(gridpos[0])+1;
				j=parseInt(gridpos[1])-1;
					if(player[i][j]!="" && player_id[0]!=player[i][j][0])
						{
						    knightfunc(i,j,player_id);
							
					    } 
        }
        else if(player_id[0]=='w'){
        		//alert(player_id[3])
               if(pawn_white[player_id[2]]==0)
               {
       				
					i=parseInt(gridpos[0])-2;
					
				     if(player[i][gridpos[1]]=="" &&player[i+1][gridpos[1]] =="")
					knightfunc(i,gridpos[1],player_id);
					//pawn_white[player_id[3]]=1;
               }
               	i=parseInt(gridpos[0])-1;
               	if(player[i][gridpos[1]]=="" )
				knightfunc(i,gridpos[1],player_id);
				i=parseInt(gridpos[0])-1;
				j=parseInt(gridpos[1])+1;
					if(player[i][j]!="" && player_id[0]!=player[i][j][0])
						{
						    knightfunc(i,j,player_id);
							
					    }
				i=parseInt(gridpos[0])-1;
				j=parseInt(gridpos[1])-1;
					if(player[i][j]!="" && player_id[0]!=player[i][j][0])
						{
						    knightfunc(i,j,player_id);
							
					    }
        }
    }   
   	if(player_id[1]=='b'|| player_id[1]=='q'){
         //alert(player[6][gridpos[1]][0]);
		// bishop traverse in four direction so 4 case
       // case 1: down - right  side

	        	var flag=0;
				for(var i=parseInt(gridpos[0])+1,j=parseInt(gridpos[1])+1 ; i<=7&&flag==0&&i>=0&&j<=7&&j>=0 ; i++,j++)
				{

			

					ID=""+i+j;
					if(player[i][j]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[i][j][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[i][j]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					    
						
					}
							
				}  

				// case 2: upar - right  side

	        	var flag=0;
				for(var i=parseInt(gridpos[0])-1,j=parseInt(gridpos[1])+1 ; i<=7&&flag==0&&i>=0&&j<=7&&j>=0 ; i--,j++)
				{

			

					ID=""+i+j;
					if(player[i][j]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[i][j][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[i][j]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					    
						
					}
							
				} 

				 
				 // case 3: down - left  side

	        	var flag=0;
				for(var i=parseInt(gridpos[0])+1,j=parseInt(gridpos[1])-1 ; i<=7&&flag==0&&i>=0&&j<=7&&j>=0 ; i++,j--)
				{

			

					ID=""+i+j;
					if(player[i][j]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[i][j][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[i][j]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					    
						
					}

				} 	            
 		        				 
				 // case 4: uppar - left  side

	        	var flag=0;
				for(var i=parseInt(gridpos[0])-1,j=parseInt(gridpos[1])-1 ; i<=7&&flag==0&&i>=0&&j<=7&&j>=0 ; i--,j--)
				{

			

					ID=""+i+j;
					if(player[i][j]!="")
					{
							   
					    flag=1;
						if(player_id[0]!=player[i][j][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
						   
					}
					else if(player[i][j]=="")
					{
					    $('*[id="'+ID+'"]').addClass('legal');
					    
						
					}
							
				}     
         
         //   alert($('*[id="30"]').attr('class')); 
 
   		}



   		if(player_id[1]=='l'){
		
	  
	        for(var i=parseInt(gridpos[0])-1;i<=parseInt(gridpos[0])+1;i++)
	        {
	       		for(var j=parseInt(gridpos[1])-1;j<=parseInt(gridpos[1])+1;j++)
	       		{
                    ID=""+i+j;
                 	if(player[i][j]!="")
                 	{
                        if(player_id[0]!=player[i][j][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
                 	}
                 	else if(player[i][j]=="")
                 	{
                           $('*[id="'+ID+'"]').addClass('legal');
                 	}
	       		}

	        }
			//$('*[id="'+current+'"]').removeClass('legal');
		}

   }



		
    function boardSize(){
		     windowWidth = $(window).width();
		     windowHeight = $(window).height();
		     if(windowWidth>windowHeight) h=windowHeight;
			 else h=windowWidth; 
			 var m=20;
			 var h=h-(m*2)-20;
		     var border=h/25;
		     var fontsize=h/13;
		     var h4=h/4;

		     var b2=border/2;
		     $('#board').css({"border-width": border ,"border-color": "#000" ,     "border-style" : "solid", "width": h, "height": h, "margin": m});
		     $('*[class^="w"]').css({ "font-size":fontsize});
		     $('*[class^="b"]').css({ "font-size":fontsize});
		     $('.square_black').css({"border-width": b2 ,"border-color": "#000" ,  "border-style" : "solid", "width": h , "height":h4, "margin": m});
		     $('.square_white').css({"border-width": b2 ,"border-color": "#000" , "border-style" : "solid",  "width": h , "height":h4, "margin": m});
		     $('.default').css({"font-size":fontsize , "background-color":'#999999',  'height':h4/2 ,'width':h/8 });


    }


    function pos(IIDD){

    	var midY = $('*[id="'+IIDD+'"]').position().top + ( $('*[id="'+IIDD+'"]').height() / 2 );
	    var midX = $('*[id="'+IIDD+'"]').position().left + ( $('*[id="'+IIDD+'"]').width() / 2 );		
		var player = $("#pawn");
		var l=midX - (0.5 * player.width());		
		var t=midY - (0.5 * player.height());
		var poss={top:t,left:l};
        return poss;	
		
	};
    
	function set(player_id,index)
	{
	   
   
        getter();				
				
	     
         var p = positionOfPlayer(player_id);
         	player[p[0]][p[1]]="";
        var ii=index[0];
         var jj=index[1];
        if(player[ii][jj]!=""){
        	
        	// $('*[class="'+player[ii][jj]+'"]').css({ "visibility":"hidden"});
        }
	   player[ii][jj]=player_id;
	  // setter();
	  
	}


    function setter()
    {
    	
    	// call from database
       // player[u][v]=key;

    	 if (window.XMLHttpRequest) {
    			 xmlhttp=new XMLHttpRequest();
 		 } 
 		 else { 
   				 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 		 }
           
        xmlhttp.open("GET", "set.php?q="+player+"&turn="+turn+"&db="+dead_black+"&dw="+dead_white+"&pb="+pawn_black+"&pw="+pawn_white, true);
        xmlhttp.send();
    }

	 function getter()
	    {
	    	 if (window.XMLHttpRequest) {
	   				 xmlhttp=new XMLHttpRequest();
	  		 }
	  		  else {  
	   				 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 		 }
	        
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	               str = this.responseText.split(';');
                 
	              
            player1=str[0].split(',');
          turn =str[4]; 
            if(str[5]!=null)
            	dead_black=str[5].split(',');
            if(str[6]!=null)
               dead_white=str[6].split(',');
             if(str[7]!=null)
                pawn_black=str[7].split(',');
            if(str[8]!=null)
                 pawn_white=str[8].split(',');  
            

           
	                
	            }
	        };

	        xmlhttp.open("GET", "get.php", true);
	        xmlhttp.send();



         
            
            
	        var k=0;
	        for(var i=0;i<8;i++)
	        {
	        	for(var j=0;j<8;j++)
	        	{
	        		player[i][j]=player1[k];
	        		k++;
	        	}
	        }
	        
	        var k=0;
	        for(var i=0;i<8;i++)
	        {
	        	for(var j=0;j<8;j++)
	        	{
	        		player[i][j]=player1[k];
	        		k++;
	        	}
	        }

	    }


	function display() {
        getter();
		for(var i=0;i<=7;i++)
		{
			for (var j =0; j <= 7; j++) {
			    if(player[i][j]!= "")
			    {
                           index=""+i+j;
					       var p=pos(index);
						   
						   var t=p["top"];
						   var l=p["left"];
						   $('*[class="'+player[i][j]+'"]').css({ "position":"absolute","top":t, "left":l});

			    }
		
			}
		}
		
         
		for(var i=1;i<dead_black.length;i++)
		{
	                        
							  pp1='v'+i;
                           
					       var p=pos(pp1);
						   
						   var t=p["top"];
						   var l=p["left"];
                           //document.getElementById("demo").innerHTML=dead_black[i]+" top " +t+" left ":l;
						   $('*[class="'+dead_black[i]+'"]').css({ "position":"absolute","top":t, "left":l});
			
		}
		
		for(var i=1;i<=dead_white.length;i++)
		{
	                       
							  pp1='k'+i;
                         
					       var p=pos(pp1);
						   
						   var t=p["top"];
						   var l=p["left"];
						   $('*[class="'+dead_white[i]+'"]').css({ "position":"absolute","top":t, "left":l});
		}
	}

    	
	//function that give index of any player
	function positionOfPlayer(player0)
	{  // getter();
        
	   for(var i=0;i<8;i++)
	   {
			for(var j=0;j<8;j++)
			{
				if(player[i][j]==player0)
				{
				 // alert(""+i+j);
				  return ""+i+j;
				
				}
			}
	   }
	}





function knightfunc(k,l,player_id)
{

	if(k<=7&&k>=0&&l<=7&&l>=0){
			//alert(""+k+l);
			ID=""+k+l;
                 	if(player[k][l]!="")
                 	{
                        if(player_id[0]!=player[k][l][0])
						{
						    $('*[id="'+ID+'"]').addClass('legal');
							
					    }
                 	}
                 	else if(player[k][l]=="")
                 	{
                           $('*[id="'+ID+'"]').addClass('legal');
                 	}
	}
		
}






		$(document).ready(function()
     { 

      boardSize();

      tiles = $(".fade");   
	  $(".fade").mouseenter(function(){ 
			$(this).addClass('hover');
	  });
	 $(".fade").mouseleave(function(){
			$(this).removeClass('hover');
	  });


	  

			// when click on white player
			$("[class^='w']").click(function()
			{
	           
				  ind=positionOfPlayer($(this).attr('class'));

				 if($('*[id="'+ind+'"]').hasClass("legal"))
				  {
					    
                        if(turn==1){
                         if(crnt_player[1]=='p'){
					    	if(crnt_player[0]=='b'){
					    		if(pawn_black[crnt_player[2]]==0){
					    				pawn_black[crnt_player[2]]=1;
					    		}

					    	}
					    	else if(crnt_player[0]=='w'){

					    		   if(pawn_white[crnt_player[2]]==0){
					    		   	
					    				pawn_white[crnt_player[2]]=1;
					    		}

				    		}
				    	}
		   			
		   				 dw=dead_white.length;
		   				dead_white[dw]=$(this).attr('class');
		   			
						set(crnt_player,ind);
                        turn=0;		
                		  setter();
	  		
						tiles.removeClass('legal');
						crnt_player="";
					    }
				  }
				  else
				 {


						if(turn==0)
						{
						crnt_player=$(this).attr('class');

						legalMove($(this).attr('class'));
					  
						}
				  }
			});


			// when click on black player
			$("[class^='b']").click(function()
			{
	     

				  ind=positionOfPlayer($(this).attr('class'));
				   
				  
				  if($('*[id="'+ind+'"]').hasClass("legal"))
				  {
					    
                        if(turn==0){
                         if(crnt_player[1]=='p'){
					    	if(crnt_player[0]=='b'){
					    		if(pawn_black[crnt_player[2]]==0){
					    				pawn_black[crnt_player[2]]=1;
					    		}

					    	}
					    	else if(crnt_player[0]=='w'){

					    		   if(pawn_white[crnt_player[2]]==0){
					    		  
					    				pawn_white[crnt_player[2]]=1;
					    		}

				    		}
				    	}
		   			     db=dead_black.length;
		   				dead_black[db]=$(this).attr('class');
		   				
						set(crnt_player,ind);
                        turn=1;	
                       		  setter();
	  		
						tiles.removeClass('legal');
						crnt_player="";
					    }
				  }
				  else
				 {
						if(turn==1)
						{
						crnt_player=$(this).attr('class');
						legalMove($(this).attr('class'));
					  
						}
				  }
			});


			//when click on legal tile
			$(document).on('click', ".legal", function() {
			   
				    if(crnt_player[1]=='p'){
				    	if(crnt_player[0]=='b'){
				    		if(pawn_black[crnt_player[2]]==0){
				    				pawn_black[crnt_player[2]]=1;
				    		}

				    	}
				    	else if(crnt_player[0]=='w'){

				    		   if(pawn_white[crnt_player[2]]==0){
		    				pawn_white[crnt_player[2]]=1;
				    		}

				    	}
				    }
                   
					set(crnt_player,$(this).attr('id'));
					if(turn==1)
					{
					turn=0;
					}
					else if(turn==0)
					{
					turn=1;
					}
				  setter();
	  
					tiles.removeClass('legal');
					crnt_player="";
			});
	     
            console.log(player,dead_black,dead_white);
     }); 
	 
window.onload = function() {
	setInterval(display,20);

}

	 $(window).resize(boardSize);

	 $(window).resize(display);
</script>
<p id="txtHint"></p>
</body>

</html>