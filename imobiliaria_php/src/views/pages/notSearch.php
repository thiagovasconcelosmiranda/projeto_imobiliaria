
<?php $render('header');?>

<div class="page">

<h1>Não encontrou o que procura?</h1>

<div class="row-i-search">
  <form method="POST" action="">
   <div class="i-form-x">
     <div class="col-group">
        <h3>Seus dados</h3>
        <div class='input-i-x'>
            <input type="text" name="nome" placeholder="Nome">
        </div>
        <div class='input-i-x'>
            <input type="text" name="cidade" placeholder="Cidade">
        </div>
        <div class='input-i-x'>
            <input type="email" name="nome" placeholder="Email">
        </div>
        <div class='input-i-x'>
            <input type="email" name="conf_nome" placeholder="Confirmar Email">
        </div>
        <div class='input-i-x'>
            <input type="text" name="telefone" placeholder="Telefone">
        </div>

        <div class='input-i-x'>
            <textarea name="" id="" cols="10" rows="10">
              
             </textarea>
        </div>
      </div>
        <div class="col-group">
           <h3>Dados do imovel</h3>
           <p>Operação</p>
           <div class="align-i-x">
              <div class="group-radio">
                <input type="radio">
                <label for="">Locação </label>
              </div>
              <div class="group-radio">
                <input type="radio">
                <label for="">Venda </label>
             </div>
           </div>
           <p>Selecione os tipos de imóveis desejados</p>
           <div class="align-i-x">
             <div class='input-i-x'>
                <select name="tipo" id="">
                  <option value="">Residêncial</option>
                </select>
             </div>
           </div>
           <div class="align-i-x">
             <div class='input-i-x'>
                <select name="tipo" id="">
                  <option value="">Comercial</option>
                </select>
             </div>
           </div>
           <div class="align-i-x">
             <div class='input-i-x'>
                <select name="tipo" id="">
                  <option value="">Terreno</option>
                </select>
             </div>
           </div>
         </div>
        </div>
        <h3>Selecione as cidade(as) desejada(s)</h3>
        <div class="row-i-x">
            <div class="col-i-button">
               <div class="button-x">
                 <button class="button-city" type="">Marília</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Lupercio</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Bauru</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Garça</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Adamantina</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">São Paulo</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Sorocaba</button>
               </div>
            </div>
            <div class="col-i-button">
            <div class="button-x">
                 <button class="button-city" type="">Lácio</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Padre nobriga</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Garça</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">VeraCruz</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Americana</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Panorama</button>
               </div>
               <div class="button-x">
                 <button class="button-city" type="">Presidente prudente</button>
               </div>
            </div>
        </div>
        <div class="row-i-x" >
          <div class="col-input">
            <div class="group-i-x-1">
              <label for="">Valor</label>
              <input type="text">
            </div>

            <div class="group-i-x-1">
              <label for="">Garagem</label>
              <input type="text">
            </div>

            <div class="group-i-x-1">
              <label for="">Quartos</label>
              <select type="text">
                <option value="">selecinar...</option>
              </select>
              <div class="i-button-2">
                <button class="button" type="submit">Enviar</button>
               </div>
            </div>
          </div>
        </duv>
      </form>
    </div>
</div>
<?php $render('footer');?>