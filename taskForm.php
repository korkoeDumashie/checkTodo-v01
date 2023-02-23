<?php
    include "navbar.php";
?>

<form action="/includes/createTask.inc.php" method="POST">
    <input type="text" placeholder="Task" name="taskName">
    <select name="priority" id="task-priority">
        <option value="none">None</option>
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="High">High</option>
    </select>

    <label for="dateOfCompletion">
    <input type="date" name="possible_date_of_completion" id="dateOfCompletion">
    </label>
    
    <label for="category">Category</label>
    <!-- <input type="text" name="category" id="category" placeholder="category"> -->
    <select id="category">
        <option value="academic">Academic</option>
        <option value="leisure">Leisure</option>
        <option value="fitness">Fitness</option>
    </select>

    <label for="collab">Use commas to separate emails if collaborators a many.</label>
    <input type="email" multiple name="collaborators" id="collab" placeholder="Collaborator's email">


    <textarea name="taskDesc" id="description" cols="30" rows="10" placeholder="Task Description"></textarea>


    <button type="submit" name="submitTask">Create Task</button>
</form>


<?php
    include "footer.php";
?>