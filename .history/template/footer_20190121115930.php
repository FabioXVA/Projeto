<footer class="footer" id="footer">

    <div class="form-container">
        <form class="form" action="template/mail_send.php" method="POST">
            <input class="form-itens" type="text" placeholder="Nome Completo" name="nome">
            <input class="form-itens" type="email" placeholder="E-mail"  name="email">
            <textarea class="form-itens"  id="" cols="30" rows="5" placeholder="Mensagem" name="msg"></textarea>
            <input type="submit" class="button form-itens" value="enviar">
        </form>
    </div>
    <div class="copy" id="copyright">Copyright ©  <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script> - Todos os direitos reservados </div>
    
</footer>


<script src="src/js/script.js"></script>
</body>

</html>