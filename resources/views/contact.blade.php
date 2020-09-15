@include('partials.nav')

<div class="container" id="info-container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h2 class="text-center text-info" style="color: rgba(243,246,248,0.99); ">CONTÁCTENOS</h2>
        </div>
        <div class="col-12 col-sm-6 col-md-6"  id="contact-box">

            <br>
            <div class="info-box"><i class="fa fa-map my-info-icons"></i><span class="text-uppercase text-info">DIRECCIÓN: </span><span>Del supermercado hermanos Pineda, 200mtrs al oeste, edificio a mano izquierda</span></div>
            <br>
            <div class="info-box"><i class="fa fa-envelope my-info-icons"></i><span class="text-uppercase text-info">EMAIL: </span><span>ligacomunaldelagua@gmail.com</span></div>
            <br>s
            <div class="info-box"><i class="fa fa-phone-square my-info-icons"></i><span class="text-uppercase text-info">TELÉFONO: </span><span>4034-9529</span></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 site-form">
            <form id="my-form">
                <div class="form-group"><label class="sr-only" for="firstname">First Name</label><input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nombre" autofocus /></div>
                <div class="form-group"><label class="sr-only" for="lastname">Last Name</label><input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido" /></div>
                <div class="form-group"><label class="sr-only" for="phonenumber">Phone Number</label><input type="tel" class="form-control" id="phonenumber" name="phonenumber" required placeholder="Número de teléfono" /></div>
                <div class="form-group"><label class="sr-only" for="email">Email Address</label><input type="text" class="form-control" id="email" name="email" required placeholder="Email" /></div>
                <div class="form-group"><label class="sr-only" for="messages">Last Name</label><textarea class="form-control" name="messages" required placeholder="Realice su solicitud" rows="4"></textarea></div><button class="btn btn-primary border rounded" role="button" style="color: rgba(243,246,248,0.99); background-color: rgb(15,112,183);">Enviar</button></form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>