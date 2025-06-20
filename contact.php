<?php include('header.php'); ?>
<main>
  <h1>Contact</h1>
  <form action="send.php" method="POST">
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br>
    <input type="submit" value="Envoyer">
  </form>
</main>
<?php include('footer.php'); ?>