function send(data)
{
	var formData = new FormData();
	formData.append('data', data);
	$.ajax({
			url: 'recive.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response)
					{
						var opt1 = document.getElementById("topic_submain");
						opt1.options.length = 0;
						var obj = jQuery.parseJSON(response);
						var i = 0;
						//alert(obj[1].topic);
						opt1.options[0] = new Option('เลือกหัวข้อย่อย 1','เลือกหัวข้อย่อย 1');
						while(obj[i].topic)
						{
							opt1.options[i+1] = new Option(obj[i].topic,obj[i].topic);
							i++;
							var a = i;
						}
						opt1.options[i+3] = new Option('asdasda','sadadsd');
					}				
			});
}