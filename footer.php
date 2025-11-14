<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3 style="margin-bottom: 20px;">🐨 TechyKoala</h3>
                <p>Building cozy digital experiences that bring people together.</p>
            </div>
            
            <div class="footer-column">
                <h4 style="margin-bottom: 20px;">Products</h4>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 10px;"><a href="<?php echo home_url('/connect'); ?>">Connect App</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo home_url('/connect#features'); ?>">Features</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo home_url('/connect#download'); ?>">Download</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4 style="margin-bottom: 20px;">Company</h4>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 10px;"><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                    <li style="margin-bottom: 10px;"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4 style="margin-bottom: 20px;">Connect</h4>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 10px;"><a href="#">Twitter</a></li>
                    <li style="margin-bottom: 10px;"><a href="#">Instagram</a></li>
                    <li style="margin-bottom: 10px;"><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> TechyKoala. All rights reserved. Made with 💜 and care.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
