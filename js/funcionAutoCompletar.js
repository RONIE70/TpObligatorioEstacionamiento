$(function()
    {
        var patentes = [ 
            "hhh111","MRA422","PFA172","IMF025","MRA422","PFA172","LKJ056","DRA226","aaa111","PFA172","DRA226","MAGA1234",
        ];
			  
		// setup autocomplete function pulling from patentes[] array
		$('#autocomplete').autocomplete({
            lookup: patentes,
            onSelect: function (suggestion) {
              var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.data;
              $('#outputcontent').html(thehtml);
                 $('#botonIngreso').css('display','none');
                          console.log('aca llego');
            }
        });	  
	});