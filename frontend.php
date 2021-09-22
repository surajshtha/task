<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	 	.error {
	 		color: red;
	 	}
	 	body {
	 		background: #5CDB95;
	 	}
	 	section {
	 		background: #8EE4AF;
	 	}
	 	.modal-footer {
	 		float: left;
	 	}
	 </style>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	<section class="content">
		<div class="container-fluid">
	 		<div class="block-header">
	 			<h2>Counter</h2>
	 		</div>
	 	</div>
		<form role="form" action="#" class="form-horizontal" id="vuecounter">
			<div style="margin-bottom:4px; border:1px #CCC solid; padding:10px">
	 			<div class="row clearfix">
		 			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
		 				<label for="name">Counter: {{ counter }}</label> 
		 			</div>
		 		</div>
		 	</div>
	 		<div class="modal-footer">
	 			<button type="button" v-on:click="increase">Increase</button> <button type="button" v-on:click="decrease">Decrease</button> <button type="button" v-on:click="reset">Reset</button>
	 		</div>
 		</form>
 	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script>
	var vueApp = new Vue({
  		el: "#vuecounter",
  		data: {
    		counter: 0,
  		},
  		methods: {
    		increase: function() {
      			this.counter++;
    		},
    		decrease:  function() {
      			this.counter--;
    		},
    		reset: function() {
      			this.counter = 0;
    		}
  		},
	})
</script>
</html>