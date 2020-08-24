@include('partials.nav')

<div class="container" id="info-container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-info">CONTÁCTENOS</h2>
        </div>
        <div class="col-12 col-sm-6 col-md-6" id="contact-box">
            <p id="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Repellat vel, et itaque commodi iste ab, laudantium voluptas deserunt nobis. </p>
            <br>
            <div class="info-box"><i class="fa fa-map-marker my-info-icons"></i><span class="text-uppercase text-info">Direcion: </span><span>MCC Road, Aba, Abia State Nigeria</span></div>
            <br>
            <div class="info-box"><i class="fa fa-envelope my-info-icons"></i><span class="text-uppercase text-info">Email: </span><span>contact@ensignhospital.org </span></div>
            <br>
            <div class="info-box"><i class="fa fa-phone-square my-info-icons"></i><span class="text-uppercase text-info">TELÉFONO: </span><span>+234000000000 </span></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 site-form">
            <form id="my-form">
                <div class="form-group"><label class="sr-only" for="firstname">First Name</label><input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nombre" autofocus /></div>
                <div class="form-group"><label class="sr-only" for="lastname">Last Name</label><input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido" /></div>
                <div class="form-group"><label class="sr-only" for="phonenumber">Phone Number</label><input type="tel" class="form-control" id="phonenumber" name="phonenumber" required placeholder="Numero" /></div>
                <div class="form-group"><label class="sr-only" for="email">Email Address</label><input type="text" class="form-control" id="email" name="email" required placeholder="Email" /></div>
                <div class="form-group"><label class="sr-only" for="messages">Last Name</label><textarea class="form-control" name="messages" required placeholder="Realice su solicitud" rows="8"></textarea></div><button class="btn btn-light btn-lg" id="form-btn" type="submit">Enviar </button></form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>