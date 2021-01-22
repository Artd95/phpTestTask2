function changeForm() {
    $('.form').hide();
    var select=document.getElementById('type_form')
    var type = select.value;
    $('#'+type).show();
    switch (type) {
	    	case 'dvd':
		   	size.removeAttribute('disabled');
	       	height.setAttribute('disabled', 'true');
	       	width.setAttribute('disabled', 'true');
	       	long.setAttribute('disabled', 'true');
	       	weight.setAttribute('disabled', 'true');
	       	break;
	    case 'book':
	       	size.setAttribute('disabled', 'true');
	       	height.setAttribute('disabled', 'true');
	       	width.setAttribute('disabled', 'true');
	      	long.setAttribute('disabled', 'true');
	       	weight.removeAttribute('disabled');
	       	break;
	    case 'furniture':
	       	size.setAttribute('disabled', 'true');
	       	weight.setAttribute('disabled', 'true');
	      	height.removeAttribute('disabled');
	       	width.removeAttribute('disabled');
	       	long.removeAttribute('disabled');
	       	break;
	}
}

function massDelete() {
	var checks = []; 
	var root = location.protocol + "//" + location.host;
	$("input[type=checkbox]:checked").each(function() {
		checks.push($(this).attr("value"));
      });
	if (checks.length == 0) {
		return false;
	} else {
		var item = document.getElementsByClassName('row');
		for(var i=0;i<item.length;i++){
			if(item[i].disabled != 'none')
        		item[i].style.display = 'none';
		}
		$.ajax({
	        type: "POST",
	        url: "../app_data/controllers/IndexDeleteController.php",
	        data: {ajax:1, checks:checks},
	        success:function(data) { 
	        	$('#table').append(data);
	        },
	        error: function() {
	        	alert("Delete error!!! "+root);
	        }
	    });
	}
}

function add() {
  	var sku = $("input[name='sku']").val();
  	$.ajax({
	    type: "POST",
	    url: "../app_data/controllers/AddController.php",
	    data: {sku:sku, ajax1:1},
	    success:function(data) { 
	      	if (data==1) {
	      		$('#getdetails').append('<p>SKU isn\'t unique. Try again.</p>');
	      	} else {
	      		var name = $("input[name='name']").val();
  				var price = $("input[name='price']").val();
  				var size = $("input[name='size']").val();
  				var weight = $("input[name='weight']").val();
  				var height = $("input[name='height']").val();
  				var width = $("input[name='width']").val();
  				var long = $("input[name='long']").val();
  				var action;
  				if (size!=0){ action = "dvd"; }
  				else if (weight!=0){ action = "book"; }
  				else { action = "furniture"; }
  				$.ajax({
	        		type: "POST",
	        		url: "../app_data/controllers/AddController.php",
	        		data: {sku:sku, name:name, price:price, size:size,
	        			weight:weight, height:height, width:width,long:long,
	        			action:action, ajax2:1},
	        		success:function() {
	            		window.location.href = 'index.php';
	        		},
	        		error: function() {
	        			alert("Add error!");
	        		}
	    		});
	      	}
	    },
	    error: function() {
	      	alert("Check error!");
	    }
	});	

}