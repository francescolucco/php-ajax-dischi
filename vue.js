const app = new Vue({

   el: '#app',
 
   data: {
      dischi: [],
   },
 
   mounted(){
      console.log('Partenza');
      this.getApi();
   },
 
   methods: {
      getApi(){
         axios.get('http://localhost/php-ajax-dischi/server.php')
            .then(response =>{
               this.dischi = response.data; 
               console.log(this.dischi);
            })
            .catch(error =>{
               console.log(error);
            });
         },

   }
 
 });