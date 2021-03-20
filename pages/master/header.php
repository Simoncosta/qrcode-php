<div class="sidebar-wrapper">
    <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
        DM
        </a>
        <a href="https://instagram.com/programadormaroto?igshid=xfyj59z44u9z" target="_blank" class="simple-text logo-normal">
        DEV MAROTO
        </a>
    </div>
    <ul class="nav">
        <li class="<?= ($_GET['page']) == 'text' ? 'active' : '' ?> ">
            <a href="?page=text">
                <i class="tim-icons icon-align-center"></i>
                <p>texto</p>
            </a>
        </li>
        <li class="<?= ($_GET['page']) == 'url' ? 'active' : '' ?> ">
            <a href="?page=url">
                <i class="tim-icons icon-world"></i>
                <p>URL</p>
            </a>
        </li>
        <li class="<?= ($_GET['page']) == 'phone' ? 'active' : '' ?>">
            <a href="?page=phone">
                <i class="tim-icons icon-headphones"></i>
                <p>Telefone</p>
            </a>
        </li>
        <li class="<?= ($_GET['page']) == 'sms' ? 'active' : '' ?>">
            <a href="?page=sms">
                <i class="tim-icons icon-mobile"></i>
                <p>SMS</p>
            </a>
        </li>
        <li class="<?= ($_GET['page']) == 'email' ? 'active' : '' ?>">
            <a href="?page=email">
            <i class="tim-icons icon-email-85"></i>
            <p>Email</p>
            </a>
        </li>
        <li class="<?= ($_GET['page']) == 'whatsapp' ? 'active' : '' ?>">
            <a href="?page=whatsapp">
            <i class="tim-icons icon-send"></i>
            <p>WhatsApp</p>
            </a>
        </li>
    </ul>
</div>