<?php
/**
 * Template Name: Connect Page
 * Description: Custom template for the Connect app landing page
 *
 * @package TechyKoala
 */

get_header(); ?>

<main class="site-main connect-page">
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div style="font-size: 5rem; margin-bottom: 20px;">📱✨</div>
                <h1>Meet Connect</h1>
                <p>The app that makes staying in touch feel warm, cozy, and effortless. Build meaningful connections without the overwhelm.</p>
                <div class="hero-buttons">
                    <a href="#download" class="btn btn-primary">Download Now</a>
                    <a href="#features" class="btn btn-secondary">See Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">Why You'll Love Connect</h2>
            <div class="grid grid-3">
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🎨</div>
                    <h3>Beautiful Design</h3>
                    <p>Cozy gradients, smooth animations, and an interface that feels like home. Every detail is crafted with care.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">⚡</div>
                    <h3>Simple & Fast</h3>
                    <p>Start conversations in seconds. No complicated setup, no learning curve - just connect and go.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🔒</div>
                    <h3>Privacy First</h3>
                    <p>Your conversations are yours. We don't sell your data or show you ads. Just genuine connections.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">💬</div>
                    <h3>Smart Messaging</h3>
                    <p>Stay connected without feeling overwhelmed. Thoughtful features that respect your time and attention.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">👥</div>
                    <h3>Growing Community</h3>
                    <p>Join thousands of people who value meaningful connections over endless scrolling.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🌙</div>
                    <h3>Dark Mode</h3>
                    <p>Easy on the eyes, any time of day. Seamlessly switch between light and cozy dark themes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Play Section -->
    <section class="section" style="background: rgba(255, 255, 255, 0.3);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">How It Works</h2>
            <div class="grid grid-2">
                <div class="card">
                    <h3 style="color: var(--primary-pink);">1. Start</h3>
                    <p style="font-size: 1.1rem;">Open the app and jump right in. No complicated profile setup - just you, ready to connect.</p>
                </div>
                <div class="card">
                    <h3 style="color: var(--primary-purple);">2. Connect</h3>
                    <p style="font-size: 1.1rem;">Find friends, start conversations, and build your community at your own pace.</p>
                </div>
                <div class="card">
                    <h3 style="color: var(--accent-peach);">3. Customize</h3>
                    <p style="font-size: 1.1rem;">Make it yours with settings that match your style and preferences.</p>
                </div>
                <div class="card">
                    <h3 style="color: var(--primary-pink);">4. Enjoy</h3>
                    <p style="font-size: 1.1rem;">Stay connected, share moments, and build relationships that matter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="section">
        <div class="container">
            <div class="card" style="max-width: 700px; margin: 0 auto; text-align: center; padding: 60px 40px;">
                <h2 style="margin-bottom: 20px;">Get Connect Today</h2>
                <p style="font-size: 1.2rem; margin-bottom: 40px;">Available on iOS and Android. Start building meaningful connections now.</p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="#" class="btn btn-primary" style="min-width: 200px;">
                        🍎 App Store
                    </a>
                    <a href="#" class="btn btn-primary" style="min-width: 200px;">
                        🤖 Google Play
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section" style="background: rgba(255, 255, 255, 0.3);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">Frequently Asked Questions</h2>
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="card" style="margin-bottom: 20px;">
                    <h3 style="margin-bottom: 15px;">Is Connect really free?</h3>
                    <p>Yes! Connect is free to download and use. We believe meaningful connections shouldn't cost money.</p>
                </div>
                <div class="card" style="margin-bottom: 20px;">
                    <h3 style="margin-bottom: 15px;">How do you protect my privacy?</h3>
                    <p>We never sell your data or show ads. Your conversations are encrypted, and you control what you share.</p>
                </div>
                <div class="card" style="margin-bottom: 20px;">
                    <h3 style="margin-bottom: 15px;">What makes Connect different?</h3>
                    <p>We focus on quality over quantity. Our cozy design and thoughtful features help you build real connections without the stress.</p>
                </div>
                <div class="card">
                    <h3 style="margin-bottom: 15px;">Can I suggest new features?</h3>
                    <p>Absolutely! We love hearing from our community. Share your ideas at <a href="mailto:hello@techykoala.com" style="color: var(--primary-pink); text-decoration: underline;">hello@techykoala.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Preview Section -->
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">From Our Blog</h2>
            <div class="grid grid-3">
                <div class="card">
                    <div style="background: linear-gradient(135deg, var(--primary-purple), var(--primary-pink)); height: 200px; margin: -40px -40px 20px -40px; border-radius: var(--radius-lg) var(--radius-lg) 0 0;"></div>
                    <h3>Building Meaningful Digital Connections</h3>
                    <p style="color: var(--text-light); margin-bottom: 15px;">Posted on Nov 14, 2025</p>
                    <p>How we're rethinking social apps to prioritize quality over quantity...</p>
                    <a href="#" style="color: var(--primary-pink); font-weight: 600; margin-top: 15px; display: inline-block;">Read More →</a>
                </div>
                <div class="card">
                    <div style="background: linear-gradient(135deg, var(--primary-pink), var(--accent-peach)); height: 200px; margin: -40px -40px 20px -40px; border-radius: var(--radius-lg) var(--radius-lg) 0 0;"></div>
                    <h3>The Psychology of Cozy Design</h3>
                    <p style="color: var(--text-light); margin-bottom: 15px;">Posted on Nov 10, 2025</p>
                    <p>Why soft gradients and thoughtful animations make apps feel more human...</p>
                    <a href="#" style="color: var(--primary-pink); font-weight: 600; margin-top: 15px; display: inline-block;">Read More →</a>
                </div>
                <div class="card">
                    <div style="background: linear-gradient(135deg, var(--accent-peach), var(--soft-cream)); height: 200px; margin: -40px -40px 20px -40px; border-radius: var(--radius-lg) var(--radius-lg) 0 0;"></div>
                    <h3>Connect App: Behind the Scenes</h3>
                    <p style="color: var(--text-light); margin-bottom: 15px;">Posted on Nov 5, 2025</p>
                    <p>A look at how we built Connect and the challenges we overcame...</p>
                    <a href="#" style="color: var(--primary-pink); font-weight: 600; margin-top: 15px; display: inline-block;">Read More →</a>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="<?php echo home_url('/blog'); ?>" class="btn btn-secondary">View All Posts</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="text-align: center; padding: 100px 0;">
        <div class="container">
            <h2 style="margin-bottom: 30px;">Ready to Start Connecting?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">Join our growing community and experience what meaningful digital connections feel like.</p>
            <a href="#download" class="btn btn-primary" style="font-size: 1.2rem; padding: 20px 50px;">Download Connect</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
