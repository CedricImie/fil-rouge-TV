
$("#bouton").on('click', function(event){


	var urlMeteo = "http://api.openweathermap.org/data/2.5/weather?units=metric&q="+$("#villename").val()+"&appid=acd3c46a220a5c21527de8ca1d601599";

	var requete = {
		url: urlMeteo,
		type: 'GET',
		dataType: 'json',
		timeout: 1000,
		error: function()
		{
			alert('Erreur chargement');
		},
		success: function(data)
		{
			console.dir(data);
			$("#span1").html(data.name);
			$("#span2").html(data.dt);
			$("#span3").html(data.sys.sunrise);
			$("#span4").html(data.sys.sunset);
		}

	};

	function timeConverter(UNIX_timestamp){
 var a = new Date(UNIX_timestamp * 1000);
 var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 var year = a.getFullYear();
 var month = months[a.getMonth()];
 var date = a.getDate();
 var hour = a.getHours();
 var min = a.getMinutes();
 var sec = a.getSeconds();
 var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
 return time;
}
	$.ajax(requete);
});
