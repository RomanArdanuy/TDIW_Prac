<form action="index.php?accio=registre" method="post">
    Nom:<input type="text" name="nom"><br />
    Email:<input type="email" name="correu"><br />
    Contrasenya:<input type="password" name="contrasenya" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{6,}" title="Mínim de 6 caràcters que continguin minúscules, majúscules i números"><br />
    Adreça:<input type="text" name="adreca"><br />
    Poblacio:<input type="text" name="poblacio"><br />
    Codi Postal:<input type="number" name="codiPostal" required pattern="^[0-9]\d{4}$" title="Introdueix 5 dígits"><br />
    <input type="submit" name="Registrar"><br />
</form>