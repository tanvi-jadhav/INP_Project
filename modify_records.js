function edit_row(id)
{
 var pid=document.getElementById("prod_id"+id).innerHTML;
 var price=document.getElementById("price_val"+id).innerHTML;
 var image=document.getElementById("Image_val"+id).innerHTML;
 var prname=document.getElementById("prod_name"+id).innerHTML;
 var avail=document.getElementById("avail_val"+id).innerHTML;

 document.getElementById("prod_id"+id).innerHTML="<input type='text' id='id_text"+id+"' value='"+pid+"'>";
 document.getElementById("price_val"+id).innerHTML="<input type='text' id='price_text"+id+"' value='"+price+"'>";
 document.getElementById("Image_val"+id).innerHTML="<input type='text' id='image_text"+id+"' value='"+image+"'>";
 document.getElementById("prod_name"+id).innerHTML="<input type='text' id='prname_text"+id+"' value='"+prname+"'>";
 document.getElementById("avail_val"+id).innerHTML="<input type='text' id='avail_text"+id+"' value='"+avail+"'>";
	
 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{

 var pid=document.getElementById("id_text"+id).value;

 var price=document.getElementById("price_text"+id).value;

 var image=document.getElementById("image_text"+id).value;

 var prname=document.getElementById("prname_text"+id).value;

 var avail=document.getElementById("avail_text"+id).value;
	
 $.ajax
 ({
  type:'POST',
  url:'modify_records.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   prod_id:pid,
   price_val:price,
   Image_val:image,
   prod_name:prname,
   avail_val:avail
  },
  success:function(response) {
      
   if(response=="success")
   {
    document.getElementById("prod_id"+id).innerHTML=pid;
    document.getElementById("price_val"+id).innerHTML=price;
    document.getElementById("Image_val"+id).innerHTML=image;
    document.getElementById("prod_name"+id).innerHTML=prname;
    document.getElementById("avail_val"+id).innerHTML=avail;
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
  
   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}

function insert_row()
{
  var pid=document.getElementById("new_id").value;
  var price=document.getElementById("new_price").value;
  var image=document.getElementById("new_image").value;
 var prname=document.getElementById("new_prname").value;
 var avail=document.getElementById("new_avail").value;

 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   insert_row:'insert_row',
   prod_id:pid,
   price_val:price,
   Image_val:image,
   prod_name:prname,
   avail_val:avail
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("user_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='prod_id"+id+"'>"+pid+"</td><td id='price_val"+id+"'>"+price+"</td><td id='Image_val"+id+"'>"+image+"</td><td id='prod_name"+id+"'>"+prname+"</td><td id='avail_val"+id+"'>"+avail+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_id").value="";
    document.getElementById("new_price").value="";
    document.getElementById("new_image").value="";
    document.getElementById("new_prname").value="";
    document.getElementById("new_avail").value="";
   }
  }
 });
}