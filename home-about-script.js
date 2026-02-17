document.addEventListener('DOMContentLoaded', function() {
    const cards = [
        document.getElementById('home-about-box-card1'),
        document.getElementById('home-about-box-card2'),
        document.getElementById('home-about-box-card3')
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
        setTimeout(showNextCard, 3000); // 30 seconds
    }
            
    // Start the cycle
    showNextCard();
});