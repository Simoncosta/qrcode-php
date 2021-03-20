<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Email</h5>
      </div>
      <form method="GET" action="../helpers/insert.php">
      <div class="card-body">
          <div class="row">

            <input type="hidden" name="page" value="email">
            <input type="hidden" name="acao" value="inserir">
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="<?= isset($_GET['email']) ? $_GET['email'] : 'noreply@noreply.com.br' ?>">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Assunto</label>
                <input type="text" class="form-control" name="subject" value="<?= isset($_GET['subject']) ? $_GET['subject'] : 'Assunto' ?>">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label>Corpo do E-mail</label>
                <textarea rows="4" cols="80" class="form-control" name="body"><?= isset($_GET['body']) ? $_GET['body'] : 'Corpo do E-mail' ?></textarea>
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
              E-MAIL: <?= isset($_GET['email']) ? $_GET['email'] : 'noreply@noreply.com.br' ?>
            </p>
            <p class="description">
              ASSUNTO: <?= isset($_GET['subject']) ? $_GET['subject'] : 'Assunto' ?>
            </p>
            <p class="description">
              CORPO: <?= isset($_GET['body']) ? $_GET['body'] : 'Corpo do E-mail' ?>
              <br><br>
              Salvo em: <?= "qrcode-php/img-qrcodes/email/" ?>
            </p>
            <hr><hr>
            <p>
            <?php if(isset($_GET['email'])) { ?>
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
                  <a type="button" class="btn btn-fill btn-success" href="../img-qrcodes/email/<?= $file.".png" ?>" download><i class="tim-icons icon-cloud-download-93"></i> Download</a>
                  <a type="button" class="btn btn-fill btn-danger" href="../helpers/delete.php?page=email&acao=excluir&arquivo=../img-qrcodes/email/<?= $file.".png" ?>"><i class="tim-icons icon-trash-simple"></i></a>
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