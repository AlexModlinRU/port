<?php $programms = include(ROOT . '/config/programms.php'); ?>
<table id="programms-table" class="table table-striped table-hover table-bordered">
    <tr>
        <th>Программа</th>
        <th>Уровень</th>
        <th>Описание</th>
    </tr>
    <?php foreach ($programms as $programm): ?>
    <tr>
        <td><?php echo $programm['title']; ?></td>
        <td><?php echo $programm['level']; ?></td>
        <td><?php echo $programm['description']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>