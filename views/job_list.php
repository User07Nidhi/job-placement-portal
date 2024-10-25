<?php include 'header.php'; ?>

<main>
    <h2>Available Jobs</h2>
    <ul>
        <?php foreach ($jobs as $job): ?>
            <li>
                <h3><?php echo htmlspecialchars($job['title']); ?></h3>
                <p><?php echo htmlspecialchars($job['description']); ?></p>
                <p><a href="apply.php?job_id=<?php echo $job['id']; ?>">Apply</a></p>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

<?php include 'footer.php'; ?>
