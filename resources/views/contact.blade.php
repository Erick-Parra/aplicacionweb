@include('partials.nav')

<div class="container">
 <form method="POST" action="{{ route('contact')}}">
           @csrf
<div class="flash-message" style="background-color: #5DADE2;"> 
 @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
  @if(Session::has('alert-' . $msg)) 

  <p class="border rounded alert alert-primary-{{ $msg }}" style="color: rgba(243,246,248,0.99); size: 15px;">{{ Session::get('alert-' . $msg) }} <a href="{{ route('contact')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a></p> 
  @endif 
 @endforeach 

 </div> <!-- end .flash-message --> 

    <div class="row">
        <div class="col-md-12">
            <br> 
            <h2 class="text-center text-info" style="color: rgba(243,246,248,0.99); ">CONTÁCTENOS</h2>
           
            <form method="POST" action="{{ route('contact')}}">
           @csrf
        </div>
        <div class="col-12 col-sm-6 col-md-6"  id="contact-box">
            <br>
            <div class="info-box"><i class="fa fa-map my-info-icons"></i><span class="text-uppercase text-info">DIRECCIÓN: </span><span>Del supermercado hermanos Pineda, 200mtrs al oeste, edificio a mano izquierda</span></div>
            <br>
            <div class="info-box"><i class="fa fa-envelope my-info-icons"></i><span class="text-uppercase text-info">EMAIL: </span><span>ligacomunaldelagua@gmail.com</span></div>
            <br>
            <div class="info-box"><i class="fa fa-phone-square my-info-icons"></i><span class="text-uppercase text-info">TELÉFONO: </span><span>4080-1086</span></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 shadow rounded py-3 site-form" style="background-color: #7eeefa;">
            <form style="background-color: #FF0000;">
                <div class="form-group">

                    <input type="text" class="form-control bg-light shadow-sm @error('firstname') is-invalid @else border-0 @enderror" id="firstname" name="firstname" placeholder="Nombre" autofocus
                    value="{{ old('firstname')}}">
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo nombre requerido.</small></strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control bg-light shadow-sm @error('lastname') is-invalid @else border-0 @enderror" id="lastname" 
                    name="lastname" placeholder="Apellido" value="{{ old('lastname')}}">

                       @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo apellido requerido.</small></strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="int" class="form-control bg-light shadow-sm @error('phonenumber') is-invalid @else border-0 @enderror" id="phonenumber" name="phonenumber" placeholder="Número de teléfono"
                    value="{{ old('phonenumber')}}">  

                       @error('phonenumber')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo número de teléfono requerido.</small></strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" 
                    name="email" placeholder="Email" value="{{ old('email')}}">
                      
                         @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo email requerido.</small></strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control bg-light shadow-sm @error('nameasada') is-invalid @else border-0 @enderror" id="nameasada" 
                    name="nameasada" placeholder="Nombre de la ASADA a la que pertenece" value="{{ old('nameasada')}}">

                       @error('nameasada')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo nombre de la ASADA requerido.</small></strong>
                    </span>
                    @enderror
                </div>

                 <div class="form-group">
                    <input type="text" class="form-control bg-light shadow-sm @error('asunto') is-invalid @else border-0 @enderror" id="firstname" 
                    name="asunto" placeholder="Asunto" 
                    value="{{ old('asunto')}}">

                      @error('nameasada')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo asunto requerido.</small></strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control bg-light shadow-sm @error('messages') is-invalid @else border-0 @enderror" name="messages" 
                    placeholder="Realice su solicitud" rows="2">{{ old('messages')}}</textarea>
                    
                      @error('messages')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo realice su solicitud requerido.</small></strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 col-xs-12" align="center">
                <button class="btn btn-primary shadow btn-block border rounded" role="button" style="color: rgba(243,246,248,0.99); background-color: #003357;">Enviar</button></form>
                <br>
        </div>
    </form>
        <div class="clearfix"></div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
