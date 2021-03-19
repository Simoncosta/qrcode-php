<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Texto</h5>
      </div>
      <form method="GET" action="">
      <div class="card-body">
          <div class="row">
            
            <input type="hidden" name="page" value="text">

            <div class="col-md-12">
              <div class="form-group">
                <label>Texto</label>
                <textarea rows="4" cols="80" class="form-control" name="texto">Lorem Ipsum</textarea>
              </div>
            </div>


          </div>
            
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-primary">Gerar QR Code</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-user">
      <div class="card-body">
        <p class="card-text">
          <div class="author">
            <div class="block block-one"></div>
            <div class="block block-two"></div>
            <div class="block block-three"></div>
            <div class="block block-four"></div>
            <a href="javascript:void(0)">

              <?php
                require_once('../vendor/phpqrcode/qrlib.php');

                // how to build raw content - QRCode to send email, with extras

                // Configuramos um nome único para o QR Code com base no número da matrícula.
                $qrCodeName =  "../img-qrcodes/text/". date('d-m-Y H-m-i') .".png";
            
                /**
                 * Realizamos a criação da imagem PNG, sendo passado as seguintes informações:
                 * 1º - A string que desejamos inserir no QR Code.
                 * 2º - O nome da imagem que criamos no passo anterior.
                 */
                if(isset($_GET['texto']))
                {
                  QRcode::png($_GET['texto'], $qrCodeName);
                  // Para finalizar realizamos a exibição da imagem no navegador.
                  echo "<img src='{$qrCodeName}'>";
                }
              ?>
            </a>
            <hr>
            <p class="description">
              URL: <?= isset($_GET['texto']) ? $_GET['texto'] : 'Lorem Ipsum' ?>
              <br><br>
              Salvo em: <?= "qrcode-php/img-qrcodes/text/" ?>
            </p>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>