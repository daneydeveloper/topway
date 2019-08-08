<form class="signup-form" name="formbanner">
    <input type="hidden" ng-init="dados.LE_CodigoProduto='904'">
    <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'">
    <h2 class="text-center">Gostaria de aprender inglês de forma rápida e eficiente?</h2>
    <h4 class="text-center">Deixe seus dados que nós explicamos como isso possível.</h4>
    <hr>
    <div class="form-group">
        <input ng-model="dados.LE_Nome" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Digite seu nome:">
    </div>
    <div class="form-group">
        <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Digite seu email:">
    </div>
    <div class="form-group">
        <input ng-model="dados.LE_Telefone" ng-disabled="load" ng-required="true" type="text" class="form-control" placeholder="Digite seu telefone:" mask="(99) 9-9999-9999">
    </div>
    <div class="form-group">
        <select class="form-control">
            <option>>60</option>
            <option>41-60</option>
            <option>31-40</option>
            <option>25-30</option>
            <option>18-24</option>
            <option>13-17</option>
            <option><13</option>
        </select>
    </div>
    <div class="form-group text-center">
        <button ng-click="enviarLead(dados)" ng-disabled="formbanner.$invalid || load" type="submit" class="btn btn-custom btn-sm btn-block">
            <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
            <b ng-if="!load ">APRENDER INGLÊS AGORA</b>
        </button>
    </div>
</form>