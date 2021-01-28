<footer class="responsivefooter">
    <div class="redes">
        <a class="red linkedin" href="https://www.linkedin.com/in/gabriel-andr%C3%A9s-dehner-desarrollador-web-node-js-angular-full-stack-a84464195/" target="_blank"><img src="<?=base_url('assets/img/logoLinkedin1.png')?>" alt="linkedin"></a>
        <a class="red github" href="https://github.com/GabrielDehner/" target="_blank"><img src="<?=base_url('assets/img/githubrec.png')?>" alt="github"></a>
        <a class="red facebook" href="https://www.facebook.com/Gabrybdn.S" target="_blank"><img src="<?=base_url('assets/img/logoFacebook1.svg')?>" alt="facebook"></a>
        <a class="red" href="https://www.instagram.com/gadehner/" target="_blank"><img src="<?=base_url('assets/img/logoInstagram1.png')?>" alt="instagram"></a>
       
    </div>
    <p>
        Copyright © 2019 - 2021 | Gabriel Andr&eacute;s Dehner - Todos los derechos reservados.
    </p>
</footer>

<script src="<?= base_url('assets/libs/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap-4.1.1-dist/js/bootstrap.min.js') ?>"></script>

<script>
    base_url = '<?= base_url() ?>';
</script>

<?php if ($controller === 'home') { ?>
    <script src="<?= base_url('assets/js/home.js') ?>"></script>
<?php } ?>
</body>


</html>