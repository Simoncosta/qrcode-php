<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Telefone</h5>
      </div>
      <form method="GET" action="../helpers/insert.php">
      <div class="card-body">
          <div class="row">

            <input type="hidden" name="page" value="phone">
            <input type="hidden" name="acao" value="inserir">
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" placeholder="phone" name="phone" value="<?= isset($_GET['phone']) ? $_GET['phone'] : '(00)98765-4321' ?>">
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
              <img src='<?= isset($_GET['arquivo']) ? $_GET['arquivo'] : '' ?>'>
            </a>
            <hr><hr>
            <p class="description">
              TELEFONE: <?= isset($_GET['phone']) ? $_GET['phone'] : '(00)98765-4321' ?>
              <br><br>
              Salvo em: <?= "qrcode-php/img-qrcodes/phone/" ?>
            </p>
            <hr><hr>
            <p>
            <?php if(isset($_GET['phone'])) { ?>
              <a type="button" class="btn btn-fill btn-success" href="<?= $qrCodeName ?>" download><i class="tim-icons icon-cloud-download-93"></i> Download</a>
            <?php } ?>
            </p>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Arquivos QR Codes - PNG</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Nome
                </th>
              </tr>
            </thead>
            <tbody>
             <?php foreach($out as $file) { ?>
              <tr>
                <td>
                  <?= $file.".png" ?>
                </td>
                <td>
                  <a type="button" class="btn btn-fill btn-success" href="../img-qrcodes/phone/<?= $file.".png" ?>" download><i class="tim-icons icon-cloud-download-93"></i> Download</a>
                  <a type="button" class="btn btn-fill btn-danger" href="../helpers/delete.php?page=phone&acao=excluir&arquivo=../img-qrcodes/phone/<?= $file.".png" ?>"><i class="tim-icons icon-trash-simple"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
      </div>
    </div>
  </div>
</div>