<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Email</h5>
      </div>
      <form method="GET" action="">
      <div class="card-body">
          <div class="row">
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="noreply@noreply.com.br">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Assunto</label>
                <input type="text" class="form-control" name="subject" value="Assunto">
                <input type="hidden" name="page" value="email">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Corpo do E-mail</label>
                <textarea rows="4" cols="80" class="form-control" name="body">Lorem Ipsum is simply dummy text of the printing and typesetting</textarea>
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
                $qrCodeName =  "../img-qrcodes/email/". date('d-m-Y H-m-i') .".png";

                // here our data
                $email = isset($_GET['email']) ? $_GET['email'] : 'noreply@noreply.com.br';
                $subject = isset($_GET['subject']) ? $_GET['subject'] : 'Assunto';
                $body = isset($_GET['body']) ? $_GET['body'] : 'Corpo do E-mail';
                
                // we building raw data
                $codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body);
            
                /**
                 * Realizamos a criação da imagem PNG, sendo passado as seguintes informações:
                 * 1º - A string que desejamos inserir no QR Code.
                 * 2º - O nome da imagem que criamos no passo anterior.
                 */
                if(isset($_GET['email']))
                {
                  QRcode::png($codeContents, $qrCodeName, QR_ECLEVEL_H, 3);
                  // Para finalizar realizamos a exibição da imagem no navegador.
                  echo "<img src='{$qrCodeName}'>";
                }
              ?>
            </a>
            <hr>
            <p class="description">
              URL: <?= isset($_GET['email']) ? $_GET['email'] : 'www.programadormaroto.co' ?>
              <br><br>
              Salvo em: <?= "qrcode-php/img-qrcodes/email/" ?>
            </p>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>