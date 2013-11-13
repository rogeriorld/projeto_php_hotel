<div style="width: 600px; height: 500px; display: block; margin: 0 auto;">
  <form class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <legend>Contato</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nome">Nome:</label>  
    <div class="col-md-5">
    <input id="nome" name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email">Email:</label>  
    <div class="col-md-5">
    <input id="email" name="email" type="email" placeholder="Digite seu email" class="form-control input-md" required="">
      
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="mensagem">Mensagem:</label>
    <div class="col-md-4">                     
      <textarea class="form-control" id="mensagem" name="mensagem" style="width: 230px; height: 125px"></textarea>
    </div>
  </div>

  </fieldset>
  
    <input  style='position: relative; left: 100px;' class="btn btn-default" type='submit' value='Enviar'>
  
  </form>
</div>