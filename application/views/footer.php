
            </div>
        </div>
        <div class="dim"></div>
        <div class="display"></div>
        <footer>
            <a href="<?php echo base_url() ?>">toyscreen</a>

            <?php if($this->ion_auth->logged_in()): ?>
                <?php if($site->user->username === $this->ion_auth->user()->username): ?>
                    <a href="<?php echo base_url('settings') ?>"><button>Settings</button></a>
                    <a href="<?php echo base_url('post') ?>"><button>New Post</button></a>
                <?php endif ?>
            <?php endif ?>
        </footer>

        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url('js/vendor/modernizr-2.8.3.min.js') ?>"></script>
        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/main.js') ?>"></script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFG9N9Q"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
</html>
