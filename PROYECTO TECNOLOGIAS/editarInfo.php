

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



  <div id="mymodal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Texto</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <p class="h5 mb-4">Seleccione la categoría</p>
                                    <select id="datoModelo" class="selectpicker" data-size="3" name="categoria">
                                        <option data-icon="fa-heart">Modelado 3D</option>
                                        <option>Programación</option>
                                        <option>Render</option>
                                        <option>Animación</option>
                                        <option>Efectos Especiales</option>
                                        <option>Inteligencia Artificial</option>
                                    </select>
                                    </form>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> 
<script>