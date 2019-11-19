

if( navigator.serviceWorker){
  // console.log(' Podemos usan SW')
   navigator.serviceWorker.register('../sw.js');
}


// if(window.caches){

//   caches.open('prueba-1');
//   caches.open('prueba-2');

//   caches.open('cache-v1.1').then(cache => {
//       cache.add('/index.php');
//   });

//   // caches.keys().then( keys => {
//   //    console.log(keys);
//   // }); 

//   caches.keys().then(console.log);

// }