const app = new Vue({

   el: '#app',
 
   data: {

   },
 
   mounted(){
      console.log('Partenza');
      this.getApi();
   },
 
   methods: {
      getApi(){
         axios.get('http://localhost/php-ajax-dischi/server.php')
            .then(response =>{
              console.log(response); 
      
            })
            .catch(error =>{
               console.log(error);
            });
         },

   }
 
 });