<!-- MODAL CONTATO -->
        <div class="modal fade" id="contatoRiver" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="exampleModalLabel">Fale Conosco</h2>
              </div>


              <form action="{{ route('contato.enviar') }}" method="POST">
                  <div class="modal-body">
                   		{{ csrf_field() }}
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input type="text" required name="nome" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input type="text" required name="email" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Assunto:</label>
                        <input type="text" required name="assunto" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Mensagem:</label>
                        <textarea rows="4" required name="msg" class="form-control"></textarea>
                      </div>
                  </div>

                  <div class="modal-footer">

                  		<button type="reset" class="btn btn-default pull-center">Limpar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>

                    <br />
                    <br />

                    <p><strong><small>Fone: (86) 98872-9446 / 99450-7100 / 99973-3728</small></strong><br>
                    <strong><small>Email: riveracoficial@hotmail.com</small></strong></p>

                  </div>
              </form>
            </div>
          </div>
        </div>