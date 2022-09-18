function changeDropdown() {
   var state=document.getElementById("productType").value;
  if(state=="TS"||state=="DD")
   {
    document.getElementById("height").style.visibility='hidden';
    document.getElementById("width").style.visibility='hidden';
     document.getElementById("length").style.visibility='hidden';
       document.getElementById("weight").style.visibility='hidden';
    }
    if(state=="TS"||state=="BK")
    {
       document.getElementById("size").style.visibility='hidden';
       document.getElementById("height").style.visibility='hidden';
       document.getElementById("width").style.visibility='hidden';
       document.getElementById("length").style.visibility='hidden';
    }
    if(state=="TS"||state=="FT")
   {
      document.getElementById("size").style.visibility='hidden';
        document.getElementById("weight").style.visibility='hidden';
    }
 
}



    function validate() {
		if (document.product_form.sku.value == '') {
			alert('Please submit required data');
			document.product_form.sku.focus();				
			return false;
		}
		if (document.product_form.name1.value == '') {
			alert('Please submit required data');
			document.product_form.name1.focus();
			return false;
		}
        if (document.product_form.price.value == '') {
			alert('Please submit required data');
			document.product_form.price.focus();				
			return false;
		}
		return true;
	}
