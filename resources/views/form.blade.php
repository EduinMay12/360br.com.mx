
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <h3 class="w-100">Contactanos</h3>
        <div>
            <a href="https://www.instagram.com/360ibr/" target="_blank">
                <button class="btn bg-gradient-warning" type="button" name="button">
                    <i class="fa fa-instagram fa-2x"></i>
                </button>
            </a>
        </div>
        
        <div>
            <a href="https://www.facebook.com/360inmobiliaria.mx" target="_blank">
                <button class="btn btn-info" type="button" name="button">
                    <i class="fa fa-facebook fa-2x"></i>
                </button>
            </a>
        </div>
        
        <div>
            <a href="https://api.whatsapp.com/send?phone=+5246464564546&text=Hola!%20Quiero%20mas%20información!" target="_blank">
                <button class="btn bg-gradient-success" type="button" name="button">
                    <i class="fa fa-whatsapp fa-2x"></i>
                </button>
            </a>
        </div>
    </div>
 
    <br>
   @if (count($errors) > 0)
    <div class="alert bg-gradient-danger alert-block">
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert bg-gradient-succes alert-block">
      <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Nombre</label>
     <input type="text" name="name" class="form-control" value="" placeholder="ej. Juan Perez o Ing. Juan Perez" />
    </div>
    <div class="form-group">
     <label> Email</label>
     <input type="text" name="email" class="form-control" value="" placeholder="ej. tucorreo@ejemplo.com" />
    </div>
    <div class="form-group">
     <label>Mensaje</label>
     <textarea name="message" class="form-control" placeholder="ej. Me interesa está propiedad me puede proporcionar más informción de la propiedad"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn bg-gradient-secondary"Enviar" />
    </div>
   </form>

