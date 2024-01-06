<div class="group-title" data-url="<?=$base;?>">
    <h1>Candidatos Trabalhe Conosco</h1>
    <p>Candidatos Trabalhe Conosco </p>
</div>

<dov class="container-work">
    <div class="list-work-group">
        <h3>Lista de candidatos</h3>
    </div>
    <div class="table-item">
        <table class="table">
            <tr class="tr-top">
                <td>ID</td>
                <td>CURRÍCULO</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>TELEFONE</td>
                <td>CELULAR</td>
                <td>DATA ENVIO</td>
                <td>AÇÃO</td>
            </tr>
            <?php foreach ($works as $item): ?>
                <tr class="tr-desc">
                    <td>
                        <?= $item['id']; ?>
                    </td>
                    <td>
                        <i class="fa-regular fa-file-pdf curriculo"></i>
                    </td>
                    <td>
                        <?= $item['nome']; ?>
                    </td>
                    <td>
                        <?= $item['email']; ?>
                    </td>
                    <td>
                        <?= $item['telefone']; ?>
                    </td>
                    <td>
                        <?= $item['celular']; ?>
                    </td>
                    <td>
                        <?= $item['create_at']; ?>
                    </td>
                    <td>
                        <a href="<?=$base;?>/ksi/adm/work-list/delete/<?=$item['id'];?>">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <i onclick="viewWork(<?=$item['id'];?>)" class="fa-solid fa-eye view"></i>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</dov>
<script src="<?=$base;?>/assets/js/ksi-adm-work.js"></script>