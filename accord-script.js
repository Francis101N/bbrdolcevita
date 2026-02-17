document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');
            
            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const accordionItem = this.parentElement;
                    const accordionArrow = this.querySelector('.accordion-arrow');
                    
                    // Toggle active class on the accordion item
                    accordionItem.classList.toggle('active');
                    
                    // Toggle active class on the arrow
                    accordionArrow.classList.toggle('active');
                    
                    // Close other open accordion items
                    if (accordionItem.classList.contains('active')) {
                        document.querySelectorAll('.accordion-item').forEach(item => {
                            if (item !== accordionItem && item.classList.contains('active')) {
                                item.classList.remove('active');
                                item.querySelector('.accordion-arrow').classList.remove('active');
                            }
                        });
                    }
                });
            });
        });