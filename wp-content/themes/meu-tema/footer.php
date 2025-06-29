    <footer class="rodape">
        <div class="left">
            <h2>Website . . . .</h2>
            <p>Desenvolvido para experimentar e instigar o desenvolvimento de sites em wordpress através de código e não page-builders ...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id efficitur sapien, eget tempus dui. Ut aliquam bibendum velit, ut sagittis augue eleifend a. Quisque convallis scelerisque mattis. Quisque quis rhoncus dui, eu egestas ipsum. Quisque in libero in nisl lacinia feugiat. Proin sed enim scelerisque massa blandit ornare. Duis dapibus vel mi id facilisis. Nunc dignissim cursus accumsan. </p>
        </div>
        <div class="right">
            <h2>Contatos: </h2>
            <?php wp_nav_menu([
                'menu' => 'secundario',
                'container' => 'nav'
            ]) ?>
        </div>
    </footer>
</body>
<script src="<?= get_template_directory_uri() ?>/assets/js/functions.js"></script>
</html>