<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <nav></nav>
  </header>

  <main id="root">
    <div class="container">
      <div class="row row-cols-5 g-4 py-5">




        <div class="col" v-for="(album, i) in albumsList" :key="i">
          
        
          <div class="card">
            <img class="card-img-top" :src="album.poster" alt="..." />
            <div class="card-body text-center">
              <h4 class="card-title py-2">{{album.title}}</h4>
              <div class="card-text">
                <h4 class="mb-0">{{album.author}}</h4>
                <h6 class="pb-5">{{album.year}}</h6>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </main>
  <script src="script.js"></script>
</body>

</html>