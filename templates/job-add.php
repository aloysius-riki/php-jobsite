<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Add Job</h2>
    <form method="post" action="add.php">
        <div>
            <label>Company</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div>
            <label>Category</label>
            <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>">
                    <?php echo $category->name; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label>Job</label>
            <input type="text" class="form-control" name="job_title">
        </div>
        <div>
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div>
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div>
            <label>Salary</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <div>
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div>
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>
