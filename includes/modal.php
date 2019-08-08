<!-- <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="loginModalLable">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="loginModalLable">Antes de iniciar a conversa, deixe seus dados para validação.</h4>
            </div>
            <div class="modal-body">
                <form class="signin-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Digite seu nome:">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Digite seu email:">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" placeholder="Digite seu telefone:">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" placeholder="Como podemos ajudar?"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-custom btn-sm btn-block">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<script type="text/ng-template " id="form">
  <div class="py-2 col-lg-12 ">
     <div class="card px-3 py-4 ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" ng-click="closeThisDialog() "><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="loginModalLable">Antes de iniciar a conversa, deixe seus dados para validação.</h4>
            </div>
            <div class="modal-body">
                <form class="signin-form" name="formwpp">
                    <input type="hidden" ng-init="dados1.LE_CodigoProduto='905'">
                    <input type="hidden" ng-init="dados1.LE_Origem='<?=$origem?>'">
                    <div class="form-group">
                        <input ng-model="dados1.LE_Nome" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Digite seu nome:">
                    </div>
                    <!-- <div class="form-group">
                        <input ng-model="dados1.LE_Email" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Digite seu email:">
                    </div> -->
                    <div class="form-group">
                        <input ng-model="dados1.LE_Telefone" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
                    </div>
                    <!-- <div class="form-group">
                        <textarea ng-model="dados1.LE_Descricao" ng-disabled="load" ng-required="false" type="text" class="form-control" placeholder="Como podemos ajudar?"></textarea>
                    </div> -->
                    <div class="form-group text-center">
                        <button ng-click="enviarLead(dados1)" ng-disabled="formwpp.$invalid || load" type="submit" class="btn btn-custom btn-sm btn-block">
                            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                            <b ng-if="!load ">ENVIAR</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
     </div>
  </div>
</script>