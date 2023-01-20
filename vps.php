<?php include_once("templates/header.php"); ?>

<?php include_once("templates/navbar.php"); ?>

<?php require_once("php/vars.php"); ?>

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">VPS (<i>Virtual Private Server</i>)</h2>
      <p class="custom_heading-text">
        Adquira agora seu servidor para manter o seu projeto funcionando
      </p>
      <div class=" layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/server.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">VPS 1</h5>
              <p class="card-text">
                4GB RAM <br>
                4 vCpu 2.0 GHz <br>
                40GB SSD <br>
                Windows ou Linux <br>
                <h5 class="card-title">R$65,00/Mês</h5>
              </p>
              <a href="<?= $whatsapp ?>" target="_blank" class="custom_dark-btn" style="background-color: #015781 !important;">
                Adquirir
              </a>
            </div>
          </div>
          <div class="card">
          <img class="card-img-top" src="images/server.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">VPS 2</h5>
              <p class="card-text">
                6GB RAM <br>
                4 vCpu 2.0 GHz <br>
                50GB SSD <br>
                Windows ou Linux <br>
                <h5 class="card-title">R$75,00/Mês</h5>
              </p>
              <a href="<?= $whatsapp ?>" target="_blank" class="custom_dark-btn" style="background-color: #015781 !important;">
                Adquirir
              </a>
            </div>
          </div>
          <div class="card">
          <img class="card-img-top" src="images/server.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">VPS 3</h5>
              <p class="card-text">
                8GB RAM <br>
                4 vCpu 2.0 GHz <br>
                60GB SSD <br>
                Windows ou Linux <br>
                <h5 class="card-title">R$85,00/Mês</h5>
              </p>
              <a href="<?= $whatsapp ?>" target="_blank" class="custom_dark-btn" style="background-color: #015781 !important;">
                Adquirir
              </a>
            </div>
          </div>
          <div class="card">
          <img class="card-img-top" src="images/server.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">VPS 4</h5>
              <p class="card-text">
                10GB RAM <br>
                4 vCpu 2.0 GHz <br>
                80GB SSD <br>
                Windows ou Linux <br>
                <h5 class="card-title">R$95,00/Mês</h5>
              </p>
              <a href="https://api.whatsapp.com/send/?phone=12105718016&text=Eu+tenho+interesse+no+seu+servi%C3%A7o+de+Habbo&app_absent=0" target="_blank" class="custom_dark-btn" style="background-color: #015781 !important;">
                Adquirir
              </a>
            </div>
          </div>
        </div>
      </div>
      <h2 class="custom_heading">Informações</h2>
          <p class="custom_heading-text">
            Os servidores acima <b>NÃO SÃO CUSTOMIZÁVEIS!</b><br>
            Caso precise fazer um <b>Upgrade</b> futuramente, <br>
            providênciamos o backup da sua VPS antiga<br>
            para colocar os arquivos na nova VPS!<br><br>
            Brevemente traremos servidores customizáveis!<br><br>
            <i>Todos os servidores são ativados manualmente,<br>
            basta clicar em "Adquirir" e entrar em contato via<br>
            WhatsApp para solicitar o servidor.</i>
          </p>
    </div>
  </section>

  <?php include_once("templates/footer.php") ?>