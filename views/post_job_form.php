<?php include 'header.php'; ?>

<main>
    <h2>Post a Job</h2>
    <form method="POST" action="">
        <label for="title">Job Title:</label>
        <input type="text" name="title" required>

        <label for="description">Job Description:</label>
        <textarea name="description" required></textarea>

        <button type="submit">Post Job</button>
    </form>
</main>

<?php include 'footer.php'; ?>
