<!DOCTYPEhtml>
<html lang="ca">
    <head>
        <title>Formularide Contacte</title>
    <head>
    <body>
        <!-- Ejercicio 2: método "POST"" y action "SELF" -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="nom" placeholder="Nom"> 
            <input type="text" name="correu" placeholder="Correu">
            <?php if (!empty($errors)): ?>
				<div>
					<?php echo $errors; ?>
				</div>
			<?php elseif($enviat): ?>
				<div>
					<p>Enviat correctament</p>
				</div>
			<?php endif ?> 
            <input type="submit" name="submit" value="EnviarCorreu">
        </form>
    </body> 
</html>