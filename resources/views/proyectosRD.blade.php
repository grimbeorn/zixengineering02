@extends('layouts.app')

@section('content')
<div class="container marketing">
  <h2 class="featurette-heading" style="margin-top:50px;">Proyectos. R + D</h2><br>
  <p class="lead">A continuación se presentan algunos de los proyectos R+D en los que hemos participado:</p><br>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m1"> Wing-box ribs optimization</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m2"> Garage door opener</a>
  </div>
  <hr class="featurette-divider">
</div>

<!-- Modal 1 -->
<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRd1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRd1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRd1" data-slide-to="1"></li>
            <li data-target="#myCarouselRd1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/05.rd/1/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/05.rd/1/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/05.rd/1/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRd1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRd1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRd2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRd2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRd2" data-slide-to="1"></li>
            <li data-target="#myCarouselRd2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/05.rd/2/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/05.rd/2/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/05.rd/2/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRd2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRd2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>

@endsection
