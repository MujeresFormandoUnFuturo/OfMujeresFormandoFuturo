@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')

<br>
    <section class="mainCarrusel">
    <div class="imgCarrusel">
      <img src="img/asociacion.JPG" alt="">
    </div>
    </section>
         <section class="flex-contenido">
            <section id="mision" class="flex-item">
              <section  class="flex-itemImg">
              <img style="width: 300px; height: 310px;" class="img1" src="{{asset('imagen/'.$Mision->image)}}" alt="">
              </section>
              <br>
              <br>
              <section class="flex-itemInfo">
              <h2><span>*</span>MISIÓN</h2>
              <p>{{$Mision->name}}</p>
              </section>
            </section>
            <section id="vision" class="flex-item2">
              <section class="flex-itemInfo2">
              <h2><span>*</span>VISIÓN</h2>
              <p>{{$Vision->name}}</p>  
              </section>
              <section class="flex_itemImg2">
                <img style="width: 300px; height: 310px;" class="img2" src="{{asset('imagen/'.$Vision ->image)}}" alt="">
              </section>
            </section>
         </section>
        
        <section class="estrategias-futuro">
          <h4 id="objetivos" class="titulo-seccion">OBJETIVOS</h4>
          <div class="planes">
            @foreach ($servicios as $objetivos)
            <div class="plan">
                <h5 class="titulo-plan">{{$objetivos->title}}</h5>
                <ul class="lista-detalles">
                  <li>{{$objetivos->description}}</li>
                </ul>
            </div>
           @endforeach
          </div>
        </section>
         <br><br>
         
         <section class="carrusel">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach($inicio as $item)
              <div class="carousel-item {{$item->class}}">
                <img style="width: 720px; height: 490px;" src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" alt="">
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
@endsection