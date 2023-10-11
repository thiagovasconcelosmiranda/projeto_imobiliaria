
<div class="modal-login">
          <h3>Bem vindo à Imobiliaria Estilo</h3>
          <div class="text-i">
            <div class="close">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <p>Preencha os campos abaixo com as informações recebidas via e-mail e 
              clique em "Acessar área do cliente" para visualizar seus extratos ou boletos</p>
          </div>
            <form method="POST" action="<?=$base;?>/login">
             <div class="group-input">
              <div class="input">
                <label>CPF/CNPJ*</label>
                  <input type="cpf" name="cpf"/>
                  <a href="#"><p>Esqueceu sua senha?</p></a>
                </div>
             </div>
             <div class="group-input">
              <div class="group-input">
                <div class="input">
                  <label>Senha*</label>
                  <input type="password" name="password"/>
                </div> 
              </div>
             </div>
             <div class="group-input">
                 <div class="input">
                  <div class="group-i-contract">
                    <p><input type="checkbox"/> Ao clicar no botão "Acessar a área do cliente", afirmo que li e 
                      concordo com os TERMOS DE USO (atualizados dia 11/08/2021) e POLITICA DE PRIVACIDADE
                       (atualizados dia 11/08/2021).</p>
                   </div>
                 </div>
                 <div class="group-input">
                   <div class="input">
                     <h3></h3>
                     <p></p>
                   </div>
                 </div>
             </div>
             <div class="group-input">
              <div class="input">
                <input type="submit" value="Acessar área do cliente"/>
              </div> 
             </div>
            </form>
            <div class="align-l">
              <div class="linha-i"></div>
              <h3>Caso não tenha as informações de acesso</h3>
              <a href="#"><p>Entre em contato conosco</p></a>
            </div>
       </div>
       