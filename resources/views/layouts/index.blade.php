<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('seo')
  <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="{{asset('imagen/'.$empresa->logo)}}" type="image/x-icon">
</head>
<body>
  <header>
    <section>
      <img style="width: 200px;" src="{{asset('imagen/'.$empresa->logo)}}" alt="">
    </section>
    
    <section class="links">
      <nav>
        <div class="hamburger-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
        <ul class="nav-links">
          <li><a href="#mision"><i class="fa-solid fa-rocket fa-beat"></i> Misión</a></li>
          <li><a href="#vision"><i class="fa-solid fa-lightbulb fa-beat"></i> Visión</a></li>
          <li><a href="#objetivos"><i class="fa-solid fa-shop fa-beat-fade"></i> Objetivos</a></li>
          <li><a href="#footer"><i class="fa-solid fa-server fa-beat"></i> Contactos</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <main>
        @yield('content')
  </main>

  
  <footer id="footer">
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-0.27,150.50 C158.86,-8.36 338.31,213.66 499.72,108.06 L539.78,-36.00 L-4.79,-13.30 Z" style="stroke: none; fill: rgb(253, 255, 255);"></path></svg></div><br><br>
    <section class="flex-footer">

      <section class="flex-redes">
        <section class="title-redes">
          <h3>REDES SOCIALES</h3>
        </section>
        <section class="redes">
          <nav>
            <ul class="ul-redes">
            @foreach ($redes as $item)
              <li><a href="{{$item->link}}" target="_blank"><i class="{{$item->icon}}"></i>{{$item->title}}</a></li>
            @endforeach
            </ul>
          </nav>
        </section>
      </section>
  
      <section class="flex-contactos">
        <section class="title-contactos">
          <h3>CONTACTOS</h3>
        </section>
        <section class="contactos">
          <nav>
            <ul class="ul-contactos">
              <li><a href=""><i class="fa-solid fa-phone-volume fa-beat"></i>{{$empresa->numero}}</i></a></li>
              <li><a href=""><i class="fa-solid fa-envelope fa-beat"></i>{{$empresa->correo}}</a></li>
            </ul>
          </nav>
        </section>
      </section>
  
      <section class="flex-localisacion">
        <section class="title-localisacion">
          <h3>GEOLOCALIZACION</h3>
        </section>
        <section class="mapa">
          <nav>
            <ul>
              <iframe src="{{$empresa->georeferencia}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
          </nav>
        </section>
      </section>
    </section>
  </footer>
  <script style="height: 20px; width: 50px;" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{asset('sitioWeb/js/scrip.js')}}"></script>
</body>
</html>