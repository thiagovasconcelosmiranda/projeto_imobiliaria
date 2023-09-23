 <footer class="footer">
            <div class="footer-i-top">
                 <div class="footer-col-top">
                  <div class="i-circle">
                    <i class="fa-solid fa-key"></i>
                  </div>
                  <div class="text-i">
                    <h5>Não encontrol o que procura?</h5>
                    <a href="#"><p>Saiba mais sobre nossa visão e missão. </p></a>
                  </div>
                 </div>
                 <div class="footer-col-top">
                  <div class="i-circle">
                    <i class="fa-solid fa-key"></i>
                  </div>
                  <div class="text-i">
                    <h5>Conheça a nossa imobiliaria</h5>
                    <a href="#"><p>Saiba mais sobre nossa visão e missão. </p></a>
                  </div>
                 </div>
            </div> 
            <div class="footer-text"> 
               <div class="footer-col">
                <h3>Institucional</h3>
                <a href="#"><p>Sobre a imobiliaria</p></a>
                <a href="#"><p>Nossas unidades</p></a>
                <a href="#"><p>Empreendimentos</p></a>
                <a href="#"><p>Trabalhe conosco</p></a>
                <a href="#"><p>Politica de privacidade</p></a>
                <a href="#"><p>Acesso interno</p></a>
               </div>
               <div class="footer-col">
                 <h3>Matriz</h3>
                 <p>AV: das esmeraldas, 1080</p>
                 <p>Marília-SP</p>
               </div>
               <div class="footer-col">
                <h3>Imobiliaria dos estudantes</h3>
                <p>(14) 99708-4574</p>
                <p>AV: Porto seguro, 57</p>
                 <p>Marília-SP</p>
              </div>
               <div class="footer-col">
                  <h3>Siga a gente</h3>
                 <a href="#"><i class="fa-brands fa-facebook"></i></a> 
                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                 <a href="#"><i class="fa-brands fa-instagram"></i></a>
                 <a href="#"><i class="fa-brands fa-youtube"></i></a> 
               </div>
             </div>
             <div class="group-i-logo">
                 <img src="assets/images/logo.png" alt="Logo">
                 <p>Copyright @ 2023 by Codehal | All Rights Reserved.</p>
             </div>
          </footer>
        </div>
       </main>
       <div class="whatzapp" ata-aos="zoom-in-up" data-aos-delay="400" >
        <a target="_blank" href="https://api.whatsapp.com/send?phone=551100000000&text=Quero%20entrar%20em%20contato">
        <img src="assets/images/whatssapp.svg" alt="Botão whatssapp">
        <span class="tooltip-text">Whatzapp flutuante</span>
      </a>
        </div>
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
       <div style="display:none" id="base"><?=$base;?></div>
       <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
       <script src="<?= $base;?>/assets/js/script.js"> </script>
       <script src="<?= $base;?>/assets/js/preload.js"> </script>
       <script src="<?= $base;?>/assets/js/pgImovel.js"> </script>
     
   </body>
</html>