<script src="https://unpkg.com/vue@3"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div id="app">
    <h2><?= $data1; ?></h2>
    <h3>{{message}}</h3>

    <!-- <input :value="form.nama" @input="onInput"> -->
    <br/>
    <input v-model="pesan">
    <!-- <p>{{form.nama}}</p> -->
    <br/>
    <p>{{ pesan }}</p>
    <input type="checkbox" id="serfo" value="Serfo" v-model="cekbox">
    <label for="serfo">Serfo</label>
    <input type="checkbox" id="rigel" value="Rigel" v-model="cekbox">
    <label for="rigel">Rigel</label>
    <br/>
    <div>Checked names: {{ cekbox }}</div>
    <br/>
    <button @click='showAlert()'>Klik saya</button>

</div>

<div id="app2">
  <h3>{{quote}}</h3>
  
</div>

<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {
        //message: 'Hello Vue!'
        form: {
          nama: ''
        },
        pesan: '',
        cekbox:[]
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
  }).mount('#app')

  createApp({
    data(){
      return {
        quote : 'Good is not a thing you are. It\'s a thing you do.'
      }
    }


  }).mount('#app2')
</script>