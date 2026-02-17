document.addEventListener('DOMContentLoaded', function() {
    const cards = [
        document.getElementById('airfright_images-thumb-card1'),
        document.getElementById('airfright_images-thumb-card2'),
        document.getElementById('airfright_images-thumb-card3')
    ];
    
    let currentCardIndex = 0;
    
    function showNextCard() {
        // Hide all cards
        cards.forEach(card => card.classList.remove('active'));
        
        // Show current card
        cards[currentCardIndex].classList.add('active');
        
        // Move to next card or loop back to first
        currentCardIndex = (currentCardIndex + 1) % cards.length;
        
        // Schedule next card change
        setTimeout(showNextCard, 1000); // 30 seconds
    }
    
    // Start the cycle
    showNextCard();
});