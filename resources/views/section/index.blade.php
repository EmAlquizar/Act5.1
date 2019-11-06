<html>
<body>
	<div id='app'>
		Select Section
		<select>
		@foreach($sections as $section)
			<option value="{{ $section->id }}">
				{{ $section->name}}
			</option>
		@endforeach
		</select>
		Select Students
		<select>
		@foreach($sections as $section)
			<option value="{{ $section->id }}">
				{{ $section->name}}
			</option>
		@endforeach
		</select>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
	var vm = new Vue({
  	el: '#app',
  		data: {
    	users:[]
  	},
  mounted(){
     this.loadData();
  },
  methods:{
     loadData:function(){
  axios.get('https://jsonplaceholder.typicode.com/users').then(res=>{
       if(res.status==200){
         this.users=res.data;
       }
     }).catch(err=>{
         console.log(err)
     });
     }
  }
})
</script>
</html>