<?php
/**
 * The main template file - Homepage
 *
 * @package TechyKoala
 */

get_header(); ?>

<main class="site-main">
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Building Connections That Matter 🐨</h1>
                <p>TechyKoala creates innovative digital experiences that bring people together. We're on a mission to make technology feel warm, friendly, and human.</p>
                <div class="hero-buttons">
                    <a href="/connect" class="btn btn-primary">Explore Connect App</a>
                    <a href="#about" class="btn btn-secondary">Learn About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">Who We Are</h2>
            <div class="grid grid-2">
                <div class="card">
                    <h3>🎯 Our Mission</h3>
                    <p>We believe technology should bring people closer, not push them apart. That's why we're building Connect - an app designed to foster genuine human connections in a digital world.</p>
                </div>
                <div class="card">
                    <h3>💡 Our Vision</h3>
                    <p>A world where technology feels cozy, welcoming, and intuitive. Where digital experiences are designed with warmth and care, putting people first.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="section" style="background: rgba(255, 255, 255, 0.3);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">What We're Building</h2>
            <div class="card" style="max-width: 800px; margin: 0 auto; text-align: center;">
                <div style="font-size: 4rem; margin-bottom: 20px;">📱</div>
                <h3 style="font-size: 2rem; margin-bottom: 20px;">Connect</h3>
                <p style="font-size: 1.2rem; margin-bottom: 30px;">Our flagship app that helps people build meaningful connections. With a cozy design and intuitive features, Connect makes staying in touch feel effortless.</p>
                <a href="/connect" class="btn btn-primary">Learn More About Connect</a>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">Our Values</h2>
            <div class="grid grid-3">
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🤝</div>
                    <h3>Human-First Design</h3>
                    <p>Every feature we build starts with understanding real human needs and emotions.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">✨</div>
                    <h3>Cozy & Welcoming</h3>
                    <p>We believe software should feel warm, friendly, and inviting - like coming home.</p>
                </div>
                <div class="card">
                    <div style="font-size: 3rem; margin-bottom: 15px;">🚀</div>
                    <h3>Continuous Innovation</h3>
                    <p>We're always learning, improving, and finding better ways to serve our community.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="text-align: center; padding: 100px 0;">
        <div class="container">
            <h2 style="margin-bottom: 30px;">Ready to Connect?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">Join thousands of people who are building meaningful connections with Connect.</p>
            <a href="/connect" class="btn btn-primary" style="font-size: 1.2rem; padding: 20px 50px;">Get Started with Connect</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
