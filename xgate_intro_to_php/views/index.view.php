<?php require('partials/head.php'); ?>

<h1>Home Page</h1>
    <!-- <ul>
        <?php foreach ($tasks as $task) : ?>

            <li>
                <?php if ($task->completed) : ?>
                   <strike><?= $task->description; ?></strike>
                <?php else: ?>

                    <?= $task->description; ?> 
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul> -->



<!-- <?php foreach ($users as $user) : ?>

    <li><?= $user->name ?></li>

<?php endforeach; ?>



    <h1>Submit your name</h1>

    <form method="POST" action="/names">
        
        <input name="name"></input>
        
        <button type="submit">Submit</button>
    
    </form> -->



    


    <?php require('partials/footer.php'); ?>

