
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

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-89678350-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
