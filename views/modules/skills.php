<?php $skills = include(ROOT . '/config/skills.php'); ?>
<table id="skills-table" class="table table-striped table-hover table-bordered">
    <tr>
        <th>Навык</th>
        <th>Уровень</th>
        <th>Описание</th>
    </tr>
    <?php foreach ($skills as $skill): ?>
    <tr>
        <td><?php echo $skill['title']; ?></td>
        <td><?php echo $skill['level']; ?></td>
        <td><?php echo $skill['description']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>