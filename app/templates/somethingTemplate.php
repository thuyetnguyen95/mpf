<?php include "controller/somethingController.php";?>

<div>
	<button onclick="getList()">Click here</button>
</div>
<div id="list"></div>

<script type="text/javascript">
	function getList () {
		$('#list').html('');
		$.get({
			url: "http://localhost/mpf/app/api/",
			success: function(response) {
				var x = JSON.parse(response)
				x.map(function(item) {
					$('#list').append('<p>' + item.name + '</p>')
				})
			},
			error: function(error) {
				console.log(error)
			}
		})
	}
</script>