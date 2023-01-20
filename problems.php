<?php include_once("templates/header.php"); ?>

<?php include_once("templates/navbar.php"); ?>

  <section class="fruit_section layout_padding-top">
    <div class="container">
      <h2 class="custom_heading">Resolução de problemas</h2>
      <p class="custom_heading-text">
        Tudo o que você precisa saber para corrigir os problemas do seu servidor
      </p>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
            Problemas na hora da verificação do PHP?<br>
            </h3>
            Basta baixar o Pacote Visual C++ Redistributable e instalar todas as versões!
            <p class="mt-4 mb-5">
            <a href="https://media.discordapp.net/attachments/911004580022734898/911005543244652554/Screenshot_1.png?width=960&height=350" target="_blank"><img src="https://media.discordapp.net/attachments/911004580022734898/911005543244652554/Screenshot_1.png?width=960&height=350" width="500px"></a>
            </p>
            <div>
              <a href="https://www.techpowerup.com/download/visual-c-redistributable-runtime-package-all-in-one/" class="custom_dark-btn">
                Baixar
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="images/habbo3.png" alt="" class="" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
            Seu client fica branco ou para em 76%?
            </h3>
            <p class="mt-4 mb-5">
            <b>1 -</b> Você deve substituir onde está "https" para "http" e dar f5 no navegador!
            (Caso não tenha certificado SSL ou esteja executando o server em máquina local)
            O Https é apenas utilizado quando se tem um certificado SSL em seu servidor/dominio.
            Fica em: src/App/Config.php
            <br><br>
            <b>2 -</b> Caso isso não funcione, cheque seu arquivo "external_variables" e veja se os links estão configurados da maneira correta.
            (Não existe apenas o primeiro link, deve-se usar o ctrl + h para mudar todos os links)
            Fica em: swf/gamedata/external_variables.txt
            <br><br>
            <b>3 -</b> Caso também não funcione, cheque se renomeou sua pasta para "PRODUCTION" corretamente sem a numeração na pasta da SWF.
            <br><br>
            <b>4 -</b> Por último certifique-se de que o Firewall está com as portas abertas, ou se preferir, desligue o Firewall do Windows.
            <br><br>
            <a href="https://media.discordapp.net/attachments/911004580022734898/911073523102011453/Screenshot_3.png?width=960&height=432" target="_blank"><img src="https://media.discordapp.net/attachments/911004580022734898/911073523102011453/Screenshot_3.png?width=960&height=432" width="500px"></a>
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center ">
            <img src="images/habbo2.png" alt="" class="" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
            Configurando o Nitro com o CloudFlare
            </h3>
            <p class="mt-4 mb-5">
            <b>1 -</b> Deve ter seu domínio cadastrado no CloudFlare.<br>
            <i>(Caso não saiba como, basta buscar no Google)</i>
              <br><br>
            <b>2 -</b> Deve-se criar um subdomínio exemplo: <i>ws.meuhotel.com</i> em DNS dentro do painel do CloudFlare apontando para o IP do seu servidor.
              <br><br>
            <b>3 -</b> No CloudFlare em Rules deve criar uma regra com o subdomínio <i>ws.meuhotel.com:2096</i> para SSL desativado.
              <br><br>
            <b>4 -</b> Deve configurar o seu .env do Nitro para <i>wss://ws.meuhotel.com:2096</i>
              <br><br>
            <b>5 -</b> Deve configurar o <i>ws.nitro.ip.header</i> no banco de dados em <b>emulator_settings</b> com <i>X-Forwarded-For</i> ou <i>CF-Connecting-IP</i>
              <br><br>
            <b>6 -</b> Deve configurar o <i>websockets.whitelist</i> em <b>emulator_settings</b> para *.meuhotel.com ou *   <br>
            <i>(Primeira opção recomendável) </i>
            </p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center ">
            <img src="images/habbo2.png" alt="" class="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once("templates/footer.php") ?>