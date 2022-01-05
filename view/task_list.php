<?php include('view/header.php'); ?>

<section if="list" class="list"> 
    <header class="list_row List_header">
        <h1>Tasks</h1>
        <form action="." method="get" id="list_header_select" class="list_header_select">
            <input type="hidden" name="action" value="list_task">
            <select name="course_id" required>
                <option value="0">view All</option>
                <?php foreach ($courses as $course): ?>
                <?php if($course_id==$course['courseID']){ ?>
                    <option value="<?= $course['courseID']?>"selected>
                <?php }
                else{ ?>
                <option value="<?=$course['courseID']?>"> <?php } ?>
                <?= $course['courseName']?>
                </option>
                <?php endforeach;?>
            </select>
            <button class="add-button bold">Search</button>
        </form>
    </header>
    <?php if($tasks){?>
        <?php foreach($tasks as $task) : ?>
            <div class="List_row">
                <div class="list_item">
                    <p class="bold"><?=$task['coourseName']?></p>
                    <p><?=$task['Description']?></p>
                </div>
                <div class="list__removeItem">
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_task">
                        <input type="hidden" name="task_id" value="<?= $assignment['ID']; ?>">
                        <button class="remove-button">DELETE</button>
                    </form>
                </div>
            </div>  
            <?php endforeach?>
            <?php } else{?>
                <br>
                <?php if ($course_id) { ?>
                <p>No task exist for this course yet.</p>
                <?php } else { ?>
                <p>No task exist yet.</p>
                <?php } ?>
                <br>
                <?php } ?>
</section>

<section id="add" class="add">
    <h2>Add a task</h2>
    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_assignment">
        <div class="add__inputs">
            <label>course:</label>
            <select name="course_id" required>
                <option value="">Please select</option>
                <?php foreach ($courses as $course) : ?>
                <option value="<?= $course['courseID']; ?>">
                    <?= $course['courseName']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <label>Description:</label>
            <input type="text" name="description" maxlength="120" placeholder="Description" required>
        </div>
        <div class="add__addItem">
            <button class="add-button bold">Add</button>
        </div>
    </form>
</section>
<br>
<p><a href=".?action=list_courses">View/Edit Courses</a></p>
<?php include('view/footer.php'); ?>