<?php include 'header.php'; ?>

<main>
    <h2>Register</h2>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <label for="role">Role:</label>
        <select name="role" required>
            <option value="student">Student</option>
            <option value="employer">Employer</option>
        </select>
        
        <button type="submit">Register</button>
    </form>
</main>

<?php include 'footer.php'; ?>
