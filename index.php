<?php include("template/Cabecera.php");?>

    <div class="container">
        <div class="row">

     <div class="background-carousel">

        <img src="https://www.puentedemando.com/wp-content/uploads/2017/02/telefc3a9rico-de-mc3a9rida-foto_-jesc3bas-lc3b3pez.jpg" alt="Imagen 1" class="active"/>
        <img src="https://www.elchiguirebipolar.net/wp/wp-content/uploads/2018/05/merida-header.jpg" alt="Imagen 2" />
        <img src="https://www.adondealirio.com/wp-content/uploads/2020/11/Mucubaji%CC%81.jpeg" alt="Imagen 3" />
        <img src="https://ultimasnoticias.com.ve/wp-content/uploads/2021/12/san-benito.jpg" alt="Imagen 4" />
        <img src="https://icdn.descubro.mx/uploads/2016/08/vaqueria16.jpg?strip=all&lossy=1&ssl=1" alt="Imagen 5" />

    </div>

  <div class="content">
    <h1>Merida Magica</h1>
    <p>Un mundo por conocer</p>
  </div>

  <script>
    // JavaScript para carrusel automático
  const images = document.querySelectorAll('.background-carousel img');
  let current = 0;
  const intervalTime = 4000; // 4 segundos
  function showNextImage() {
    images[current].classList.remove('active');
    current = (current + 1) % images.length;
    images[current].classList.add('active');
  }
  setInterval(showNextImage, intervalTime);
  </script>

      </div>
</div>

<script>
    // JavaScript para carrusel automático
  const images = document.querySelectorAll('.background-carousel img');
  let current = 0;
  const intervalTime = 4000; // 4 segundos
  function showNextImage() {
    images[current].classList.remove('active');
    current = (current + 1) % images.length;
    images[current].classList.add('active');
  }
  setInterval(showNextImage, intervalTime);
  </script>


 
<?php include("template/pie.php");?>