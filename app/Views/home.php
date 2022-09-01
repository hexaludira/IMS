<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue@3.2.37/dist/vue.global.min.js"></script> -->
	<!-- <script src="https://unpkg.com/vue@3.2.37/dist/vue.global.prod.js"></script> -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title><?= $title; ?></title>
</head>
<body>
	<div id="app">
		<h2><?= $data1; ?></h2>
		<h3>{{message}}</h3>

		<input :value="form.nama" @input="onInput">
		<p>{{form.nama}}</p>
		<button @click='showAlert()'>Klik saya</button>
	</div>
</body>
</html>

<script>
	var app = new Vue({
		el: '#app',
		data() {
			return {
				form :{
					nama: ''
				}
			}
		},
		methods: {
			onInput(e){
				this.form.nama = e.target.value
			},
			showAlert(){
				Swal.fire({
					title: 'Ini alert',
					text: 'Berhasil'
				});

			}
		}
	})

	// var app = new Vue({
	// 	el: '#app',
	// 	data(){
	// 		return{
	// 			form: {
	// 				nama: ''
	// 			},
	// 			message: 'Coba gan'
	// 		}
	// 	},
	// 	methods: {
	// 		showAlert(){
	// 			Swal.fire({
	// 				title: 'Ini alert',
	// 				text: 'Berhasil'
	// 			});
	// 		}
	// 	}
	// })
	
</script>