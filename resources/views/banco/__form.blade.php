<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <lable for="nome" class="control-label">Código:</lable>
            <input type="number"
                   name="codigo"
                   id="codigo"
                   value="{{isset($registro->codigo) ? $registro->codigo : ''}}"
                   class="form-control"/>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <lable for="data_cadastro" class="control-label">Nome:</lable>
            <input type="text"
                   name="nome"
                   id="nome"
                   value="{{isset($registro->nome) ? $registro->nome : ''}}"
                   class="form-control"/>

        </div>
    </div>
</div>