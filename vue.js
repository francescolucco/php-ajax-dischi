const app = new Vue({

   el: '#app',
 
   data: {
     images: [
       'https://m.media-amazon.com/images/I/41hseu0FM3L._AC_.jpg',
       'https://m.media-amazon.com/images/I/81j7xM-oijL._AC_SL1400_.jpg',
       'https://m.media-amazon.com/images/I/61j39yQ8SPL._AC_.jpg',
       'https://m.media-amazon.com/images/I/81dJbmDOBQL._AC_SL1402_.jpg',
       'https://m.media-amazon.com/images/I/71jKc6ytJsL._AC_SL1200_.jpg',
       'https://m.media-amazon.com/images/I/519fIbPdvEL._AC_.jpg',
       'https://m.media-amazon.com/images/I/713Uymm9IXL._AC_SL1200_.jpg',
     ],
     titles: [
       'Random Access Memories',
       'MASTER OF PUPPETS-REMASTER',
       'Ballbreaker',
       'Radio Bemba Sound System',
       'Techno Megamix (70 Tracks)',
       'GIOVANI JOVANOTTI',
       'Gentleman',
     ],
     texts: [
       'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam, cumque provident totam omnis, magnam dolores dolorum corporis.',
       'Lorem ipsum',
       'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
       'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam,',
       'Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam,',
       'Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam,',
       'Et temporibus voluptatum suscipit tempore aliquid deleniti aut veniam inventore eligendi ex ad ullam,',
     ],
     counter: 0
   },
 
   mounted(){
     console.log('app montata');
   },
 
   methods: {
 
     nextSlide(){
       this.counter--;
       if(this.counter < 0){
         this.counter = this.images.length - 1;
       }
 
     },
 
     prevSlide(){
       this.counter++;
       if(this.counter > this.images.length - 1){
         this.counter = 0;
       } 
     }
   }
 
 });