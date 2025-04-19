// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Menu highlighting functionality
    const menuItems = document.querySelectorAll('.menu li');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all menu items
            menuItems.forEach(mi => mi.classList.remove('active'));
            
            // Add active class to clicked item
            this.classList.add('active');
            
            // Add highlight effect
            this.style.color = '#ff69b4';
            this.style.fontWeight = 'bold';
        });
        
        // Reset on mouseleave if not active
        item.addEventListener('mouseleave', function() {
            if (!this.classList.contains('active')) {
                this.style.color = '';
                this.style.fontWeight = '';
            }
        });
    });

    // Add hover effects to posts
    const posts = document.querySelectorAll('.post');
    posts.forEach(post => {
        post.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 5px 15px rgba(255, 105, 180, 0.2)';
            this.style.transition = 'all 0.3s ease';
        });
        
        post.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });

    // Animate the logo on hover
    const logo = document.querySelector('.logo');
    if (logo) {
        logo.addEventListener('mouseenter', function() {
            this.style.transform = 'rotate(360deg) scale(1.1)';
            this.style.transition = 'all 0.5s ease';
            this.style.backgroundColor = '#ff5aa7';
        });
        
        logo.addEventListener('mouseleave', function() {
            this.style.transform = 'rotate(0) scale(1)';
            this.style.backgroundColor = '#ff8fbf';
        });
    }

    // Next Page button animation
    const nextPageBtn = document.getElementById('nextPageBtn');
    if (nextPageBtn) {
        nextPageBtn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 6px 12px rgba(255, 105, 180, 0.4)';
        });
        
        nextPageBtn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 8px rgba(255, 105, 180, 0.3)';
        });
        
        // Add a pulse animation effect to draw attention
        setInterval(() => {
            nextPageBtn.style.transform = 'scale(1.05)';
            nextPageBtn.style.transition = 'transform 0.5s ease';
            
            setTimeout(() => {
                nextPageBtn.style.transform = 'scale(1)';
            }, 500);
        }, 3000);
    }

    // Home Page button animation (on next page)
    const homePageBtn = document.getElementById('homePageBtn');
    if (homePageBtn) {
        homePageBtn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 6px 12px rgba(255, 105, 180, 0.4)';
        });
        
        homePageBtn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 8px rgba(255, 105, 180, 0.3)';
        });
    }

    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add current date to footer
    const currentYear = new Date().getFullYear();
    const copyrightElement = document.querySelector('.copyright');
    if (copyrightElement) {
        copyrightElement.innerHTML = `© Copyright ${currentYear}. All Rights Reserved`;
    }

    // Add dynamic page transition effect
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    // Set a small timeout to ensure the transition is visible
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
    
    // Highlight the first post to draw attention to it
    const firstPost = document.querySelector('.post:first-child');
    if (firstPost) {
        setTimeout(() => {
            firstPost.style.boxShadow = '0 5px 15px rgba(255, 105, 180, 0.3)';
            firstPost.style.transition = 'all 0.5s ease';
            
            setTimeout(() => {
                firstPost.style.boxShadow = 'none';
            }, 2000);
        }, 1000);
    }
});