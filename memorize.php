<!DOCTYPE html>
<html>
<head>
	<title>Memories</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/menu/simple_menu.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){  
		      $('#search_text').keyup(function(){  
		           var txt = $(this).val(); 
		           var hc = $('#homecity').val();
		           var sl = $('#school').val();
		           var uy = $('#university').val();
		           var yee = $('#employee').val();
		           if(txt != '')
		           {
		                $.ajax({  
		                     url:"fetch.php",  
		                     method:"post",  
		                     data:{search:txt,baba:hc,scl:sl,uni:uy,emp:yee},  
		                     dataType:"text",  
		                     success:function(data)  
		                     {  
		                          $('#drop_box').html(data);  
		                     }  
		                });  
		           }  
		           else  
		           {  
		                $('#drop_box').html('');                 
		           }  
		      });  
		      $('#homecity').keyup(function(){
		      		var cty = $(this).val();
		      		if(cty != '')
		           {
		                $.ajax({  
		                     url:"fetch1.php",  
		                     method:"post",  
		                     data:{search:cty},  
		                     dataType:"text",  
		                     success:function(data)  
		                     {  
		                          $('#drop_boxa').html(data);  
		                     }  
		                });  
		           }  
		           else  
		           {  
		                $('#drop_boxa').html('');                 
		           }
		      });
		      $('#school').keyup(function(){
		      		var s = $(this).val();
		      		if(s != '')
		           {
		                $.ajax({  
		                     url:"fetch2.php",  
		                     method:"post",  
		                     data:{search:s},  
		                     dataType:"text",  
		                     success:function(data)  
		                     {  
		                          $('#drop_boxb').html(data);  
		                     }  
		                });  
		           }  
		           else  
		           {  
		                $('#drop_boxb').html('');                 
		           }
		      });
		      $('#university').keyup(function(){
		      		var u = $(this).val();
		      		if(u != '')
		           {
		                $.ajax({  
		                     url:"fetch3.php",  
		                     method:"post",  
		                     data:{search:u},  
		                     dataType:"text",  
		                     success:function(data)  
		                     {  
		                          $('#drop_boxc').html(data);  
		                     }  
		                });  
		           }  
		           else  
		           {  
		                $('#drop_boxc').html('');                 
		           }
		      });
		      $('#employee').keyup(function(){
		      		var e = $(this).val();
		      		if(e != '')
		           {
		                $.ajax({  
		                     url:"fetch4.php",  
		                     method:"post",  
		                     data:{search:e},  
		                     dataType:"text",  
		                     success:function(data)  
		                     {  
		                          $('#drop_boxd').html(data);  
		                     }  
		                });  
		           }  
		           else  
		           {  
		                $('#drop_boxd').html('');                 
		           }
		      });
		 });  
	</script>
	<style>
		.itm{
			width: 100%;
			height: 40px;
			background-color: #333;
			
			padding-top: 15px;
		}
		.itm2{
			width:100%;
			min-height: 500px;
			background-color: ;
			padding-top: 15px;
		}
		.headline{
			width: 100%;
			float: center;
		}
		input{
			border: 1px solid black;
			border-radius: 4px;
			width: 175px;
			height: 25px;
			background-color: #eee;
		}
        
        h1{
            font-family: myfont1;
            color: #a86205;
        }
        
        hr{
             border: 0;
    height: 1px;
    background: #333;
    background-image: linear-gradient(to right, #ccc, #333, #ccc);
            
        }
        
        .proimg{
            border: 3px solid white;
        }
        .drop_item{
            color: dimgray;
            height: 50px;
        }
        
        .image{
            float: left;
            height: 50px;
            
        }
        
        .text{
            float: right;
            margin-right: 110px;
            color: dimgray;
            font-size: 14px;
        }
        .dis{
            color: darkgray;
            font-size: 12px;
        }
	</style>
</head>
<body>
<?php include 'temp/header.php';  ?>
<div class="container">
    
<div class="headline" align="center">
<h1><b>MEMORIES</b></h1></div>
    <hr>
    <div class="themeimage">
    
    </div>
    <hr>
	<form action="" method="POST">
	<div class="itm" align="center">
		<input type="text" name="city" id="homecity" list="drop_boxa" placeholder="Home city">
		<datalist id="drop_boxa"></datalist>
		<input type="text" name="school" id="school" list="drop_boxb" placeholder="School name">
		<datalist id="drop_boxb"></datalist>
		<input type="text" name="university" id="university" list="drop_boxc" placeholder="University name">
		<datalist id="drop_boxc"></datalist>
		<input type="text" name="employee" id="employee" list="drop_boxd" placeholder="Work Place">
		<datalist id="drop_boxd"></datalist>
	</div>
	<div class="itm2" align="center">
		<div style="background-color: white; width: 300px;" align="left">
		<input type="text" name="search" autocomplete="true" id="search_text" placeholder="Search name" style="width:300px;">
		<div id="drop_box"></div>
		</div>
	</div>
	</form>
	
</div>
<?php include 'temp/footer.php';  ?>
</body>
</html>