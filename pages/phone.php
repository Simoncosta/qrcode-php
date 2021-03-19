<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Telefone</h5>
      </div>
      <form method="GET" action="">
      <div class="card-body">
          <div class="row">
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" placeholder="phone" name="phone" value="(00)98765-4321">
                <input type="hidden" name="page" value="phone">
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

                // Configuramos um nome único para o QR Code com base no número da matrícula.
                $qrCodeName =  "../img-qrcodes/phone/". date('d-m-Y H-m-i') .".png";
                
                // here our data
                $phoneNo = isset($_GET['phone']) ? $_GET['phone'] : '(00)98765-4321';
                
                // we building raw data
                $codeContents = 'tel:'.$phoneNo;

                if(isset($_GET['phone']))
                {
                  // generating
                  QRcode::png(isset($codeContents) ? $codeContents : '(00)98765-4321', $qrCodeName, QR_ECLEVEL_H, 3);
                
                  // displaying
                  echo "<img src='{$qrCodeName}'>";
                }
              ?>
            </a>
            <hr>
            <p class="description">
              URL: <?= isset($_GET['phone']) ? $_GET['phone'] : '(00)98765-4321' ?>
              <br><br>
              Salvo em: <?= "qrcode-php/img-qrcodes/phone/" ?>
            </p>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>