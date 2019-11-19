const CACHE_NAME = 'cache-1';

self.addEventListener('install', e => {

  const cacheProm = caches.open(CACHE_NAME)
        .then( cache => {
          
          return  cache.addAll([
              '/',
              '/index.php',
              '/videos/daily.mp4',
              '/videos/weather.mp4',
              // '/js/app.js',
              // '/js/initial.js',
              // '/sw.js',
              // 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
              // 'https://fonts.googleapis.com/css?family=Nunito:200,600',
              // 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.css',
              // 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.js'
            ])
        })
    
    e.waitUntil(cacheProm);

});

self.addEventListener('fetch', e => {

  //3 - Network with cacher fallback

    // const respuesta = fetch(e.request).then( res => {

    //   caches.open(CACHE_NAME)
    //        .then(cache => {
    //           cache.put(e.request, res);
    //        })

    //   return res.clone();

    // }).catch( err => {

    //   return caches.match(e.request);

    // });

    // e.respondWith(respuesta);


  // console.log(e.request)
  //2- Cache with Network Fallback
  const respuesta = caches.match(e.request)
        .then(res => {
            if(res) return res;

            //no existe el archivo , tengo que ir a la web

            return fetch(e.request)
                  .then( newResp => {

                     if(e.request.url.includes('tile.osm.org')){
                        // console.log('diferente')
                        caches.open(CACHE_NAME)
                              .then(cache => {
                                 cache.put(e.request, newResp);
                              });
                     }

                      return newResp.clone();
                  })
        });

  e.respondWith(respuesta);

  //1- Cache Only
  
  // e.respondWith( caches.match(e.request));



});
