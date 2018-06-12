window.onload = function() 
{
	for (var i = 1; i <=8; i++) 
    document.getElementById('sub'+i).style.display = 'none';
}
  
function hideall()
{
	for (var i = 1; i <=8; i++) 
    document.getElementById('sub'+i).style.display = 'none';
  
}

function dropSelect()
{
  if(document.getElementById('sem').value=="yearly")
  {
    document.getElementById('hidethis').style.display='none';
  }
  else 
  {
    document.getElementById('hidethis').style.display='block';    
  } 

}

function subjectsem()
{
	for (var i = 1; i <=8; i++) 
    document.getElementById('sub'+i).style.display = 'none';

    if(document.getElementById('year').value=="fe")
  	{
  	
    		if( document.getElementById('sem').value=="odd")
    		document.getElementById('sub1').style.display='block';
    		else if(document.getElementById('sem').value=="even")
    		document.getElementById('sub2').style.display = 'block';  
  	}

    if(document.getElementById('year').value=="se")
  	{
   
    		if( document.getElementById('sem').value=="odd")
    		document.getElementById('sub3').style.display='block';
    		else if(document.getElementById('sem').value=="even")
    		document.getElementById('sub4').style.display = 'block';  
  	}

  	if(document.getElementById('year').value=="te")
  	{
    
    		if( document.getElementById('sem').value=="odd")
    		document.getElementById('sub5').style.display='block';
    		else if(document.getElementById('sem').value=="even")
    		document.getElementById('sub6').style.display = 'block';  
  	}

    if(document.getElementById('year').value=="be")
  	{
    
    		if( document.getElementById('sem').value=="odd")
    		document.getElementById('sub7').style.display='block';
    		else if(document.getElementById('sem').value=="even")
    		document.getElementById('sub8').style.display = 'block';  
  	}
}
 document.getElementById('submituser').style.display="none";
function change_username() {
  document.getElementById('changeu').disabled=false;
  document.getElementById('changeuser').style.display="none";
  document.getElementById('submituser').style.display="inline";

}

